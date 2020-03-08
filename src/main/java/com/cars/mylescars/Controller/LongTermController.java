
package com.cars.mylescars.Controller;

import javax.servlet.http.HttpSession;


import java.io.IOException;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;

import java.util.HashMap;
import java.util.Map;

import com.fasterxml.jackson.core.JsonProcessingException;
import com.fasterxml.jackson.databind.JsonNode;
import com.fasterxml.jackson.databind.ObjectMapper;

import org.apache.log4j.Logger;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.web.client.RestTemplateBuilder;
import org.springframework.context.annotation.Configuration;
import org.springframework.http.HttpEntity;
import org.springframework.http.HttpHeaders;
import org.springframework.http.HttpMethod;
import org.springframework.http.MediaType;
import org.springframework.http.ResponseEntity;
import org.springframework.context.annotation.Bean;
import org.springframework.stereotype.Component;
import org.springframework.stereotype.Controller;
import org.springframework.web.client.RestClientException;
import org.springframework.web.client.RestTemplate;

import com.cars.mylescars.service.*;
import com.cars.mylescars.model.MylesApiTime;

import java.text.SimpleDateFormat;
import java.util.Date;


@Component
public class LongTermController {

	final static Logger log = Logger.getLogger(LongTermController.class);

	private String  auth_url = "https://mylesaccesstoken.carzonrent.com/Services/MylesTokenService.svc/";
	
	private String  app_url = "https://mobileappservice.carzonrent.com/Services/LongRental.svc/";
	private String  url = "https://myles.carzonrent.com/services/mylesservice.svc/";



	@Autowired
	RestTemplate restTemplate;

	@Autowired
	BaseController baseController;

	@Autowired
	LTEmpService ltempService;


	private HttpHeaders prepareHeader() {
        HttpHeaders httpHeader = new HttpHeaders();
        httpHeader.setContentType(MediaType.APPLICATION_JSON);
        return httpHeader;
    }
    
	public void ValidAuthLongTerm(HttpSession session,int CustomerID,int IsAdmin) {
		//String key= null;
		String sessId = null;
		
		if(IsAdmin == 0){
			sessId = baseController.employeeSession(session);
		}else{
			sessId = baseController.adminSession(session);
		}
		
		
		HttpHeaders httpHeaders = prepareHeader();
		
		
		ResponseEntity<String> responseData = null;
		String requestUrl = this.auth_url+"RestW1AuthenticateUser";
		log.info("requestUrl : "+requestUrl);
		
		
		String passwordToHash = "WEB@@MYLES";
		String generatedPassword = null;
		try {
		   
		    MessageDigest md = MessageDigest.getInstance("MD5");
		    md.update(passwordToHash.getBytes());
		    byte[] bytes = md.digest();
		   
		    StringBuilder sb = new StringBuilder();
		    for(int i=0; i< bytes.length ;i++)
		    {
		        sb.append(Integer.toString((bytes[i] & 0xff) + 0x100, 16).substring(1));
		    }
		    
		    generatedPassword = sb.toString();
		   
		    Map<String, Object> params = new HashMap<String, Object>();
		    params.put("userID", "web");
			params.put("password", generatedPassword);
			params.put("IPRestriction",0);
			params.put("customerID", -1);
			params.put("sessionID", sessId);
		    ObjectMapper Obj = new ObjectMapper();
		    String strjson = Obj.writeValueAsString(params);
		    
		   httpHeaders.add("Content-Length", Integer.toString(strjson.length()));
		//log.info("httpHeaders : "+httpHeaders);
		   HttpEntity<Object> httpEntity = new HttpEntity<Object> (strjson,httpHeaders);
		    //log.info("httpEntity : "+httpEntity);
		   responseData = restTemplate.postForEntity(requestUrl, httpEntity, String.class);
		    //responseData = restClient.exchange(requestUrl, HttpMethod.POST, httpEntity, String.class);
		   log.error("responseData : "+responseData);
		   
		   ObjectMapper Objmapper = new ObjectMapper();
           JsonNode jsonNode = Objmapper.readTree(responseData.getBody());
           Integer status = jsonNode.get("status").asInt();
           String accessToken = jsonNode.get("accessToken").asText();
          
           if(status == 1) {
        	   if(IsAdmin == 0){
        		    session.setAttribute("apiempkey", accessToken);
				}else{
					 session.setAttribute("apiadminkey", accessToken);
				}	
        	   
           }
		   
		        
		}catch(JsonProcessingException e) {
		    
		    e.printStackTrace();
		    
		}catch (NoSuchAlgorithmException e) 
		{
		    e.printStackTrace();
		}	
		  
	}
	
	
	public void UpdateCustomerAgainstKey(HttpSession session,int CustomerID,int IsAdmin) {
		 String key = null;
	     String sessId = null;
	     if(IsAdmin == 0){
			key = session.getAttribute("apiempkey").toString();
			sessId = session.getAttribute("sessEmpId").toString();
					
		}else{
			key = session.getAttribute("apiadminkey").toString();
			sessId = session.getAttribute("sessAdminId").toString();
	    }
	     
	    ResponseEntity<String> responseData = null;
		String requestUrl = this.auth_url+"RestW1UpdateCustomerIDAgainstKey";
	     
	     
	    Map<String, Object> params = new HashMap<String, Object>();
	       
        HttpHeaders httpHeaders = prepareHeader();
        
        httpHeaders.add("hashVal",key);
        httpHeaders.add("sessionID",sessId);
        httpHeaders.add("customerID",Integer.toString(CustomerID));
      

        try{
             ObjectMapper Obj = new ObjectMapper();
		     String strjson = Obj.writeValueAsString(params);
		    
		     httpHeaders.add("Content-Length", Integer.toString(strjson.length()));
		
		     HttpEntity<Object> httpEntity = new HttpEntity<Object> (strjson,httpHeaders);
		   
		     responseData = restTemplate.postForEntity(requestUrl, httpEntity, String.class);
		    
		     log.error("responseData : "+responseData);
           
        }catch(JsonProcessingException e) {
		    e.printStackTrace();  
		}catch (RestClientException e) {
		    e.printStackTrace();
		}	
       
	}

	
	
