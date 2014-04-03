<div class="users form">
<?php echo $this->Form->create('Sale');?>
    <fieldset>
    <legend><?php echo __('Edit Sale'); ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('kana',array('type' => 'text', 'label' => 'Email'));
        ?>
    </fieldset>

<?php echo $this->Form->end(__('Submit'));?>
</div>
<script type="text/javascript">
<!--
    //活性、非活性を切り替える
    var userpass = document.getElementById('UserPassword');
    function clickToPass() {
        if (userpass.disabled == true) {
            userpass.disabled = false;
        } else {
            userpass.disabled = true;
        }
    }
// -->
</script>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sale.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Sale.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Sale'), array('action' => 'index'));?></li>
    </ul>
</div>
