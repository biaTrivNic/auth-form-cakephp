<div class="form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('username', array('class' => '', 'label' => 'Username'));
		echo $this->Form->input('password', array('class' => '', 'label' => 'Password'));
	?>
	</fieldset>
<?php echo $this->Form->button('Login', array('class' => ''))?>
<?php echo $this->Form->end(); ?>
</div>