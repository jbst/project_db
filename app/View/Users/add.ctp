<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		//echo $this->Form->input('twitter_consumer_key');
		//echo $this->Form->input('twitter_consumer_secret');
		//echo $this->Form->input('facebook_appid');
		//echo $this->Form->input('facebook_appsecret');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
    <?php
        echo $this->Html->link(
            __('一覧'),
           array('action' => 'index'),
           array('class' => 'btn btn-primary btn-small')
        );
    ?>
</div>
