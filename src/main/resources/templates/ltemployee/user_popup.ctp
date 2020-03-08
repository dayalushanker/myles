<!-----Login Start-------->
<div class="modelBox">
	<div class="modal fade" id="LoginBox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <form>
		<div class="modal-dialog" role="document">
			<div class="modal-content" >
			<div class="loaderImg">
			<input type="hidden" id="PopUpForSubscription" name="PopUpForSubscription" value="" />
			 <?php echo $this->Html->image('loader.gif', ['alt' => 'loader', 'class' => '']); ?>
			</div>

			<div class="row">
				<div class="col-sm-6 col-md-6">
					<span class="loginrgt-bg">
						
						<!-- <?php echo $this->Html->image('login-img.png', ['alt' => 'img', 'class' => '']); ?> -->
					</span>
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="modal-header">
						<button type="button" tabindex="1" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<ul class="login-btn2">
							<li class="l-link active"><a href="#" onclick="loginbtn(); setLogin()">Login</a></li>
							<li class="r-link"><a href="#" onclick="registerbtn(); setRegister()">Register</a></li>
						</ul>
					</div>
					<div class="modal-body">
						<div class="lr-box loginbox" id="">
							<div id="LoginModel">
							<span class="r-p">Login here to Subscribe a car now</span>
							<div class="form-group">
								<!-- <label>Email:<span class="mandatory">*</span></label> -->
								<input type="text" name="username" id="username" class="form-control" placeholder="Enter Email Id" onblur='clearerr()' onkeypress='clearerr()' onclick='clearerr()'>
								<span class="error" id='erruser'></span>
							</div>
							<div class="form-group">
								<!-- <label>Password:<span class="mandatory">*</span></label> -->
								<input type="Password" name="password" id="pass" class="form-control" placeholder="Password" onblur='clearerr()' onkeypress='clearerr()' onclick='clearerr()'>
								<span class="error" id='errpass'></span>
							</div>
							<div class="form-group">
								<span class="forgotP">Forgot Password? 
									<a href="javascript:void(0)"   onclick="forgotuser()">Click Here</a>
								</span>
								
							</div>
							<br>
							<button type="button" class="button wdh bg-fill" onclick="userlogin()">Sign In</button>
								
								<div class="form-group">
								<div class="sociallist"><span>Or Login with</span></div>
								<ul class="social-login">
									<li>
										<a href="javascript:void(0)" class="facebook" scope="public_profile,email"
  onclick="checkLoginState();">
											<svg viewBox="0 0 96.124 96.123" style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve">
								              <g>
								                <path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"/>
								              </g>
								              </svg>
										</a>

									</li>
									<li>
										
										<div id="gmailsignin" class="g-plus customGPlusSignIn" onclick="attachSignin(document.getElementById('gmailsignin'));">
										  <span class="icon"></span>
										  <span class="buttonText">
										  	<svg viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
												<g>
													<g>
														<path d="M462.275,55.689c-0.085-0.001-0.162-0.026-0.247-0.026c-0.039,0-0.076-0.011-0.115-0.011H50.087    c-0.034,0-0.066,0.01-0.1,0.01c-0.073,0-0.143,0.021-0.217,0.022C22.3,55.859,0,78.228,0,105.739v300.522    c0,27.619,22.468,50.087,50.087,50.087h411.826c27.619,0,50.087-22.468,50.087-50.087V105.739    C512,78.244,489.725,55.888,462.275,55.689z M411.826,422.957H100.174V240.652l120.413,120.414    c9.761,9.761,22.587,14.652,35.413,14.652c12.826,0,25.652-4.892,35.413-14.652l120.414-120.414V422.957z M256,254.805    L90.239,89.043h331.54L256,254.805z"/>
													</g>
												</g>
											</svg>
										  </span>
										</div> 
									</li>
								</ul>
							</div>		
							</div>


							<div id="ForgotModel">
								<span class="r-p">Please Reset your Password</span>
								<div class="form-group">
								  <!-- <label>Email:<span>*</span></label> -->
								  <input type="text" id="forgotemail" placeholder="Enter Email Id"  disabled class="form-control" onblur='clearerr()' onkeypress='clearerr()' onclick='clearerr()'>
								</div>
								<div class="form-group">
								  <!-- <label>New Password:<span>*</span></label> -->
								  <input type="Password"  id="passforgot" class="form-control" placeholder="New Password" onblur='clearerr()' onkeypress='clearerr()' onclick='clearerr()'>
								  <span class="error" id='error_passforgot' ></span>
								</div>
								<div class="form-group">
								  <!-- <label>Re-Enter New Password:<span>*</span></label> -->
								  <input type="Password" id="confpass" class="form-control" placeholder="Re-Enter New Password" onblur='clearerr()' onkeypress='clearerr()' onclick='clearerr()'>
								  <span class="error" id='error_conf_pass'></span>
								</div>
								<br>
								<div class="form-group">
								<button type="button" class="button wdh bg-fill" onclick="forgotpassword();">Reset</button>
								<div class="b-backbtn">
									<a href="javascript:void()" class="" onclick="setLogin();">Back to Login</a>
								</div>
						     	</div>
							</div>
						</div><!--lr-box-->
						<div class="lr-box registerbox" id="">
							<div id="RegisterModel">
								<span class="r-p">Register & Subscribe to a car now</span>

					   <div class="form-group">
							  <!-- <label>First Name <span class="mandatory">*</span></label> -->
							  <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name" tabindex="1" value=""/>
							</div>
							<div class="form-group">
							<!-- <label>Last Name <span class="mandatory">*</span></label> -->
							  <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name" tabindex="2" value="">
							</div>

							<div class="form-group">
							  <!-- <label>Mobile No. <span class="mandatory">*</span></label>	 -->
							  <input type="text" name="mob" id="mob" class="form-control pd55" placeholder="10 Digit Mobile Number" tabindex="3" maxlength="10" value="">
							  <span class="std-code">+91</span>
							  
							</div>

							

							<div class="form-group">
								<!-- <label>Email ID <span class="mandatory">*</span></label> -->	
							  <input type="email" name="mail"  id="mail" class="form-control" placeholder="Enter Email ID" tabindex="5" value="">
							  
							</div>
							<div class="form-group">
								<div class="sociallist"><span>Or register with</span></div>
								<ul class="social-login">
									<li>
										<a href="javascript:void(0)" class="facebook" scope="public_profile,email"
  onclick="checkRegistrationState();">
											<svg viewBox="0 0 96.124 96.123" style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve">
								              <g>
								                <path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"/>
								              </g>
								              </svg>
										</a>

									</li>
									<li>
										     <div id="gmailsignup" class="g-plus customGPlusSignIn" onclick="attachSignin(document.getElementById('gmailsignup'));">
											  <span class="icon"></span>
											  <span class="buttonText">
											  	<svg viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
													<g>
														<g>
															<path d="M462.275,55.689c-0.085-0.001-0.162-0.026-0.247-0.026c-0.039,0-0.076-0.011-0.115-0.011H50.087    c-0.034,0-0.066,0.01-0.1,0.01c-0.073,0-0.143,0.021-0.217,0.022C22.3,55.859,0,78.228,0,105.739v300.522    c0,27.619,22.468,50.087,50.087,50.087h411.826c27.619,0,50.087-22.468,50.087-50.087V105.739    C512,78.244,489.725,55.888,462.275,55.689z M411.826,422.957H100.174V240.652l120.413,120.414    c9.761,9.761,22.587,14.652,35.413,14.652c12.826,0,25.652-4.892,35.413-14.652l120.414-120.414V422.957z M256,254.805    L90.239,89.043h331.54L256,254.805z"/>
														</g>
													</g>
												</svg>
											  </span>
											</div>       

									</li>
									
								</ul>
							</div>

					   
						
						<div id="error" class="error"></div>
						<!-- <span class="t-11">We will verify your email Id before proceeding further. An OTP will be sent to your Id.</span> -->
						<div class="form-group">
						  <div class="mz-btn" id="divotp">
							<a href="javascript:void(0)" class="button dblock wdh bg-fill" onclick="getOtp()">Get OTP</a>
						  </div>
						</div>
					   <div class="row" id="divveryotp" style="display:none">
						<div class="col-sm-12">
						  <div class="form-group">
						  	<label>OTP <span class="mandatory">*</span></label>
							  <input type="text" name="otp" id="otp" class="form-control" placeholder="Enter OTP">
							 
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
							  	<div class="mz-btn">
									<a href="javascript:void(0)" class="button wdh bg-fill" onclick="verifyOtp()">Verify</a>
									
							  	</div>
							</div>
						</div>
					  </div>
				  
					</div>
					<div style="display:none" id="divpersonal">
							<div class="row">
							  <div class="col-sm-12">
								<div class="form-group">
								 <!-- <label>First Name <span class="mandatory">*</span></label> -->
								  <input type="text" name="divperfname" id="divperfname" class="form-control" placeholder="First Name" readonly tabindex="1">
								</div>
								<div class="form-group">
									<!-- <label>Last Name <span class="mandatory">*</span></label> -->
								  <input type="text" name="divperlname" id="divperlname" class="form-control" placeholder="Last Name" readonly tabindex="2">
								</div>
								<div class="form-group">
								  <!-- <label>Mobile No. <span class="mandatory">*</span></label> -->	
								  <input type="text" name="divpermob" id="divpermob" class="form-control pd55" placeholder="Mobile No" maxlength="10" readonly tabindex="3">
								  <span class="std-code">+91</span>
								</div>
								
							  </div>
							  <div class="col-sm-12">
								
								<div class="form-group">
									<!-- <label>Email id <span class="mandatory">*</span></label> -->
								  <input type="email" name="divperemail" id="divperemail" class="form-control " placeholder="Enter Email id" readonly>
								  <span class="tick"><i class="fa fa-check"></i></span>
								</div>

								<div class="form-group">
									<!-- <label>Password <span class="mandatory">*</span></label> -->
								  <input type="Password" name="divperpass" id="divperpass" class="form-control" placeholder="Password" value='' tabindex="7"/>
								  
								</div>
					
								<div class="form-group">
								 	<!-- <label>Confirm Password <span class="mandatory">*</span></label> -->
								  <input type="Password" name="divpercpass" id="divpercpass" class="form-control" placeholder="Confirm Password" value="" tabindex="8" />
								  
								</div>
							  </div>
							  
							</div>
							
						  
							<div class="form-group">
							 
								  <label class="agreetext">
									<input type="checkbox" checked="" name="divperagree" id="divperagree">
									<span class="checkmark2"></span>I agree to the <a href="<?php echo $this->request->webroot?>self-drive-car-rental/terms-of-use" target="_blank"  >Terms of Service</a> & <a href="<?php echo $this->request->webroot?>self-drive-car-rental/privacy-policy" target="_blank" >Privacy Policy</a>
								  </label>
								
							</div>
							<div id="personalerror" class="error"></div>
							  <div class="mz-btn">
								<a href="javascript:void(0)" class="button wdh bg-fill" onclick="personalregistration()">Register</a>
							  </div>

							  <input type="hidden" name="divpergender" id="divpergender" />
							</div>
						</div><!--lr-box-->	
				
				</div>
				</div>
			</div><!--row-->
				
				
				
			</div>
        </div>
		</form>
    </div>
