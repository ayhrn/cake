
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Categories'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Category'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Application'), array('controller' => 'applications', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="categories view">

			<h2><?php  echo __('Category'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Applications'); ?></h3>
				
				<?php if (!empty($category['Application'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('App Name'); ?></th>
		<th><?php echo __('Date Submitted'); ?></th>
		<th><?php echo __('App Description'); ?></th>
		<th><?php echo __('Users Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($category['Application'] as $application): ?>
		<tr>
			<td><?php echo $application['id']; ?></td>
			<td><?php echo $application['app_name']; ?></td>
			<td><?php echo $application['date_submitted']; ?></td>
			<td><?php echo $application['app_description']; ?></td>
			<td><?php echo $application['users_id']; ?></td>
			<td><?php echo $application['category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'applications', 'action' => 'view', $application['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'applications', 'action' => 'edit', $application['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'applications', 'action' => 'delete', $application['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $application['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Application'), array('controller' => 'applications', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
