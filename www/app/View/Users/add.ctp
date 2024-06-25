<div class="form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('username', array('class' => '', 'label' => 'Username'));
		echo $this->Form->input('nome', array('class' => '', 'label' => 'Name'));
		echo $this->Form->input('password', array('class' => '', 'label' => 'Password'));
		echo $this->Form->input('confirm_password', array('class' => '', 'label' => 'Confirm password'));
	?>
	</fieldset>
<?php echo $this->Form->button('Signup', array('class' => ''))?>
<?php echo $this->Form->end(); ?>
</div>
