<div class="modal-content">
    <div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closemodal('moreDetails0')"><span aria-hidden="true">×</span></button>							
      <h4 class="modal-title" id="myModalLabel">Document Verification Summary</h4>
    </div>
    <div class="modal-body subscribeBox sibox">
        <div class="row">

            <div class="col-sm-12">
                
                <?php
				
					if(count($responsedata) > 0)
					{
						?>
						<table class="display table table-bordered dataTable no-footer">
							<tr>
								<td>Document Type</td>
								<td>Status</td>
								<td>View</td>
								<td>Message</td>
							</tr>
						<?php
						foreach($responsedata['response'] as $val)
						{
							?>
							<tr>
								<td><?php  
								if(strtolower($val['Doctype']) == 'dl')
								{
									echo 'Driving License';
								}
								else 
								{
									echo $val['Doctype'];
								} ?></td>
								
								<td><?php if($val['IsApprove'] == 1){ echo 'Approved'; }else{ echo 'Unapproved';} ?></td>
								<td><a target="_blank" href="<?php echo $val['DocName']; ?>">View</a></td>
								<td><?php echo $val['CancelRemark']; ?></td>
							<tr>
							<?php
						}
						?>
						</table>
						<?php
					}
				?>
                
                				
                
              </div>
            </div>
            
    </div>

</div>