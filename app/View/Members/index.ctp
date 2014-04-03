<div class="users index">
    <h2><?php echo __('技術担当');?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id');?></th>
            <th><?php echo $this->Paginator->sort('name');?></th>
            <th class="actions"><?php echo __('Email');?></th>
            <th class="actions"><?php echo __('Actions');?></th>
        </tr>
        <?php foreach ($members as $member): ?>
            <tr>
                <td><?php echo h($member['Member']['id']  ); ?>&nbsp;</td>
                <td><?php echo h($member['Member']['name']); ?>&nbsp;</td>
                <td><?php echo h($member['Member']['kana']); ?>&nbsp;</td>
                <td>
                    <?php
                        echo $this->Html->link(
                                __('編集'),
                                array('action' => 'edit', $member['Member']['id']),
                                array('class' => 'btn btn-primary btn-small')
                        );
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>

    <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
    ?>
    </p>

    <div class="paging">
        <?php
            echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <br>
    <?php
        echo $this->Html->link(
            __('追加'),
           array('action' => 'add'),
           array('class' => 'btn btn-primary btn-small')
        );
    ?>
</div>