</div>

<!-----Login End-------->




<script type="text/javascript">



	function loginbtn (){
		$('.loginbox').show();
		$('.registerbox').hide();
		$('.l-link').addClass('active');
		$('.r-link').removeClass('active');
	}
	function registerbtn (){
		$('.registerbox').show();
		$('.loginbox').hide();
		$('.l-link').removeClass('active');
		$('.r-link').addClass('active');
	}



    function setLogin(){
		$('#myModalLabelBOX').html('Login');
		$('#RegisterModel').hide();
		$('#ForgotModel').hide();
		$('#LoginModel').show();
	}
    function setForgot(){
		$('#myModalLabelBOX').html('Please Reset your Password');
		$('#LoginModel').hide();
		$('#RegisterModel').hide();
		$('#ForgotModel').show();
	}

    function setRegister(){
		$('#myModalLabelBOX').html('Register & subscribe to a car now!');
		$('#LoginModel').hide();
		$('#ForgotModel').hide();
		$('#RegisterModel').show();
    }
	
	var input = document.getElementById("pass");
	input.addEventListener("keyup", function(event) {
		event.preventDefault();
		if (event.keyCode === 13) {
			ltemplogin();
		}
	});
	
	if (navigator.userAgent.toLowerCase().indexOf("chrome") >= 0) {
		$(window).load(function(){
			$('input:-webkit-autofill').each(function(){
				var text = $(this).val();
				var name = $(this).attr('name');
				$(this).after(this.outerHTML).remove();
				$('input[name=' + name + ']').val(text);
			});
		});
	}
	
	function clearerr()
	{
		$(".error").each(function(){
			$(this).html('');
		});
		$(".red").each(function(){
			$(this).removeClass('red');
		});
	}
	
	function userlogin() 
	{
		var email = $("#username").val();
		var password = $("#pass").val();									
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var popupvalue = $("#PopUpForSubscription").val();	
        		
		if (email == "")
        {
			$("#username").addClass('red');
			$('#erruser').html('Please enter email address.');
            $('#username').focus();
            return false;
        }
        else if (!filter.test(email))
        {
			$("#username").addClass('red');
            $('#erruser').html('Please enter a valid email address.');
            $('#username').focus();
            return false;
        }
		else if (password == "")
		{
			$("#pass").addClass('red');
			$('#errpass').html('Please enter password.');
            $('#pass').focus();
            return false;
		}
		else
		{
			$.ajax({
				type: 'POST',
				url: "<?php echo $this->request->webroot; ?>LTemployee/login",
				data: {email: email,password: password,popupvalue:popupvalue},
				beforeSend: function () {
					$(".loaderImg").show();
					$('.ltBtn').attr('disabled', true);
				},
				success: function (response) 
				{
					//alert(response);
			        var data = jQuery.parseJSON(response);
					if ((data.status == 1) || (data.status == 4)) 
					{
						location.reload(true);
					} 
					else 
					{
						$(".loaderImg").hide();
					    $('.ltBtn').attr('disabled', false);
						$("#username").addClass('red');
						$('#erruser').html(data.msg);
					}
				}
			});
			
		}
		return false;
	}
	
	
	function forgotuser() 
	{
		
		var email = $("#username").val();
        var popupvalue = $("#PopUpForSubscription").val();		
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;	
		if (email == "")
        {
           // alert('Please Enter Email ID.');
			$("#username").addClass('red');
			$('#erruser').html('Please enter email address.');
            $('#username').focus();
            return false;
        }
        else if (!filter.test(email))
        {
			$("#username").addClass('red');
            //alert('Please Fill a Valid Email ID.');
            $('#erruser').html('Please enter a valid email address.');
            $('#username').focus();
            return false;
        }else{
			$("#forgotemail").val(email);
			$.ajax({
				type: 'POST',
				url: "<?php echo $this->request->webroot; ?>LTemployee/verify",
				data: {email: email},
				beforeSend: function () {},
				success: function (response) 
				{
					if (response == 'verify') 
					{
						setForgot();
					} 
					else 
					{
						$("#username").addClass('red');
						$('#erruser').html('Please enter a valid email address.');
					}
				}
			});	
		}	
		
		
	}	
	
	function forgotpassword() 
	{
		
		var email = $("#forgotemail").val();								
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var password = $("#passforgot").val();
		var confirmpassword = $("#confpass").val();
		if (email == "")
        {
           // alert('Please Enter Email ID.');
			$("#username").addClass('red');
			$('#erruser').html('Please enter email address.');
            $('#username').focus();
            return false;
        }
        else if (!filter.test(email))
        {
			$("#username").addClass('red');
            //alert('Please Fill a Valid Email ID.');
            $('#erruser').html('Please enter a valid email address.');
            $('#username').focus();
            return false;
        }else if (password == "")
		{
			$("#passforgot").addClass('red');
			$('#error_passforgot').html('Please enter password.');
            $('#passforgot').focus();
            return false;
			
		}else if (password.length < 8)
		{
			$("#passforgot").addClass('red');
			$('#error_passforgot').html('Password length should be at least 8 character.');
            $('#passforgot').focus();
            return false;
		}
		else if (password !== confirmpassword)
		{
			$("#confpass").addClass('red');
			$('#error_conf_pass').html('Password and confirm password must be same.');
            $('#confpass').focus();
            return false;
		}
		else{
			
			$.ajax({
				type: 'POST',
				url: "<?php echo $this->request->webroot; ?>LTemployee/forgot_password",
				data: {email: email,password:password,confirmpassword:confirmpassword},
				beforeSend: function () {
					$(".loaderImg").show();
					$('.ltBtn').attr('disabled', true);
				},
				success: function (response) 
				{
					
					var data = jQuery.parseJSON(response);
					if ((data.status == 1) || (data.status == 4))  
					{
						location.reload(true);
						
					} 
					else 
					{
						$(".loaderImg").hide();
					    $('.ltBtn').attr('disabled', false);
						$("#passforgot").addClass('red');
						$('#error_passforgot').html(data.msg);
					}
				}
			});
			
		}	
	    return false;
	}
	setLogin();
	
	
	function getOtp()
{
	$("#error").html('');
	$("#error").removeClass('error');
	$("#error").removeClass('green');
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	firstname = $("#firstname").val();
	lastname = $("#lastname").val();
	mob  = $("#mob").val();
	ememob = '';
	mail = $("#mail").val();
	gender = 'm';
	if(firstname == '')
	{
		$("#error").html("Please enter first name");
		$("#error").addClass('error');
		$("#firstname").focus();
	}
	else if(lastname == '')
	{
		$("#error").html("Please enter last name");
		$("#error").addClass('error');
		$("#lastname").focus();
	}
	else if(mob == '')
	{
		$("#error").html("Please enter mobile");
		$("#error").addClass('error');
		$("#mob").focus();
	}
	else if (mob.length != 10)
	{
		$("#error").html("Please enter valid mobile");
		$("#error").addClass('error');
		$("#mob").focus();
	}
	else if(mail == '')
	{
		$("#error").html("Please enter emailID");
		$("#error").addClass('error');
		$("#mail").focus();
	}	
	else if (!filter.test(mail))
	{
		$("#error").html("Please enter a valid emailID");
		$("#error").addClass('error');
		$("#mail").focus();
	}
	else
	{
		var param = "firstname="+firstname+"&lastname="+lastname+"&mob="+mob+"&ememob="+ememob+"&mail="+mail+"&gender="+gender;

		$.ajax({
			url: "<?php echo $this->request->webroot . $this->request->params["controller"]; ?>/SendEmailOTPForRegistration",
			type: "POST",
			data: param,
			beforeSend: function () {
				$(".loaderImg").show();
			},
			success: function (data) {	
				$(".loaderImg").hide();
				
				data = jQuery.parseJSON(data);
				
				if(data.Key == 1)
				{
					$("#divotp").hide();
					$("#divveryotp").show();
					
					$("#error").html(data.Value);
					$("#error").addClass('green');
				}
				else if(data.Key == 3)
				{
					$("#error").html('Your company is not registered with us. Please contact your Administrator for going further or <a href="<?php echo $this->request->webroot; ?>myleszero">click here</a> for Demo.');
					$("#error").addClass('s-text2');
					$("#divotp").hide();
				}
				else
				{
					
					$("#error").html(data.Value);
					$("#error").addClass('green');
				}
			
			},
			error: function () {
				//alert("failure");
			}
		});
	}
}

