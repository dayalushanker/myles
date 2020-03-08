package com.cars.mylescars.Controller;

import javax.servlet.http.HttpSession;

import org.apache.log4j.Logger;
import org.springframework.context.annotation.Bean;
import org.springframework.stereotype.Component;
import org.springframework.web.client.RestTemplate;

@Component
public  class BaseController {

	final static Logger log = Logger.getLogger(BaseController.class);



    public String employeeSession(HttpSession sesssion) {
    	String sEmpId;
        if (sesssion.isNew()) {
            log.info("Employee Session New: " + sesssion.getId());
            long nano = System.nanoTime();
            String sessEmpId = "Emp$*#@@"+sesssion.getId().toString()+Long.toString(nano);
            sesssion.setAttribute("sessEmpId",sessEmpId);
            sEmpId = sesssion.getAttribute("sessEmpId").toString();
         } else {
            // TODO: read all session data here?
            log.info("Employee Session Reused: " + sesssion.getId() + " Parm is set to: "
                   + sesssion.getAttribute("sessEmpId"));
            sEmpId = sesssion.getAttribute("sessEmpId").toString();
        }
        return sEmpId;
    }
    
    public String adminSession(HttpSession session) {
    	String sAdminId;
        if (session.isNew()) {
           log.info("Admin Session New: " + session.getId());
           long start = System.nanoTime();
	       long end = System.nanoTime();
	       long microseconds = (end - start) / 1000;
	       String sessAdminId = "Admin$*#@@"+session.getId().toString()+Long.toString(microseconds);
           session.setAttribute("sessAdminId", sessAdminId);
           sAdminId = session.getAttribute("sessAdminId").toString();
        } else {
            // TODO: read all session data here?
            log.info("Admin Session Reused: " + session.getId() + " Parm is set to: "
                    + session.getAttribute("sessAdminId"));
            sAdminId = session.getAttribute("sessAdminId").toString();

        }
        return sAdminId;
    }
    
   
}
