<!-- app/View/Users/signup.ctp -->
<div class="users form">
<?php echo $this->Form->create('User', array('inputDefaults' => array('div' => 'form-group', 'class' => 'form-control'))); ?>
    
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username', array(
            'label' => __('Username')));
        echo $this->Form->input('password', array(
            'label' => __('Password')));
        echo $this->Form->input('role', array(
            'label' => __('Role'),
            'options' => array('admin' => __('Admin'), 'user' => __('Super-User'))
        ));
        echo $this->Form->input('email', array('class' => 'form-control')
                );

    ?>
    </fieldset>
    
<?php echo $this->Form->end(__('Submit')); ?>
</div>