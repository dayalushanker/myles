<?php
 $empname = "";
 $session = $this->request->session();
 if($session->check('Username')){
     $empname = $session->read('Username');
 }


?>
<section class="mg-header">
	<div class="row">
		<div class="col-sm-3 col-md-3">
		
			<?php
				echo $this->Html->link($this->Html->image('mg-logo.png', 
				['alt' => 'Car Model', 'class' => '']),
				['controller'=>'LTemployee','action' => 'search'],
				['escape' => false,'class' => 'mg-logo', 'title' => __('search')]);
			
			
			?>
		</div>
		<div class="col-sm-9 col-md-9">
			<span class="t-1">24*7 Helpline: 8882222222</span> 
			<ul class="mg-link">
				
						<li class="<?php if($this->request->params['action']== 'search'){ echo 'active'; }?>">
								<?php echo $this->Html->link('Search',['controller'=>'LTemployee','action' => 'search'],['escape' => false,'title' => __('Search')]); ?>
						
						</li>
						<?php
					
				?>
				
				
				<?php 
					if ($session->check('isClientLogin')) 
					{ 
						
				?>
				<li  class="<?php if($this->request->params['action']== 'subscription'){ echo 'active'; }?>">
				
					<?php echo $this->Html->link('Subscription',['controller'=>'LTemployee','action' => 'subscription'],['escape' => false,'title' => __('Subscription'), 'class' =>'dropdown']); ?>


					
						
				</li>
				<li class="<?php if($this->request->params['action']== 'billings'){ echo 'active'; }?>">
					
					<?php echo $this->Html->link('Invoice',['controller'=>'LTemployee','action' => 'billings'],['escape' => false,'title' => __('Invoice')]); ?>
					
				</li>
				<li>
					<li class="<?php if($this->request->params['action']== 'faq'){ echo 'active'; }?>">
					<?php echo $this->Html->link('FAQs',['controller'=>'LTemployee','action' => 'faq'],['escape' => false,'title' => __('FAQs')]); ?>
					
					</li>
				</li>
				
				<li class="dropdown">
				
				
					<?php echo $this->Html->link('<span class="iconPd">' . __( $empname) . '</span>',['controller'=>'LTemployee','action' => 'dashboard'],['role' => 'button','data-toggle'=>'dropdown','aria-haspopup'=>true,'aria-expanded'=>'false','class' => 'dropdown-toggle padrgt','escape' => false, 'title' => __( $empname)]); ?>
					
					<ul class="dropdown-menu">
					  <li><?php echo $this->Html->link('Profile',['controller'=>'LTemployee','action' => 'profile'],['escape' => false,'title' => __('Profile')]); ?></li>
					  <li><?php echo $this->Html->link('Sign Out',['controller'=>'LTemployee','action' => 'logout'],['escape' => false,'title' => __('Sign Out')]); ?></li>
					  
					</ul>
				
				</li>
			<?php
				}else{
				?>
				<li>
					<li class="<?php if($this->request->params['action']== 'faq'){ echo 'active'; }?>">
					<?php echo $this->Html->link('FAQs',['controller'=>'LTemployee','action' => 'faq'],['escape' => false,'title' => __('FAQs')]); ?>
					
					</li>
				</li>
				<li><a data-toggle="modal" data-target="#LoginBox" href="#" class="login-btn">LOGIN / REGISTER</a></li>
			
			<?php
				}
				?>
				
				
			</ul><!--mg-link-->
		</div>
	</div>
</section>