<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User', array('inputDefaults' => array('div' => 'form-group', 'class' => 'form-control'))); ?>
    
    <fieldset>
        <legend><?php echo __("Ré-envoyer email d'activation"); ?></legend>
        <?php echo $this->Form->input('username', array(
            'label' => __("Username lors de l'inscription"))); ?>
    </fieldset>
    
<?php echo $this->Form->end(__('Envoyer')); ?>
</div>