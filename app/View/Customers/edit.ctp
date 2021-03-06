<div class="customers form">
    <?php
        echo $this->Html->script( 'jquery-1.7.2min');
        /** Sutara **/
        echo $this->Html->script( 'Sutara/jquery.addInputArea.4.4');
        echo $this->Html->script( 'Sutara/sample');
    ?>

    <?php echo $this->Form->create('Customer', array('class' => 'form-horizontal'));?>
        <fieldset>
            <legend><?php echo __('案件情報編集'); ?></legend>
    
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
                        '<font color="red">*</font> 営業担当',
                        array('class' => 'control-label', 'for' => 'sale_id')
                    );
                    echo $this->Form->input(
                        'sale_id',
                        array(
                            'label'   => false,
                            'type'    => 'select',
                            'options' => $sale,
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
                    echo $this->Form->label(
                        'sagyo',
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
    
                    if (  $customers[0]['Customer']['sagyo_0'] != '' ) {
                        echo $this->Form->input( 'sagyo_0',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['sagyo_1'] != '' ) {
                        echo $this->Form->input( 'sagyo_1',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['sagyo_2'] != '' ) {
                        echo $this->Form->input( 'sagyo_2',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['sagyo_3'] != '' ) {
                        echo $this->Form->input( 'sagyo_3',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['sagyo_4'] != '' ) {
                        echo $this->Form->input( 'sagyo_4',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['sagyo_5'] != '' ) {
                        echo $this->Form->input( 'sagyo_5',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['sagyo_6'] != '' ) {
                        echo $this->Form->input( 'sagyo_6',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['sagyo_7'] != '' ) {
                        echo $this->Form->input( 'sagyo_7',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['sagyo_8'] != '' ) {
                        echo $this->Form->input( 'sagyo_8',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['sagyo_9'] != '' ) {
                        echo $this->Form->input( 'sagyo_9',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['sagyo_10'] != '' ) {
                        echo $this->Form->input( 'sagyo_10',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['sagyo_11'] != '' ) {
                        echo $this->Form->input( 'sagyo_11',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['sagyo_12'] != '' ) {
                        echo $this->Form->input( 'sagyo_12',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['sagyo_13'] != '' ) {
                        echo $this->Form->input( 'sagyo_13',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['sagyo_14'] != '' ) {
                        echo $this->Form->input( 'sagyo_14',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                ?>
            </div>
    
            <div class="control-group">
                <?php
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
    
                    if (  $customers[0]['Customer']['output_0'] != '' ) {
                        echo $this->Form->input( 'output_0',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['output_1'] != '' ) {
                        echo $this->Form->input( 'output_1',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['output_2'] != '' ) {
                        echo $this->Form->input( 'output_2',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['output_3'] != '' ) {
                        echo $this->Form->input( 'output_3',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['output_4'] != '' ) {
                        echo $this->Form->input( 'output_4',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['output_5'] != '' ) {
                        echo $this->Form->input( 'output_5',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['output_6'] != '' ) {
                        echo $this->Form->input( 'output_6',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['output_7'] != '' ) {
                        echo $this->Form->input( 'output_7',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['output_8'] != '' ) {
                        echo $this->Form->input( 'output_8',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['output_9'] != '' ) {
                        echo $this->Form->input( 'output_9',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['output_10'] != '' ) {
                        echo $this->Form->input( 'output_10',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['output_11'] != '' ) {
                        echo $this->Form->input( 'output_11',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['output_12'] != '' ) {
                        echo $this->Form->input( 'output_12',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['output_13'] != '' ) {
                        echo $this->Form->input( 'output_13',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
                    if (  $customers[0]['Customer']['output_14'] != '' ) {
                        echo $this->Form->input( 'output_14',
                            array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
                        );
                    }
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
                    echo $this->Form->input( 'about',
                        array('label' => false, 'class' => 'input-xlarge', 'div' => array('class' => 'controls'))
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
                         '<font color="red">*</font> 進捗 (%)',
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

    <!-- font color="red">*</font> がついている項目はかならず入力してください。-->
    <div class="form-actions">
        <?php
            echo $this->Form->button('更新', array('class' => 'btn btn-primary'));
            echo " ";
            echo $this->Html->link(
                __('戻る'),
                array('action' => 'index'),
                array('class' => 'btn')
            );
            echo " ";
            echo $this->Form->postLink(
                 __('削除'),
                 array('action' => 'delete', $customers[0]['Customer']['id']),
                 array('class' => 'btn btn-danger btn-small'),
                 __('削除してもよろしいですか？ # %s?', $customers[0]['Customer']['id'])
            );
        ?>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
