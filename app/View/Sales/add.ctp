<div>
<?php echo $this->Form->create('Sale');?>
    <fieldset>
        <legend><?php echo __('Add Sale'); ?></legend>
        <label for="name" >名前</label>
        <input name="data[Sale][name]"       type="text" id="name"/>      <br />
        <label for="kana" >Email</label>
        <input name="data[Sale][kana]"       type="text" id="kana"/>      <br />
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
