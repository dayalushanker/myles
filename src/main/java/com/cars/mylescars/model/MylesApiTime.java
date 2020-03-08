package com.cars.mylescars.model;


import org.springframework.stereotype.Component;

import java.io.Serializable;


import javax.persistence.*;


@Entity
@Table(name = "myles_apitime")
public class MylesApiTime implements Serializable {

    /**
	 * 
	 */
	private static final long serialVersionUID = 1L;

	@Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id")
    private Integer Id;

    @Column(name = "apiname")
    private String apiName;

    @Column(name = "starttime")
    private String startTime;

    @Column(name = "endtime")
    private String endTime;
    
    @Column(name = "coric")
    private String Coric;

	public Integer getId() {
		return Id;
	}

	public void setId(Integer id) {
		this.Id = id;
	}

	public String getApiName() {
		return apiName;
	}

	public void setApiName(String apiName) {
		this.apiName = apiName;
	}

	public String getStartTime() {
		return startTime;
	}

	public void setStartTime(String startTime) {
		this.startTime = startTime;
	}

	public String getEndTime() {
		return endTime;
	}

	public void setEndTime(String endTime) {
		this.endTime = endTime;
	}

	public String getCoric() {
		return Coric;
	}

	public void setCoric(String coric) {
		this.Coric = coric;
	}

	
    
}
