<div class="customers form">
<?php
    echo $this->Html->script( 'jquery-1.7.2min');

    /** Sutara **/
    echo $this->Html->script( 'Sutara/jquery.addInputArea.4.4');
    echo $this->Html->script( 'Sutara/sample');
?>
<?php echo $this->Form->create('Customer', array('class' => 'form-horizontal'));?>
	<fieldset>
		<legend><?php echo __('案件情報登録'); ?></legend>

		<div class="control-group">
		<?php
			/** 案件名 */
	                echo '<font color="red">*</font> がついている項目はかならず入力してください。<br>';
                        echo '<br><br>';
			echo $this->Form->label(
				'name',
				'<font color="red">*</font> 客件名',
				array('class' => 'control-label', 'for' => 'name')
			);
			echo $this->Form->input(
				'name',
				array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
			);
		?>
		</div>
		<div class="control-group">
		<?php
			/** END */
			echo $this->Form->label(
				'kana',
				'<font color="red">*</font> END',
				array('class' => 'control-label', 'for' => 'kana')
			);
			echo $this->Form->input(
				'kana',
				array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
			);
		?>
		</div>
		<div class="control-group">
		<?php
			/** 会社名 */
			echo $this->Form->label(
				'company_id',
				'<font color="red">*</font> 会社名',
				array('class' => 'control-label', 'for' => 'company_id')
			);
			echo $this->Form->input(
				'company_id',
				array(
					'label'   => false,
					'type'    => 'select',
					'options' => $company,
					'empty'   => '- 選択してください -',
					'class'   => 'input-xlarge',
					'div'     => array('class' => 'controls')
				)
			);
		?>
		</div>
                <div class="control-group">
                <?php
                        /** 営業担当 */
                        echo $this->Form->label(
                                'sale_id',
                                '<font color="red">*</font> 営業',
                                array('class' => 'control-label', 'for' => 'sale_id')
                        );
                        $sales = array(
                            '1' => '坂田',
                            '2' => '田島',
                            '3' => '中田',
                        );
                        echo $this->Form->input(
                                'sale_id',
                                array(
                                        'label'   => false,
                                        'type'    => 'select',
                                        'options' => $sales,
                                        'empty'   => '- 選択してください -',
                                        'class'   => 'input-xlarge',
                                        'div'     => array('class' => 'controls')
                                )
                        );
                ?>
                </div>

		<div class="control-group">
		<?php
			/** 技術担当 */
			echo $this->Form->label(
				'member_id',
				'<font color="red">*</font> 技術担当',
				array('class' => 'control-label', 'for' => 'member_id')
			);
			echo $this->Form->input(
				'member_id',
				array(
					'label'   => false,
					'type'    => 'select',
					'options' => $member,
					'empty'   => '- 選択してください -',
					'class'   => 'input-xlarge',
					'div'     => array('class' => 'controls')
				)
			);
			echo $this->Form->input(
				'member2_id',
				array(
					'label'   => false,
					'type'    => 'select',
					'options' => $member,
					'empty'   => '- 選択してください -',
					'class'   => 'input-xlarge',
					'div'     => array('class' => 'controls')
				)
			);
			echo $this->Form->input(
				'member3_id',
				array(
					'label'   => false,
					'type'    => 'select',
					'options' => $member,
					'empty'   => '- 選択してください -',
					'class'   => 'input-xlarge',
					'div'     => array('class' => 'controls')
				)
			);
			echo $this->Form->input(
				'member4_id',
				array(
					'label'   => false,
					'type'    => 'select',
					'options' => $member,
					'empty'   => '- 選択してください -',
					'class'   => 'input-xlarge',
					'div'     => array('class' => 'controls')
				)
			);
			echo $this->Form->input(
				'member5_id',
				array(
					'label'   => false,
					'type'    => 'select',
					'options' => $member,
					'empty'   => '- 選択してください -',
					'class'   => 'input-xlarge',
					'div'     => array('class' => 'controls')
				)
			);
		?>
		</div>


		<div class="control-group">
		<?php
			/** 見積金額 (単位：万) */
			echo $this->Form->label(
				'estimate',
				'見積金額 (単位：万)',
				array('class' => 'control-label', 'for' => 'estimate')
			);
			echo $this->Form->input(
				'estimate',
				array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
			);
		?>
		</div>

		<div class="control-group">
		<?php
			/** 作業/成果物 */
			echo $this->Form->label(
				'output',
				'作業',
				array('class' => 'control-label', 'for' => 'sagyo_15')
			);
			echo $this->Form->input(
				'sagyo_15',
				array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
			);
			echo $this->Form->input(
				'sagyo_16',
				array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
			);
			echo $this->Form->input(
				'sagyo_17',
				array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
			);
			echo $this->Form->input(
				'sagyo_18',
				array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
			);
			echo $this->Form->input(
				'sagyo_19',
				array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
			);
                        echo ' <div id="list0", class="controls">';
                        echo '     <div class="list0_var">';
                        echo '         <label id_format="data[Customer][sagyo_%d]" for="data[Customer][sagyo_0]" >';
                        echo '         <input id_format="data[Customer][sagyo_%d]" id="data[Customer][sagyo_0]" 
                                          name_format="data[Customer][sagyo_%d]" name="data[Customer][sagyo_0]"
                                          class="input-xlarge" > ';
                        echo '         <button class="list0_del">Delete</button>';
                        echo '     </div>';
                        echo ' </div>';
                        echo ' <div class="controls">';
                        echo '     <input type="button" value="Add" class="list0_add">';
                        echo ' </div>';
		?>
		</div>

		<div class="control-group">
		<?php
			/** 作業/成果物 */
			echo $this->Form->label(
				'output',
				'成果物',
				array('class' => 'control-label', 'for' => 'output_15')
			);
			echo $this->Form->input(
				'output_15',
				array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
			);
			echo $this->Form->input(
				'output_16',
				array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
			);
			echo $this->Form->input(
				'output_17',
				array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
			);
			echo $this->Form->input(
				'output_18',
				array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
			);
			echo $this->Form->input(
				'output_19',
				array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
			);
                        echo ' <div id="list1", class="controls">';
                        echo '     <div class="list1_var">';
                        echo '         <label id_format="data[Customer][output_%d]" for="data[Customer][output_0]" >';
                        echo '         <input id_format="data[Customer][output_%d]" id="data[Customer][output_0]" 
                                          name_format="data[Customer][output_%d]" name="data[Customer][output_0]"
                                          class="input-xlarge" > ';
                        echo '         <button class="list1_del">Delete</button>';
                        echo '     </div>';
                        echo ' </div>';
                        echo ' <div class="controls">';
                        echo '     <input type="button" value="Add" class="list1_add">';
                        echo ' </div>';
		?>
		</div>

		<div class="control-group">
		<?php
			/** 作成日（見積）*/
			echo $this->Form->label(
				'lasttrade',
				'作成日（見積）',
				array('class' => 'control-label', 'for' => 'lasttrade')
			);
			echo $this->Form->input(
				'lasttrade',
				array(
					'label'      => false,
					'type'       => 'date',
					'dateFormat' => 'YMD',
					'minYear'    => date('Y')-5,
					'maxYear'    => date('Y'),
					'monthNames' => false,
					'separator'  => '/',
					'class'      => 'input-small',
					'div'        => array('class' => 'controls')
				)
			);
		?>
		</div>

		<div class="control-group">
		<?php
			/** About*/
			echo $this->Form->label(
				'about',
				'概要',
				array('class' => 'control-label', 'for' => 'about')
			);
			echo $this->Form->input(
				'about',
				array('label' => false, 'class' => 'text', 'div' => array('class' => 'controls'))
			);
		?>
		</div>

               <div class="control-group">
                <?php
                        /** Status */
                        echo $this->Form->label(
                                'status',
                                '<font color="red">*</font> Status',
                                array('class' => 'control-label', 'for' => 'status')
                        );
                        $status = array(
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
                                        'options' => $status,
                                        'empty'   => '- 選択してください -',
                                        'class'   => 'input-xlarge',
                                        'div'     => array('class' => 'controls')
                                )
                        );
                ?>
                </div>

               <div class="control-group">
                <?php
                        /** 形態 */
                        echo $this->Form->label(
                                'status',
                                '<font color="red">*</font> 形態',
                                array('class' => 'control-label', 'for' => 'type')
                        );

                        $type = array(
                            'U' => 'U: 請負',
                            'J' => 'J: 常駐',
                            'S' => 'S: SWAT'
                        );
                        echo $this->Form->input(
                                'type',
                                array(
                                        'label'   => false,
                                        'type'    => 'select',
                                        'options' => $type,
                                        'empty'   => '- 選択してください -',
                                        'class'   => 'input-xlarge',
                                        'div'     => array('class' => 'controls')
                                )
                        );
                ?>
                </div>

                <div class="control-group">
                <?php
                        /** 進捗 */
                        echo $this->Form->label(
                                'progress',
                                '<font color="red">*</font> 進捗',
                                array('class' => 'control-label', 'for' => 'progress')
                        );
                        echo $this->Form->input(
                                'progress',
                                array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                ?>
                </div>

                <div class="control-group">
                <?php
                        /** 開始*/
                        echo $this->Form->label(
                                'period_start',
                                '開始',
                                array('class' => 'control-label', 'for' => 'period_start')
                        );
                        echo $this->Form->input(
                                'period_start',
                                array(
                                        'label'      => false,
                                        'type'       => 'date',
                                        'dateFormat' => 'YMD',
                                        'minYear'    => date('Y')-5,
                                        'maxYear'    => date('Y'),
                                        'monthNames' => false,
                                        'separator'  => '/',
                                        'class'      => 'input-small',
                                        'div'        => array('class' => 'controls')
                                )
                        );
                ?>
                </div>
                <div class="control-group">
                <?php
                        /** 終了*/
                        echo $this->Form->label(
                                'period_end',
                                '終了',
                                array('class' => 'control-label', 'for' => 'period_end')
                        );
                        echo $this->Form->input(
                                'period_end',
                                array(
                                        'label'      => false,
                                        'type'       => 'date',
                                        'dateFormat' => 'YMD',
                                        'minYear'    => date('Y')-5,
                                        'maxYear'    => date('Y'),
                                        'monthNames' => false,
                                        'separator'  => '/',
                                        'class'      => 'input-small',
                                        'div'        => array('class' => 'controls')
                                )
                        );
                ?>
                </div>


	</fieldset>

	<div class="form-actions">
	<?php
		echo $this->Form->button('登録', array('class' => 'btn btn-primary'));
		echo $this->Html->link(
			__('キャンセル'),
			array('action' => 'index'),
			array('class' => 'btn')
		);
	?>
	</div>
	<?php
		echo $this->Form->end();
	?>
</div>
