
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group nav nav-stacked">
                            <li role="presentation" class="dropdown list-group-item">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    Fournisseurs<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo $this->Html->link(__('New Fournisseur'), array('action' => 'add'), array('class' => '')); ?></li>
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
	
	<div id="page-content" class="col-sm-9">

		<div class="fournisseurs index">
		
			<h2><?php echo __('Fournisseurs'); ?></h2>
			

<?php foreach ($fournisseurs as $fournisseur): ?>
	<div class="row">
            <div class="thumbnail">
            <img src="/img/<?php echo h($fournisseur['Fournisseur']['filename']); ?>" alt="fournisseur_logo">
            <div class="caption text-center"><h4><?php echo h($fournisseur['Fournisseur']['name']); ?>&nbsp;</h4>
		
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fournisseur['Fournisseur']['id']), array('class' => 'btn btn-primary btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fournisseur['Fournisseur']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fournisseur['Fournisseur']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $fournisseur['Fournisseur']['id'])); ?>
		</div>
            </div>
        </div>
<?php endforeach; ?>

			
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