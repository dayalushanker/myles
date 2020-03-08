<?php 
$dl_exp = date_create($employeedetail["dlexpirydate"]); 
$pass_exp = date_create($employeedetail["passportexpirydate"]);
$aadhaardob = date_create($employeedetail["aadhardob"]);
$passpory_dob = date_create($employeedetail["PassportDOb"]);

//echo '<pre>';print_r($employeedetail);die;
?>
<script type="text/javascript">
function checkaddress(){
	$("#deladdress_div").hide();
	$("#sameaddress").val("1");
	$("#sameaddress").removeAttr("onclick");
	$("#sameaddress").attr("onclick","uncheckaddress()");
	$("#sameaddress").prop("checked", true);
	$("#del_address1").val($("#par_address1").val());
	$("#del_address2").val($("#par_address2").val());
	$("#del_state").val($("#par_state").val());
	$("#del_city").val($("#par_city").val());
	$("#del_pin_code").val($("#par_pin_code").val());
}
function uncheckaddress(){
	$("#deladdress_div").show();
	$("#sameaddress").val('');
	$("#sameaddress").removeAttr("onclick");
	$("#sameaddress").attr("onclick","checkaddress()");
	$("#sameaddress").prop("checked", false);
	$("#del_address1").val("");
	$("#del_address2").val("");
	$("#del_state").val("");
	$("#del_city").val("");
	$("#del_pin_code").val("");
}					

