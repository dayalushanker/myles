<script type="text/javascript">

////////////////////////////////////////////////////////////////// sorting start ///////////////////////////////////////////////////

var ascending = false;

var sitascending = false;

function priceSort()
{
	
	$("#seatSortLi").parent().attr('for', '');
	$("#seatSortLi").attr("style", '');
	
	$("#priceSortLi").attr('style', 'color:#e04627');
   
	
	$(".ascending").removeClass('ascending');
	$(".descending").removeClass("descending");
	sitascending = false;
	var sorted = $('.toogle1').sort(function (a, b) {

		return (ascending == (convertToNumber($(a).attr('variantprice')) < convertToNumber($(b).attr('variantprice')))) ? 1 : -1;
	});
	ascending = ascending ? false : true;

	

	if ($("#priceSortLi").parent().attr('for') == 'sorting_asc')
	{
		$("#priceSortLi").parent().removeClass('ascending');
		$("#priceSortLi").parent().addClass('descending');
		$("#priceSortLi").parent().attr('for', 'sorting');
	} else
	{
		$("#priceSortLi").parent().removeClass('descending');
		$("#priceSortLi").parent().addClass('ascending');
		$("#priceSortLi").parent().attr('for', 'sorting_asc');
	}


   
	$('#sortingdivfornormal').html(sorted);
}
var convertToNumber = function (value) {
	return parseFloat(value);
}


function sitSorting() {
	
	$(".ascending").removeClass('ascending');
	$(".descending").removeClass("descending");
	$("#priceSortLi").parent().attr('for', '');
	$("#priceSortLi").attr('style', '');
	
	$("#seatSortLi").attr("style", 'color:#e04627');
	ascending = false;
  
   
	var sorted = $('.toogle1').sort(function (a, b)
	{
		return(sitascending == (convertToNumber($(a).attr('sits')) < convertToNumber($(b).attr('sits')))) ? 1 : -1;
	});
	sitascending = sitascending ? false : true;
	
			   
	if ($("#seatSortLi").parent().attr('for') == 'sorting_asc')
	{
	   $("#seatSortLi").parent().removeClass('ascending');
		$("#seatSortLi").parent().addClass('descending');
		$("#seatSortLi").parent().attr('for', 'sorting');
	} else
	{
		
	   $("#seatSortLi").parent().removeClass('descending');
		$("#seatSortLi").parent().addClass('ascending');
		$("#seatSortLi").parent().attr('for', 'sorting_asc');
	}
	
	$('#sortingdivfornormal').html(sorted);
  

}
////////////////////////////////////////////////////////////////// sorting end ///////////////////////////////////////////////////


function intersection_destructive(x, y) {
	x.sort();
	y.sort();
	var i = j = 0;
	ret = [];
	while (i < x.length && j < y.length) {
		if (x[i] < y[j])
			i++;
		else if (y[j] < x[i])
			j++;
		else {
			ret.push(x[i]);
			i++, j++;
		}
	}
	return ret;
}

           
            
function filtFilter()
{
	$("#carcount").html('');
	$("#carcount").hide();

	$finalArray = [];
	$(".toogle1").each(function () {
		$finalArray.push($(this).attr('id'));
	});
	/////////// sublocation /////////////////////
     

        $sublocArray = [];
        sublocCounter = 0;
        subLocCount = 0;
        $(".subLocation").each(function () {
            if ($(this).is(':checked'))
            {
                subLocCount++;
            }
        });
        
        $('.subfilt:checkbox').each(function () {
            if ($(this).is(':checked'))
            {
                sublocCounter++;
                var checkingid = $(this).val();
                $(".toogle1").each(function () {
                    var locationids = $(this).attr('locactionids');
                    locationidsArray = locationids.split(":");
                    //alert(locationidsArray);

                    if (locationidsArray.indexOf(checkingid) == -1)
                    {

                    } else
                    {
                        if ($sublocArray.length > 0)
                        {
                            var testCounter = 0;
                            for (subi = 0; subi < $sublocArray.length; subi++)
                            {
                                //console.log($(this).attr('id') +"      "+ $sublocArray[subi]);
                                if ($(this).attr('id') == $sublocArray[subi])
                                {
                                    testCounter++;
                                }
                            }
                            if (testCounter == 0)
                            {
                                $sublocArray.push($(this).attr('id'));
                            }
                        } else
                        {
							//console.log("----------abhi--------");
							//console.log($(this).attr('id'));
                            $sublocArray.push($(this).attr('id'));
                        }
                        //$(this).show();
						

                    }
                });
            }

        });
        ///////// sublocation //////////////////////////
/////////// price //////////////////////////////


	priceArray = [];
	priceCounter = 0;
	minval = parseInt($("#hdminprice").val());
	maxval = parseInt($("#hdmaxprice").val());
	unchangedMinPrice = $("#hdunchangedminprice").val();
	unchangedMaxPrice = $("#hdunchangedmaxprice").val();
   
	 
	
	   
	$(".toogle1").each(function () {
		price = $(this).attr('indicatedprice');
		// alert('minval = '+minval + ' maxval =  '+maxval+' price = '+price);
		
		indicatedpriceArray = price.split(":");
		for (priceArrayindex = 0; priceArrayindex < indicatedpriceArray.length; priceArrayindex++)
		{
			convertedprice = convertToNumber(indicatedpriceArray[priceArrayindex]);
			
			if ( convertedprice >= minval && convertedprice <= maxval)
			{
				console.log(convertedprice);
				priceCounter++;
				priceArray.push($(this).attr('id'));
			}
	  
		}

	});

   
////////////////////////////// price ///////////

////////////car category////////////////////

	carcatArray = [];
	carCatCounter = 0;
	$('.carcat:checkbox').each(function () {
		carcat = $(this).val();
		if ($(this).is(':checked'))
		{
			carCatCounter++;
		   
			$(".toogle1").each(function () {

				var carcatattr = $(this).attr('carcat');
			   
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


	$seatArray = [];
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
//                      
		}
	});


	////////////////////////////////////////////////////////

	
	////////////////carstatus filter //////////////////////////

	carstatusArray = [];
	carstatusCounter = 0;
	$('.carstatus:checkbox').each(function () {
		carstatusfromsearch = $(this).val();
		if ($(this).is(':checked'))
		{
			carstatusCounter++;
		   
			$(".toogle1").each(function () {

				var carstatusattr = $(this).attr('carstatus');
			   
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

   

	var mixxedarray = [];
	m = 0;
	if (sublocCounter > 0)
	{
		mixxedarray[m] = $sublocArray;
		m++;
	}
	
    if (priceCounter > 0)
    {
		mixxedarray[m] = priceArray;
		m++;
    }
	
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

	if (m > 0)
	{
		$finalArray = result;
	}
	else
	{
		$finalArray = [];
	}
	console.log('-------------$finalArray--------');
	
	console.log($finalArray);

	$(".toogle1").hide();
	if ($finalArray.length > 0)
	{
	   // $("#carcount").html($finalArray.length);
		for (var i = 0; i < $finalArray.length; i++) {

			$("#" + $finalArray[i]).show();
		}
		// alert($(".toogle1").style(":visible").length);
	} else
	{
		$("#carcount").html('Car Not Found');
		$("#carcount").show();
	}
	  $('.filterDropDown').slideToggle();

	 //document.getElementById("filterDropDown").toggle();
}
            ///////////////////////////// start reset function ////////////////////
            
        </script>