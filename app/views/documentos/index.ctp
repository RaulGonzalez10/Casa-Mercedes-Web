﻿<div class="documentos index">
	<h2><?php __('Documentos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('número');?></th>
			<th><?php echo $this->Paginator->sort('persona_id');?></th>
			<th><?php echo $this->Paginator->sort('documentación_id');?></th>
			<th><?php echo $this->Paginator->sort('número_documento');?></th>
			<th><?php echo $this->Paginator->sort('tramitada_por_cm');?></th>
			<th><?php echo $this->Paginator->sort('creada');?></th>
			<th><?php echo $this->Paginator->sort('modificada');?></th>
			<th><?php echo $this->Paginator->sort('modificada_por');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($documentos as $documento):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $documento['Documento']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($documento['Persona']['nombre_completo'], array('controller' => 'personas', 'action' => 'view', $documento['Persona']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($documento['Documentacion']['title'], array('controller' => 'documentaciones', 'action' => 'view', $documento['Documentacion']['id'])); ?>
		</td>
		<td><?php echo $documento['Documento']['numero_documento']; ?>&nbsp;</td>
		<td><?php echo $documento['Documento']['tramitada_por_cm']; ?>&nbsp;</td>
		<td><?php echo $documento['Documento']['created']; ?>&nbsp;</td>
		<td><?php echo $documento['Documento']['modified']; ?>&nbsp;</td>
		<td><?php echo $documento['Documento']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $documento['Documento']['id'])); ?>
			<?php echo $this->Html->link(__('Modificar', true), array('action' => 'edit', $documento['Documento']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $documento['Documento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documento['Documento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('Anterior', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('Siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Agregar Documento', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Ver Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Documentaciones', true), array('controller' => 'documentaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Documentación', true), array('controller' => 'documentaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>