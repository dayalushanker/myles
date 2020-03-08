
<div class="modal fade noneditpopup" data-backdrop="static" data-keyboard="false" aria-hidden="false" id="ProfileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title hdn" id="myModalLabel">Document Verification Status & Validate Credit Score</h4>
      </div>
      <div class="modal-body p30">
	    <div class="loder-box2 docSub">
			<?php echo $this->Html->image('loader.gif', ['alt' => '']); ?>
			<p>Processing for Credit Score...</p>
		</div>
	   <div id="prodata">
      	<div class="noneditlist" id="useraadhaardetail">
      		<div class="row">
      			<div class="col-md-3 col-sm-3">
      				<span class="hb">Aadhaar Number</span>
        			<span class="hb2" id="useraadharno"></span>
      			</div>
      			<div class="col-md-3 col-sm-3">
      				<span class="hb">Name as per Aadhaar</span>
        			<span class="hb2" id="useraadharname"></span>
      			</div>
      			<div class="col-md-3 col-sm-3">
      				<span class="hb">Date of Birth</span>
        			<span class="hb2" id="useraadhaardob"></span>
      			</div>
      			<div class="col-md-3 col-sm-3">
      				<span class="doc-pending2">
						<?php 
							echo $this->Html->image('pending.png',['id' => 'useraadhaarimg']); 	
						?>
            <span class="aadhaar_text docutext">Not Verified</span>
					</span>
      			</div>
      		</div>
      	</div><!--noneditlist-->
		
		
		<div class="noneditlist" id="userpassportdetail" style="display:none;">
      		<div class="row">
      			<div class="col-md-3 col-sm-3">
      				<span class="hb">Passport Number</span>
        			<span class="hb2" id="userpassportNo"></span>
      			</div>
      			<div class="col-md-3 col-sm-3">
      				<span class="hb">Surname</span>
        			<span class="hb2" id="userPassportsurname"></span>
      			</div>
      			<div class="col-md-3 col-sm-3">
      				<span class="hb">First Name</span>
        			<span class="hb2" id="userPassportfirstname"></span>
      			</div>
      			<div class="col-md-3 col-sm-3">
      				
      			</div>
      		</div>
      		<div class="hg10"></div>

      		<div class="row">
      			<div class="col-md-3 col-sm-3">
      				<span class="hb">Gender</span>
        			<span class="hb2" id="userPassportGender"></span>
      			</div>
      			<div class="col-md-3 col-sm-3">
      				<span class="hb">Country Code</span>
        			<span class="hb2" id="userPassportcountryco"></span>
      			</div>
      			<div class="col-md-3 col-sm-3">
      				<span class="hb">Date of Birth</span>
        			<span class="hb2" id="userpasspory_dob"></span>
      			</div>
      			<div class="col-md-3 col-sm-3">
      				
      			</div>
      		</div>

      		<div class="hg10"></div>

      		<div class="row">
      			<div class="col-md-3 col-sm-3">
      				<span class="hb">Passport Type</span>
        			<span class="hb2" id="userPassporttype"></span>
      			</div>
      			<div class="col-md-3 col-sm-3">
      				<span class="hb">Date of Expiry</span>
        			<span class="hb2" id="userpass_exp"></span>
      			</div>
      		</div>

      		<div class="hg10"></div>

      		<div class="row">
      			<div class="col-md-12 col-sm-12">
      				<span class="hb">MRZ 1</span>
        			<span class="hb2" id="userPassportMRZ1"></span>
      			</div>
      		</div>
			
			<div class="hg10"></div>
			
			<div class="row">
      			<div class="col-md-9 col-sm-9">
      				<span class="hb">MRZ 2</span>
        			<span class="hb2" id="userPassportMRZ2"></span>
      			</div>
      			<div class="col-md-3 col-sm-3">
      				<span class="doc-pending2">
						<?php 
							echo $this->Html->image('pending.png',['id' => 'userpassportimg']); 	
						?>
            <span class="pass_text docutext">Not Verified</span>
					</span>
      			</div>
      		</div>

      	</div><!--noneditlist-->


      	<div class="noneditlist">
      		<div class="row">
      			<div class="col-md-9 col-sm-9">
      				<span class="hb">Driving Licence</span>
        			<span class="hb2" id="userdlNo"></span>
      			</div>
      			<div class="col-md-3 col-sm-3">
      				<span class="doc-pending2">
						<?php 
							echo $this->Html->image('pending.png',['id' => 'userdlimg']); 	
						?>
            <span class="dl_text docutext">Not Verified</span>
					</span>
      			</div>
      		</div>
      	</div><!--noneditlist-->


      	<div class="noneditlist">
      		<div class="row">
      			<div class="col-md-9 col-sm-9">
      				<span class="hb">Pan Card</span>
        			<span class="hb2" id="userPanNo"></span>
      			</div>
      			
      			<div class="col-md-3 col-sm-3">
      				<span class="doc-pending2">
						<?php 
							echo $this->Html->image('pending.png',['id' => 'userpanimg']); 	
						?>
            <span class="pan_text docutext">Not Verified</span>
					</span>
      			</div>
      		</div>
      	</div><!--noneditlist-->
        
          <p>I hereby consent to MYLES being appointed as your authorised representative to receive your Credit Information from Experian for the purpose of credit evaluation, marketing analytics, and pre-approval programs  pursuant to the Individual Consumer Consent (“End Use Purpose”).</p>
        
        <div class="checkterms">
            <input class="styled-checkbox" onclick="agreecheckverify()" type="checkbox" id="agreecheck" name="agreecheck" value="" checked>
            <label for="agreecheck"><span class="fnts2">I agree Terms & Conditions</span></label>
        </div>

        <div class="agreeBoxScroll">
            <p>I hereby consent to MYLES being appointed as your authorised representative to receive your Credit Information from Experian for the purpose of credit evaluation, marketing analytics, and pre-approval programs  pursuant to the Individual Consumer Consent (“End Use Purpose”). </p>

            <p><b>BY EXECUTING THIS AGREEMENT / CONSENT FORM, YOU ARE EXPRESSLY AGREEING TO ACCESS THE EXPERIAN CREDIT INFORMATION REPORT AND CREDIT SCORE, AGGREGATE SCORES, INFERENCES, REFERENCES AND DETAILS (AS DEFINED BELOW)(TOGETHER REFERRED AS “CREDIT INFORMATION”). YOU HEREBY ALSO IRREVOCABLY AND UNCONDITIONALLY CONSENT TO SUCH CREDIT INFORMATION BEING PROVIDED BY EXPERIAN TO YOU AND MYLES BY USING EXPERIAN TOOLS, ALGORITHMS AND DEVICES AND YOU HEREBY AGREE, ACKNOWLEDGE AND ACCEPT THE TERMS AND CONDITIONS SET FORTH HEREIN.</b></p>

            <p style="text-decoration: underline;">Terms and Conditions: </p>

            <p><b>Information Collection, Use, Confidentiality, No-Disclosure and Data Purging</b></p>

            <p>MYLES shall access your Credit Information as your authorized representative and MYLES shall use the Credit Information for limited End Use Purpose consisting of and in relation to the services proposed to be availed by you from MYLES. We shall not aggregate, retain, store, copy, reproduce, republish, upload, post, transmit, sell or rent the Credit Information to any other person and the same cannot be copied or reproduced other than as agreed herein and in furtherance to CICRA. </p>

            <p>The Parties agree to protect and keep confidential the Credit Information both online and offline.</p>

            <p>The Credit Information shared by you, or received on by us on your behalf shall be destroyed, purged, erased promptly within 1 (one) Business Day of upon the completion of the transaction/ End Use Purpose for which the Credit Information report was procured. </p>



            <p><b>Governing Law and Jurisdiction</b></p>

            <p>The relationship between you and MYLES shall be governed by laws of India and all claims or disputes arising there from shall be subject to the exclusive jurisdiction of the courts of Mumbai. </p>

            <p><b>Definitions:</b></p>
            <p>Capitalised terms used herein but not defined above shall have the following meanings:</p>



            <p><b>“Business Day”</b> means a day (other than a public holiday) on which banks are open for general business in Mumbai.
