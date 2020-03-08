package com.cars.mylescars.config;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;


import org.springframework.scheduling.annotation.AsyncConfigurer;

import org.springframework.stereotype.Component;
import org.springframework.transaction.annotation.EnableTransactionManagement;
import org.springframework.web.client.RestTemplate;




/**
 * @author Dayalu Shanker
 */
@Configuration
@EnableTransactionManagement
@Component
public class SpringBeanConfig implements AsyncConfigurer {

    @Bean
    public RestTemplate restTemplate() {
        return new RestTemplate();
    }

}
