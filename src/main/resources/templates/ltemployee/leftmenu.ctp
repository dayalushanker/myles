<?php 
		$session = $this->request->session();
		if ($session->check('isClientLogin')) { 
	?>


<ul id="lt-menu" class="lt-menu-main">
	<li class="lt-trigger">
		<a class="lt-icon-menu"><i class="ion ion-md-menu"></i></a>
		<nav class="lt-menu-wrapper lt-open-part">
			<div class="lt-scroller">
			
				<ul class="lt-menu">
					<li <?php if(($this->request->params['action']=='dashboard')) echo 'class="active"';?>><?php echo $this->Html->link('<i class="ion ion-ios-timer"></i><span>' . __('Dashboard') . '</span>',['controller'=>'LTemployee','action' => 'dashboard'],['escape' => false, 'title' => __('Dashboard')]); ?></li>
					<li <?php if(($this->request->params['action']=='search')) echo 'class="active"';?>><?php echo $this->Html->link('<i class="ion ion-md-search"></i><span>' . __('Search') . '</span>',['controller'=>'LTemployee','action' => 'search'],['escape' => false, 'title' => __('Search')]); ?></li>
					<li <?php if(($this->request->params['action']=='subscription')) echo 'class="active"';?>><?php echo $this->Html->link('<i class="ion ion-md-contacts"></i><span>' . __('Subscription') . '</span>',['controller'=>'LTemployee','action' => 'subscription'],['escape' => false, 'title' => __('Subscription')]); ?></li>
					<li <?php if(($this->request->params['action']=='billings')) echo 'class="active"';?>><?php echo $this->Html->link('<i class="ion ion-md-copy"></i><span>' . __('Billings') . '</span>',['controller'=>'LTemployee','action' => 'billings'],['escape' => false, 'title' => __('billings')]); ?></li>
					
				</ul>
			
			</div><!-- /lt-scroller --> 
		</nav>
	</li>
</ul>

	<?php
		}
	?>
