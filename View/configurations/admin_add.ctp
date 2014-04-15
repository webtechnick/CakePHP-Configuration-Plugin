<h1>Add Configuration</h1>
<div class="configurations form">
<?php echo $this->Form->create('Configuration');?>
	<fieldset>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end('Submit');?>
</div>