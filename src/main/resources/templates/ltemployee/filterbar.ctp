<div class="col-sm-3 col-md-3">
	<div class="feature-box">


		


		<div class="feature-b-in">
			<span class="t-2">Variant</span>
			<?php
				$catcounter = 0;
				
				foreach ($resp['Fitlers']['Variant']  as $key => $val) 
				{
					
						if($catcounter == 0)
						{
							?>
								<ul class="feature-list">
							<?php
						}
			?>
			
				<li>
					<input class="styled-checkbox variant" id="variant<?php echo $val['Key']; ?>" type="checkbox" value="<?php echo $val['Key']; ?>" onclick="filtFilter()">
					<label for="variant<?php echo $val['Key']; ?>"><?php echo $val['Value']; ?></label>
				</li>
				
			<?php
						$catcounter++;
						if($catcounter == 2)
						{
							?>
								</ul>
							<?php
							$catcounter = 0;
						}
						
				}
			?>
		</div><!--feature-b-in-->


		<div class="feature-b-in">
			<span class="t-2">Fule type</span>
			<?php
				$catcounter = 0;
				
				foreach ($resp['Fitlers']['fuelname']  as $key => $val) 
				{
					
						if($catcounter == 0)
						{
							?>
								<ul class="feature-list">
							<?php
						}
			?>
						<li>
							<input class="styled-checkbox fuelClass" 
							id="fuel<?php echo $val; ?>" value="<?php echo $val; ?>" 
							type="checkbox"
							onclick="filtFilter()">
							<label for="fuel<?php echo $val; ?>"><?php echo $val; ?></label>
						</li>
						
			<?php
						$catcounter++;
						if($catcounter == 2)
						{
							?>
								</ul>
							<?php
							$catcounter = 0;
						}
						
				}
			?>
			
		</div><!--feature-b-in-->

		<div class="feature-b-in">
			<div class="al-filtr">
	            <div id="slider-range1" class="mt27"></div>
	            <div class="mt5"> </div>
	            <div class="f_l" id="minamount"></div>
	            <div class="f_r" id="maxamount"></div>
	            <input type="hidden" name="hdminprice" id="hdminprice" value="<?php echo intval($minPrice); ?>" />
	            <input type="hidden" name="hdmaxprice" id="hdmaxprice" value="<?php echo intval($maxPrice); ?>" />
	        </div>
	        <div class="al-filtr">
	            <div id="slider-range2" class="mt27"></div>
	            <div class="mt5"> </div>
	            <div class="f_l" id="minkmrun"></div>
	            <div class="f_r" id="maxkmrun"></div>
	             </div>
		</div><!--feature-b-in-->

	</div><!--feature-box-->
</div>

<input type="hidden" name="hdminprice" id="hdminprice" value="<?php echo intval($minPrice); ?>" />
<input type="hidden" name="hdmaxprice" id="hdmaxprice" value="<?php echo intval($maxPrice); ?>" />
           
<input type="hidden" name="hdunchangedminprice" id="hdunchangedminprice" value="<?php echo intval($minPrice); ?>" />
<input type="hidden" name="hdunchangedmaxprice" id="hdunchangedmaxprice" value="<?php echo intval($maxPrice); ?>" />

<input type="hidden" name="hdminkmrun" id="hdminkmrun" value="<?php echo intval($minKmRun); ?>" />
<input type="hidden" name="hdmaxkmrun" id="hdmaxkmrun" value="<?php echo intval($maxKmRun); ?>" />

<input type="hidden" name="hdunchangedminkmrun" id="hdunchangedminkmrun" value="<?php echo intval($minKmRun); ?>" />
<input type="hidden" name="hdunchangedmaxkmrun" id="hdunchangedmaxkmrun" value="<?php echo intval($maxKmRun); ?>" />



<script type="text/javascript">









var ascending = false;

var sitascending = false;

