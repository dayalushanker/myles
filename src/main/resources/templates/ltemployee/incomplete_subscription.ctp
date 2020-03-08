
  <div class="modal-content">
	<div class="modal-header">
	  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	  <h4 class="modal-title" id="myModalLabel">Subscription Incomplete</h4>
	</div>
	<div class="modal-body" style="height: 150px;">
		<div class="bg-danger danger-color"><p class="carnotavailable"> </p></div>
			
  </div>
  <div class="modal-footer">		
  	<button  type="button" onclick="reload_terms();" class="btn btn-default ltBtn">Ok</button>												
  </div>
</div>
<script type="text/javascript">
function reload_terms()
{   
	window.location = "<?php echo $this->request->webroot; ?>LTemployee/search";
}
</script>