function verifyOtp()
{
	$("#error").html('');
	$("#error").removeClass('red');
	$("#error").removeClass('green');
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var reg = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!abc.com)(?!xyz.com)(?!pqr.com)(?!rediffmail.com)(?!live.com)(?!outlook.com)(?!me.com)(?!msn.com)(?!ymail.com)([\w-]+\.)+[\w-]{2,4})?$/;
  
  
	firstname = $.trim($("#firstname").val());
	lastname = $.trim($("#lastname").val());
	mob  = $.trim($("#mob").val());
	ememob = '';
	mail = $.trim($("#mail").val());
	gender = 'm';
	otp = $.trim($("#otp").val());
	if(firstname == '')
	{
		$("#error").html("Please enter first name");
		$("#error").addClass('error');
		$("#firstname").focus();
	}
	else if(lastname == '')
	{
		$("#error").html("Please enter last name");
		$("#error").addClass('error');
		$("#lastname").focus();
	}
	else if(mob == '')
	{
		$("#error").html("Please enter mobile");
		$("#error").addClass('error');
		$("#mob").focus();
	}
	
	else if(mail == '')
	{
		$("#error").html("Please enter emailID");
		$("#error").addClass('error');
		$("#mail").focus();
	}	
	else if (!filter.test(mail))
	{
		$("#error").html("Please enter a valid emailID");
		$("#error").addClass('error');
		$("#mail").focus();
	}
	else if(otp == '')
	{
		$("#error").html("Please enter otp");
		$("#error").addClass('error');
		$("#otp").focus();
	}
	else
	{
		var param = "firstname="+firstname+"&lastname="+lastname+"&mob="+mob+"&ememob="+ememob+"&mail="+mail+"&gender="+gender+'&otp='+otp;

		$.ajax({
			url: "<?php echo $this->request->webroot . $this->request->params["controller"]; ?>/VerifyEmailForRegistration",
			type: "POST",
			data: param,
			beforeSend: function () {
				$(".loaderImg").show();
				$('.ltBtn').attr('disabled', true);
			},
			success: function (data) {	
				$(".loaderImg").hide();
				$('.ltBtn').attr('disabled', true);
				
				data = jQuery.parseJSON(data);
				console.log(data);
				if(data.status == 0)
				{
					
					
					$("#error").html(data.message);
					$("#error").addClass('error');
				}
				else
				{
					$("#divpergender").val('m');
					$("#admindivgender").val('m');
				
					comp = data.response;						
					$("#divperfname").val(firstname);
					$("#divperlname").val(lastname);
					$("#divperemail").val(mail);
					$("#divpermob").val(mob);
					$("#divfirst").hide();
					$("#divpersonal").show();
					$('#RegisterModel').hide();
					
				}
			
			},
			error: function () {
				//alert("failure");
			}
		});
	}
}

