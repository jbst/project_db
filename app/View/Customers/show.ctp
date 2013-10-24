<div class="customers form">
<?php
    echo $this->Html->script( 'jquery-1.7.2min');
?>

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
              <br><font size=2 class="muted">案件名</font>　
	      <br>
                  <?php echo h($customer['Customer']['name']); ?>
              <hr>
              <br><font size=2 class="muted">END   </font>　
	      <br>
                  <?php echo h($customer['Customer']['kana']); ?>
              <hr>
              <br><font size=2 class="muted">会社名</font>　
	      <br>
	          <?php echo h($customer['Company']['company_name']); ?>
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
            </div>
            <div class="span6">
              <br><font size=2 class="muted">概要</font>
            </div>
          </div>
        <?php endforeach; ?>

	</fieldset>

</div>