function priceSort()
{
	
	//$("#seatSortLi").parent().attr('for', '');
	//$("#seatSortLi").attr("style", '');
	
	$("#priceSortLi").attr('style', 'color:#e04627');
   
	
	//$(".ascending").removeClass('ascending');
	//$(".descending").removeClass("descending");
	//sitascending = false;
	var sorted = $('.toogle1').sort(function (a, b) {

		return (ascending == (convertToNumber($(a).attr('variantprice')) < convertToNumber($(b).attr('variantprice')))) ? 1 : -1;
	});
	ascending = ascending ? false : true;

	

	if ($("#priceSortLi").hasClass('asc-img'))
	{
		$("#priceSortLi").removeClass('asc-img');
		$("#priceSortLi").addClass('dec-img');
		
	} else 
	{
		$("#priceSortLi").removeClass('dec-img');
		$("#priceSortLi").addClass('asc-img');
		
	}


   
	$('#sortingdivfornormal').html(sorted);
}
var convertToNumber = function (value) {
	return parseFloat(value);
}
function filtFilter()
{
	$("#carcount").html('');
	$("#carcount").hide();

	$finalArray = [];
	$(".toogle1").each(function () {
		$finalArray.push($(this).attr('id'));
	});

	preserveorder = [];
	$(".toogle1").each(function () {
		preserveorder.push($(this).attr('id'));
	});
////////////car category////////////////////

	carcatArray = [];
	carCatCounter = 0;
	$('.variant:checkbox').each(function () {
		carcat = $(this).val();
		if ($(this).is(':checked'))
		{
			carCatCounter++;
		   
			$(".toogle1").each(function () {

				var carcatattr = $(this).attr('variant');
			   
				if (carcat.toLowerCase() == carcatattr.toLowerCase())
				{
					carcatArray.push($(this).attr('id'));
				  
				}

			});
		} else
		{
//                        
		}
	});


////////////car category///////////////////////////////



	////////////////seat filter //////////////////////////

	seatArray = [];
	seatCounter = 0;
	/*$seatArray = [];
	seatCounter = 0;
	$('.seaterClass:checkbox').each(function () {
		if ($(this).is(':checked'))
		{
			seatCounter++;
			var seatvalue = parseInt($(this).val());
			//console.log('check box value ='+seatvalue);
			$(".toogle1").each(function () {
				var sits = parseInt($(this).attr('sits'));
				
				if (seatvalue <= sits)
				{
					
					$seatArray.push($(this).attr('id'));
				}
			});
		} else
		{
                      
		}
	}); */


	////////////////////////////////////////////////////////

	
	////////////////carstatus filter //////////////////////////

	carstatusArray = [];
	carstatusCounter = 0;
	$('.carstatus:checkbox').each(function () {
		carstatusfromsearch = $(this).val();
		console.log(carstatusfromsearch.toLowerCase() );
		if ($(this).is(':checked'))
		{
			carstatusCounter++;
		   
			$(".toogle1").each(function () {

				var carstatusattr = $(this).attr('carstatus');
				console.log(carstatusfromsearch.toLowerCase() +" "+ carstatusattr.toLowerCase());
				if (carstatusfromsearch.toLowerCase() == carstatusattr.toLowerCase())
				{
					carstatusArray.push($(this).attr('id'));
				  
				}

			});
		} else
		{
//                        
		}
	});



	////////////////////////////////////////////////////////
////////////////fuel filter //////////////////////////

	fuelArray = [];
	fuelCounter = 0;
	$('.fuelClass:checkbox').each(function () {
		fuelfromsearch = $(this).val();
		
		if ($(this).is(':checked'))
		{
			fuelCounter++;
		   
			$(".toogle1").each(function () {

				var fuelattr = $(this).attr('fuel');
				
				if (fuelfromsearch.toLowerCase() == fuelattr.toLowerCase())
				{
					fuelArray.push($(this).attr('id'));
				  
				}

			});
		} else
		{
//                        
		}
	});



	////////////////////////////////////////////////////////
   //transmission
	transmissionArray = [];
	transmissionCounter = 0;
	$('.transmission:checkbox').each(function () {
		transmissionfromsearch = $(this).val();
		console.log("------------transmissionCounter = "+transmissionCounter);
		if ($(this).is(':checked'))
		{
			transmissionCounter++;
		   
			$(".toogle1").each(function () {

				var transmissionattr = $(this).attr('transmission');
				
				if (transmissionfromsearch.toLowerCase() == transmissionattr.toLowerCase())
				{
					transmissionArray.push($(this).attr('id'));
				  
				}

			});
		} else
		{
//                        
		}
	});
   
   //
   
   
   ////////////////////////////// price //////////////////////////////


	priceArray = [];
	priceCounter = 0;
	minval = parseInt($("#hdminprice").val());
	maxval = parseInt($("#hdmaxprice").val());
	unchangedMinPrice = $("#hdunchangedminprice").val();
	unchangedMaxPrice = $("#hdunchangedmaxprice").val();
	if (minval == unchangedMinPrice && maxval == unchangedMaxPrice)
	{

	} else
	{
		
		 $(".toogle1").each(function () {
				price = $(this).attr('variantprice');
				convertedprice = price;
					
				if ( convertedprice >= minval && convertedprice <= maxval)
				{
					console.log(convertedprice);
					priceCounter++;
					priceArray.push($(this).attr('id'));
				}
			  
		

			});
	   
	}

                ////////////////////////////// price ////////////////////////////////
				
				
	kmrunArray = [];
	kmrunCounter = 0;
	minkmrun = parseInt($("#hdminkmrun").val());
	maxkmrun = parseInt($("#hdmaxkmrun").val());
	unchangedMinkmrun = $("#hdunchangedminkmrun").val();
	unchangedMaxkmrun = $("#hdunchangedmaxkmrun").val();
	if (minkmrun == unchangedMinkmrun && maxkmrun == unchangedMaxkmrun)
	{

	} else
	{
		
		 $(".toogle1").each(function () {
				kmrun = $(this).attr('kmrun');
				convertedkmrun = convertToNumber(kmrun);
					
				if ( convertedkmrun >= minkmrun && convertedkmrun <= maxkmrun)
				{
					console.log(convertedkmrun);
					kmrunCounter++;
					kmrunArray.push($(this).attr('id'));
					console.log("------kmrunArray----");
					console.log(kmrunArray);
				}
			  
		

			});
	   
	}			
				
	var mixxedarray = [];
	m = 0;

	
	if (carCatCounter > 0)
	{
		mixxedarray[m] = carcatArray;
		m++;
	}
	
	if (seatCounter > 0)
	{
		mixxedarray[m] = $seatArray;
		m++;
	}
	
	
	
	if (carstatusCounter > 0)
	{
		mixxedarray[m] = carstatusArray;
		m++;
	}
	
	if (fuelCounter > 0)
	{
		mixxedarray[m] = fuelArray;
		m++;
	}
	if (transmissionCounter > 0)
	{
		mixxedarray[m] = transmissionArray;
		m++;
	}
	if (priceCounter > 0)
	{
		mixxedarray[m] = priceArray;
		m++;
	}
	if (kmrunCounter > 0)
	{
		mixxedarray[m] = kmrunArray;
		m++;
	}
    if (m > 0)
	{
		var result = mixxedarray.shift().filter(function (v) {
			// console.log('v = '+v);
			res = mixxedarray.every(function (a) {

				re = a.indexOf(v) !== -1;
				//  console.log('re = '+re);
				return  re;
			});
			return res;
		});
	}
	console.log('result = '+result);
	
	if (m > 0)
	{
		$finalArray = result;
	}
	else
	{
		$finalArray = [];
	}
	//console.log('-------------$finalArray--------');
	
	//console.log($finalArray);

	$(".toogle1").hide();
	if ($finalArray.length > 0)
	{
	   console.log('final array length = '+$finalArray.length);
		for (var i = 0; i < $finalArray.length; i++) {

			$("#" + $finalArray[i]).show();
		}
		// alert($(".toogle1").style(":visible").length);
	} else
	{
		if(m == 0)
		{
			for (var j = 0; j < preserveorder.length; j++) {

			$("#" + preserveorder[j]).show();
			}
			
		}
		else
		{
			$("#carcount").html('Car Not Found');
			$("#carcount").show();
		}
	}
	  //$('.filterDropDown').slideToggle();

	 //document.getElementById("filterDropDown").toggle();
}