function personalregistration()
{
	$("#personalerror").html('');
	$("#personalerror").removeClass('error');
	$("#personalerror").removeClass('green');
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var reg = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!abc.com)(?!xyz.com)(?!pqr.com)(?!rediffmail.com)(?!live.com)(?!outlook.com)(?!me.com)(?!msn.com)(?!ymail.com)([\w-]+\.)+[\w-]{2,4})?$/;
  
	firstname = $("#divperfname").val();
	lastname = $("#divperlname").val();
	mob  = $("#divpermob").val();
	
	mail = $("#divperemail").val();
	
	divperpass = $("#divperpass").val();
	divpercpass = $("#divpercpass").val();
	divpergender = $("#divpergender").val();
	EmployeeID = '';
	ClientID = '2205';
	if(firstname == '')
	{
		$("#personalerror").html("Please enter first name");
		$("#personalerror").addClass('error');
		$("#firstname").focus();
	}
	else if(lastname == '')
	{
		$("#personalerror").html("Please enter last name");
		$("#personalerror").addClass('error');
		$("#lastname").focus();
	}
	else if(mob == '')
	{
		$("#personalerror").html("Please enter mobile");
		$("#personalerror").addClass('error');
		$("#mob").focus();
	}
	else if (mob.length != 10)
	{
		$("#personalerror").html("Please enter valid mobile");
		$("#personalerror").addClass('error');
		$("#mob").focus();
	}
	else if(mail == '')
	{
		$("#personalerror").html("Please enter emailID");
		$("#personalerror").addClass('error');
		$("#mail").focus();
	}	
	else if (!filter.test(mail))
	{
		$("#personalerror").html("Please enter a valid emailID");
		$("#personalerror").addClass('error');
		$("#mail").focus();
	}
	else if(divperpass == '')
	{
		$("#personalerror").html("Please enter password");
		$("#personalerror").addClass('error');
		$("#divperpass").focus();
	}
	else if(divpercpass == '')
	{
		$("#personalerror").html("Please reenter password");
		$("#personalerror").addClass('error');
		$("#divpercpass").focus();
	}
	else if(divperpass != divpercpass)
	{
		$("#personalerror").html("Passwords are not same");
		$("#personalerror").addClass('error');
		$("#divpercpass").focus();
	}
	else if(!$('#divperagree').is(":checked"))
	{
		$("#personalerror").html("Please accept Myles Terms & Condition.");
		$("#personalerror").addClass('error');
		
	}
	else
	{
		var popupvalue = $("#PopUpForSubscription").val();	
        		
		var param = "firstname="+firstname+"&lastname="+lastname+"&mob="+mob+"&mail="+mail+'&divperpass='+divperpass+"&divpercpass="+divpercpass+"&divpergender="+divpergender+"&popupvalue="+popupvalue;

		$.ajax({
			url: "<?php echo $this->request->webroot . $this->request->params["controller"]; ?>/RegisterUserForRegistration",
			type: "POST",
			data: param,
			beforeSend: function () {
				$(".loaderImg").show();
				$('.ltBtn').attr('disabled', true);
			},
			success: function (data) {	
				$("#loaderImg").hide();
				console.log(data);
				data = jQuery.parseJSON(data);
				
				if(data.status == 0)
				{
					$("#divpercpass").html(data.message);
					$("#personalerror").addClass('green');
				}
				else
				{
					
						location.reload();
				
				}
				$(".loaderImg").show();
				$('.ltBtn').attr('disabled', true);
			},
			error: function () {
				//alert("failure");
			}
		});
	}
}

