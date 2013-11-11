<div class="configurations index">
<h1><?php echo __('Configurations');?></h1>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $this->Paginator->sort('id');?></th>
	<th><?php echo $this->Paginator->sort('name');?></th>
	<th><?php echo $this->Paginator->sort('value');?></th>
	<th class="actions"><?php echo __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($configurations as $configuration):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $configuration['Configuration']['id']; ?>
		</td>
		<td>
			<?php echo $configuration['Configuration']['name']; ?>
		</td>
		<td>
			<?php echo $configuration['Configuration']['value']; ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action'=>'view', $configuration['Configuration']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action'=>'edit', $configuration['Configuration']['id'])); ?>
			<?php echo $this->Html->link(__('Delete'), array('action'=>'delete', $configuration['Configuration']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $configuration['Configuration']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('previous'), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('next').' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('New Configuration'), array('action'=>'add')); ?></li>
	</ul>
</div>
