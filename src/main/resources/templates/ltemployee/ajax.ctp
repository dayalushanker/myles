<script type="text/javascript">
	    function docchange(){
			var flag = $("#editflag").val();
			if($('#AadhaarCard').is(":checked")){
				$("#aadharbox").show();
				$("#passportbox").hide();
				$("#doctype").val('aadhaar');
				$(".doctypemsg").html("Aadhaar");
				if(flag != ""){
				   editaadhaar();
				}
			}else if($('#Passport').is(":checked")){
				$("#doctype").val('passport');
				$("#aadharbox").hide();
                $("#passportbox").show();
				$(".doctypemsg").html("Passport");
				if(flag != ""){
				   editpassword();
				}
			}
		}

		$(document).ready(function()
		{
		    var todayDate = new Date().getDate();

			$("#passport_dob").datepicker({dateFormat: 'dd/mm/yy',maxDate: new Date(new Date().setDate(todayDate - 7665))});
			$("#aadhaar_dob").datepicker({dateFormat: 'dd/mm/yy',maxDate: new Date(new Date().setDate(todayDate - 7665))});
			$("#passport_exp_date").datepicker({dateFormat: 'dd/mm/yy',minDate:30});
			<?php if($this->request->params['action'] != 'profile'){ ?>
			    $("#address_date").datepicker({dateFormat: 'dd/mm/yy',minDate:1});
			<?php } ?>
			$("#UploadForm").on('submit', (function (e) {
				e.preventDefault();

				var doctype = $("#doctype").val();

				var DlNumber =  $("#dl_number").val();
				var DlFile =  $("#dl_file").val();

				var AadhaarNumber = $("#aadhaar_number").val();
				var NameOnAadhaar = $("#name_on_aadhaar").val();
				var AadhaarDob = $("#aadhaar_dob").val();
				var AadhaarFile = $("#aadhaar_file").val();
				var AadhaarFileName = $("#AadhaarFileName").val();

				var PassportNumber = $("#passport_number").val();
				var SurName = $("#surname").val();
				var FName = $("#fname").val();
				var CountryCode = $("#country_code").val();
				var PassportDob = $("#passport_dob").val();
				var PassportType = $("#passport_type").val();
				var PassportExpDate = $("#passport_exp_date").val();
				var PassportFile = $("#passport_file").val();
				var PassportFileName = $("#PassportFileName").val();
				var MRZ1 = $("#mrz1").val();
				var MRZ2 = $("#mrz2").val();

				var PanNumber = $("#pan_number").val();
				var PanFile = $("#pan_file").val();

				var Address = $("#address").val();
				var AddressDate = $("#address_date").val();


				alert("sssssss");

				var extarr = ["jpg","pdf","JPG","PDF"];


				if(doctype == 'aadhaar')
				{
					var extaadhaararr = ["pdf","PDF"];
					var adharcardTwelveDigit = /^\d{12}$/;

					if(AadhaarNumber == "")
					{
						$("#MsgDocAadhaar").html('Please Enter Valid Aadhaar Number.');
						$("#adhaar_number").focus();
						return false;
					}
					if(!adharcardTwelveDigit.test(AadhaarNumber))
					{
						$("#MsgDocAadhaar").html('Please Enter Valid Aadhaar Number.');
						$("#adhaar_number").focus();
						return false;
					}
					if(AadhaarNumber != ""){

						if(NameOnAadhaar == "")
						{
							$("#MsgDocAadhaar").html('Please Enter name as on Aadhaar Card.');
							$("#name_on_aadhaar").focus();
							return false;
						}

						if(AadhaarDob == "")
						{
							$("#MsgDocAadhaar").html('Please Enter Valid Date of Birth.');
							$("#aadhaar_dob").focus();
							return false;
						}

						if((AadhaarFile == "") && (AadhaarFileName == "")){


							$("#MsgDocAadhaar").html('Please Choose Aadhaar File.');
							$("#aadhaar_file").focus();
							return false;
						}
						if(AadhaarFile != ""){
							var extension = AadhaarFile.split(".");
							if(!extaadhaararr.includes(extension[extension.length - 1])){
								$("#MsgDocAadhaar").html('Please Choose valid Extension("PDF") for Aadhaar Card.');
								$("#aadhaar_file").focus();
								return false;
							}
						}
					}
				}
				else if(doctype == 'passport')
				{
					passregex = /^[a-zA-Z]{1}[0-9]{7}$/;
					if(PassportNumber == ""){
						$("#MsgDocPassport").html('Please Enter Valid Passport Number.');
						$("#passport_number").focus();
						return false;
					}
					if(!passregex.test(PassportNumber))
					{
						$("#MsgDocPassport").html('Please Enter Valid Passport Number.');
						$("#passport_number").focus();
						return false;
					}
					if(FName == '')
					{
						$("#MsgDocPassport").html('Please Enter FirstName for Passport.');
						$("#fname").focus();
						return false;
					}

					if(PassportType == '')
					{
						$("#MsgDocPassport").html('Please Enter Passport Type.');
						$("#passport_type").focus();
						return false;
					}

					if(CountryCode == '')
					{
						$("#MsgDocPassport").html('Please Enter Country Code for Passport.');
						$("#country_code").focus();
						return false;
					}

					if(PassportDob == '')
					{
						$("#MsgDocPassport").html('Please Enter Dob for Passport.');
						$("#passport_dob").focus();
						return false;
					}

					if(PassportExpDate == '')
					{
						$("#MsgDocPassport").html('Please Enter Valid Passport Expiry Date.');
						$("#passport_exp_date").focus();
						return false;
					}

					if(MRZ1 == '')
					{
						$("#MsgDocPassport").html('Please Enter MRZ1 value as on Passport');
						$("#mrz1").focus();
						return false;
					}

					if(MRZ1.length < 44)
					{
						$("#MsgDocPassport").html('Please Enter valid MRZ1 value as on Passport');
						$("#mrz1").focus();
						return false;
					}

					if(MRZ2 == '')
					{
						$("#MsgDocPassport").html('Please Enter MRZ2 value as on Passport');
						$("#mrz2").focus();
						return false;
					}

					if(MRZ2.length < 44)
					{
						$("#MsgDocPassport").html('Please Enter valid MRZ2 value as on Passport');
						$("#mrz2").focus();
						return false;
					}

					if((PassportFile == "") && (PassportFileName =="")){
						$("#MsgDocPassport").html('Please Choose Passport File.');
						$("#passport_file").focus();
						return false;
					}
					if(PassportFile != ""){
						var extension = PassportFile.split(".");
						if(!extarr.includes(extension[extension.length - 1])){
							$("#MsgDocPassport").html('Please Choose valid Extension("JPG", "PDF") for Passport.');
							$("#passport_file").focus();
							return false;
						}
					}
				}




				if(DlNumber == ""){
					$("#MsgDocDl").html('Please Enter DL Number.');
					$("#dl_number").focus();
					return false;
				}
				if(DlNumber != ""){
					var DLFileName = $("#DLFileName").val();
					if (DlNumber.length < 8) {
						$("#MsgDocDl").html('Enter Valid DL.');
						$("#dl_number").focus();
						return false;
					}
					if((DlFile == "") && (DLFileName == "")){
						$("#MsgDocDl").html('Please Choose DL File.');
						$("#dl_file").focus();
						return false;
					}
					if(DlFile != ""){
						var extension = DlFile.split(".");
						if(!extarr.includes(extension[extension.length - 1])){
							$("#MsgDocDl").html('Please Choose valid Extension("JPG", "PDF") for DL.');
							$("#dl_file").focus();
							return false;
						}
				   }
				}


				var PanNumber = $("#pan_number").val();
				var PanFile = $("#pan_file").val();


				if(PanNumber == ""){
					$("#MsgDocPan").html('Please Enter PanCard Number.');
					$("#pan_number").focus();
					return false;
				}

				if(PanNumber != ""){
					var PanFileName = $("#PanFileName").val();
					var regex = /[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
					PanNumber = PanNumber.toUpperCase();
					if (PanNumber.length < 10 || PanNumber.length > 10) {
						$("#MsgDocPan").html('PanCard Number can\'t be less than 10 .');
						$("#pan_number").focus();
						return false;
					}
					if(!regex.test(PanNumber))
					{
						$("#MsgDocPan").html('Enter Valid PanCard Number.');
						$("#pan_number").focus();
						return false;
					}
					if((PanFile == "") &&(PanFileName == "")){
						$("#MsgDocPan").html('Please Choose PanCard File.');
						$("#pan_file").focus();
						return false;
					}
					if(PanFile != ""){
						var extension = PanFile.split(".");
						if(!extarr.includes(extension[extension.length - 1])){
							$("#MsgDocPan").html('Please Choose valid Extension("JPG", "PDF") for PanCard.');
							$("#pan_file").focus();
							return false;
						}
					}
				}

				var addressregex = /[a-zA-Z0-9\s,'-]*$/;
                var zipRegex = /^\d{6}$/;
				var ParAddress1 = $("#par_address1").val();
				var ParState = $("#par_state").val();
				var ParCity = $("#par_city").val();
				var ParPinCode = $("#par_pin_code").val();

				if (ParAddress1 =="") {
					$("#MsgDocAddress").html('Permanent address cannot be empty.');
					$("#par_address1").focus();
					return false;
				}

				if(!addressregex.test(ParAddress1))
				{
					$("#MsgDocAddress").html('Please enter valid Permanent address.');
					$("#par_address1").focus();
					return false;
				}

				if (ParState =="") {
					$("#MsgDocAddress").html('Choose Permanent address state.');
					$("#par_state").focus();
					return false;
				}

				if (ParCity =="") {
					$("#MsgDocAddress").html('Please enter Permanent address city.');
					$("#par_city").focus();
					return false;
				}

				if (ParPinCode =="") {
					$("#MsgDocAddress").html('Please enter Permanent address Pin Code.');
					$("#par_pin_code").focus();
					return false;
				}

				if(!zipRegex.test(ParPinCode))
				{
					$("#MsgDocAddress").html('Please enter valid Permanent address Pin Code.');
					$("#par_pin_code").focus();
					return false;
				}
				if($("#sameaddress").val() == "") {
					var DelAddress1 = $("#del_address1").val();
					var DelState = $("#del_state").val();
					var DelCity = $("#del_city").val();
					var DelPinCode = $("#del_pin_code").val();

					if (DelAddress1 =="") {
						$("#MsgDocAddress").html('Delivery address cannot be empty.');
						$("#del_address1").focus();
						return false;
					}

					if(!addressregex.test(DelAddress1))
					{
						$("#MsgDocAddress").html('Please Enter your valid Delivery address.');
						$("#del_address1").focus();
						return false;
					}

					if (DelState =="") {
						$("#MsgDocAddress").html('Choose Delivery address state.');
						$("#del_state").focus();
						return false;
					}

					if (DelCity =="") {
						$("#MsgDocAddress").html('Please enter Delivery address city.');
						$("#del_city").focus();
						return false;
					}

					if (DelPinCode =="") {
						$("#MsgDocAddress").html('Please enter Delivery address Pin Code.');
						$("#del_pin_code").focus();
						return false;
					}

					if(!zipRegex.test(DelPinCode))
					{
						$("#MsgDocAddress").html('Please enter valid Delivery address Pin Code.');
						$("#del_pin_code").focus();
						return false;
					}

				}else{
					$("#del_address1").val($("#par_address1").val());
					$("#del_address2").val($("#par_address2").val());
					$("#del_state").val($("#par_state").val());
					$("#del_city").val($("#par_city").val());
					$("#del_pin_code").val($("#par_pin_code").val());
				}

					$.ajax({
						type: 'POST',
						url: "<?php echo $this->request->webroot; ?>LTemployee/upload_document",
						data: new FormData(this),
						contentType: false,
						cache: false,
						processData: false,
						beforeSend: function () {
							$(".docSub").show();
							$('.btn').attr('disabled', true);
						},
						success: function (response)
						{
							console.log(response);
							var data = jQuery.parseJSON(response);
							if(data.loginval == 0){
								location.reload(true);
							}else{
                                if(data.action == "profile"){
									$(".docSub").hide();
									$('.btn').attr('disabled', false);
									if(data.status == 1){
										$.growl.notice({message: data.msg});
									}else{
										$.growl.error({message: data.msg});
									}
									location.reload(true);
								}else{
									if(data.status == 1){
										create_subs_request();
									}else{
										$.growl.error({message: data.msg});
										$(".docSub").hide();
									    $('.btn').attr('disabled', false);
									}

								}
							}

						}
					});
			}));

		});

		function clearerror(){
			$(".error").html('');
		}

        function editpassword(){
			$("#editflag").val("e");
			$("#choosepassportfile").show();
			$("#passport_link").hide();
		}
        function editaadhaar(){
			$("#editflag").val("e");
			$("#chooseaadharfile").show();
			$("#aadhaar_link").hide();
		}

        function editdl(){
            $("#choosedlfile").show();
            $("#dl_link").hide();
        }

		function editpan(){
            $("#choosepanfile").show();
            $("#pan_link").hide();

        }

		docchange();

		function proinfodata(){
			$.ajax({
				type: 'POST',
				url: "<?php echo $this->request->webroot; ?>LTemployee/profile_info_data",
				data: {},
				beforeSend: function () {

				},
				success: function (response)
				{

				    var data = jQuery.parseJSON(response);
					if(data.doctype == "aadhaar"){
					   $("#useraadhaardetail").show();
					   $("#userpassportdetail").hide();
					}else{
					   $("#useraadhaardetail").hide();
					   $("#userpassportdetail").show();
					}

					$("#useraadharno").	html(data.aadharno);
					$("#useraadharname").html(data.aadharname);
					$("#useraadhaardob").html(data.aadhardob);

					if(parseInt(data.aadharverify) == 1){
						$("#useraadhaarimg").attr("src","<?php echo $this->request->webroot; ?>img/approve.png");
						$(".aadhaar_text").html("verified");
					}


					$("#userpassportNo").html(data.passportNo);
					$("#userPassportsurname").html(data.Passportsurname);
					$("#userPassportfirstname").html(data.Passportfirstname);

					$("#userPassportGender").html(data.PassportGender);
					$("#userPassportcountryco").html(data.Passportcountryco);
					$("#userpasspory_dob").html(data.PassportDOb);

					$("#userPassporttype").html(data.Passporttype);
					$("#userpass_exp").html(data.passportexpirydate);
					$("#userPassportMRZ1").html(data.PassportMRZ1);
					$("#userPassportMRZ2").html(data.PassportMRZ2);

					if(parseInt(data.Passportverify) == 1){
						$("#userpassportimg").attr("src","<?php echo $this->request->webroot; ?>img/approve.png");
						$(".pass_text").html("verified");
					}

					$("#userdlNo").html(data.dlNo);

					if(parseInt(data.dlverify) == 1){
						$("#userdlimg").attr("src","<?php echo $this->request->webroot; ?>img/approve.png");
						$(".dl_text").html("verified");
					}

					$("#userPanNo").html(data.PanNo);

					if(parseInt(data.Panverify) == 1){
						$("#userpanimg").attr("src","<?php echo $this->request->webroot; ?>img/approve.png");
						$(".pan_text").html("verified");
					}

					$('.btn').attr('disabled', false);
					$('#proinfodata').show();
					$('#ProfileModal').modal({
							backdrop: 'static',
							keyboard: false
					});
				    $('#ProfileModal').modal('show');
					$(".agreeBoxScroll").show();
					$(".docSub").hide();

				}
			});

		}



		function create_subs_request(){

			var SAmount = $("#SAmount").val();
			var cid = $("#cid").val();
			var SPickDate = $("#SPickDate").val();
			var SDropDate = $("#SDropDate").val();
			var formsubs_tenure = $("#formsubs_tenure").val();
			var SPkgID = $("#SPkgID").val();
			var SCarModelFullName = $("#SCarModelFullName").val();
			var SModelId = $("#SModelId").val();
			var SCityID = $("#SCityID").val();
			var SVariantID = $("#SVariantID").val();
			var CarVariantName = $("#CarVariantName").val();
			var formcolor = $("#formcolor").val();
			var carId = $("#carId").val();
			var colorDepositAmt = $("#colorDepositAmt").val();
			var address_date = $("#address_date").val();
			var address = $("#address").val();
			var doctype =$("#doctype").val();
			var taxAmount = $("#CarTaxAmount").val();

			$.ajax({
				type: 'POST',
				url: "<?php echo $this->request->webroot; ?>LTemployee/create_employee_subscription",
				data: {SAmount:SAmount,cid:cid,SPickDate:SPickDate,SDropDate:SDropDate,formsubs_tenure:formsubs_tenure,SPkgID:SPkgID,SCarModelFullName:SCarModelFullName,SModelId:SModelId,SCityID:SCityID,SVariantID:SVariantID,CarVariantName:CarVariantName,formcolor:formcolor,carId:carId,colorDepositAmt:colorDepositAmt,address:address,address_date:address_date,doctype:doctype,taxAmount:taxAmount},
				beforeSend: function () {
					//$(".docSub").show();
					//$('.btn').attr('disabled', true);
				},
				success: function (response)
				{
					//console.log(response);
					var data = jQuery.parseJSON(response);
					if(data.loginval == 0){
						location.reload(true);
					}else if((data.loginval == 1) && (data.status == 'DNV')){
					    $(".docSub").hide();
						$('.btn').attr('disabled', false);
					    $('#subMsg').html(data.msg);
				    }else if((data.loginval == 1) &&  ((data.status == 'NL') || (data.status == 'NS'))){
						$(".docSub").hide();
						$('.btn').attr('disabled', false);
						location.href = "<?php echo $this->request->webroot; ?>unavailability";
					}else{
						$('#cid').val(data.user.LtrSubCoric);
						//$('#proinfodata').show();
						//$('#ProfileModal').modal('show');
						proinfodata();

					}

				}
			});
		}
 </script>
<?php if(($employeedetail["doctype"] == "")||($employeedetail["doctype"] == "aadhaar") && ($employeedetail["aadharfile"] =="")){ ?>
<script type="text/javascript">
   editaadhaar();
 </script>
<?php } ?>
<?php if(($employeedetail["doctype"] == "passport") && ($employeedetail["Passportfile"] =="")){ ?>
<script type="text/javascript">
   editpassword();
 </script>
<?php } ?>
<?php if($employeedetail["panfile"] ==""){ ?>
<script type="text/javascript">
	editpan();
 </script>
<?php } ?>
<?php if($employeedetail["dlfile"] ==""){ ?>
<script type="text/javascript">
	editdl();
 </script>
<?php } ?>