function registrationforadmin()
{
	$("#admindiverror").html('');
	$("#admindiverror").removeClass('green');
	$("#admindiverror").removeClass('error');
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	AdminFirstName = $.trim($("#admindivfname").val());
	AdminLastName = $.trim($("#admindivlname").val());
	AdminPhone  = $.trim($("#admindivmob").val());
	
	CompanyName = '';
	
	CompanyAddress = '';
	AdminEmailId = $.trim($("#admindivemail").val());
	pass = '';
	repass = '';
	EmployeeID = '';
	ClientID = '2205';
	if(AdminFirstName == '')
	{
		$("#admindiverror").html("Please enter first name");
		$("#admindiverror").addClass('error');
		$("#admindivfname").focus();
	}
	else if(AdminLastName == '')
	{
		$("#admindiverror").html("Please enter last name");
		$("#admindiverror").addClass('error');
		$("#admindivlname").focus();
	}
	else if(AdminPhone == '')
	{
		$("#admindiverror").html("Please enter mobile");
		$("#admindiverror").addClass('error');
		$("#admindivmob").focus();
	}
	else if (AdminPhone.length != 10)
	{
		$("#admindiverror").html("Please enter valid mobile");
		$("#admindiverror").addClass('error');
		$("#admindivmob").focus();
	}
	else if(($('#admindivcomp').css('display') != 'none') && ($('#admindivcomp').val() == ''))
	{
		$("#admindiverror").html("Please enter company name");
		$("#admindiverror").addClass('error');
		$("#admindivcomp").focus();
	}	
	
	else if(($('#admindivcompadd').css('display') != 'none') && ($.trim($('#admindivcompadd').val()) == ''))
	{
		$("#admindiverror").html("Please enter company address");
		$("#admindiverror").addClass('error');
		$("#admindivcompadd").focus();
	}
	else if(($('#admindivpass').css('display') != 'none') && ($('#admindivpass').val() == ''))
	{
		$("#admindiverror").html("Please enter password");
		$("#admindiverror").addClass('error');
		$("#admindivpass").focus();
	}	
	
	else if(
	(
	($('#admindivcpass').css('display') != 'none') && ($.trim($('#admindivcpass').val()) == '')) && 
	(($('#admindivpass').css('display') != 'none') && ($('#admindivpass').val() == '')) &&  ($.trim($('#admindivcpass').val()) != $.trim($('#admindivpass').val())) )
	{
		$("#admindiverror").html("Passwords are not same");
		$("#admindiverror").addClass('error');
		$("#admindivcpass").focus();
	}
		
	
	else if(($('#admindivcpass').css('display') != 'none') && ($.trim($('#admindivcpass').val()) == ''))
	{
		$("#admindiverror").html("Please re-enter password");
		$("#admindiverror").addClass('error');
		$("#admindivcpass").focus();
	}
	else if(AdminEmailId == '')
	{
		$("#admindiverror").html("Please enter email");
		$("#admindiverror").addClass('error');
		$("#admindivemail").focus();
	}	
	else if (!filter.test(AdminEmailId))
	{
		$("#admindiverror").html("Please Enter a valid Email Address");
		$("#admindiverror").addClass('error');
		$("#admindivemail").focus();
	}
	else if(!$('#admindivagree').is(":checked"))
	{
		$("#admindiverror").html("Please accept Myles Terms & Condition.");
		$("#admindiverror").addClass('error');
		
	}
	else
	{
		if(($("#admindivcomp").length >  0) && ($('#admindivcomp').css('display') != 'none'))
		{
			CompanyName = $("#admindivcomp").val();
		}
		if(($("#admindivcompadd").length > 0) && ($('#admindivcompadd').css('display') != 'none'))
		{
			CompanyAddress = $("#admindivcompadd").val()
		}
		
		
		if(($('#admindivpass').length > 0) && ($('#admindivpass').css('display') != 'none'))
		{
			pass = $('#admindivpass').val();
	
		}
		if(($('#admindivcpass').length > 0) && ($('#admindivcpass').css('display') != 'none'))
		{
			
			repass = $('#admindivcpass').val();
		}	
		
		////////////
		if(pass != '')
		{
			var param = "firstname="+AdminFirstName+"&lastname="+AdminLastName+"&mob="+AdminPhone+"&mail="+mail+'&divperpass='+pass+"&divpercpass="+repass+"&divpergender="+admindivgender+"&EmployeeID="+EmployeeID+"&ClientID="+ClientID;

			$.ajax({
				url: "<?php echo $this->request->webroot . $this->request->params["controller"]; ?>/RegisterUserForRegistration",
				type: "POST",
				data: param,
				beforeSend: function () {
					$("#loaderImg").show();
				},
				success: function (data) {	
					$("#loaderImg").hide();
					console.log(data);
					data = jQuery.parseJSON(data);
					
					if(data.status == 0)
					{
						$("#admindiverror").html(data.message);
						$("#admindiverror").addClass('green');
					}
					else
					{
						
							location.href="<?php echo $this->request->webroot; ?>LTemployee/dashboard";
					
					}
				
				},
				error: function () {
					//alert("failure");
				}
			});
		}
		else
		{
		//////////////
		
			var param = "AdminFirstName="+AdminFirstName+"&AdminLastName="+AdminLastName+"&AdminPhone="+AdminPhone+"&CompanyName="+CompanyName+'&CompanyAddress='+CompanyAddress+"&AdminEmailId="+AdminEmailId+"&Designation=''&PreferredDate=''";

			$.ajax({
				url: "<?php echo $this->request->webroot . $this->request->params["controller"]; ?>/RegisterClient",
				type: "POST",
				data: param,
				beforeSend: function () {
					$("#loaderImg").show();
				},
				success: function (data) {	
					$("#loaderImg").hide();
					
					data = jQuery.parseJSON(data);
					
					if(data.status == 0)
					{
						$("#admindiverror").html(data.message);
						$("#admindiverror").addClass('green');
					}
					else
					{
						$("#admindiverror").html(data.message);
						$("#admindiverror").addClass('green');
					}
				
				},
				error: function () {
					//alert("failure");
				}
			});
		}
	}
}
function retailuser()
{
	$("#company").toggle();
	$("#divcountry").toggle();
	$("#divperempid").toggle();
	$("#spanperempid").toggle();
}
function retailuserforadmin()
{
	
	$("#admindivcomp").toggle();
	$("#admindivcompadd").toggle();
	
	$("#admindivpass").toggle();
	$("#admindivcpass").toggle();
	$("#adminspancpass").toggle();
	$("#adminspanpass").toggle();
}

