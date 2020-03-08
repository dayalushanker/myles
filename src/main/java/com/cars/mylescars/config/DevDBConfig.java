package com.cars.mylescars.config;


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import com.mchange.v2.c3p0.ComboPooledDataSource;
import org.apache.log4j.Logger;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.context.annotation.Profile;
import org.springframework.context.annotation.PropertySource;
import org.springframework.core.io.ClassPathResource;
import org.springframework.core.io.support.PropertiesLoaderUtils;

import org.springframework.orm.hibernate5.HibernateTransactionManager;
import org.springframework.orm.hibernate5.LocalSessionFactoryBean;

import javax.sql.DataSource;
import java.beans.PropertyVetoException;
import java.io.IOException;

/**
 * @author Dayalu Shanker
 */
@Configuration
@Profile("dev")
@PropertySource("classpath:dbserver.properties")
public class DevDBConfig {

    protected final Logger log = Logger.getLogger(getClass());
    @Value("${dev.server.ip}")
    private String serverIp;
    @Value("${dev.server.user}")
    private String serverUser;
    @Value("${dev.server.pwd}")
    private String serverPwd;
    
    
   
    @Bean
    public HibernateTransactionManager transactionManager() throws PropertyVetoException, IOException {
        log.debug("Booting up transaction manager with DEVELOPER profile");
        HibernateTransactionManager hibernate5Manager = new HibernateTransactionManager();
        hibernate5Manager.setSessionFactory(sessionFactory().getObject());
        return hibernate5Manager;

    }

    @Bean
    public LocalSessionFactoryBean sessionFactory() throws PropertyVetoException, IOException {
        LocalSessionFactoryBean hibernate5SessionFactory = new LocalSessionFactoryBean();
        hibernate5SessionFactory.setDataSource(dataSource());
        hibernate5SessionFactory.setHibernateProperties(PropertiesLoaderUtils.loadProperties(new ClassPathResource("dbserver.properties")));
        hibernate5SessionFactory.getHibernateProperties().setProperty(" hibernate.connection.autocommit", "true");
        hibernate5SessionFactory.setPackagesToScan("com.cars.mylescars.model");
        return hibernate5SessionFactory;

    }

    @Bean
    public DataSource dataSource() throws PropertyVetoException {
        ComboPooledDataSource c3poDatasource = new ComboPooledDataSource();
        c3poDatasource.setDriverClass("com.mysql.cj.jdbc.Driver");
        c3poDatasource.setJdbcUrl("jdbc:mysql://" + serverIp + "/myles");
        c3poDatasource.setUser(serverUser);
        c3poDatasource.setPassword(serverPwd);
        c3poDatasource.setInitialPoolSize(1);
        c3poDatasource.setMinPoolSize(1);
        c3poDatasource.setAcquireIncrement(1);
        c3poDatasource.setMaxPoolSize(50);
        c3poDatasource.setMaxIdleTime(7200);
        c3poDatasource.setIdleConnectionTestPeriod(300);
        c3poDatasource.setTestConnectionOnCheckin(true);
        c3poDatasource.setMaxStatements(0);
        c3poDatasource.setMaxStatementsPerConnection(0);
        c3poDatasource.setAcquireRetryAttempts(60);
        c3poDatasource.setAcquireRetryDelay(1000);
        c3poDatasource.setBreakAfterAcquireFailure(false);
        c3poDatasource.setAutoCommitOnClose(true);
        c3poDatasource.setNumHelperThreads(5);

        return c3poDatasource;
    }

   

   


   
}