</p>
            <p><b>“Credit Information Report”</b> means the credit information / scores/ aggregates / variables / inferences or reports which shall be generated by Experian;</p>

            <p><b>“Credit Score”</b> means the score which shall be mentioned on the Credit Information Report which shall be computed by Experian.</p>

            <p><b>“CICRA”</b> shall mean the Credit Information Companies (Regulation) Act, 2005 read with the Credit Information Companies Rules, 2006 and the Credit Information Companies Regulations, 2006, and shall include any other rules and regulations prescribed thereunder.</p>


            <p>PLEASE READ THE ABOVEMENTIONED TERMS AND CONDITIONS AND CLICK ON “ACCEPT” FOLLOWED BY THE LINK BELOW TO COMPLETE THE AUTHORISATION PROCESS/  FOR SHARING OF YOUR CREDIT INFORMATION BY EXPERIAN WITH MYLES IN ITS CAPACITY AS YOUR AUTHORISED REPRESENTATIVE. </p>


            <p>BY CLICKING “ACCEPT” YOU AGREE AND ACCEPT THE DISCLAIMERS AND TERMS AND CONDITIONS SET OUT HEREIN.</p>


            <p>** This document is an electronic record in terms of the Information Technology Act, 2000 and Rules made there under, and the amended provisions pertaining to electronic records.</p>
        </div>

        <script type="text/javascript">
          
        </script>
      	

      	<div class="btn-box">
		  <button type="button"   class="btn" onclick="genratelink();">Verify Credit Score</button>
		  
		</div>
      

      </div>
	  
	  <div id="procreditscore" style="display:none;">
      		<div class="row">
      			<div class="col-md-12 col-sm-12">
              <div class="logoimg">
                <span class="scortext" id="procreditscorecontent"></span>
                <br/><br/>
                <span>Credit Score Powered by </span><?php echo $this->Html->image('experian-logo.png', ['alt' => '']); ?>
                <br/><br/>
                
                <button style="margin: 0 auto;" type="button" class="btn" onclick="create_subscription();">Submit Subscription Request</button>
              </div>
      			</div>
      			
      		</div>
      </div><!--procreditscore-->
	  
	  
	  
    </div>
  </div>