function ltemplogin() 
	{
		
		var email = $("#username").val();
		var password = $("#pass").val();									
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
								
		if (email == "")
        {
           // alert('Please Enter Email ID.');
			$("#username").addClass('red');
			$('#erruser').html('Please Enter Email Address.');
            $('#username').focus();
            return false;
        }
        else if (!filter.test(email))
        {
			$("#username").addClass('red');
            //alert('Please Fill a Valid Email ID.');
            $('#erruser').html('Please Enter a valid Email Address');
            $('#username').focus();
            return false;
        }
		else if (password == "")
		{
			$("#pass").addClass('red');
			$('#errpass').html('Please Enter Password.');
            $('#pass').focus();
            return false;
		}
		else
		{
            $('#forlogin').submit();
		}
		return false;
	}
	
	
	function ltempforgot() 
	{
		
		var email = $("#username").val();								
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;	
		if (email == "")
        {
           // alert('Please Enter Email ID.');
			$("#username").addClass('red');
			$('#erruser').html('Please Enter Email Address.');
            $('#username').focus();
            return false;
        }
        else if (!filter.test(email))
        {
			$("#username").addClass('red');
            //alert('Please Fill a Valid Email ID.');
            $('#erruser').html('Please Enter a valid Email Address.');
            $('#username').focus();
            return false;
        }else{
			
			$.ajax({
				type: 'POST',
				url: "<?php echo $this->request->webroot; ?>LTemployee/verify",
				data: {email: email},
				beforeSend: function () {$("#loaderImg").hide();},
				success: function (response) 
				{
					$("#loaderImg").hide();
					if (response == 'verify') 
					{
						window.location.href = "<?php echo $this->request->webroot;?>LTemployee/forgot_password";
					} 
					else 
					{
						$("#username").addClass('red');
						$('#erruser').html('Please Enter a valid Email Address.');
					}
				}
			});
			
		}	
	    return false;
	}
