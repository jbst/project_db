<div class="customers form">
    <?php echo $this->Html->script( 'jquery-1.7.2min'); ?>
    <?php echo $this->Form->create('Customer', array('class' => 'form-horizontal'));?>
    <fieldset>
        <legend><?php echo __('案件情報閲覧'); ?></legend>
    
        <?php foreach ($customers as $customer): ?>
            <div class="row-fluid show-grid">
                <div class="span6"><h3>Basic Info</h3></div>
                <div class="span6"><h3>About     </h3></div>
            </div>

            <div class="row-fluid show-grid">
                <div class="span6"> 
                    <br><font size=2 class="muted">SIer</font>　
                    <br>
                    <?php echo h($customer['Company']['company_name']); ?>
                    <hr>
                    <br><font size=2 class="muted">END   </font>　
                    <br>
                    <?php echo h($customer['Customer']['kana']); ?>
                    <hr>
                    <br><font size=2 class="muted">案件名</font>　
                    <br>
                    <?php echo h($customer['Customer']['name']); ?>
                    <hr>
                    <br><font size=2 class="muted">営業担当</font>　
                    <br>
                    <?php echo h($customer['Sale']['name']); ?>
                    <hr>
                    <br><font size=2 class="muted">技術担当</font>　
                    <br>
                    <?php echo h($customer['Member' ]['name']); ?>
                    <?php echo h($customer['Member2']['name']); ?>
                    <?php echo h($customer['Member3']['name']); ?>
                    <?php echo h($customer['Member4']['name']); ?>
                    <?php echo h($customer['Member5']['name']); ?>
                    <hr>
                    <br><font size=2 class="muted">見積金額(単位:万)</font>　
                    <br>
                    <?php echo h($customer['Customer']['estimate']); ?>
                    <hr>
                    <br><font size=2 class="muted">作業</font>　
                    <br>
                    <?php 
                        if (isset($customer['Customer']['sagyo_15']) && ($customer['Customer']['sagyo_15'] != '-')) {
                            echo h($customer['Customer']['sagyo_15' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_16']) && ($customer['Customer']['sagyo_16'] != '-')) {
                            echo h($customer['Customer']['sagyo_16' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_17']) && ($customer['Customer']['sagyo_17'] != '-')) {
                            echo h($customer['Customer']['sagyo_17' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_18']) && ($customer['Customer']['sagyo_18'] != '-')) {
                            echo h($customer['Customer']['sagyo_18' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_19']) && ($customer['Customer']['sagyo_19'] != '-')) {
                            echo h($customer['Customer']['sagyo_19' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_1']) && ($customer['Customer']['sagyo_1'] != '-')) {
                            echo h($customer['Customer']['sagyo_1' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_2']) && ($customer['Customer']['sagyo_2'] != '-')) {
                            echo h($customer['Customer']['sagyo_2' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_3']) && ($customer['Customer']['sagyo_3'] != '-')) {
                            echo h($customer['Customer']['sagyo_3' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_4']) && ($customer['Customer']['sagyo_4'] != '-')) {
                            echo h($customer['Customer']['sagyo_4' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_5']) && ($customer['Customer']['sagyo_5'] != '-')) {
                            echo h($customer['Customer']['sagyo_5' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_6']) && ($customer['Customer']['sagyo_6'] != '-')) {
                            echo h($customer['Customer']['sagyo_6' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_7']) && ($customer['Customer']['sagyo_7'] != '-')) {
                            echo h($customer['Customer']['sagyo_7' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_8']) && ($customer['Customer']['sagyo_8'] != '-')) {
                            echo h($customer['Customer']['sagyo_8' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_9']) && ($customer['Customer']['sagyo_9'] != '-')) {
                            echo h($customer['Customer']['sagyo_9' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_10']) && ($customer['Customer']['sagyo_10'] != '-')) {
                            echo h($customer['Customer']['sagyo_10' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_11']) && ($customer['Customer']['sagyo_11'] != '-')) {
                            echo h($customer['Customer']['sagyo_11' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_12']) && ($customer['Customer']['sagyo_12'] != '-')) {
                            echo h($customer['Customer']['sagyo_12' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_13']) && ($customer['Customer']['sagyo_13'] != '-')) {
                            echo h($customer['Customer']['sagyo_13' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['sagyo_14']) && ($customer['Customer']['sagyo_14'] != '-')) {
                            echo h($customer['Customer']['sagyo_14' ]);
                            echo ', ';
                        }
                    ?>
                    <hr>
                    <br><font size=2 class="muted">成果物</font>　
                    <br>
                    <?php 
                        if (isset($customer['Customer']['output_15']) && ($customer['Customer']['output_15'] != '-')) {
                            echo h($customer['Customer']['output_15' ]); 
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_16']) && ($customer['Customer']['output_16'] != '-')) {
                            echo h($customer['Customer']['output_16' ]); 
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_17']) && ($customer['Customer']['output_17'] != '-')) {
                            echo h($customer['Customer']['output_17' ]); 
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_18']) && ($customer['Customer']['output_18'] != '-')) {
                            echo h($customer['Customer']['output_18' ]); 
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_19']) && ($customer['Customer']['output_19'] != '-')) {
                            echo h($customer['Customer']['output_19' ]); 
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_1']) && ($customer['Customer']['output_1'] != '-')) {
                            echo h($customer['Customer']['output_1' ]); 
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_2']) && ($customer['Customer']['output_2'] != '-')) {
                            echo h($customer['Customer']['output_2' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_3']) && ($customer['Customer']['output_3'] != '-')) {
                            echo h($customer['Customer']['output_3' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_4']) && ($customer['Customer']['output_4'] != '-')) {
                            echo h($customer['Customer']['output_4' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_5']) && ($customer['Customer']['output_5'] != '-')) {
                            echo h($customer['Customer']['output_5' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_6']) && ($customer['Customer']['output_6'] != '-')) {
                            echo h($customer['Customer']['output_6' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_7']) && ($customer['Customer']['output_7'] != '-')) {
                            echo h($customer['Customer']['output_7' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_8']) && ($customer['Customer']['output_8'] != '-')) {
                            echo h($customer['Customer']['output_8' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_9']) && ($customer['Customer']['output_9'] != '-')) {
                            echo h($customer['Customer']['output_9' ]);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_10']) && ($customer['Customer']['output_10'] != '-')) {
                            echo h($customer['Customer']['output_10']);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_11']) && ($customer['Customer']['output_11'] != '-')) {
                            echo h($customer['Customer']['output_11']);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_12']) && ($customer['Customer']['output_12'] != '-')) {
                            echo h($customer['Customer']['output_12']);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_13']) && ($customer['Customer']['output_13'] != '-')) {
                            echo h($customer['Customer']['output_13']);
                            echo ', ';
                        }
                        if (isset($customer['Customer']['output_14']) && ($customer['Customer']['output_14'] != '-')) {
                            echo h($customer['Customer']['output_14']);
                        }
                    ?>
                    <hr>
                    <br><font size=2 class="muted">作成日(見積)</font>
                    <br>
                    <br><?php echo h($customer['Customer']['lasttrade']); ?>
                    <hr>
                    <br><font size=2 class="muted">Status</font>
                    <br>
    
                    <?php 
                        // Status
                        $status = ($customer['Customer']['status']);
                        if ( $status == 'F' ) {
                            $status = "F: 検収";
                        } elseif ( $status == 'W' ) {
                            $status = "W: 作業中";
                        } elseif ( $status == 'A' ) {
                            $status = "A: 作業中";
                        } elseif ( $status == 'B' ) {
                            $status = "B: 高確度";
                        } elseif ( $status == 'C' ) {
                            $status = "C: 見積提出済";
                        } elseif ( $status == 'D' ) {
                            $status = "D: 口頭レベル";
                        } elseif ( $status == 'E' ) {
                            $status = "E: 矢中";
                        } elseif ( $status == 'T' ) {
                            $status = "T: 継続";
                        } else {
                            $status = "-";
                        }
                    ?>
                    <br><?php echo h($status); ?>
                    <hr>
                    <?php 
                    // Type
                        $type = ($customer['Customer']['type']);
                        if ( $type == 'U' ) {
                            $type = "U: 請負";
                        } elseif ( $type == 'J' ) {
                            $type = "J: 常駐";
                        } elseif ( $type == 'S' ) {
                            $type = "S: SWAT";
                        } else {
                            $type = "-";
                        }
                    ?>
                    <br><font size=2 class="muted">形態</font>
                    <br>
                    <br><?php echo h($type); ?>
                    <hr>
                    <br><font size=2 class="muted">進捗</font>
                    <br>
                    <br><?php echo h($customer['Customer']['progress']); ?>
                    <hr>
                    <br><font size=2 class="muted">開始</font>
                    <br>
                    <br><?php echo h($customer['Customer']['period_start']); ?>
                    <hr>
                    <br><font size=2 class="muted">終了</font>
                    <br>
                    <br><?php echo h($customer['Customer']['period_end']); ?>
                    <hr>
                </div>

                <div class="span6">
                    <br><font size=2 class="muted">概要</font>
                    <br><?php echo nl2br(h($customer['Customer']['about'])); ?>
                    <br>
                    <br><font size=2 class="muted">Also on</font>
                </div>

            </div>
        <?php endforeach; ?>
    </fieldset>
    
    <div class="form-actions">
        <?php
            /** editへ */
            echo $this->Html->link(
                __('編集'),
                array('action' => 'edit', $customer['Customer']['id']),
                array('class' => 'btn btn-primary btn-small')
            );
            echo $this->Html->link(
                __('戻る'),
                array('action' => 'index'),
                array('class' => 'btn')
            );
        ?>
    </div>

</div>
