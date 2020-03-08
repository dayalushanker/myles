<?php
    if($loginval == 0){
	   echo "EXITHERE";
    }else{
        } ?>	


<div class="heading-b">
<div class="row">
  <div class="col-sm-6 col-md-6">
    <h3>Invoice History</h3>
  </div>
  <div class="col-sm-6 col-md-6">
    <div class="search-box">

        <div class="row">
            <div class="col-sm-7 col-md-7">
                 <input id="reportrange" type="text" name="" placeholder="" class="it-datepicker-dropdown calandar-icon" style="width: 80%;">
            </div>
            <div class="col-sm-5 col-md-5">
                <input type="text" name="" placeholder="Search" id="tableSearch" style="width: 100%;">
                <button id="searchbtn" type="button" class="s-btn"><img src="img/search.png" alt=""></button>
                <a href="javascript:void(0)" id="resetbtn" class="reset-btn">Reset</a>
            </div>
        </div>
      
    </div>
  </div>
</div>
</div><!--heading-b-->
<div class="table-box">    
    <div class="table-responsive" id="emptable">
        <table id="example"  class="table" style="width:100%">
        <thead>
            <tr>
				  <th>id</th>
				  <th>Invoice</th>
                <th>Subscription ID</th>
				 <th class="all" >Next Payment Date</th>
				 <th class="all">Months Remaining</th>
				 
				 <th class="all" >Invoice Date</th>
				 <th class="all" >Invoice Amount</th>
				 <th class="all" >Receipt</th>
				
            </tr>
        </thead>

    </table>
    </div>
</div>
<script>
$(document).ready(function() {

	$("#resetbtn").hide();
	table = $('#example').DataTable( {

		columnDefs: [ { type: 'date', 'targets': [0],"visible": false,
                "searchable": false } ],
	order: [[0, 'desc' ]],
         language: {
			
			zeroRecords: "Billing not available",
            paginate: {
              previous: '<i class="ion ion-ios-arrow-back"></i>',
              next: '<i class="ion ion-ios-arrow-forward"></i>'
            },
			
            processing: '<img src="../img/loader.gif">' ,
            bFilter:false
          },
		  "bPaginate": false,
		  "paging": false,
		   "bLengthChange": false,
		   "info": false,
        "ajax": {
            "url": "<?php echo $this->request->webroot . $this->request->params["controller"]; ?>/ajaxbillings",
            "data": function ( d ) {
				
                // d.custom = $('#myInput').val();
                // etc
            }
        }
    } );

    oTable = $("#example").DataTable(); 
    $("#tableSearch").keyup(function(){
        oTable.search($(this).val()).draw();
    });

   var searchbox = $('#example_filter input');
    searchbox.unbind();
    searchbox.bind('keyup', function (e) {
		
        if (e.keyCode == 13 || searchbox.val() == '') {
			if(searchbox.val() == '')
			{
				$("#resetbtn").hide();
			}
			else
			{
				$("#resetbtn").show();
			}
            table.search(this.value).draw();
		}
    });

    var uitool = '';
    searchbox.on("mousedown", function () {
        uitool = 'mouse';
    });
    searchbox.on("keydown", function () {
        uitool = 'keyboard';
    });

    //Reset the search if the "x" is pressed in the filter box
    searchbox.bind('input', function () {
        if ((this.value == "") && (table.search() != '') && (uitool == 'mouse')) {
            table.search('').draw();
            return;
        }
    });
	
	
} );


$('#searchbtn').click(function(){

	
	example_filter = $('#example_filter input').val();
	if(example_filter == '')
	{
		$('#resetbtn').hide();
	}
	else
	{
		$('#resetbtn').show();
	}
	table.search($('#example_filter input').val()).draw();
});