	public Object getLTData(HttpSession session,int custId,int type,String service_url) {

        String key = null;
        String sessId = null;
        if(type == 0){
			if((session.getAttribute("apiempkey")!= null) && (session.getAttribute("sessEmpId")!= null)){
				key = session.getAttribute("apiempkey").toString();
				sessId = session.getAttribute("sessEmpId").toString();
			}else{
				ValidAuthLongTerm(session,custId,type);
				key = session.getAttribute("apiempkey").toString();
				sessId = session.getAttribute("sessEmpId").toString();
			}	
		}else{
			
			if((session.getAttribute("apiadminkey")!= null) && (session.getAttribute("sessAdminId")!= null)){
				key = session.getAttribute("apiadminkey").toString();
				sessId = session.getAttribute("sessAdminId").toString();
			}else{
				ValidAuthLongTerm(session,custId,type);
				key = session.getAttribute("apiadminkey").toString();
				sessId = session.getAttribute("sessAdminId").toString();
			}	
        }		

        Map<String, Object> params = new HashMap<String, Object>();
       
        HttpHeaders httpHeaders = prepareHeader();
        
        httpHeaders.add("hashVal",key);
        httpHeaders.add("sessionID",sessId);
        httpHeaders.add("customerID",Integer.toString(custId));
        
        HttpEntity<Object> httpEntity = new HttpEntity<Object>(params, httpHeaders);
        ResponseEntity<String> response = null;

        try {
            response = restTemplate.exchange(service_url, HttpMethod.GET, httpEntity, String.class);
           
        }catch (RestClientException e) {
            e.printStackTrace();
        }
        return response.getBody();
        
    }
	
	
	public Object postLTData(HttpSession session,int custId,int type,String service_url,Map<String, Object> params)
	{

		String key = null;
	    String sessId = null;
        if(type == 0){
			if((session.getAttribute("apiempkey")!= null) && (session.getAttribute("sessEmpId")!= null)){
				key = session.getAttribute("apiempkey").toString();
				sessId = session.getAttribute("sessEmpId").toString();
			}else{
				ValidAuthLongTerm(session,custId,type);
				key = session.getAttribute("apiempkey").toString();
				sessId = session.getAttribute("sessEmpId").toString();
			}	
		}else{
			
			if((session.getAttribute("apiadminkey")!= null) && (session.getAttribute("sessAdminId")!= null)){
				key = session.getAttribute("apiadminkey").toString();
				sessId = session.getAttribute("sessAdminId").toString();
			}else{
				ValidAuthLongTerm(session,custId,type);
				key = session.getAttribute("apiadminkey").toString();
				sessId = session.getAttribute("sessAdminId").toString();
			}	
        }		
        
        ResponseEntity<String> response = null;
        HttpHeaders httpHeaders = prepareHeader();
        
        httpHeaders.add("hashVal",key);
        httpHeaders.add("sessionID",sessId);
        httpHeaders.add("customerID",Integer.toString(custId));
        
        try {
        	
        	 ObjectMapper Obj = new ObjectMapper();
     	     String strjson = Obj.writeValueAsString(params);
            
             httpHeaders.add("Content-Length",Integer.toString(strjson.length()));

             HttpEntity<Object> httpEntity = new HttpEntity<Object>(strjson, httpHeaders);
            response = restTemplate.exchange(service_url, HttpMethod.POST, httpEntity, String.class);
           
        }catch (RestClientException e) {
            e.printStackTrace();
            
		}catch(JsonProcessingException e) {
		    
		    e.printStackTrace();
		    
		}	
        return response.getBody();
       
    }

