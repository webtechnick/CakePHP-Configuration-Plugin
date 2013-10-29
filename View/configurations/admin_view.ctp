<div class="configurations view">
<h1><?php echo __('Configuration');?></h1>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $configuration['Configuration']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $configuration['Configuration']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $configuration['Configuration']['value']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Configuration'), array('action'=>'edit', $configuration['Configuration']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Configuration'), array('action'=>'delete', $configuration['Configuration']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $configuration['Configuration']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Configurations'), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Configuration'), array('action'=>'add')); ?> </li>
	</ul>
</div>