$('#resetbtn').click(function() {
	$('#resetbtn').hide();
	$('#example_filter input').val('');
	table.search($('#example_filter input').val()).draw();
});
$(document).ready(function() {
     init_daterangepicker()
});
function init_daterangepicker() {
    if ("undefined" != typeof $.fn.daterangepicker) {
        console.log("init_daterangepicker");
        var a = function(a, b, c) {
                console.log(a.toISOString(), b.toISOString(), c), $("#reportrange ").val(a.format("MMMM D, YYYY") + " - " + b.format("MMMM D, YYYY"))
            },
            b = {
				//startDate: "01/01/1018",
                endDate: moment('<?php echo $todatefromreq; ?>'),//moment(),
                minDate: "01/01/1018",
                maxDate: moment('<?php echo $todatefromreq; ?>'),
                
                
                dateLimit: {
                    days: 60
                },
                
                
                timePicker: !1,
                timePickerIncrement: 1,
                timePicker12Hour: !0,
                
                opens: "left",
                buttonClasses: ["btn btn-default"],
                applyClass: "btn-small btn-primary",
                cancelClass: "btn-small",
                format: "MM/DD/YYYY",
                separator: " to ",
                locale: {
                    applyLabel: "Submit",
                    cancelLabel: "Clear",
                    fromLabel: "From",
                    toLabel: "To",
                    customRangeLabel: "Custom",
                    daysOfWeek: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
                    monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                    firstDay: 1
                }
            };
        $("#reportrange").val(moment().subtract(29, "days").format("MMMM D, YYYY") + " - " + moment().format("MMMM D, YYYY")), $("#reportrange").daterangepicker(b, a), $("#reportrange").on("show.daterangepicker", function() {
            console.log("show event fired")
        }), $("#reportrange").on("hide.daterangepicker", function() {
            console.log("hide event fired")
        }), $("#reportrange").on("apply.daterangepicker", function(a, b) {
            console.log("apply event fired, start/end dates are " + b.startDate.format("MMMM D, YYYY") + " to " + b.endDate.format("MMMM D, YYYY"))
			table.destroy();
			
			
			$("#resetbtn").hide();
	table = $('#example').DataTable( {
         language: {
            paginate: {
              previous: '<i class="ion ion-ios-arrow-back"></i>',
              next: '<i class="ion ion-ios-arrow-forward"></i>',
			  "emptyTable":  "My Custom Message On Empty Table"
            },
            processing: '<img src="../img/loader.gif">' 
          },
		  "bPaginate": false,
		  "paging": false,
        "ajax": {
            "url": "<?php echo $this->request->webroot . $this->request->params["controller"]; ?>/ajaxbillings",
            "data": function ( d ) {
				d.startdate = b.startDate.format("YYYY-MM-D");
						d.enddate = b.endDate.format("YYYY-MM-D");
                // d.custom = $('#myInput').val();
                // etc
            }
        }
    } );

   var searchbox = $('#example_filter input');
    searchbox.unbind();
    searchbox.bind('keyup', function (e) {
		
       if (e.keyCode == 13 || searchbox.val() == '') {
			if(searchbox.val() == '')
			{
				$("#resetbtn").hide();
			}
			else
			{
				$("#resetbtn").show();
			}
            table.search(this.value).draw();
		}
    });

    var uitool = '';
    searchbox.on("mousedown", function () {
        uitool = 'mouse';
    });
    searchbox.on("keydown", function () {
        uitool = 'keyboard';
    });

    //Reset the search if the "x" is pressed in the filter box
    searchbox.bind('input', function () {
        if ((this.value == "") && (table.search() != '') && (uitool == 'mouse')) {
            table.search('').draw();
            return;
        }
    });
		}), $("#reportrange").on("cancel.daterangepicker", function(a, b) {
            console.log("cancel event fired")
        }), $("#options1").click(function() {
            $("#reportrange").data("daterangepicker").setOptions(b, a)
        }), $("#options2").click(function() {
            $("#reportrange").data("daterangepicker").setOptions(optionSet2, a)
        }), $("#destroy").click(function() {
            $("#reportrange").data("daterangepicker").remove()
        })
    }
}
</script>                     