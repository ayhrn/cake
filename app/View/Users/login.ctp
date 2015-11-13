<div class="users form form-group">
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User', array('inputDefaults' => array('div' => 'form-group', 'class' => 'form-control'))); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username', array(
            'label' => __('Username')));
        echo $this->Form->input('password', array(
            'label' => __('Password')));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
<p><?php echo $this->Html->link("Réenvoyer email d'activation", array(
                            'controller' => 'users',
                            'action' => 'resend')) ; ?></p>