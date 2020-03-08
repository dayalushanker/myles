<form id="formdata" action="document_subscription" method="post">
	<input type="hidden" name="city" id="city" />
	<input type="hidden" name="tenure" id="tenure" />
	<input type="hidden" name="startdate" id="startdate" />
	<input type="hidden" name="kmsusage" id="kmsusage" />
	<input type="hidden" name="enddate" id="ToDate" />
	<input type="hidden" name="CarVariantID" id="CarVariantID" />
	<input type="hidden" name="CarModelID" id="CarModelID" />
	<input type="hidden" name="CarID" id="CarID" />
	<input type="hidden" name="cid" id="cid" />

</form>

<script type="text/javascript">
	function submitform(Cityid,Duration,FromDate,km,ToDate,CarVariantID,CarModelID,CarID,cid)
	{
		
		$("#city").val(Cityid);
		$("#tenure").val(Duration);
		$("#startdate").val(FromDate);
		$("#kmsusage").val(km);
		$("#ToDate").val(ToDate);
		$("#CarVariantID").val(CarVariantID);
		$("#CarModelID").val(CarModelID);
		$("#CarID").val(CarID);
		$("#cid").val(cid);
		$("#formdata").submit();
	}
</script>