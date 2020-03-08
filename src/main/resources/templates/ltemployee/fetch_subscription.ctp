<?php 
       if($response['status'] == 1)
			{
				if(strtolower($response['response'][0]['CarSubscriptionStatus']) == 'pending approval')
				{
					?>
					<div class="modal-dialog" role="document" id="apr">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closemodal('PendingApproval')"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Applied Subscription</h4>
							</div>
							<div class="modal-body">
										<h5>Basic Details</h5>
										<ul class="basicDetails">
											<li>
												<label>Car Name</label>
												<span id="carname">
													<?php echo $response['response'][0]['CarModelName']; ?>
												</span>
											</li>
											<li>
												<label>Variant</label>
												<span id='vari'>
													<?php echo $response['response'][0]['CarVariantName']; ?>
												</span>
											</li>
											<li>
												<label>City</label>
												<span id='city'>
													<?php echo $response['response'][0]['CityName']; ?>
												</span>
											</li>
											<li>
												<label>Vehicle Rate</label>
												<span id='vrate'>
													Rs. <?php echo $response['response'][0]['IndicatedMonthlyRental']; ?>
												 
												</span>
											</li>
											<?php 
												if( $response['response'][0]['rentallimit'] > 0)
												{
											?>
											<li>
												<label>Rental Limit</label>
												<span id='rl'>
												Rs. <?php echo $response['response'][0]['rentallimit']; ?>
												</span>
											</li>
											<?php
												}
											?>
										</ul>
										<div class="line"></div>

										<h5>Uploaded Document</h5>
										<ul class="basicDetails">
											<li>
												<label>Driving Licence</label>
												<span id="dlno">
												<?php 
												if($dlfile != "")
													echo '<a target="_blank" href="'.$dlfile.'">View</a>';
												else
													echo 'Not Uploaded';
												?>
												</span>
											</li>
											
											<li>
												<label><?php echo ucfirst($doctype); ?></label>
												<span id="aadhno">
												  <?php 
												if($aadharfile != "")
													echo '<a target="_blank" href="'.$aadharfile.'">View</a>';
												else
													echo 'Not Uploaded';
												?>
												</span>
											</li>
											<li>
												<label>Pan Card</label>
												<span id="pcno">
												<?php 
												if($panfile != "")
													echo '<a target="_blank" href="'.$panfile.'">View</a>';
												else
													echo 'Not Uploaded';
												?>
												</span>
											</li>

										</ul>
										<div class="line"></div>
										<h5>Subscription Status</h5>
										<div class="row form-group">
											<div class="col-sm-12 ">
												<div class="statusbox"><span class="red bold">
												<?php echo   $response['response'][0]['statuscar']; ?>
												</span></div>
											</div>
										</div>
										
									</div>
									
								</div>
							</div>
					<?php
					
				}
				else if(strtolower($response['response'][0]['CarSubscriptionStatus']) == 'active')
				{
					?>
					<div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closemodal('PendingApproval')"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Subscription Active</h4>
            </div>
            <div class="modal-body">
              <h5>Basic Details</h5>
              <ul class="basicDetails">
                <li>
												<label>Car Name</label>
												<span id="carname">
													<?php echo $response['response'][0]['CarModelName']; ?>
												</span>
											</li>
												<li>
												<label>Variant</label>
												<span id='vari'>
													<?php echo $response['response'][0]['CarVariantName']; ?>
												</span>
											</li>
											<li>
												<label>City</label>
												<span id='city'>
													<?php echo $response['response'][0]['CityName']; ?>
												</span>
											</li>
											<li>
												<label>Vehicle Rate</label>
												<span id='vrate'>
													Rs. <?php echo $response['response'][0]['IndicatedMonthlyRental']; ?>
												 
												</span>
											</li>
										
											<?php 
												if( $response['response'][0]['rentallimit'] > 0)
												{
											?>
											<li>
												<label>Rental Limit</label>
												<span id='rl'>
												Rs. <?php echo $response['response'][0]['rentallimit']; ?>
												</span>
											</li>
												<?php } ?>
              </ul>
              <div class="line"></div>

              <h5>Uploaded Document</h5>
              <ul class="basicDetails">
                <li>
												<label>Driving Licence</label>
												<span id="dlno">
												<?php 
												if($dlfile != "")
													echo '<a target="_blank" href="'.$dlfile.'">View</a>';
												else
													echo 'Not Uploaded';
												?>
												</span>
											</li>
											
											<li>
												<label><?php echo ucfirst($doctype); ?></label>
												<span id="aadhno">
												  <?php 
												if($aadharfile != "")
													echo '<a target="_blank" href="'.$aadharfile.'">View</a>';
												else
													echo 'Not Uploaded';
												?>
												</span>
											</li>
											<li>
												<label>Pan Card</label>
												<span id="pcno">
												<?php 
												if($panfile != "")
													echo '<a target="_blank" href="'.$panfile.'">View</a>';
												else
													echo 'Not Uploaded';
												?>
												</span>
											</li>
              
              </ul>
              <div class="line"></div>
              <h5>Subscription Status</h5>
              <div class="row">
			  <?php
			  $responsestatustime = $response['responsestatustime'];
			  
			  if(count($responsestatustime) > 0)
			  {
				  $valar = $response['responsestatustime'][0];
				  $arr = array();
								  if((array_key_exists("Appliedon",$valar)) && ($valar['Appliedon'] != ''))
								  {
									  $arr['Appliedon'] = $valar['Appliedon'];
								  }
								  if((array_key_exists("AdminApproval",$valar)) && ($valar['AdminApproval'] != ''))
								  {
									  $arr['AdminApproval'] = $valar['AdminApproval'];
								  }
								  if((array_key_exists("ExecutiveAssigned",$valar)) && ($valar['ExecutiveAssigned'] != ''))
								  {
									  $arr['ExecutiveAssigned'] = $valar['ExecutiveAssigned'];
								  }
								  if((array_key_exists("OrderConfirmed",$valar)) && ($valar['OrderConfirmed'] != ''))
								  {
									  $arr['OrderConfirmed'] = $valar['OrderConfirmed'];
								  }
								  if((array_key_exists("CarDelivered",$valar)) && ($valar['CarDelivered'] != ''))
								  {
									  $arr['CarDelivered'] = $valar['CarDelivered'];
								  }
								  if((array_key_exists("SubscriptionCancel",$valar)) && ($valar['SubscriptionCancel'] != ''))
								  {
									  $arr['SubscriptionCancel'] = $valar['SubscriptionCancel'];
								  }
				  ?>
				  <div class="col-sm-7">
                  <div class="statusbox">
                    <div class="table-responsive"> 
                      <table class="table table-bordered"> 
                        <thead> 
                          <tr> 
                            <th>Status</th> 
                            <th>Date</th> 
                            <th>Time</th>                         
                          </tr> 
                        </thead> 
                        <tbody> 
						<?php 
							foreach($arr as $key=>$val)
							{
								$valarr = explode(",",$val);
								$datetime =  explode(" ",$valarr[1]);
								$date1 = $datetime[0];
								$time = $datetime[1];
								if(trim($valarr[1]) != '')
									{
								
								?>
								<tr> 
                            <th><?php echo ucwords($valarr[0]); ?></th> 
                            <td><?php echo date("d M, Y",strtotime($date1)); ?></td> 
                            <td><?php echo $time. ' '.$datetime[2]; ?></td> 
                          </tr>
								<?php
							}
							}
						?>
                           
                          
                          
                        </tbody> 
                      </table> 
                    </div>

                  </div>
                </div>
				  <?php
			  }
			  ?>
                
                <div class="col-sm-5 ">
                  <div class="mrgn30">
                    <div class="statusbox">
						<?php 
							
							if($response['response'][0]['statuscar'] == 'Admin Rejected')
							{
								?>
								<span class="red bold">Rejected by:</span> Admin<br/>
								<span>Cancellation Reason: </span><span><?php echo $response['response'][0]['CancelReason']?></span>
							
								<?php
							}
							else if($response['response'][0]['statuscar'] == 'Cancelled')
							{
								?>
							
								<span class="red bold"></span> Subscription Cancelled.<br/>
								<span>Cancellation Reason: </span><span><?php echo $response['response'][0]['CancelReason']?></span>
							
								<?php
							}
							else if($response['response'][0]['statuscar'] == 'Subscription Active')
							{
								?>
								<span class="green bold"></span> <?php echo $response['response'][0]['statuscar']; ?>
								<?php
							}
							else
							{
								?>
								<span class="red bold">Pending on:</span> <?php echo $response['response'][0]['statuscar']; ?>
								<?php
							}
						?>
						
					
					</div>
							<?php
					if($response['response'][0]['RelationshipManager'] != '')
					{
				?>
							<div class="contectbox">
								<span><strong>Executive Assigned:</strong> 
								<?php echo $response['response'][0]['RelationshipManager']; ?>
								</span>
								<span><strong>Phone:</strong> <?php echo $response['response'][0]['RelationshipManagerPhone']; ?></span>
								<span><strong>Email:</strong><?php echo $response['response'][0]['RelationshipManagerEmail']; ?></span>
							</div>
							<?php
					}
				?>
                  </div>
                </div>
              </div>
              <div class="line"></div>
              <div class="incidentalStatus">
			  <?php
			  $responseincidental = $response['responseincidental'];
			   if(count($responseincidental) > 0)
			   {
				   ?>
				   <h5>Incidental Status</h5>
              <div class="table-responsive"> 
                      <table class="table table-bordered"> 
                        <thead> 
                          <tr> 
                            <th>Date</th> 
                            <th>Amount</th> 
                            <th>Invoice</th>   
                            <th>Due payment date</th>  
                            <th>Paid date</th>  
                            <th>Remarks</th> 
                            <th>Payment</th>                 
                          </tr> 
                        </thead> 
                        <tbody> 
						<?php
							foreach($responseincidental as $key=>$val)
							{
								?>
								<tr> 
                            <th> <?php echo date("d/m/Y",strtotime($val['Createdate'])); ?></th> 
                            <td>Rs. <?php echo $val['Amount']; ?></td> 
                            <td><a href='<?php echo $val['link']; ?>'>View </a></td> 
                            <td><?php echo date("d/m/Y",strtotime($val['paymentdate']));?></td>
                            <td><?php echo date("d/m/Y",strtotime($val['Paiddate']));?> </td>
                            <td><?php echo $val['Remarks']; ?>  </td>
                            <td><?php echo $val['Active']== True?'Paid':'Unpaid'; ?>   </td>
                          </tr>
								<?php
							}
						?>
                           
                                                    
                        </tbody> 
                      </table> 
                    </div>
				   <?php
			   }
			  ?>
              
                    <div class="line"></div>
                    <div class="maintainenceSchuedule">
                    <h5>Maintainence Schuedule</h5>
                      <div class="table-responsive"> 
                            <table class="table table-bordered"> 
                              <thead> 
                                <tr> 
                                  <th>Service Date</th> 
                                  <th>Service Type</th> 
                                  <th>Car Reading</th>   
                                  <th>Status</th>  
                                  <th>Invoice</th>  
                                                
                                </tr> 
                              </thead> 
                              <tbody> 
                                <tr> 
                                  <th>04/05/2018</th> 
                                  <td>Complate Check</td> 
                                  <td>10000</td> 
                                  <td>Done</td>
                                  <td>View</td>
                             
                                </tr> 
                                
                             
                                
                                
                                
                              </tbody> 
                            </table> 
                          </div>
              </div>
            </div>
          </div>
        </div>
      </div>
					<?php
				}
				else
				{
					?>
	
					<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closemodal('PendingApproval')"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Applied Subscription</h4>
			</div>
			<div class="modal-body">
				<h5>Basic Details</h5>
				<ul class="basicDetails">
					<li>
												<label>Car Name:</label>
												<span id="carname">
													<?php echo $response['response'][0]['CarModelName']; ?>
												</span>
											</li>
											<li>
												<label>Variant:</label>
												<span id='vari'>
													<?php echo $response['response'][0]['CarVariantName']; ?>
												</span>
											</li>
											<li>
												<label>City :</label>
												<span id='city'>
													<?php echo $response['response'][0]['CityName']; ?>
												</span>
											</li>
											<li>
												<label>Vehicle Rate:</label>
												<span id='vrate'>
													Rs. <?php echo $response['response'][0]['IndicatedMonthlyRental']; ?>
												 
												</span>
											</li>
											
											<?php 
												if( $response['response'][0]['rentallimit'] > 0)
												{
											?>
											<li>
												<label>Rental Limit:</label>
												<span id='rl'>
												Rs. <?php echo $response['response'][0]['rentallimit']; ?>
												</span>
											</li>
												<?php } ?>
				</ul>
				<div class="line"></div>
				<h5>Uploaded Document</h5>
				<ul class="basicDetails">
					<li>
												<label>Driving Licence:</label>
												<span id="dlno">
												<?php 
												if($dlfile != "")
													echo '<a target="_blank" href="'.$dlfile.'">View</a>';
												else
													echo 'Not Uploaded';
												?>
												</span>
											</li>
											
											<li>
												<label><?php echo ucfirst($doctype); ?> :</label>
												<span id="aadhno">
												  <?php 
												if($aadharfile != "")
													echo '<a target="_blank" href="'.$aadharfile.'">View</a>';
												else
													echo 'Not Uploaded';
												?>
												</span>
											</li>
											<li>
												<label>Pan Card:</label>
												<span id="pcno">
												<?php 
												if($panfile != "")
													echo '<a target="_blank" href="'.$panfile.'">View</a>';
												else
													echo 'Not Uploaded';
												?>
												</span>
											</li>
              

				</ul>
				<div class="line"></div>
				<h5>Subscription Status</h5>
				<div class="row">
				
					<div class="col-sm-7">
					<?php
					 $responsestatustime = $response['responsestatustime'];
					
					if(count($responsestatustime) > 0)
					{
				?>
						<div class="statusbox">
							<div class="table-responsive"> 
							<table class="table table-bordered"> 
								<thead> 
									<tr> 
										<th>Status</th> 
										<th>Date</th> 
										<th>Time</th>                         
									</tr> 
								</thead> 
								<tbody> 
									<?php 
							foreach($responsestatustime as $keyar=>$valar)
							{
								$arr = array();
								  if((array_key_exists("Appliedon",$valar)) && ($valar['Appliedon'] != ''))
								  {
									  $arr['Appliedon'] = $valar['Appliedon'];
								  }
								  if((array_key_exists("AdminApproval",$valar)) && ($valar['AdminApproval'] != ''))
								  {
									  $arr['AdminApproval'] = $valar['AdminApproval'];
								  }
								  if((array_key_exists("ExecutiveAssigned",$valar)) && ($valar['ExecutiveAssigned'] != ''))
								  {
									  $arr['ExecutiveAssigned'] = $valar['ExecutiveAssigned'];
								  }
								  if((array_key_exists("OrderConfirmed",$valar)) && ($valar['OrderConfirmed'] != ''))
								  {
									  $arr['OrderConfirmed'] = $valar['OrderConfirmed'];
								  }
								  if((array_key_exists("CarDelivered",$valar)) && ($valar['CarDelivered'] != ''))
								  {
									  $arr['CarDelivered'] = $valar['CarDelivered'];
								  }
								  if((array_key_exists("SubscriptionCancel",$valar)) && ($valar['SubscriptionCancel'] != ''))
								  {
									  $arr['SubscriptionCancel'] = $valar['SubscriptionCancel'];
								  }
								foreach($arr as $key=>$val){
									$date1 = '';
									$time = '';
									$ampm = '';
									$valarr = explode(",",$val);
								$datetime =  explode(" ",$valarr[1]);
								$date1 = date("d M, Y",strtotime($datetime[0]));
								$time = $datetime[1];
								
										$ampm = $datetime[2];
									if(trim($valarr[1]) != '')
									{
										
									
								
								?>
								<tr> 
									<th><?php echo $valarr[0]; ?></th> 
									<td><?php echo $date1 ; ?></td> 
									<td><?php echo $time. ' '. $ampm?></td> 
								</tr>
								<?php
								}
								}
							}
						?>
                           

								</tbody> 
							</table> 
						</div>

					</div>
					<?php
					}
					else
					{
						echo 'No data found';
					}
				?>
				</div>
				
				
				<div class="col-sm-5 ">
					<div class="mrgn30">
						<div class="statusbox">
						<?php 
							
							if($response['response'][0]['statuscar'] == 'Admin Rejected')
							{
								?>
								<span class="red bold">Rejected by:</span> Admin <br/>
								<span>Cancellation Reason: </span><span><?php echo $response['response'][0]['CancelReason']?></span>
							
								<?php
							}
							else if($response['response'][0]['statuscar'] == 'Cancelled')
							{
								?>
							
								<span class="red bold"></span> Subscription Cancelled.<br/>
								<span>Cancellation Reason: </span><span><?php echo $response['response'][0]['CancelReason']?></span>
							
								<?php
							}
							else if($response['response'][0]['statuscar'] == 'Subscription Active')
							{
								?>
								<span class="green bold"></span> <?php echo $response['response'][0]['statuscar']; ?>
								<?php
							}
							else
							{
								?>
								<span class="red bold">Pending on:</span> <?php echo $response['response'][0]['statuscar']; ?>
								<?php
							}
						?>
					
						
						</div>
							<?php
					if($response['response'][0]['RelationshipManager'] != '')
					{
				?>
							<div class="contectbox">
								<span><strong>Executive Assigned:</strong> 
								<?php echo $response['response'][0]['RelationshipManager']; ?>
								</span>
								<span><strong>Phone:</strong> <?php echo $response['response'][0]['RelationshipManagerPhone']; ?></span>
								<span><strong>Email:</strong><?php echo $response['response'][0]['RelationshipManagerEmail']; ?></span>
							</div>
							<?php
					}
				?>
						</div>
				</div>
				
				</div>
			</div>
		</div>
	</div>
<?php
		}
		
	}
  		
?>