package com.cars.mylescars.service.impl;

import com.cars.mylescars.model.MylesApiTime;
import org.springframework.context.annotation.PropertySource;
import org.springframework.stereotype.Component;
import org.springframework.stereotype.Repository;
import org.springframework.beans.factory.annotation.Autowired;
import com.cars.mylescars.service.LTEmpService;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import javax.transaction.Transactional;

@Component
@Transactional
@PropertySource("classpath:dbserver.properties")
public class LTEmpServiceImpl implements LTEmpService {

    @Autowired
    private SessionFactory sessionFactory;


    @Override
    public Session getCurrentSession() {
        return this.sessionFactory.getCurrentSession();
    }

    @Override
    public SessionFactory getSessionFactory() {
        return sessionFactory;
    }

    @Override
    public void setSessionFactory(SessionFactory sessionFactory) {
        this.sessionFactory = sessionFactory;
    }

    @Override
    public void refresh(Object entityToBeRefreshed) {
        getCurrentSession().refresh(entityToBeRefreshed);
    }

    @Override
    public void save(Object entityToBeSaved) {
        getCurrentSession().saveOrUpdate(entityToBeSaved);
        getCurrentSession().flush();
    }

    public void saveApiTime(MylesApiTime mylesApiTime){
        save(mylesApiTime);
    }
}
