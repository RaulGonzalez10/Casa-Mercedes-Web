<div class="sociales form">
<?php echo $this->Form->create('Social');?>
	<fieldset>
		<legend><?php __('Add Social'); ?></legend>
	<?php
		echo $this->Form->input('albergado_id');
		echo $this->Form->input('comunicacion');
		echo $this->Form->input('roles');
		echo $this->Form->input('normas_y_valores');
		echo $this->Form->input('manejo_autoridad');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sociales', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>