	public void apiTime(String apiName,String startTime,String endTime, String coric)
	{
		MylesApiTime mylesApiTime = new MylesApiTime();
		mylesApiTime.setApiName(apiName);
		mylesApiTime.setStartTime(startTime);
		mylesApiTime.setEndTime(endTime);
		mylesApiTime.setCoric(coric);
		ltempService.saveApiTime(mylesApiTime);
	}

	public Object _MYLESGetCarCategoryModels(HttpSession session,String method,int custId,int type) {
		String service_url = this.url+method;
		Object response = null;
		try {

			Date date = new Date();
			SimpleDateFormat formatter = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
			String starttimeforapi = formatter.format(date);
			response = this.getLTData(session,custId,type,service_url);

			String endtimeforapi = formatter.format(date);
			this.apiTime(method,starttimeforapi,endtimeforapi,"");


		} catch (Exception e) {
			e.printStackTrace();
		}
		return response;
	}

	public Object _MYLESSearchSubscription(HttpSession session,String method,Map<String, Object> params,int custId,int type)
	{
		String service_url = this.app_url+method;
		Object response = null;
		try {

			Date date = new Date();
			SimpleDateFormat formatter = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
			String starttimeforapi = formatter.format(date);
			response = this.postLTData(session,custId,type,service_url,params);

			String endtimeforapi = formatter.format(date);
			this.apiTime(method,starttimeforapi,endtimeforapi,"");

		} catch (Exception e) {
			e.printStackTrace();
		}
		return response;
	}


	public Object _MYLESGetClientCoByUrl(HttpSession session,String method,Map<String, Object> params,int custId,int type)
	{
		String service_url = this.app_url+method;
		Object response = null;
		try {

			Date date = new Date();
			SimpleDateFormat formatter = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
			String starttimeforapi = formatter.format(date);
			response = this.postLTData(session,custId,type,service_url,params);

			String endtimeforapi = formatter.format(date);
			this.apiTime(method,starttimeforapi,endtimeforapi,"");

		} catch (Exception e) {
			e.printStackTrace();
		}
		return response;
	}

	public Object _MYLESfetchCities(HttpSession session,String method,Map<String, Object> params,int custId,int type)
	{
		String service_url = this.url+method;
		Object response = null;
		try {

			Date date = new Date();
			SimpleDateFormat formatter = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
			String starttimeforapi = formatter.format(date);
			response = this.postLTData(session,custId,type,service_url,params);

			String endtimeforapi = formatter.format(date);
			this.apiTime(method,starttimeforapi,endtimeforapi,"");

		} catch (Exception e) {
			e.printStackTrace();
		}
		return response;
	}










}