</script>		
<form method="post" id = "UploadForm" enctype="multipart/form-data">
	<div class="heading-b">
		<h3>KYC Document Submission</h3>
		<div class="error" id="subMsg"></div>
		<br/>
		<span class="a-hdn">Aadhaar Card/ Passport</span>
	</div>


	<div class="form-group">
		<ul class="documenttab">
			<li>
				<input class="styled-radio" onclick="docchange()" type="radio" id="AadhaarCard" name="card" value="AadhaarCard" <?php if(($employeedetail["doctype"] == "")||($employeedetail["doctype"] == "aadhaar")){ echo 'checked'; } ?>  />
					<label for="AadhaarCard"><span class="sz">Aadhaar Card</span></label>
			</li>
			<li>
				<input class="styled-radio" onclick="docchange()" type="radio" id="Passport" name="card" value="Passport" <?php if($employeedetail["doctype"] == "passport"){ echo 'checked'; } ?> />
					<label for="Passport"><span class="sz">Passport</span></label>
			</li>
		</ul>
		<span class="t-4">Please enter below detail as per your <span class="doctypemsg">Aadhaar<span> </span>
	</div><!--form-group-->

     <input type="hidden" name="actionvalue" value="<?php echo $this->request->params['action']; ?>" >
	 <input type="hidden" name="doctype" id="doctype" value="<?php echo $employeedetail["doctype"]; ?>" >
	<div id="aadharbox">
		<div class="frmheight">
		<div class="form-group">
			<div class="row">
				<div class="col-sm-5 col-md-5">
					
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<div class="form-group">
									<label>Aadhaar Number</label>
									<input class="form-control" onkeypress="clearerror();" onclick="clearerror();" type="text" id="aadhaar_number" maxlength="12" name="aadhaar_number" value="<?php echo $employeedetail["aadharno"];  ?>" placeholder="Enter Aadhaar Number">
								</div>
							</div>
							<div class="col-sm-12 col-md-12">
								<div class="form-group">
									<label>Name as per Aadhaar</label>
									<input class="form-control" onkeypress="clearerror();" onclick="clearerror();" type="text" id="name_on_aadhaar" maxlength="100" name="name_on_aadhaar" value="<?php echo $employeedetail["aadharname"];  ?>" placeholder="Name as per Aadhaar">
								</div>
							</div>
							<div class="col-sm-8 col-md-8">
									<label>Date of Birth</label>
									<input class="form-control calandar-icon" onkeypress="clearerror();" onclick="clearerror();" type="text" id="aadhaar_dob" value="<?php  if($employeedetail["aadhardob"] != ""){
																 echo $aadhaardob->format("d/m/Y");
																}else {
															 $dobdate = date('Y-m-d');
															 echo date("d/m/Y",strtotime($dobdate. ' - 21 years')); 
															} ?>" name="aadhaar_dob" placeholder="Dob" readonly>
								
							</div>
							<div class="clear"></div>
							
						</div>

					
				</div>
				<div class="col-sm-2 col-md-2"></div>
				<div class="col-sm-4 col-md-4">
					<div class="edit-box" id="div_aadhaar_file">
						 <span id="aadhaar_link">
						 <a target="_blank" href="<?php echo $employeedetail["aadharfile"] ?>">View</a><a href="javascript:void(0)" onkeypress="clearerror();"  onclick="clearerror();editaadhaar()" class="mg-button3">Edit</a>
						 </span>
						<span id="chooseaadharfile" class="tool-hover" style="display:none;">
							<span  class="img-format"><span class="t-16">Choose Image:</span><span class="t-17">(PDF files only)</span></span>
							<a class="pd6 mg-button3 " href="#" ><input id="aadhaar_file"  onkeypress="clearerror();" onclick="clearerror();" class="op-1" name="aadhaar_file" value="<?php echo $employeedetail["aadharfile"]; ?>"  type="file"/>
								<span class="uploadbtn">Upload</span>

								
							</a>
							<span class="tool-hover-box">Please submit the Aadhaar card downloaded from the UIDAI site and not a photo or scan</span>
							<input id="AadhaarFileName" name="AadhaarFileName"  type="hidden" value="<?php echo $employeedetail["aadharfile"]; ?>" />
						</span>
					</div>
					<span class="adhartext">Please submit the Adhaar card downloaded from<br/> the <a href="https://eaadhaar.uidai.gov.in/" target="_blank">UIDAI site</a> and not a photo or scan. <a data-toggle="modal" data-target="#AdhaarModel" href="void(0)">Learn more</a></span>
				</div>
				<div class="col-sm-1 col-md-1">
					<span class="doc-success">
						<?php if($employeedetail["aadharverify"] == 1){
								echo $this->Html->image('approve.png',['alt' => '','title' => 'Document Successfully Verified']); 
							}else{ 
								echo $this->Html->image('pending.png',['alt' => '','title' => 'Unverified Document']);
							}  
						?>
					</span>
				</div>
			</div><!--row-->
			<div class="error" id="MsgDocAadhaar"></div>
		</div><!--form-group-->
	</div><!-- frmheight -->
	</div><!--aadharbox-->

	<div id="passportbox" style="display:none;">
		<div class="frmheight">
			<div class="form-group">
				<div class="row">
					<div class="col-sm-8 col-md-8">
						<div class="row">
							<div class="col-sm-3 col-md-3">
								<label>Passport Number</label>
								<input class="form-control" onkeypress="clearerror();" onclick="clearerror();" type="text" id="passport_number" maxlength="8" name="passport_number" value="<?php echo $employeedetail["passportNo"];  ?>" placeholder="Passport Number">
							</div>
							<div class="col-sm-3 col-md-3">
								<label>Surname</label>
								<input class="form-control" onkeypress="clearerror();" onclick="clearerror();" type="text" id="surname" maxlength="50" name="surname" value="<?php echo $employeedetail["Passportsurname"];  ?>" placeholder="Surname">
							</div>
							<div class="col-sm-3 col-md-3">
								<label>First Name</label>
								<input class="form-control" onkeypress="clearerror();" onclick="clearerror();" type="text" id="fname" value="<?php echo $employeedetail["Passportfirstname"];  ?>" maxlength="50" name="fname" placeholder="First Name">
							</div>
							<div class="col-sm-3 col-md-3">
							
							   <label>Passport Type</label>
								<input class="form-control" onkeypress="clearerror();" onclick="clearerror();" type="text" id="passport_type" value="<?php echo $employeedetail["Passporttype"];  ?>" name="passport_type" maxlength="5" placeholder="Passport Type">
							
							
							
								
							</div>
							<!--div class="col-sm-3 col-md-3">
								
							</div-->
						</div>
					</div>
					<div class="col-sm-4 col-md-4"></div>
				</div><!--row-->
			</div><!--form-group-->


		<div class="form-group">
			<div class="row">
				<div class="col-sm-8 col-md-8">
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<label>Country Code</label>
							<input class="form-control" onkeypress="clearerror();" onclick="clearerror();" type="text" id="country_code" maxlength="3" name="country_code" value="<?php echo $employeedetail["Passportcountryco"];  ?>" placeholder="Country Code">
						</div>
						<div class="col-sm-4 col-md-4">
							<label>Date of Birth</label>
							<input class="form-control calandar-icon" onkeypress="clearerror();" onclick="clearerror();" type="text" id="passport_dob" maxlength="" name="passport_dob" value="<?php if($employeedetail["PassportDOb"]!=""){ echo $passpory_dob->format("d/m/Y"); }
													 else{
													 $dobdate = date('Y-m-d');
													 echo date("d/m/Y",strtotime($dobdate. ' -21 years')); }

													 ?>" placeholder="Date of Birth" readonly>
						</div>
						<div class="col-sm-4 col-md-4">
							<label>Date of Expiry</label>
							<input class="form-control calandar-icon" onkeypress="clearerror();" onclick="clearerror();" type="text" id="passport_exp_date" value="<?php  if($employeedetail["passportexpirydate"] != ""){echo $pass_exp->format("d/m/Y");}else {

													 $doedate = date('Y-m-d');
													 echo date("d/m/Y",strtotime($doedate. '+ 1 month')); 

													} ?>" name="passport_exp_date" placeholder="Date of Expiry" readonly>
						</div>
						
					</div>
				</div>
				<div class="col-sm-4 col-md-4"></div>
			</div><!--row-->
		</div><!--form-group-->

		<div class="form-group">
			<div class="row">
				<div class="col-sm-8 col-md-8">
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<label>MRZ 1 
								<span class="whtis" onclick="whtisshowmrz1();">(What is this?)</span> 
								<span class="tool-hover-box-2">
									<img src="img/mrz.png" alt="MRZ 1">
								</span>
							</label>
							<input class="form-control" type="text" onkeypress="clearerror();" onclick="clearerror();" id="mrz1" maxlength="44" name="mrz1" value="<?php echo $employeedetail["PassportMRZ1"];  ?>" placeholder="MRZ 1">
						</div>
						<div class="col-sm-6 col-md-6">
							<label>MRZ 2 
								<span class="whtis" onclick="whtisshowmrz2();">(What is this?)</span>
								<span class="tool-hover-box-3">
									<img src="img/mrz.png" alt="MRZ 2">
								</span>
							</label>
							<input class="form-control" type="text" onkeypress="clearerror();" onclick="clearerror();" id="mrz2" maxlength="44" name="mrz2" value="<?php echo $employeedetail["PassportMRZ2"];  ?>" placeholder="MRZ 2">
						</div>
						
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<input type="hidden" id="editflag" value="" />
					<div class="edit-box" id="div_passport_file">	
						<span id="passport_link">
						 <a target="_blank" href="<?php echo $employeedetail["Passportfile"] ?>">View</a><a href="javascript:void(0)" onkeypress="clearerror();" onclick="clearerror();editpassword()" class="mg-button3">Edit</a>
						</span>
						<span  id="choosepassportfile" style="display:none;" class="tool-hover">						 
							<span class="img-format"><span class="t-16">Choose Image:</span><span class="t-17">(JPG, PDF files only)</span></span><a class="pd6 mg-button3" href="#">
								<input id="passport_file" class="op-1" onkeypress="clearerror();" onclick="clearerror();"  name="passport_file" value="<?php echo $employeedetail["Passportfile"];  ?>" type="file"/>
							<input id="PassportFileName" name="PassportFileName"  type="hidden" value="<?php echo $employeedetail["Passportfile"]; ?>" />
							<span class="uploadbtn">Upload</span>
							</a> 
							<span class="tool-hover-box">Please share the front-view image of your Passport</span>
						</span>						
					</div>
				</div>
				<div class="col-sm-1 col-md-1">
					<span class="doc-success">
						 <?php if($employeedetail["Passportverify"] == 1){
								echo $this->Html->image('approve.png',['alt' => '','title' => 'Document Successfully Verified']); 
							}else{ 
								echo $this->Html->image('pending.png',['alt' => '','title' => 'Unverified Document']);
							}  
						?>
					</span>
				</div>
			</div><!--row-->
		</div><!--form-group-->
		 <div class="error" id="MsgDocPassport"></div>
		 </div><!--frmheight-->
	</div><!--passportbox-->
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="line-gray"></div>
		</div>
	</div>
	<span class="a-hdn-1">Driving Licence</span>
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="form-group">
			  <div class="row">
			    <div class="col-sm-2 col-md-2">
				  <label>Gender</label>
							<div class="selectbox">
								<select class="form-control" name="gender" id="gender">
									<?php 
									   foreach($genders as $key=>$value){
											if($key == $employeedetail["PassportGender"])
												echo '<option value="'.$key.'" selected="selected">'.$value.'</option>';
											else
												echo '<option value="'.$key.'">'.$value.'</option>';															
									   }   
									
									
									?>										 
								</select>
							</div>
				</div>
				<div class="col-sm-6 col-md-6">
				  <label>Driving Licence Number</label>
				  <input class="form-control" type="text" id="dl_number" maxlength="50"  name="dl_number"  value="<?php echo $employeedetail["dlNo"]; ?>" placeholder="Enter DL Number" onkeypress="clearerror();" onclick="clearerror()">
				</div>
				<div class="col-sm-3 col-md-3">
				   <div class="edit-box">
					<span id="dl_link">
					 <a target="_blank" href="<?php echo $employeedetail["dlfile"] ?>">View</a><a href="javascript:void(0)" onkeypress="clearerror();" onclick="clearerror();editdl()" class="mg-button3">Edit</a>	
					</span>
					<span  id="choosedlfile" style="display:none;" class="tool-hover">
						<span class="img-format"><span class="t-16">Choose Image:</span><span class="t-17">(JPEG, PDF files only)</span></span>

						<a class="pd6 mg-button3" href="#"><input id="dl_file" onkeypress="clearerror();" onclick="clearerror();"  name="dl_file" class="op-1" value="<?php echo $employeedetail["dlfile"]; ?>" type="file"/>
							<span class="uploadbtn">Upload</span>
						</a>

						<input id="DLFileName" type="hidden" value="<?php echo $employeedetail["dlfile"]; ?>" />
						<span class="tool-hover-box">Please share the front-view image of your Driving Licence</span>
					</span>
				  </div>
				</div>
				<div class="col-sm-1 col-md-1">
					<span class="doc-success">
						<?php if($employeedetail["dlverify"] == 1){ 
								echo $this->Html->image('approve.png',['alt' => '','title' => 'Document Successfully Verified']); 
							}else{ 
								echo $this->Html->image('pending.png',['alt' => '','title' => 'Unverified Document']);
							}  
						?>
					</span>
				</div>
			  </div>
			  <div class="error" id="MsgDocDl"></div>
			</div><!--form-group-->
			

			<div class="form-group">
				<span class="a-hdn-1">PAN Card</span>
				<div class="row">
					<div class="col-sm-8 col-md-8">
					  <label>PAN Card Number</label>
					   <input class="form-control" type="text" value="<?php echo $employeedetail["PanNo"]; ?>" maxlength="10" id="pan_number" name="pan_number" placeholder="Enter PAN Number" onkeypress="clearerror();" onclick="clearerror();">
					</div>
					<div class="col-sm-3 col-md-3">
						<div class="edit-box">
							<span id="pan_link">
							 <a target="_blank" href="<?php echo $employeedetail["panfile"] ?>">View</a><a href="javascript:void(0)"  onclick="clearerror();editpan()" class="mg-button3">Edit</a>
							</span>
							<span id="choosepanfile" style="display:none;" class="tool-hover">						 
								<span class="img-format"><span class="t-16">Choose Image:</span><span class="t-17">(JPEG, PDF files only)</span></span><a class="pd6 mg-button3" href="#">
									<input id="pan_file" class="op-1" onkeypress="clearerror();" onclick="clearerror();"  name="pan_file" value="<?php echo $employeedetail["panfile"]; ?>" type="file"/>
								<span class="uploadbtn">Upload</span>
								</a>
								<input id="PanFileName" type="hidden" value="<?php echo $employeedetail["panfile"]; ?>" />

								<span class="tool-hover-box">Please share the front-view image of your PAN Card</span>
							</span>
						</div>
					</div>
					<div class="col-sm-1 col-md-1">
						<span class="doc-pending">
							<?php if($employeedetail["Panverify"] == 1){
								echo $this->Html->image('approve.png',['alt' => '','title' => 'Document Successfully Verified']); 
							}else{ 
								echo $this->Html->image('pending.png',['alt' => '','title' => 'Unverified Document']);
							} 
						  ?>
						</span>
					</div>
				</div>
				<div class="error" id="MsgDocPan"></div>
			</div><!--form-group--> 
			
			<div class="row">
			  <div class="col-sm-9 col-md-9">
				<div class="form-group">
				  <span class="a-hdn-1">Permanent Address</span>
				  <div class="row">
					<div class="clear"></div>
					<div class="col-sm-10 col-md-10">
						<div class="form-group">
							<label>Address Line 1</label>
							<input type="text" onkeypress="clearerror()" onclick="clearerror()" onblur="clearerror()" maxlength="100" id="par_address1" value="<?php echo $employeedetail["address1permanent"] ?>" name="par_address1" class="form-control" placeholder="Address here">
						</div>
					</div>
					<div class="clear"></div>

					<div class="col-sm-10 col-md-10">
						<div class="form-group">
							<label>Address Line 2</label>
							<input type="text" onkeypress="clearerror()" onclick="clearerror()" onblur="clearerror()" maxlength="100" id="par_address2" value="<?php echo $employeedetail["address2permanent"] ?>" name="par_address2" class="form-control" placeholder="Address here">
						</div>
					</div>


						<div class="col-sm-10 col-md-10">
							<div class="row">
								<div class="col-sm-5 col-md-5">
									<div class="form-group">
										<label>State</label>
										<div class="selectbox">
											<select onclick="clearerror()" onchange="clearerror()" name="par_state" id="par_state" class="form-control pdrgt40">
												<?php 
												   foreach($states as $key=>$value){
														if($key == $employeedetail["state"])
															echo '<option value="'.$key.'" selected="selected">'.$value.'</option>';
														else
															echo '<option value="'.$key.'">'.$value.'</option>';															
												   }   
												?>		
											</select>
										</div>
									</div>
								</div>
								<div class="col-sm-4 col-md-4">
									<div class="form-group">
										<label>City</label>
										<input onkeypress="clearerror()" onclick="clearerror()" onblur="clearerror()" type="text" id="par_city" value="<?php echo $employeedetail["city"] ?>" maxlength="50" name="par_city" class="form-control" placeholder="City Name">
									</div>
								</div>
								<div class="col-sm-3 col-md-3">
									<div class="form-group">
										<label>PIN Code</label>
										<input onkeypress="clearerror()" onclick="clearerror()" onblur="clearerror()" type="text" value="<?php echo $employeedetail["pincode"] ?>" id="par_pin_code" maxlength="6" name="par_pin_code" class="form-control" placeholder="PIN Code" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
									</div>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					<br/>

					
					<div class="col-sm-7 col-md-7 dtd">
						<input class="styled-checkbox" onclick="checkaddress();clearerror();" type="checkbox" id="sameaddress" name="sameaddress" value="<?php echo $employeedetail["IsAddressSame"]; ?>" <?php if($employeedetail["IsAddressSame"] == 1){ echo 'checked'; } ?> />
						<label for="sameaddress"><span class="fnts">Delivery address same as Permanent Address</span></label>
					</div>
					<br>
					<br>
					<div class="col-sm-10 col-md-10" id="deladdress_div" <?php if($employeedetail["IsAddressSame"] == 1){ echo "style=display:none;"; } ?>>
					 <span class="a-hdn-1">Delivery Address</span>
					 
					<div class="clear"></div>

					<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="form-group">
							<label>Address Line 1</label>
							<input onkeypress="clearerror()" onclick="clearerror()" onblur="clearerror()" type="text" maxlength="100" value="<?php echo $employeedetail["address1delivery"] ?>" id="del_address1" name="del_address1" class="form-control" placeholder="Address here">
						</div>
					</div>
					<div class="clear"></div>

					<div class="col-sm-12 col-md-12">
						<div class="form-group">
							<label>Address Line 2</label>
							<input onkeypress="clearerror()" onclick="clearerror()" onblur="clearerror()" type="text" maxlength="100" value="<?php echo $employeedetail["address2delivery"] ?>" id="del_address2" name="del_address2" class="form-control" placeholder="Address here">
						</div>
					</div>


						<div class="col-sm-12 col-md-12">
							<div class="row">
								<div class="col-sm-5 col-md-5">
									<div class="form-group">
										<label>State</label>
										<div class="selectbox">
											<select onclick="clearerror()" onchange="clearerror()" id="del_state" name="del_state" class="form-control">
												<?php 
												   foreach($states as $key=>$value){
														if($key == $employeedetail["statedelivery"])
															echo '<option value="'.$key.'" selected="selected">'.$value.'</option>';
														else
															echo '<option value="'.$key.'">'.$value.'</option>';															
												   }   
												?>		
											</select>
										</div>
									</div>
								</div>
								<div class="col-sm-4 col-md-4">
									<div class="form-group">
										<label>City</label>
										<input onkeypress="clearerror()" onclick="clearerror()" onblur="clearerror()" type="text" value="<?php echo $employeedetail["citydelivery"] ?>" maxlength="50" id="del_city" name="del_city" class="form-control" placeholder="City Name">
									</div>
								</div>
								<div class="col-sm-3 col-md-3">
									<div class="form-group">
										<label>PIN Code</label>
										<input onkeypress="clearerror()" onclick="clearerror()" onblur="clearerror()" type="text" value="<?php echo $employeedetail["pincodedelivery"] ?>" maxlength="6" id="del_pin_code" maxlength="6" name="del_pin_code" class="form-control" placeholder="PIN Code" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
									</div>
								</div>
							</div>
						</div>
						</div>
						<div class="clear"></div>
					<br/>


					</div>

					<div class="col-sm-4 col-md-4" style="display:none">
					<div class="col-sm-5 col-md-5">
				
					  <label>By when do you want the car with you?</label>
					  <input class="form-control calandar-icon" type="text" id="address_date" name="address_date" value="<?php $add_date = date('Y-m-d',strtotime(date('Y-m-d'). ' + 1 days'));
	$addd=date_create($add_date); $add_to = date_format($addd,"d/m/Y"); echo $add_to; ?>" readonly>
				   </div>
				  </div>
				  
				</div><!--form-group-->
				<div class="error" id="MsgDocAddress"></div>
				<div class="btn-box">
				  <button type="submit" class="btn">Proceed to verify documents</button>
				</div><!--btn-box-->

				
			  </div>
			</div>
		  
		</div>
	</div>
</div><!--form-box-->
</form>
<div class="modal fade" id="AdhaarModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close cls-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <div class="modal-body">
            <div class="instructions-box" style="height: auto;">
              <p>To validate your Aadhar card, we need the government certified e-aadhar available on <a target="_blank" href="https://eaadhaar.uidai.gov.in"> https://eaadhaar.uidai.gov.in/</a></p>


              <ol class="list-1" type="1">
                <li>On the site, enter your Aadhar number under "Aadhar Number" tab and the captcha displayed. </li>
                <li>Don't click on Masked Adhaar option</li>
                <li>After entering your details, you will receive an OTP on your registered phone</li>
                <li>Enter this OTP in the box provided and answer the UIDAI survery to download your e-copy</li>
              </ol>
               
            </div>
          </div>

        </div>
      </div>
    </div>


    <script type="text/javascript">
    	$('#aadhaar_file').attr('title', '');

    	function  whtisshowmrz1 () {
			$('.tool-hover-box-2').toggle();
		}
		function  whtisshowmrz2 () {
			$('.tool-hover-box-3').toggle();
		}
    </script>
