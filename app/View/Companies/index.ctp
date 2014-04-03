<div class="users index">
    <h2><?php echo __('SIer');?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id');?></th>
            <th><?php echo $this->Paginator->sort('company_name');?></th>
            <th class="actions"><?php echo __('Actions');?></th>
        </tr>
        <?php foreach ($companies as $company): ?>
        <tr>
            <td><?php echo h($company['Company']['id']  ); ?>&nbsp;</td>
            <td><?php echo h($company['Company']['company_name']); ?>&nbsp;</td>
            <td><?php
                    echo $this->Html->link(
                        __('編集'),
                        array('action' => 'edit', $company['Company']['id']),
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
