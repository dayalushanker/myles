<div class="search-bar">
	<form method="POST" accept-charset="utf-8" id="SearchForm" action="<?php echo  $this->request->webroot;?>LTemployee/search">

		<div class="s-box">
			<label>City</label>
			<select id="cityid" name="cityid">
				<?php
					foreach ($cities as $key => $val) {
						if ($key == $cityid)
							echo '<option value="' . $key . '" selected>' . $val . '</option>';
						else
							echo '<option value="' . $key . '">' . $val . '</option>';
					}
				?>
			</select>
		</div>
		<div class="s-box">
			<label>Subscription Tenure</label>
			<select id="subs_tenure" name="subs_tenure" onchange="javascript:getSubscription();">
				<?php
					foreach ($tenures as $key => $val) {
						if ($key == $subs_tenure)
							echo '<option value="' . $key . '" selected>' . $val . '</option>';
						else
							echo '<option value="' . $key . '">' . $val . '</option>';
					}
				?>
			</select>
		</div>
		<div class="s-box">
			<label>Condition</label>
			<select id="condition" name="condition">
				<option value="all" <?php if($carType == 'all'){ echo ' selected ';} ?>>All</option>
				<option value="New" <?php if($carType == 'New'){ echo ' selected ';} ?>>New</option>
				<option value="Old" <?php if($carType == 'Old'){ echo ' selected ';} ?>>Old</option>
			
			</select>
			<input name="tenure_from" type="hidden"  value="<?php echo $datefrom; ?>" id="tenure_from" onchange="javascript:getSubscription();" readonly>

		</div>
		<div class="s-box">
			<label>Monthly usage Kms</label>
			<select id="usagekm" name="usagekm" >
				<?php foreach ($kmarr as $key => $val) {
					if ($key == $km)
						echo '<option value="' . $key . '" selected>' . $val . '</option>';
					else
						echo '<option value="' . $key . '">' . $val . '</option>';
				}?>
			</select>
		</div>

		<div class="s-box">
			<button type="submit" class="sbtn">Search</button>
		</div>
		<input type="hidden" name="tenure_to" id="tenure_to" value="<?php echo $dateto; ?>" >
						  
	</form>
</div><!--search-bar-->
<script type="text/javascript">
	$(document).ready(function() 
	{
		$("#tenure_from").datepicker({dateFormat: 'd/m/yy',minDate: 1});
	});

	function getSubscription() 
	{
			
		var subs_tenure = $("#subs_tenure option:selected").val();
		var tenure_from = $("#tenure_from").val();
	
		
		$.ajax({
			type: 'POST',
			url: "<?php echo $this->request->webroot; ?>LTemployee/getSubscription",
			data: {subs_tenure: subs_tenure, tenure_from: tenure_from},
			beforeSend: function () {},
			success: function (response) 
			{
				var data = jQuery.parseJSON(response);
				$("#tenure_from").val(data.date_from);
				$("#tenure_to").val(data.date_to);
			}
		});	
	}	
</script>