<!--popup-->
    <div class="mz-popup">
      <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <div class="modal-body">
            <div class="login">
            <div class="row">
              <div class="col-sm-6 col-md-6 left-img">
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="content-box">
                  <span class="pop-hdn">Please enter your contact details<br>
to get a detailed demonstration</span>

                  <div class="form-group">
                    <input type="text" id="name"  class="form-control" placeholder="Name" onkeypress="clearerror()">
                  </div>

                  <div class="form-group">
                    <input type="text" id="organization" class="form-control" placeholder="Organization" onkeypress="clearerror()">
                  </div>

               

                  <div class="form-group">
                    <input type="text" id="contactno" class="form-control" placeholder="Contact No." onkeypress="clearerror()" maxlength="10">
                  </div>
				  
				  
                  <div class="form-group">
                    <input type="text" id="email" class="form-control" placeholder="Official Email ID" onkeypress="clearerror()">
                  </div>
				  
				  <div class="form-group">
                    <div class="selectBox">
						<select id="preferredtimeslot" onclick="clearerror()" class="form-control" style="border:0;">
							<option value="">Preferred Time Slot</option>
							<option value="9:00 am to 12:00 noon">9:00 am to 12:00 noon</option>
							<option value="12:00 noon to 3:00 pm">12:00 noon to 3:00 pm</option>
							<option value="3:00 pm to 6:00 pm">3:00 pm to 6:00 pm</option>
						</select>
                    </div>
					<span class="text13">We will only contact you during business hours</span>
                  </div>

                  

                  <div class="form-group">
                    <span id="btnhidediverror" class="error-box"></span>
					           
                  </div>
                  <span class="loader-box"><?php echo $this->Html->image('loader.gif', ['alt' => 'Loader']); ?></span>
                  
                  <div class="mz-btn">
                    <a href="javascript:void(0)"  onclick="sendmyleszero();" class="btn">REQUEST A DEMO</a>
                  </div>
              </div>
              </div>
            </div>
          </div>
          
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    </div>
  </div>
  <!--mz-popup-->
  <!--video-popup-->
  <div class="mz-popup">
      <div class="modal fade" id="videobox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <div class="modal-body">
            <div class="video-box">
				<iframe width="100%" height="450" src="https://www.youtube.com/embed/xgYJkGTur6U?autoplay=1&mute=1&enablejsapi=1&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div><!--video-box-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--video-popup-->
  
  
     <script type="text/javascript">
    
          
		function sendmyleszero()
		{

		    $("#btnhidediverror").removeClass('sucess-box');
		    $("#btnhidediverror").addClass('error-box');
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			regexpch = /^[a-zA-Z-,.]+(\s{0,1}[a-zA-Z-,. ])*$/;

			var name = $("#name").val();
			var email = $("#email").val();
			var organization = $("#organization").val();
			var designation = '';
			var mobile = $("#contactno").val();
			var preferredtime = $("#preferredtimeslot").val();
			
			
		   
			if ($("#name").val().trim() == "")
			{
				$("#btnhidediverror").addClass('error-box').html("Please enter name");
				
				$("#name").focus();
				return  false;
			}
			if (!$("#name").val().match(regexpch))
			{
				$("#btnhidediverror").addClass('error-box').html("Please enter character only");
				$("#name").focus();
				return false
			}
			
			if ($("#organization").val().trim() == "")
			{
				$("#btnhidediverror").addClass('error-box').html("Please enter your organization name");
				$("#organization").focus();
				return  false;
			}
			
			if (!$("#organization").val().match(regexpch))
			{
				$("#btnhidediverror").addClass('error-box').html("Please enter character only");
				$("#organization").focus();
				return false
			}
			
			if (mobile == "")
			{
				$("#btnhidediverror").addClass('error-box').html("Please enter mobile no");
				$("#contactno").focus();
				return  false;
			}

			if (mobile.substr(0, 1) != "9" && mobile.substr(0, 1) != "8" && mobile.substr(0, 1) != "7" && mobile.substr(0, 1) != "6")
			{
				$("#btnhidediverror").addClass('error-box').html("Invalid mobile number. Please enter correct mobile number.");
				$("#contactno").focus();
				return  false;
			}
			if (mobile)
			{
				if (mobile.length != 10)
				{
					$("#btnhidediverror").addClass('error-box').html("Mobile number must be of 10 digit.");
					$("#contactno").focus();
					return  false;
				}
			}

			if ($("#email").val().trim() == "")
			{
				$("#btnhidediverror").addClass('error-box').html("Please enter email");
				$("#email").focus();
				return  false;
			}

			if (!$("#email").val().match(filter))
			{
				$("#btnhidediverror").addClass('error-box').html("Please enter valid email");
				$("#email").focus();
				return false
			}
			
			if ($("#preferredtimeslot").val().trim() == "")
			{
				$("#btnhidediverror").addClass('error-box').html("Please select preferred time");
				$("#preferredtimeslot").focus();
				return  false;
			}
		   


				var dataString = 'name=' + name + '&email=' + email + '&mobile=' + mobile + '&designation=' + designation +'&organization=' + organization+'&preferredtime=' + preferredtime;
				$.ajax({
					type: "POST",
					url: "<?php echo $this->request->webroot ?>LTemployee/ajaxmyleszerodata",
					data: dataString,
					beforeSend: function () {
						$(".loader-box").show();

					},
					success: function (response) {
						
						$(".loader-box").hide();
						$("#name").val('');
						$("#email").val('');
						$("#contactno").val('');
						$("#organization").val('');
			           
		                $("#preferredtimeslot").val('');
						$("#btnhidediverror").addClass('sucess-box').html("Thank you for your valued enquiry, will get back to you shortly");
						

					}
				});
		   


		}
		function clearerror()
		{
			 $("#btnhidediverror").html('');
		}
		function checkChar(evt)
		{
				
			evt = (evt) ? evt : window.event;
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57)) {
				return false;
			}
			return true;
		
		}
		const keys = '0123456789';
		const element = document.getElementById('contactno');
		element.addEventListener('keypress', (e) => {
			
			if(e.key == 'Backspace' || e.key == 'Delete' || e.key == 'Home' || e.key == 'End' || e.key == 'Tab')
			{
			}
			
		  else if (keys.includes(e.key) === false) {
			e.stopPropagation();
			e.preventDefault();
		  }
		}, false);
	</script>