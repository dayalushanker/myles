!function(a,b){"object"==typeof exports?module.exports=b(require("jquery")):"function"==typeof define&&define.amd?define(["jquery"],b):b(a.jQuery)}(this,function(a){var b=function(a,b){var c,d=document.createElement("canvas");a.appendChild(d),"undefined"!=typeof G_vmlCanvasManager&&G_vmlCanvasManager.initElement(d);var e=d.getContext("2d");d.width=d.height=b.size;var f=1;window.devicePixelRatio>1&&(f=window.devicePixelRatio,d.style.width=d.style.height=[b.size,"px"].join(""),d.width=d.height=b.size*f,e.scale(f,f)),e.translate(b.size/2,b.size/2),e.rotate((-0.5+b.rotate/180)*Math.PI);var g=(b.size-b.lineWidth)/2;b.scaleColor&&b.scaleLength&&(g-=b.scaleLength+2),Date.now=Date.now||function(){return+new Date};var h=function(a,b,c){c=Math.min(Math.max(-1,c||0),1);var d=0>=c?!0:!1;e.beginPath(),e.arc(0,0,g,0,2*Math.PI*c,d),e.strokeStyle=a,e.lineWidth=b,e.stroke()},i=function(){var a,c;e.lineWidth=1,e.fillStyle=b.scaleColor,e.save();for(var d=24;d>0;--d)d%6===0?(c=b.scaleLength,a=0):(c=.6*b.scaleLength,a=b.scaleLength-c),e.fillRect(-b.size/2+a,0,c,1),e.rotate(Math.PI/12);e.restore()},j=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(a){window.setTimeout(a,1e3/60)}}(),k=function(){b.scaleColor&&i(),b.trackColor&&h(b.trackColor,b.trackWidth||b.lineWidth,1)};this.getCanvas=function(){return d},this.getCtx=function(){return e},this.clear=function(){e.clearRect(b.size/-2,b.size/-2,b.size,b.size)},this.draw=function(a){b.scaleColor||b.trackColor?e.getImageData&&e.putImageData?c?e.putImageData(c,0,0):(k(),c=e.getImageData(0,0,b.size*f,b.size*f)):(this.clear(),k()):this.clear(),e.lineCap=b.lineCap;var d;d="function"==typeof b.barColor?b.barColor(a):b.barColor,h(d,b.lineWidth,a/100)}.bind(this),this.animate=function(a,c){var d=Date.now();b.onStart(a,c);var e=function(){var f=Math.min(Date.now()-d,b.animate.duration),g=b.easing(this,f,a,c-a,b.animate.duration);this.draw(g),b.onStep(a,c,g),f>=b.animate.duration?b.onStop(a,c):j(e)}.bind(this);j(e)}.bind(this)},c=function(a,c){var d={barColor:"#ef1e25",trackColor:"#f9f9f9",scaleColor:"#dfe0e0",scaleLength:5,lineCap:"round",lineWidth:3,trackWidth:void 0,size:110,rotate:0,animate:{duration:1e3,enabled:!0},easing:function(a,b,c,d,e){return b/=e/2,1>b?d/2*b*b+c:-d/2*(--b*(b-2)-1)+c},onStart:function(){},onStep:function(){},onStop:function(){}};if("undefined"!=typeof b)d.renderer=b;else{if("undefined"==typeof SVGRenderer)throw new Error("Please load either the SVG- or the CanvasRenderer");d.renderer=SVGRenderer}var e={},f=0,g=function(){this.el=a,this.options=e;for(var b in d)d.hasOwnProperty(b)&&(e[b]=c&&"undefined"!=typeof c[b]?c[b]:d[b],"function"==typeof e[b]&&(e[b]=e[b].bind(this)));e.easing="string"==typeof e.easing&&"undefined"!=typeof jQuery&&jQuery.isFunction(jQuery.easing[e.easing])?jQuery.easing[e.easing]:d.easing,"number"==typeof e.animate&&(e.animate={duration:e.animate,enabled:!0}),"boolean"!=typeof e.animate||e.animate||(e.animate={duration:1e3,enabled:e.animate}),this.renderer=new e.renderer(a,e),this.renderer.draw(f),a.dataset&&a.dataset.percent?this.update(parseFloat(a.dataset.percent)):a.getAttribute&&a.getAttribute("data-percent")&&this.update(parseFloat(a.getAttribute("data-percent")))}.bind(this);this.update=function(a){return a=parseFloat(a),e.animate.enabled?this.renderer.animate(f,a):this.renderer.draw(a),f=a,this}.bind(this),this.disableAnimation=function(){return e.animate.enabled=!1,this},this.enableAnimation=function(){return e.animate.enabled=!0,this},g()};a.fn.easyPieChart=function(b){return this.each(function(){var d;a.data(this,"easyPieChart")||(d=a.extend({},b,a(this).data()),a.data(this,"easyPieChart",new c(this,d)))})}});




function init_charts(){
			
	console.log('run_charts  typeof [' + typeof (Chart) + ']');
	
		if( typeof (Chart) === 'undefined'){ return; }
		
		console.log('init_charts');
	
		
		Chart.defaults.global.legend = {
			enabled: false
		};
		
		
	  // Bar chart
	  
	if ($('#mybarChart').length ){ 
	  
	  var ctx = document.getElementById("mybarChart");
	  var mybarChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [ "July", "August", "September", "October", "November", "December"],
		  datasets: [{
			label: '',
			backgroundColor: "#cf2230",
			data: [450,600,250,930,800,710]
		  }]
		},

		options: {
		  scales: {
			yAxes: [{
			  ticks: {
				beginAtZero: true
			  }
			}]
		  }
		}
	  });
	  
	} 
			 
}




function init_daterangepicker() {
    if ("undefined" != typeof $.fn.daterangepicker) {
        console.log("init_daterangepicker");
        var a = function(a, b, c) {
                console.log(a.toISOString(), b.toISOString(), c), $("#reportrange span").html(a.format("MMMM D, YYYY") + " - " + b.format("MMMM D, YYYY"))
            },
            b = {
                startDate: moment().subtract(29, "days"),
                endDate: moment(),
                minDate: "01/01/2018",
                maxDate: "12/31/2028",
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
        $("#reportrange span").html(moment().subtract(29, "days").format("MMMM D, YYYY") + " - " + moment().format("MMMM D, YYYY")), $("#reportrange").daterangepicker(b, a), $("#reportrange").on("show.daterangepicker", function() {
            console.log("show event fired")
        }), $("#reportrange").on("hide.daterangepicker", function() {
            console.log("hide event fired")
        }), $("#reportrange").on("apply.daterangepicker", function(a, b) {
            console.log("apply event fired, start/end dates are " + b.startDate.format("MMMM D, YYYY") + " to " + b.endDate.format("MMMM D, YYYY"))
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


function init_EasyPieChart(per) {
				if( typeof ($.fn.easyPieChart) === 'undefined'){ return; }
				console.log('init_EasyPieChart');
				$('.chart').easyPieChart({
				 
				  delay: 1500,
				  barColor: '#34d3eb',
				  trackColor: '#efefef',
				  scaleColor: false,
				  lineWidth: 14,
				  trackWidth: 12,
				  lineCap: 'butt',
				  onStep: function(from, to, percent) {
					 percent=per;
					$('.percent').html(Math.floor(percent));
				  }
				});

};