$( function() {
               

	$("#slider-range1").slider({
		range: true,
		min: <?php echo intval($minPrice); ?>,
		max: <?php echo intval($maxPrice); ?>,
		values: [<?php echo intval($minPrice); ?>, <?php echo intval($maxPrice); ?>],
		slide: function (event, ui) {
			minval = parseInt(convertToNumber(ui.values[ 0 ]));
			maxval = parseInt(convertToNumber(ui.values[ 1 ]));
			$("#minamount").html("<span class='rupess'>&#x20B9;</span><span id='minamtspn'>" + parseInt(ui.values[ 0 ]) + "</span>");
			$("#maxamount").html("<span class='rupess'>&#x20B9;</span><span id='maxamtspn'>" + parseInt(ui.values[ 1 ]) + "</span>");
			$("#hdminprice").val(parseInt(ui.values[ 0 ]));
			$("#hdmaxprice").val(parseInt(ui.values[ 1 ]));

			filtFilter();


		
			
		}
	});
	$("#minamount").html("<span class='rupess'>&#x20B9;</span><span id='minamtspn'>" + $("#slider-range1").slider("values", 0) + "</span>");
	$("#maxamount").html("<span class='rupess'>&#x20B9;</span><span id='maxamtspn'>" + $("#slider-range1").slider("values", 1) + "</span>");

	
	$("#slider-range2").slider({
		range: true,
		min: <?php echo intval($minKmRun); ?>,
		max: <?php echo intval($maxKmRun); ?>,
		values: [<?php echo intval($minKmRun); ?>, <?php echo intval($maxKmRun); ?>],
		slide: function (event, ui) {
			minval = parseInt(convertToNumber(ui.values[ 0 ]));
			maxval = parseInt(convertToNumber(ui.values[ 1 ]));
			$("#minkmrun").html("<span id='minamtspn'>" + parseInt(ui.values[ 0 ]) + " Km</span>");
			$("#maxkmrun").html("<span id='maxamtspn'>" + parseInt(ui.values[ 1 ]) + " Kms</span>");
			$("#hdminkmrun").val(parseInt(ui.values[ 0 ]));
			$("#hdmaxkmrun").val(parseInt(ui.values[ 1 ]));

			filtFilter();


		
			
		}
	});
	$("#minkmrun").html("<span id='minkmrunspn'>" + $("#slider-range2").slider("values", 0) + " Km</span>");
	$("#maxkmrun").html("<span id='maxkmrunspn'>" + $("#slider-range2").slider("values", 1) + " Kms</span>");
	
});


/*-------Range Slider---------*/
/*$( function() {
    $( "#slider-range1" ).slider({
      range: true,
      min: 0,
      max: 100,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range1" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range1" ).slider( "values", 1 ) );
  } );

$( function() {
    $( "#slider-range2" ).slider({
      range: true,
      min: 0,
      max: 100,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range2" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range2" ).slider( "values", 1 ) );
  } );*/








/*-----Range Slider-----*/
</script>