</script>
<?php
	if($_SERVER['HTTP_HOST'] == 'mgsubscribe.mylescars.com')
	{
		$fappid='1326287630858472';
		$gmailid = '655252376301-4saghve6879rbp3ljldieai31j9r7pqj.apps.googleusercontent.com';
	}
	else
	{
		$fappid='333746457309632';
		$gmailid = '388669317615-efkp94j1vu7a4cpuqji65tljq5t631df.apps.googleusercontent.com';
	}
?>
<div id="status"></div>
<div id="gSignIn"></div>
<script src="https://apis.google.com/js/api:client.js"></script>
<script>
////////////google login //////////
var googleUser = {};
var startApp = function() {
    gapi.load('auth2', function(){
      // Retrieve the singleton for the GoogleAuth library and set up the client.
      auth2 = gapi.auth2.init({
        client_id: '<?php echo $gmailid; ?>',
        cookiepolicy: 'single_host_origin',
        // Request scopes in addition to 'profile' and 'email'
        //scope: 'additional_scope'
		'scope': 'profile email',
      });
      
    });
  };

  startApp();
// Render Google Sign-in button



function attachSignin(element) {
    
	
	elementname = element.getAttribute('id');
	
	if(elementname == 'gmailsignup')
	{
	
		var mob = $("#mob").val();
		if(mob == '')
		{
			$("#erruser").html("Please enter mobile");
			$("#erruser").addClass('error');
			$("#mob").focus();
		}
		else if (mob.length != 10)
		{
			$("#erruser").html("Please enter valid mobile");
			$("#erruser").addClass('error');
			$("#mob").focus();
		}
		else
		{
			auth2.attachClickHandler(element, {},
			function(googleUser) {

				var fbid = googleUser.getBasicProfile().getId();
				var fullname = googleUser.getBasicProfile().getName();
				var firstname = googleUser.getBasicProfile().getGivenName();
				var lastName = googleUser.getBasicProfile().getFamilyName();

				var fbemail = googleUser.getBasicProfile().getEmail();
				//alert(googleUser.getBasicProfile());
				console.log(googleUser.getBasicProfile());

				///////////////


				var fbmobile  = mob;

				var socialType = 'GP';
				var popuptype ='signup';
				$.ajax({
				type: 'POST',
				url: '<?php echo $this->request->webroot;?>LTemployee/facebook',
				data: {firstname:firstname,lastName:lastName,fbemail:fbemail,fbmobile:fbmobile,fbid:fbid,socialType:socialType,popuptype:popuptype},
				success: function (data) 
				{

					if(data=="correct")
					{
						location.reload();

					}
					else
					{	
						var detail = data.split('#####');
						$("#erruser").html(detail[0]);
						$("#erruser").addClass('error');
					}
				}
				});


			///////////////////


			}, function(error) {
			//alert(JSON.stringify(error, undefined, 2));
			});
		}
	}
	else if(elementname == 'gmailsignin')
	{
		
	
	auth2.attachClickHandler(element, {},
        function(googleUser) {
          
              var fullname = googleUser.getBasicProfile().getName();
			  var firstname = googleUser.getBasicProfile().getGivenName();
			  var lastName = googleUser.getBasicProfile().getFamilyName(); 
			  
			  var fbemail = googleUser.getBasicProfile().getEmail();
			 var fbid = googleUser.getBasicProfile().getId();
			  
			///////////////
			
			///////////////
			
		
					
			var fbmobile  = '';
			
			var socialType = 'GP';
			var popuptype ='signin';
			
			if(fbemail == '')
			{
				$("#errpass").html("We are not getting your email from gmail");
						
			}
			else
			{
				
				var TokenID = fbid; 
				var EmailID = fbemail;
				
				$.ajax({
					type: 'POST',
					url: '<?php echo $this->request->webroot;?>LTemployee/customerdetailbySocialmedia',
					data: {TokenID:TokenID,EmailID:EmailID},
					success: function (data) 
					{
						console.log(data);
						if(data == '')
						{
							$("#errpass").html("You are not registered with us using gmail");
						}
						else
						{
							var fbmobile  = data;
							
							var socialType = 'GP';
							var popuptype ='signin';
							$.ajax({
								type: 'POST',
								url: '<?php echo $this->request->webroot;?>LTemployee/facebook',
								data: {firstname:firstname,lastName:lastName,fbemail:fbemail,fbmobile:fbmobile,fbid:fbid,socialType:socialType,popuptype:popuptype},
								success: function (data) 
								{
									
									if(data=="correct")
									{
										location.reload();

									}
									else
									{	
										var detail = data.split('#####');
										$("#erruser").html(detail[0]);
										$("#erruser").addClass('error');
									}
								}
							}); 
						}
					}
				}); 
			}
			
			
			///////////////////
		
			
			
			///////////////////
		
			  
        }, function(error) {
          //alert(JSON.stringify(error, undefined, 2));
        });
	}
}
// Save user data to the database
/*function saveUserData(userData){
    $.post('userData.php', { oauth_provider:'google', userData: JSON.stringify(userData) });
}*/
/////////////// facebook



  window.fbAsyncInit = function() {
    FB.init({
      appId      : '<?php echo $fappid; ?>',
      cookie     : true,
      xfbml      : true,
      version    : 'v3.3'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
function checkRegistrationState() {
	var mob = $("#mob").val();
	if(mob == '')
	{
		$("#admindiverror").html("Please enter mobile");
		$("#admindiverror").addClass('error');
		$("#mob").focus();
	}
	else if (mob.length != 10)
	{
		$("#admindiverror").html("Please enter valid mobile");
		$("#admindiverror").addClass('error');
		$("#mob").focus();
	}
	else
	{
		FB.login(function(response)
		{
			if (response.authResponse) 
			{
				// document.getElementById('fb_access').value = response.authResponse.accessToken
				FB.api('/me?fields=email,first_name,last_name,gender,name', function(response) 
				{
					console.log(response);
					var fullname = response.name;
					var name = fullname.split(" ");
					var firstname = name[0];
					var lastName = name[1];
					//var firstname = name[0];
					//var middele   = name[1]!= "" ? name[1]:'';
					// var last = name[2]!= "" ? name[2]:'';
					// var lastName  = middele+' '+last;
					var fbemail    = response.email
					var fbmobile  = mob;
					var fbid = response.id; 
					var socialType = 'FB';
					var popuptype ='signup';
					$.ajax({
						type: 'POST',
						url: '<?php echo $this->request->webroot;?>LTemployee/facebook',
						data: {firstname:firstname,lastName:lastName,fbemail:fbemail,fbmobile:fbmobile,fbid:fbid,socialType:socialType,popuptype:popuptype},
						success: function (data) 
						{
							
							if(data=="correct")
							{
								location.reload();

							}
							else
							{	
								var detail = data.split('#####');
								$("#admindiverror").html(detail[0]);
								$("#admindiverror").addClass('error');
							}
						}
					});    
				});
			}
		},
		{scope:'email,   user_birthday, user_location, user_hometown, user_photos'});
	}

//FB.getLoginStatus(function(response) {
//statusChangeCallback(response);
//});
}


function checkLoginState() {
	
		FB.login(function(response)
		{
			if (response.authResponse) 
			{
				// document.getElementById('fb_access').value = response.authResponse.accessToken
				FB.api('/me?fields=email,first_name,last_name,gender,name', function(response) 
				{
					
					mob = '';
					var fullname = response.name;
					var name = fullname.split(" ");
					var firstname = name[0];
					var lastName = name[1];
					//var firstname = name[0];
					//var middele   = name[1]!= "" ? name[1]:'';
					// var last = name[2]!= "" ? name[2]:'';
					// var lastName  = middele+' '+last;
					var fbemail    = response.email
					if(fbemail == '')
					{
						$("#errpass").html("We are not getting your email from facebook");
								
					}
					else
					{
						
						var TokenID = response.id; 
						var EmailID = response.email;
						
						$.ajax({
							type: 'POST',
							url: '<?php echo $this->request->webroot;?>LTemployee/customerdetailbySocialmedia',
							data: {TokenID:TokenID,EmailID:EmailID},
							success: function (data) 
							{
								console.log(data);
								if(data == '')
								{
									$("#errpass").html("You are not registered with us using facebook");
								}
								else
								{
									var fbmobile  = data;
									var fbid = response.id; 
									var socialType = 'FB';
									var popuptype ='signin';
									$.ajax({
										type: 'POST',
										url: '<?php echo $this->request->webroot;?>LTemployee/facebook',
										data: {firstname:firstname,lastName:lastName,fbemail:fbemail,fbmobile:fbmobile,fbid:fbid,socialType:socialType,popuptype:popuptype},
										success: function (data) 
										{
											
											if(data=="correct")
											{
												location.reload();

											}
											else
											{	
												var detail = data.split('#####');
												$("#erruser").html(detail[0]);
												$("#erruser").addClass('error');
											}
										}
									}); 
								}
							}
						}); 
					}
					
					
					   
				});
			}
		},
		{scope:'email,   user_birthday, user_location, user_hometown, user_photos'});
	

//FB.getLoginStatus(function(response) {
//statusChangeCallback(response);
//});
}
 //function statusChangeCallback(response) {
//	console.log('statusChangeCallback');
//	console.log(response);
	// The response object is returned with a status field that lets the
	// app know the current login status of the person.
	// Full docs on the response object can be found in the documentation
	// for FB.getLoginStatus().
//	if (response.status === 'connected') {
		// Logged into your app and Facebook.
//		console.log('Welcome!  Fetching your information.... ');
//		FB.api('/me', function (response) {
//			console.log('Successful login for: ' + response.name);
//			document.getElementById('status').innerHTML =
//			  'Thanks for logging in, ' + response.name + '!';
//		});
//	} else {
		// The person is not logged into your app or we are unable to tell.
//		document.getElementById('status').innerHTML = 'Please log ' +
//		  'into this app.';
//	}
//}
</script>











