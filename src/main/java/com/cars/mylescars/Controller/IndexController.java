package com.cars.mylescars.Controller;


import javax.imageio.IIOException;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;

import com.fasterxml.jackson.core.JsonParser;
import com.fasterxml.jackson.core.JsonProcessingException;
import com.fasterxml.jackson.databind.JsonNode;
import com.fasterxml.jackson.databind.ObjectMapper;
import org.apache.log4j.Logger;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpRequest;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.*;

import java.io.IOException;
import java.security.Key;
import java.security.NoSuchAlgorithmException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Calendar;
import java.util.Map;
import java.util.HashMap;
import javax.validation.Valid;
import com.cars.mylescars.model.*;
import java.text.ParseException;


@Controller
public class IndexController {

	final static Logger log = Logger.getLogger(IndexController.class);
	@Autowired
	LongTermController longTermController;

	@GetMapping("/")
	public String index(Model model, HttpSession session) {
		//@SuppressWarnings("unchecked")
		String sessId = (String)session.getAttribute("sessionID");
		if (sessId == null) {
			long nano = System.nanoTime();
			sessId = Long.toString(nano)+"hjggggggrw#$#%^##@*&^"+session.getId().toString();
			session.setAttribute("sessionID", sessId);
		}

		int cid = -1;
		if (session.getAttribute("EmpID") != null) {
			cid = (Integer) (session.getAttribute("EmpID"));
		}

		String title = "Myles Zero";
		String keywords = "User Search";
		String content = "robot";
		String description = "";
		//$param = [];
		Map <String, Object> param = this.default_search_param(session);

        //System.out.println(param);


		Map <String, Object> marr = new HashMap<String, Object>();
		marr.put("PeriodicMaintenanceMonth",Integer.parseInt(param.get("subs_tenure").toString()));
		marr.put("clientcoid",Integer.parseInt(param.get("clientcoid").toString()));
		marr.put("CarCategory",1);

		JsonNode jsonNode = null;
		try {
			Object SearchSubscriptions = longTermController._MYLESSearchSubscription(session,"GetSearchCarByCatMonth",marr,cid,0);

			ObjectMapper Objmapper = new ObjectMapper();
			jsonNode = Objmapper.readTree(SearchSubscriptions.toString());

		}catch(JsonProcessingException e) {
			e.printStackTrace();

		} catch (IOException e) {
			e.printStackTrace();
		}

		log.info("------"+jsonNode.get("response").get("PeriodicMaintenanceKM").get("response"));

		model.addAttribute("periodicMaintenanceKM",jsonNode.get("response").get("PeriodicMaintenanceKM"));
		model.addAttribute("kmarr",param.get("kmarr"));
		model.addAttribute("tenures",param.get("tenures"));
		model.addAttribute("datefrom",param.get("datefrom"));
		model.addAttribute("dateto",param.get("dateto"));
		model.addAttribute("cityid",param.get("cityid"));
		model.addAttribute("subs_tenure",param.get("subs_tenure"));
		model.addAttribute("km",param.get("km"));
		model.addAttribute("cities",param.get("cities"));
		model.addAttribute("title",title);

		log.info("cities:  "+param.get("cities"));

		log.info("--------------");
		return "index";
	}


