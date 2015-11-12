<div id="sidebar" class="col-sm-2">
		
    <div class="actions">

        <ul class="list-group nav nav-pills nav-stacked">			
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