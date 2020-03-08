<style type="text/css">
  .list {
    display:block;
    margin:15px 0 0 30px;
    padding:0px;
  }
  .list li {
    line-height: 24px;
    padding-bottom: 5px;
  }
  p{
    padding: 0 5px 0px 5px;
  }
  .sip-icon {
	display:block;
	margin-bottom:20px;
  }
</style>
 <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel">Standing Instruction Authorization</h4>
    </div>
    <div class="modal-body subscribeBox sibox">
	<div class="si-t-b">

      <div class="row">
        <div class="col-sm-3 col-md-3">
          <div class="sip-box">
			<span class="sip-icon"><img src="../img/ltimg/icon-1.jpg" alt=""></span>
            <h5 class="siphdn">Monthly Car Rental</h5>
            <span class="pricebox SumCarMonthlyRental"></span>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="sip-box">
			<span class="sip-icon"><img src="../img/ltimg/icon-2.jpg" alt=""></span>
            <h5 class="siphdn">Monthly SI 
				<span class="tb">
					<img src="../img/ltimg/icon-i.jpg" alt="">
					<div class="whythis">
					  <p>We will be taking authorization
		twice the amount of month car rental to adjust for any incidental charges (cover car damage
		maintenance, excess distance travelled above monthly quota) if any.</p>
					</div><!--whythis-->
				</span>
				
			</h5>
            <span class="pricebox SumCarSIAmount"></span>
            
            
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="sip-box">
			<span class="sip-icon"><img src="../img/ltimg/icon-3.jpg" alt=""></span>
            <h5 class="siphdn">Tenure
				<span class="tb">
					<img src="../img/ltimg/icon-i.jpg" alt="">	
					<div class="whythis">
						<p>Duration for which monthly
		standing instruction authorization will be taken. This duration equals to the duration of the car
		subscription you have chosen.</p>
					</div><!--whythis-->
				</span>
			</h5>
            <span class="pricebox SumLtrSubTenure"></span>
            
            
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="sip-box">
			<span class="sip-icon"><img src="../img/ltimg/icon-4.jpg" alt=""></span>
            <h5 class="siphdn">Charge Date</h5>
			<span class="pricebox">Per month</span>
            <span class="textbox">(As per billing cycle)</span> 
          </div>
        </div>
      </div>
	  </div>
       <p><b>What is standing instruction?</b></p>
        <p>A standing instruction is an instruction a bank account holder (“the payer”) gives to bank to pay a set amount at regular intervals to another’s (“the payee’s”) account. </p>
          <p>The Standing Instruction feature facilitates periodic scheduled payments for funds transfer, third party payment, and RTGS/NEFT/Inter Bank transactions. <a href="<?php echo $this->request->webroot; ?>LTemployee/sidetail" target="_blank"> Learn more</a></p>
<!--<ul class="list">
  <li><span class="p-b-5">Standing instruction duration: <b><span class="SumLtrSubTenure"></span></b></span></li>
    <li><span class="p-b-5">Monthly car Rental: <b><span class="SumCarMonthlyRental"> </span></b></span></li>
    <li><span class="p-b-5">Monthly authorization: <b><span class="SumCarSIAmount"> </span></b></span></li>
    
    <li><span class="p-b-5">You will be notified via e-mail in advance about the exact amount that you need to pay for a particular month.</span></li>
</ul>-->
           
    </div>
    <div class="modal-footer">
		<div id="pgdiv" style="position: absolute;left: 23px;"></div>
		<button  type="button" onclick="cancelcarlocking();" class="btn btn-default ltBtn">Cancel</button>   
		<button  type="button" onclick="sipayment();" class="btn btn-default ltBtn">Authorize Standing Instruction</button>                                              
   </div>
</div>
<script type="text/javascript">
function sipayment()
{
	var totpg = $("#totpg").val();
	var pgname = '';
	if(totpg == 1)
	{
		pgname = $("#pgname").val();
	}
	else
	{
		pgname = $("input[name='pgname']:checked").val();
	}
	if(pgname == '')
	{
		
	}
	else
	{
		var cid = $('.Susercoric').val();
		var url_val = "<?php echo $this->request->webroot; ?>LTemployee/sisubscription?cid="+cid+"&pg="+pgname;
		window.location = url_val;	
		/*$.ajax({
			url: "<?php echo $this->request->webroot; ?>LTemployee/subs_pay",
			type: "POST",
			data: {cid: cid},
			beforeSend: function () {},
			success: function () {
				
				var url_val = "<?php echo $this->request->webroot; ?>LTemployee/sisubscription?cid="+cid;
				window.location = url_val;		
			},
			   
		});*/
	}
	
}
</script>