	public Map default_search_param(HttpSession session){

		Date today = new Date();
		Date tomorrow = new Date(today.getTime() + (1000 * 60 * 60 * 24));

		SimpleDateFormat formatter = new SimpleDateFormat("yyyy-MM-dd");
		String tenure_from = formatter.format(tomorrow);

		Calendar c = Calendar.getInstance();
		c.setTime(tomorrow);
		c.add(Calendar.MONTH, 6);

		Date tomPlusSixMonth = c.getTime();
		String tenure_to = formatter.format(tomPlusSixMonth);

		String tenurefromarr[] = tenure_from.split("-");

		String  tenuretoarr[] = tenure_to.split("-");

		String datefrom = tenurefromarr[2]+"/"+tenurefromarr[1]+"/"+tenurefromarr[0];
		String dateto = tenuretoarr[2]+"/"+tenuretoarr[1]+"/"+tenuretoarr[0];

		Map <String, String> tenures = new HashMap<String, String>();
		tenures.put("6","6 Months");
		tenures.put("12","12 Months");
		tenures.put("18","18 Months");
		tenures.put("24","24 Months");
		tenures.put("30","30 Months");
		tenures.put("36","36 Months");
		tenures.put("42","42 Months");
		tenures.put("48","48 Months");
		tenures.put("54","54 Months");
		tenures.put("60","60 Months");

		Map <String, String> kmarr = new HashMap<String, String>();
		kmarr.put("1000","1000 Kms");
		kmarr.put("2000","2000 Kms");
		kmarr.put("3000","3000 Kms");
		int cid = -1;
		if (session.getAttribute("EmpID") != null) {
			cid = (Integer) (session.getAttribute("EmpID"));
		}

		Integer clientcoid = this.get_clientco_id(session);


		Map <String, Object> param = new HashMap<String, Object>();
		Map <String,String> cities =new HashMap <String,String> ();

		try {

			Object cityData = longTermController._MYLESfetchCities(session, "fetchCities_Subscription", param, cid, 0);

			ObjectMapper Objmapper = new ObjectMapper();
			JsonNode jsonNode = Objmapper.readTree(cityData.toString());

			JsonNode cityNodes = jsonNode.get("response");

			for(JsonNode cNode: cityNodes) {
				cities.put(cNode.get("CityId").asText(),cNode.get("CityName").asText());
			}


		}catch(JsonProcessingException e) {
			e.printStackTrace();

		} catch (IOException e) {
			e.printStackTrace();
		}

		String rentallimit = "";
		if (session.getAttribute("RentalLimit") != null) {
			rentallimit = (String) (session.getAttribute("RentalLimit"));
		}

		Map <String, Object> sparam = new HashMap<String, Object>();

		sparam.put("kmarr",kmarr);
		sparam.put("tenures",tenures);
		sparam.put("datefrom",datefrom);
		sparam.put("dateto",dateto);
		sparam.put("cityid",2);
		sparam.put("subs_tenure",6);
		sparam.put("km",1000);
		sparam.put("cities",cities);
		sparam.put("rentallimit",rentallimit);
		sparam.put("clientcoid",clientcoid);

		return sparam;
	}

	public Integer get_clientco_id(HttpSession session){

		Object clientRes = null;
		int clientcoid = 0;
		String host = "myleszero.mylescars.com";
		int cid = -1;
		if (session.getAttribute("EmpID") != null) {
			cid = (Integer) (session.getAttribute("EmpID"));
		}

		Map <String, Object> param = new HashMap<String, Object>();
		param.put("url",host);

		try {
			clientRes = longTermController._MYLESGetClientCoByUrl(session, "GetClientCoByUrl", param, cid, 0);

			ObjectMapper Objmapper = new ObjectMapper();
			JsonNode jsonNode = Objmapper.readTree(clientRes.toString());

			String OemID = jsonNode.get("OemID").asText();

			int status = jsonNode.get("status").asInt();

			if ((OemID != null) && (status != 0)) {
				clientcoid = (int) Integer.parseInt(OemID);
			} else {
				clientcoid = 3920;
			}

		}catch(JsonProcessingException e) {
			e.printStackTrace();

		} catch (IOException e) {
			e.printStackTrace();
		}

		return clientcoid;
	}

    @PostMapping("getSubscription")
	public String getSubscription(@RequestBody SearchForm searchForm){
		Map <String, Object> smap = null;
		Integer subsTenure = searchForm.getSubsTenure();
		String fromDate = searchForm.getFromDate();


		SimpleDateFormat formatter = new SimpleDateFormat("yyyy-MM-dd");
		String tenure_from = formatter.format(fromDate);


		Calendar c = Calendar.getInstance();
		try {
			Date date = formatter.parse(tenure_from);
			c.setTime(date);
			c.add(Calendar.MONTH, subsTenure);
		} catch (ParseException e) {
			e.printStackTrace();
		}

		Date tomPlusMonths = c.getTime();
		String tenure_to = formatter.format(tomPlusMonths);
		String tenurefromarr[] = tenure_from.split("-");

		String  tenuretoarr[] = tenure_to.split("-");

		String datefrom = tenurefromarr[2]+"/"+tenurefromarr[1]+"/"+tenurefromarr[0];
		String dateto = tenuretoarr[2]+"/"+tenuretoarr[1]+"/"+tenuretoarr[0];

		smap = new HashMap<String, Object>();
		smap.put("date_from",datefrom);
		smap.put("date_to",dateto);

		String json = "";
		ObjectMapper objectMapper = new ObjectMapper();
		try {
			json = objectMapper.writeValueAsString(smap);
			System.out.println("json = " + json);
		} catch (JsonProcessingException e) {
			e.printStackTrace();
		}
		return json;

	}

	@PostMapping(value = "/search")
	public String search(Model model) {
		//System.out.println(request);
		String title = "Myles Search";
		model.addAttribute("title",title);

		return "search";
	}

	
	@PostMapping("/destroy")
	public String destroySession(HttpServletRequest request) {
		request.getSession().invalidate();
		return "redirect:/";
	}



}