</div>


<script type="text/javascript">
function genratelink(){
	var cid =  $('#cid').val();
	$.ajax({
		type: 'POST',
		url: "<?php echo $this->request->webroot; ?>LTemployee/genratelink",
		data: {cid:cid},
		beforeSend: function () {
			$(".docSub").show();
			$('.btn').attr('disabled', true);
		},
		success: function (response) 
		{
			var data = jQuery.parseJSON(response);
			$("#procreditscorecontent").html(data.msg);
			$("#myModalLabel").html("Experian Credit Score");
			$("#prodata").hide();
			$("#procreditscore").show();
            $(".docSub").hide();
			$('.btn').attr('disabled', false);
            			
		}
	});
			
}

function create_subscription(){
	var cid =  $('#cid').val();
	location.href = "<?php echo $this->request->webroot; ?>subsrequestthanks?cid="+cid;
}

function agreecheckverify(){
	if($('#agreecheck').is(":checked")){
		$(".agreeBoxScroll").show();
		$(".docSub").hide();
		$('#agreecheck').val("1");
		$('.btn').attr('disabled', false);
	}else{
		$(".agreeBoxScroll").hide();
		$(".docSub").hide();
		$('#agreecheck').val("");
		$('.btn').attr('disabled', true);
	}			
	
}		
</script>