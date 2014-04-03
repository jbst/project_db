<div class="customers index">
    <h2><?php echo __('過去案件検索');?></h2>
    <div class="well">
        <?php
            // 全文検索
/*
            echo $this->Form->create('Customer');
            echo $this->Form->input('freeword', array('label'=>''));
            echo $this->Form->button(__('全文検索'), array('name' => 'freeword', 'type' => 'submit', 'class' => 'btn  btn-primary btn-small'));
            echo $this->Form->end();
*/
        ?>
        <?php
            /** 案件検索 */
            echo $this->Form->create('Customer', array('class' => 'form-horizontal'));
            echo $this->Html->script( 'jquery-1.7.2min');
        ?>

        <script type="text/javascript">
            $(document).ready( function() {
                $( "#datepicker"  ).datepicker();
                $( "#datepicker2" ).datepicker();
            });
        </script>

        <table>
            <tr>
                <td valign="top" style="padding-right:20px">
                    <?php
                        echo $this->Form->input('name', array('label'=>'案件名'));
                        echo $this->Form->label(
                            'members',
                            '技術担当'
                        ); 
                        echo $this->Form->input(
                            'members',
                             array(
                                 'label'   => false,
                                 'type'    => 'select',
                                 'options' => $option_mem,
                                 'empty'   => '- 選択してください -',
                                 'div'     => false,
                             )
                        );
                        echo $this->Form->label(
                            'company_id',
                            'SIer'
                        ); 
                        echo $this->Form->input(
                            'company_id',
                            array(
                                'label'   => false,
                                'type'    => 'select',
                                'options' => $option_com,
                                'empty'   => '- 選択してください -',
                                'div'     => false,
                            )
                        );
                        echo $this->Form->input('kana',   array('label'=>'END'   ));
                        echo $this->Form->input('sagyo',  array('label'=>'作業'  ));
                        echo $this->Form->input('output', array('label'=>'成果物'));
                    ?>
                </td>

                <td valign="top">
                    <?php
                        echo $this->Form->label(
                            'estimate',
                            '見積金額 (単位：万)'
                        );
                        $options = array(
                            '001' => '0以上～100未満',
                            '002' => '100以上～200未満',
                            '003' => '200以上～500未満',
                            '004' => '500以上～1000未満',
                            '005' => '1000以上'
                        );
                        echo $this->Form->select('estimate', $options, array(
                            'multiple' => 'checkbox'
                        ));

                        // Satus
                        echo $this->Form->label(
                            'status',
                            'Status'
                        );
                        $options = array(
                            'F' => 'F: 検収',
                            'W' => 'W: 作業中',
                            'A' => 'A: 受注',
                            'B' => 'B: 高確度',
                            'C' => 'C: 見積提出済',
                            'D' => 'D: 口頭レベル',
                            'E' => 'E: 矢中',
                            'T' => 'T: 継続'
                        );
                        echo $this->Form->input(
                            'status',
                            array(
                                'label'   => false,
                                'type'    => 'select',
                                'options' => $options,
                                'empty'   => '- 選択してください -',
                                'div'     => false,
                            )
                        );

                        // 形態
                        echo $this->Form->label(
                            'type',
                            '形態'
                        );
                        $options = array(
                            'U' => 'U: 請負',
                            'J' => 'J: 常駐',
                            'S' => 'S: SWAT'
                        );
                        echo $this->Form->input(
                            'type',
                            array(
                                'label'   => false,
                                'type'    => 'select',
                                'options' => $options,
                                'empty'   => '- 選択してください -',
                                'div'     => false,
                            )
                        );
                        echo '<br>';
                        echo $this->Form->label(
                            'lasttrade',
                            '作成日（見積）'
                        );
                        echo $this->Form->input(
                            'lasttrade_start',
                            array(
                                'label'      => false,
                                'type'       => 'date',
                                'dateFormat' => 'YMD',
                                'minYear'    => 2000,
                                'maxYear   ' => date('Y'),
                                'monthNames' => false,
                                'separator'  => '/',
                                'empty'      => '-',
                                'class'      => 'input-mini ',
                                'div'        => false,
                            )
                        );
                        echo ' ～ ';
                        echo $this->Form->input(
                            'lasttrade_end',
                            array(
                                'label'      => false,
                                'type'       => 'date',
                                'dateFormat' => 'YMD',
                                'minYear'    => 2000,
                                'maxYear'    => date('Y'),
                                'monthNames' => false,
                                'separator'  => '/',
                                'empty'      => '-',
                                'class'      => 'input-mini',
                                'div'        => false
                            )
                        );
                    ?>
                </td>
            </tr>
        </table>
        <?php
            echo $this->Html->link(
                __('新規登録'),
                array(
                    'action' => 'add'
                ),
                array('class' => 'btn btn-primary btn-small')
            );
            echo '&nbsp;';
            echo $this->Form->button('クリア', array('name' => 'clear',  'type' => 'submit', 'class' => 'btn  btn-primary btn-small'));
            echo '&nbsp;';
            echo $this->Form->button('検索',   array('name' => 'search', 'type' => 'submit', 'class' => 'btn  btn-primary btn-small'));
            echo $this->Form->end();
        ?>
    </div>
    <div class="pull-right">
    </div>
    <br>
    <br>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id',                   __('ID'            ),   array('url' => $searchword));?></th>
            <th><?php echo $this->Paginator->sort('Company.company_name', __('SIer'          ),   array('url' => $searchword));?></th>
            <th><?php echo $this->Paginator->sort('kana',                 __('END'           ),   array('url' => $searchword));?></th>
            <th><?php echo $this->Paginator->sort('name',                 __('案件名'        ),   array('url' => $searchword));?></th>
            <th><?php echo $this->Paginator->sort('Sale.name',            __('営業担当'      ),   array('url' => $searchword));?></th>
            <th><?php echo $this->Paginator->sort('Member.name',          __('技術担当'      ),   array('url' => $searchword));?></th>
            <th><?php echo $this->Paginator->sort('status',               __('Status'        ),   array('url' => $searchword));?></th>
            <th><?php echo $this->Paginator->sort('type',                 __('形態'          ),   array('url' => $searchword));?></th>
            <th><?php echo $this->Paginator->sort('progress',             __('進捗'          ),   array('url' => $searchword));?></th>
            <th><?php echo $this->Paginator->sort('period_start',         __('開始'          ),   array('url' => $searchword));?></th>
            <th><?php echo $this->Paginator->sort('period_end',           __('終了'          ),   array('url' => $searchword));?></th>
            <th><?php echo $this->Paginator->sort('estimate',             __('見積金額(万円)'),   array('url' => $searchword));?></th>
            <th class="actions"><?php echo __('更新削除');?></th>
        </tr>

        <?php foreach ($customers as $customer): ?>
            <tr>
                    <?php echo h($customer['Customer']['customer_cd' ]); ?>
                <td><?php echo h($customer['Customer']['id'          ]); ?></td>
                <td><?php echo h($customer['Company' ]['company_name']); ?></td>
                <td><?php echo h($customer['Customer']['kana'        ]); ?></td>
                <td><?php echo h($customer['Customer']['name'        ]); ?></td>
                <td><?php echo h($customer['Sale'    ]['name'        ]); ?></td>
                <td><?php echo h($customer['Member'  ]['name'        ]); ?></br>
                    <?php
                        if ( isset($customer['Member2']['name'] ) && ($customer['Member2']['name']) != '' ) { 
                            echo h($customer['Member2']['name']); 
                            echo '<br/>';
                            } 
                        if ( isset($customer['Member3']['name'] ) && ($customer['Member3']['name']) != '' ){ 
                            echo h($customer['Member3']['name']); 
                            echo '<br/>';
                            } 
                        if ( isset($customer['Member4']['name'] ) && ($customer['Member4']['name']) != '' ){ 
                            echo h($customer['Member4']['name']); 
                            echo '<br/>';
                            } 
                        if ( isset($customer['Member5']['name'] ) && ($customer['Member5']['name']) != '' ){ 
                            echo h($customer['Member5']['name']); 
                            echo '<br/>';
                            } 
                    ?>
                </td>

                <td><?php echo h($customer['Customer']['status'      ]);      ?></td>
                <td><?php echo h($customer['Customer']['type'        ]);      ?></td>
                <td><?php echo h($customer['Customer']['progress'    ]) . '%';?></td>
                <td><?php echo h($customer['Customer']['period_start']);      ?></td>
                <td><?php echo h($customer['Customer']['period_end'  ]);      ?></td>
                <td><?php echo h($customer['Customer']['estimate'    ]);      ?></td>
                <td>
                    <?php
                        /** 閲覧ボタン */
                        echo $this->Html->link(
                            __('閲覧'),
                            array('action' => 'show', $customer['Customer']['id']),
                            array('class' => 'btn btn-small')
                        );
                    ?>
                    <?php
                        /** 更新ボタン */
                        echo $this->Html->link(
                            __('編集'),
                            array('action' => 'edit', $customer['Customer']['id']),
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
                'format' => __('{:count} 件中 {:page} ページ目 ({:start} ～ {:end} 件表示)')
            ));
        ?>
    </p>
    <?php $this->Paginator->options(array('url' => $searchword)); ?>

    <div class="paging">
    <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
    ?>
    </div>

</div>
