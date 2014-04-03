<div>
<?php echo $this->Form->create('Company');?>
        <fieldset>
            <legend><?php echo __('Add Company'); ?></legend>
            <label for="company_name" >名前</label>
            <input name="data[Company][company_name]" type="text" id="company_name"/><br />
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
