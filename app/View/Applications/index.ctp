
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-2">
		
		<div class="actions">
		
			<ul class="list-group nav nav-stacked">
                                <li role="presentation" class="dropdown list-group-item">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        Applications<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><?php echo $this->Html->link(__('New Application'), array('action' => 'add'), array('class' => '')); ?></li>
                                    </ul>
                                </li>
				<li role="presentation" class="dropdown list-group-item">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        Users<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?></li> 
                                        <?php if ($this->Session->read('Auth.User.role') == "admin") {
                                         echo "<li>" . $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add'), array('class' => '')) . "</li>";
                                        }?>
                                    </ul>
                                </li>
 				<li role="presentation" class="dropdown list-group-item">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        Categories<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index'), array('class' => '')); ?></li> 
                                        <li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add'), array('class' => '')); ?></li> 
                                    </ul>
                                </li>                               
 				<li role="presentation" class="dropdown list-group-item">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        OS<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><?php echo $this->Html->link(__('List O Systems'), array('controller' => 'o_systems', 'action' => 'index'), array('class' => '')); ?></li> 
                                        <li><?php echo $this->Html->link(__('New O System'), array('controller' => 'o_systems', 'action' => 'add'), array('class' => '')); ?></li> 
                                    </ul>
                                </li>  	
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-10">

		<div class="applications index">
		
			<h2><?php echo __('Applications'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('app_name'); ?></th>
							<th><?php echo $this->Paginator->sort('date_submitted'); ?></th>
							<th><?php echo $this->Paginator->sort('category_id'); ?></th>
							<th><?php echo $this->Paginator->sort('os_id'); ?></th>                                                        
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($applications as $application): ?>
	<tr>
		<td><?php echo h($application['Application']['app_name']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['date_submitted']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($application['Category']['name'], array('controller' => 'categories', 'action' => 'view', $application['Category']['id']));
                                echo " : " . h($application['Subcategory']['name']); ?>
		</td>
		<td><?php 
                    foreach ($application['OSystem'] as $oSystems) { 
                        // echo h($tag['name']) . ' '; 
                        echo $this->Html->tag('span', $oSystems['name'] . ' ', array('class' => 'label label-info')) . " &nbsp;";
                    } 
                    ?>
                    &nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $application['Application']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $application['Application']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $application['Application']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $application['Application']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->