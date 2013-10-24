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
		<table>
			<tr>
				<td valign="top" style="padding-right:20px">
					<?php
                                                //echo $this->Form->input('customer_cd', array('label'=>'案件ID'));
                                                echo $this->Form->input('name',        array('label'=>'案件名'));
                                                echo $this->Form->input('kana',        array('label'=>'END'));
						echo $this->Form->input('sagyo',       array('label'=>'作業'));
						echo $this->Form->input('output',      array('label'=>'成果物'));
						/*
						echo $this->Form->input('output2',     array('label'=>''));
						echo $this->Form->input('output3',     array('label'=>''));
						echo $this->Form->input('output4',     array('label'=>''));
						echo $this->Form->input('output5',     array('label'=>''));
						*/
					?>
				</td>
				<td valign="top">
					<?php

                                                echo $this->Form->label(
                                                        'company_id',
                                                        'SIer'
                                                );  
                                                $options = array(
                                                    1 => 'DELL',
                                                    2 => 'TIS',
                                                    3 => 'SBB',
                                                    4 => 'CSI',
                                                    5 => 'CTC',
                                                    6 => 'KSK',
                                                    7 => 'JBS',
                                                    8 => 'Canon',
                                                    9 => 'Xerox',
                                                   10 => 'その他'
                                                );
                                                echo $this->Form->select('company_id', $options, array(
                                                    'multiple' => 'checkbox'
                                                ));
					?>
				</td>
				<td valign="top">
					<?php
						echo $this->Form->label(
							'members',
							'技術担当'
						);
                                                $options = array(
                                                    1 => '片平雅之',
                                                    2 => '桑村大輔',
                                                    3 => '小林慎太朗',
                                                    4 => '久保功',
                                                    5 => '加藤真紀',
                                                    6 => '島尾喜美子',
                                                    7 => '上田健太',
                                                    8 => '山田貴之',
                                                    9 => '松上矩子',
                                                   10 => '柴田茂正',
                                                   11 => 'Ekanayake Janaka',
                                                   12 => '家入一桜',
                                                   13 => '寺田祐未',
                                                   14 => '堀川翔平',
                                                   15 => '栗原恭彦',
                                                );
                                                echo $this->Form->select('members', $options, array(
                                                    'multiple' => 'checkbox',
						    'style' => 'float: left; display: inline'
                                                ));
                                                echo '<br>';

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
			echo $this->Form->button('クリア', array('name' => 'clear', 'type' => 'submit', 'class' => 'btn  btn-primary btn-small'));
			echo '&nbsp;';
			echo $this->Form->button('検索', array('name' => 'search', 'type' => 'submit', 'class' => 'btn  btn-primary btn-small'));
			echo $this->Form->end();
		?>
	</div>
	<div class="pull-right">
		<?php
/*
			echo $this->Html->link(
				__('新規登録'),
				array(
					'action' => 'add'
				),
				array('class' => 'btn btn-primary btn-small')
			);
*/
		?>
		<?php
/*
			echo $this->Html->link(
				__('インポート'),
				array(
					'action' => 'csvImport'
				),
				array('class' => 'btn btn-primary btn-small')
			);
*/
		?>
		<?php
