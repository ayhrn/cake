
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-2">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Application'), array('action' => 'edit', $application['Application']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Application'), array('action' => 'delete', $application['Application']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $application['Application']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Applications'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Application'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List O Systems'), array('controller' => 'o_systems', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New O System'), array('controller' => 'o_systems', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-10">
		
		<div class="applications view">

			<h2><?php  echo __('Application'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($application['Application']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('App Name'); ?></strong></td>
		<td>
			<?php echo h($application['Application']['app_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Date Submitted'); ?></strong></td>
		<td>
			<?php echo h($application['Application']['date_submitted']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('App Description'); ?></strong></td>
		<td>
			<?php echo h($application['Application']['app_description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Users'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($application['Users']['username'], array('controller' => 'users', 'action' => 'view', $application['Users']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Category'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($application['Category']['name'], array('controller' => 'categories', 'action' => 'view', $application['Category']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related O Systems'); ?></h3>
				
				<?php if (!empty($application['OSystem'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Fournisseur Id'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($application['OSystem'] as $oSystem): ?>
		<tr>
			<td><?php echo $oSystem['id']; ?></td>
			<td><?php echo $oSystem['name']; ?></td>
			<td><?php echo $oSystem['fournisseur_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'o_systems', 'action' => 'view', $oSystem['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'o_systems', 'action' => 'edit', $oSystem['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'o_systems', 'action' => 'delete', $oSystem['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $oSystem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New O System'), array('controller' => 'o_systems', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
