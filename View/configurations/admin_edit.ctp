<h1>Edit Configuration</h1>
<div class="configurations form">
<?php echo $this->Form->create('Configuration');?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Delete'), array('action'=>'delete', $this->Form->value('Configuration.id')), null, sprintf(__('Are you sure you want to delete # %s?'), $this->Form->value('Configuration.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Configurations'), array('action'=>'index'));?></li>
	</ul>
</div>