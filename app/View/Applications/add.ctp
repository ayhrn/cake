
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-2">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('List Applications'), array('action' => 'index')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List O Systems'), array('controller' => 'o_systems', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New O System'), array('controller' => 'o_systems', 'action' => 'add')); ?> </li>
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-10">

		<h2><?php echo __('Add Application'); ?></h2>

		<div class="applications form">
		
			<?php echo $this->Form->create('Application', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('app_name', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('date_submitted', array('class' => 'form-control', 'type' => 'hidden')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('app_description', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('category_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
                                        <div class="form-group">
                                                <?php echo $this->Form->input('subcategory_id', array('class' => 'form-control')); ?>
                                        </div><!-- .form-group -->
                                        
					<div class="form-group">
                                                <?php echo $this->Form->input('OSystem', array('class' => 'form-control'));?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
<?php
$this->Js->get('#ApplicationCategoryId')->event('change', 
$this->Js->request(array(
'controller'=>'subcategories',
'action'=>'getByCategory'
), array(
'update'=>'#ApplicationSubcategoryId',
'async' => true,
'method' => 'post',
'dataExpression'=>true,
'data'=> $this->Js->serializeForm(array(
'isForm' => true,
'inline' => true
))
))
);
?>