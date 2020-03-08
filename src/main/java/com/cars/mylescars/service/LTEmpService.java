package com.cars.mylescars.service;
import com.cars.mylescars.model.MylesApiTime;
import org.hibernate.Session;
import org.hibernate.SessionFactory;



public interface LTEmpService {
    public void saveApiTime(MylesApiTime mylesApiTime);

    Session getCurrentSession();

    SessionFactory getSessionFactory();

    void setSessionFactory(SessionFactory sessionFactoryMssql);

    void refresh(Object entityToBeRefreshed);

    void save(Object entityToBeSaved);

}