/*
			echo $this->Html->link(
				__('エクスポート'),
				array(
					'action' => 'csvExport'
				),
				array('class' => 'btn btn-primary btn-small')
			);
*/
		?>
	</div>
	<br>
	<br>
	<table cellpadding="0" cellspacing="0">
	<tr>
	    <!--<th><?php echo $this->Paginator->sort('customer_cd', __('案件ID'),          array('url' => $searchword));?></th> -->
		<th><?php echo $this->Paginator->sort('id',          __('ID'),              array('url' => $searchword));?></th>
		<th><?php echo $this->Paginator->sort('Company.company_name', __('SIer'),   array('url' => $searchword));?></th>
                <th><?php echo $this->Paginator->sort('kana',        __('END'),             array('url' => $searchword));?></th>
		<th><?php echo $this->Paginator->sort('name',        __('案件名'),          array('url' => $searchword));?></th>

                <th><?php echo $this->Paginator->sort('Sale.name',   __('営業'),            array('url' => $searchword));?></th>
            <!--<th><?php echo $this->Paginator->sort('Division.name',  __('事業部'),       array('url' => $searchword));?></th> -->
		<th><?php echo $this->Paginator->sort('Member.name', __('技術担当'),        array('url' => $searchword));?></th>

		<th><?php echo $this->Paginator->sort('status',      __('Status'),          array('url' => $searchword));?></th>
		<th><?php echo $this->Paginator->sort('type',        __('形態'),            array('url' => $searchword));?></th>
		<th><?php echo $this->Paginator->sort('progress',    __('進捗'),            array('url' => $searchword));?></th>
		<th><?php echo $this->Paginator->sort('period_start',__('開始'),            array('url' => $searchword));?></th>
		<th><?php echo $this->Paginator->sort('period_end',  __('終了'),            array('url' => $searchword));?></th>

		<!--<th><?php echo $this->Paginator->sort('sagyo',   __('作業'),            array('url' => $searchword));?></th> -->
		<!--<th><?php echo $this->Paginator->sort('output',  __('成果物'),          array('url' => $searchword));?></th> -->
		<th><?php echo $this->Paginator->sort('estimate',    __('見積金額(万円)'),  array('url' => $searchword));?></th>
		<th class="actions"><?php echo __('更新削除');?></th>
	</tr>
	<?php
		foreach ($customers as $customer):

/*
                $tmp = $customer['Customer']['name'];
                if(strstr($tmp, 'XXX')) {
                    echo '<tr bgcolor="#EE0000">';
                }
                else {
                    echo '<tr>';
                }
*/
        ?>

        <tr>

	   <!--	<td><?php echo h($customer['Customer']['customer_cd']);  ?></td> -->
		<td><?php echo h($customer['Customer']['id']);           ?></td>
		<td><?php echo h($customer['Company' ]['company_name']); ?></td> <!-- SIer   -->
                <td><?php echo h($customer['Customer']['kana']);         ?></td> <!-- END    -->
		<td><?php echo h($customer['Customer']['name']);         ?></td> <!-- 案件名 -->

		<td><?php echo h($customer['Sale' ]['name']);            ?></td> <!-- 営業 --> 

		<!--<td>< //?php echo h($customer['Division' ]['name']);     ?></td> --> <!-- 事業部 --> 
		<!--<td>< //?php echo h($customer['Division2']['name']);     ?></td> --> <!-- 事業部 --> 
		<!--<td>< //?php echo h($customer['Division3']['name']);     ?></td> --> <!-- 事業部 --> 

		<td><?php echo h($customer['Member'  ]['name']);         ?></br>
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

		<!--<td><?// php echo h($customer['Customer']['sagyo_15']);        ?></br> -->
		<!--<td><?// php echo h($customer['Customer']['output_15']);       ?></br> -->

		<td><?php echo h($customer['Customer']['status'  ]);     ?></td>
		<td><?php echo h($customer['Customer']['type'    ]);     ?></td>
		<td><?php echo h($customer['Customer']['progress']) . '%';     ?></td>
		<td><?php echo h($customer['Customer']['period_start']); ?></td>
		<td><?php echo h($customer['Customer']['period_end'  ]); ?></td>
		<td><?php echo h($customer['Customer']['estimate']);     ?></td>
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
					__('更新'),
					array('action' => 'edit', $customer['Customer']['id']),
					array('class' => 'btn btn-primary btn-small')
				);
			?>
			<?php
				/** 削除ボタン */
				echo $this->Form->postLink(
					__('削除'),
					array('action' => 'delete', $customer['Customer']['id']),
					array('class' => 'btn btn-danger btn-small'),
					__('削除してもよろしいですか？ # %s?', $customer['Customer']['id'])
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
