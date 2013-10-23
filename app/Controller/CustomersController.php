<?php
App::uses('AppController', 'Controller');

/** HelperをControllerで使用する */
App::import('Helper', 'Csv');

/**
 * Customers Controller
 *
 * @property Customer $Customer
 */
class CustomersController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Csv');

/**
 * Module name
 *
 * @var string
 */
	public $name = 'Customers';

/**
 * Use Model
 *
 * @var array
 */
	public $uses = array(
		'Customer',
		'Company',
		'Member',
		'Member2',
		'Member3',
		'Member4',
		'Member5',
	);

/**
 * Paginate setting
 *
 * @var array
 */
	public $paginate = array(
		//'order' => 'Customer.customer_cd ASC',
		'order' => 'Customer.id ASC',
		'limit' => 10,
	);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		/** Ajaxの場合、処理を行わない */
		if (!$this->RequestHandler->isAjax()) {
			/** POST値がある場合は検索処理を行う */
			$option = array();
	                $sql_store = '';
			$flag  = 0;
			$searchword = array();
			$lasttrade_start = null;
			$lasttrade_end   = null;

			/** リクエストデータがある場合、ページ以外のパラメータがある場合は検索処理 */
			if (!empty($this->data) || count($this->passedArgs) > 1) {
				if (!isset($this->request->data['clear'])) {
					/** 検索ボタンを押下した場合 */
					if (isset($this->request->data['search']) || isset($this->request->data['freeword'])) {
						$searchword = $this->request->data['Customer'];
					} else {
						/** パラメータが検索ワード */
						// ???
						foreach ($this->passedArgs as $argkey => $argvalue) {
							if ($argkey != 'sort' && $argkey != 'direction' && $argkey != 'page') {
								if ($argkey != 'lasttrade_start' && $argkey != 'lasttrade_end') {
									$searchword[$argkey] = urlencode($argvalue);
								} else {
									$searchword[$argkey]['year' ] = urlencode($argvalue['year']);
									$searchword[$argkey]['month'] = urlencode($argvalue['month']);
									$searchword[$argkey]['day'  ] = urlencode($argvalue['day']);
								}
							}
						}
						/** フォームに値を格納するため、リクエストに代入 */
						//*************************************************
						//*************************************************
						//*************************************************
						$this->request->data['Customer'] = $searchword;
						//*************************************************
						//*************************************************
						//*************************************************
					}

					if (isset($searchword['freeword'])) {
						/** 全文検索処理 */
						if (!empty($searchword['freeword'])) {
							$keywords = trim($searchword['freeword']);
							$option = array(
								'OR' => array(
									"MATCH(Customer.customer_cd) AGAINST('".$keywords."')",
									"MATCH(Customer.name)  AGAINST('".$keywords."')",
									"MATCH(Customer.kana)  AGAINST('".$keywords."')",
									"MATCH(Company.company_name) AGAINST('".$keywords."')",
								)
							);
						}
					} else {
						/** 案件情報の検索処理 */
						foreach ($searchword as $search_key => $search_value) {
							if ($search_key != 'sort' && $search_key != 'direction' && $search_key != 'page') {
								if (isset($search_value) && $search_value != '') {

									// 案件ID
									if (strstr($search_key, 'customer_cd')) {
										$sql = '';
										$sql .= "(`Customer`.`customer_cd` LIKE '%${search_value}%') OR ";
										$sql = substr($sql, 0, -3);

										if ( $flag != 0 ) {
										    $sql_store .= ' AND ';
										}
										$sql_store .= "($sql)";
										$sql_store .= ' ';
										$flag = 1;
									}

									// 案件名
									if (strstr($search_key, 'name')) {
										$sql = '';
										$sql .= "(`Customer`.`name` LIKE '%${search_value}%') OR ";
										$sql = substr($sql, 0, -3);

										if ( $flag != 0 ) {
										    $sql_store .= ' AND ';
										}
										$sql_store .= "($sql)";
										$sql_store .= ' ';
										$flag = 1;
									}

									// 案件カナ
									if (strstr($search_key, 'kana')) {
										$sql = '';
										$sql .= "(`Customer`.`kana` LIKE '%${search_value}%') OR ";
										$sql = substr($sql, 0, -3);

										if ( $flag != 0 ) {
										    $sql_store .= ' AND ';
										}
										$sql_store .= "($sql)";
										$sql_store .= ' ';
										$flag = 1;
									}

									if (strstr($search_key, 'company_id')) {
										$sql = '';
                                                                                foreach ( $search_value as $key => $val ) {
										    $sql .= "(`Customer`.`company_id` LIKE '%${val}%') OR ";
										}
										$sql = substr($sql, 0, -3);
										if ( $flag != 0 ) {
										    $sql_store .= ' AND ';
										}
										$sql_store .= "($sql)";
										$sql_store .= ' ';
										$flag = 1;
									}


									if(strstr($search_key, 'members')) {
										$sql = '';
                                                                                foreach ( $search_value as $key => $val ) {

										    //varcharの場合
										    //$sql .= "(`Customer`.`member_id` LIKE '%${val}%') OR ";

										    //intの場合
										    $sql .= "(`Customer`.`member_id`  = ${val}) OR ";
										    $sql .= "(`Customer`.`member2_id` = ${val}) OR ";
										    $sql .= "(`Customer`.`member3_id` = ${val}) OR ";
										    $sql .= "(`Customer`.`member4_id` = ${val}) OR ";
										    $sql .= "(`Customer`.`member5_id` = ${val}) OR ";
										}
										$sql = substr($sql, 0, -3);

										if ( $flag != 0 ) {
										    $sql_store .= ' AND ';
										}
										$sql_store .= "($sql)";
										$sql_store .= ' ';
										$flag = 1;

                                                                        } 

									// 作業
									if (strstr($search_key, 'sagyo')) {
										$sql = '';
										$sql .= "(`Customer`.`sagyo_0` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_1` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_2` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_3` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_4` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_5` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_6` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_7` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_8` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_10` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_11` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_12` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_13` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_14` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_15` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_16` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_17` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_18` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`sagyo_19` LIKE '%${search_value}%') OR ";
										$sql = substr($sql, 0, -3);

										if ( $flag != 0 ) {
										    $sql_store .= ' AND ';
										}
										$sql_store .= "($sql)";
										$sql_store .= ' ';
										$flag = 1;
									}
									// 成果物
									if (strstr($search_key, 'output')) {
										$sql = '';
										$sql .= "(`Customer`.`output_0` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_1` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_2` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_3` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_4` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_5` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_6` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_7` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_8` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_10` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_11` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_12` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_13` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_14` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_15` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_16` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_17` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_18` LIKE '%${search_value}%') OR ";
										$sql .= "(`Customer`.`output_19` LIKE '%${search_value}%') OR ";
										$sql = substr($sql, 0, -3);

										if ( $flag != 0 ) {
										    $sql_store .= ' AND ';
										}
										$sql_store .= "($sql)";
										$sql_store .= ' ';
										$flag = 1;
									}

									// 見積金額
									if(strstr($search_key, 'estimate')) {
										$sql = '';
                                                                                foreach ( $search_value as $key => $val ) {
										    if ( $val == '001' ) {
										        $sql .= "(`Customer`.`estimate` BETWEEN 0 AND 99) OR ";
										    }
										    elseif ( $val == '002' ) {
										        $sql .= "(`Customer`.`estimate` BETWEEN 100 AND 199) OR ";
										    }
										    elseif ( $val == '003' ) {
										        $sql .= "(`Customer`.`estimate` BETWEEN 200 AND 499) OR ";
										    }
										    elseif ( $val == '004' ) {
										        $sql .= "(`Customer`.`estimate` BETWEEN 500 AND 999) OR ";
										    }
										    elseif ( $val == '005' ) {
										        $sql .= "(`Customer`.`estimate` BETWEEN 1000 AND 9999) OR ";
										    }
										    else { 
										    }
										}
										$sql = substr($sql, 0, -3);
										if ( $flag != 0 ) {
										    $sql_store .= ' AND ';
										}
										$sql_store .= "($sql)";
										$sql_store .= ' ';
										$flag = 1;
                                                                        }

									if(strstr($search_key, 'lasttrade')) {
										/** 日付の検索 */
										$year  = strval($search_value['year' ]);
										$month = strval($search_value['month']);
										$day   = strval($search_value['day'  ]);
										
										if (!empty($year) && !empty($month) && !empty($day)) {
											/** 日付が存在するか確認 */
											if (checkdate($month, $day, $year)) {
												if(strstr($search_key, '_start')) {
													$lasttrade_start = $year.'-'.$month.'-'.$day;
												} elseif(strstr($search_key, '_end')) {
													$lasttrade_end = $year.'-'.$month.'-'.$day;
												}
											}
										}
										//$flag = 1;
                                                                        }

									/** その他の項目は部分一致 */
									if ( $flag != 0 ) {
	                                                   		    $option = array(
                                                                                "OR" => array(
								            	    ($sql_store)
                                                   		                )
									    );
									}
									else {
                                                                            //$option[$search_key.' LIKE'] = "%{$search_value}%";
									}
								}
								else {
					                            /** 検索内容のクリア */
                            				    	    //$this->redirect(array('action' => 'index'));
                                                                    //$option[$search_key.' LIKE'] = "%{$search_value}%";
								}
							}
						}

						/** 開始日と終了日を検索する */
						if ($lasttrade_start || $lasttrade_end) {
							if ($lasttrade_start == null) {
								$lasttrade_start =  date('Y')-100 .'-'. date('m') .'-'. date('d');
							}
							if ($lasttrade_end == null) {
								$lasttrade_end =  date('Y')+100 .'-'. date('m') .'-'. date('d');
							}

							//if ( $flag == 1 && $flag2 == 1 ) {
							if ( $flag != 0 ) {
							    $sql_store .= ' AND ';
							}
							$sql = '';
						        $sql .= "(`Customer`.`lasttrade` BETWEEN  '${lasttrade_start}' AND '${lasttrade_end}') ";
							$sql_store .= "($sql)";
							$sql_store .= ' ';
	                                                $option = array(
                                                            "OR" => array(
							        ($sql_store)
                                                   	    )
							);
					        }
					}
				} 
				else {
					/** 検索内容のクリア */
					$this->redirect(array('action' => 'index'));
				}
			}

			/** テンプレートに出力 */
			$this->set('searchword', $searchword);
			$this->set('customers', $this->paginate($option));
		}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Customer->create();

			/*
			// 20130525 start
                        $mode = implode(",", $this->request->data['Customer']['prefecture_id']); 
                        $this->request->data['Customer']['prefecture_id'] = $mode;
			// 20130525 end
			*/

			if ($this->Customer->save($this->request->data)) {
				$this->Session->setFlash(__('案件情報の登録に成功しました。'), 'Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('案件情報の登録に失敗しました。'));
			}
		}

		/** 会社情報を取得する */
		$companies = $this->Company->find('all');
		/** プルダウン用にデータを整える */
		$companies = set::Combine($companies, '{n}.Company.id', '{n}.Company.company_name');

		/** 技術担当を取得する */
		$members = $this->Member->find('all');
		/** プルダウン用にデータを整える */
		$members = set::Combine($members, '{n}.Member.id', '{n}.Member.name');

		/** テンプレートに出力 */
		$this->set('company', $companies);
		$this->set('member',  $members);

	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Customer->id = $id;
		if (!$this->Customer->exists()) {
			throw new NotFoundException(__('Invalid customer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

		        // 20130525 start
                        //$mode = implode(",", $this->request->data['Customer']['prefecture_id']); 
                        //$this->request->data['Customer']['prefecture_id'] = $mode;
		        // 20130525 end
		        if ( ($this->request->data['Customer']['output_0']) == '' ) {
		            $this->data['Customer']['output_0'] == null;
		        }

                        // UPDATE
			if ($this->Customer->save($this->request->data)) {
				$this->Session->setFlash(__('案件情報の登録に成功しました。'), 'Flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('案件情報の登録に失敗しました。'));
			}
		} else {
			$this->request->data = $this->Customer->read(null, $id);
		}

/*
		        if ( ($this->request->data['Customer']['member2_id']) == '' ) {
		            $this->data['Customer']['member2_id'] == null;
		        }
		        if ( ($this->request->data['Customer']['member3_id']) == '' ) {
		            $this->data['Customer']['member3_id'] == null;
		        }
		        if ( ($this->request->data['Customer']['member4_id']) == '' ) {
		            $this->data['Customer']['member4_id'] == null;
		        }
		        if ( ($this->request->data['Customer']['member5_id']) == '' ) {
		            $this->data['Customer']['member5_id'] == null;
		        }
*/

		/** 会社情報を取得する */
		$companies = $this->Company->find('all');
                //echo print_r($companies);
		/** プルダウン用にデータを整える */
		$companies = set::Combine($companies, '{n}.Company.id', '{n}.Company.company_name');

		/** 技術主担当を取得する */
		$members = $this->Member->find('all');
		/** プルダウン用にデータを整える */
		$members = set::Combine($members, '{n}.Member.id', '{n}.Member.name');

		$this->Customer->id = $id;
                $customers = $this->Customer->findAllById($id);

		/** Viewに値を渡す */
		$this->set('company', $companies);
		$this->set('member',  $members);
		$this->set('customers',  $customers);
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Customer->id = $id;
		if (!$this->Customer->exists()) {
			throw new NotFoundException(__('Invalid customer'));
		}
		if ($this->Customer->delete()) {
			$this->Session->setFlash(__('案件情報を削除しました。'), 'Flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('案件情報の削除に失敗しました。'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * csvImport method
 *
 * @return void
 */
	public function csvImport(){
		if (!empty($this->data)) {
			/** アップロードファイル情報格納 */
			$up_file = $this->data['Customer']['file_name']['tmp_name']; 
			$fileName = TMP.'csv/'.$this->data['Customer']['file_name']['name'];
			
			/** アップロードされたファイルかどうか確認を行う */
			if (is_uploaded_file($up_file)){
				/** アップロードされたテンポラリファイルを、出力ファイル名で指定されたパスにコピーする */
				move_uploaded_file($up_file, $fileName);
				
				try {
					
					/** CSVファイルを読み込みデータをインポートする */
					$csvData = file($fileName, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
					
					/** 読み込んだデータのインポートが成功した数のカウント用 */
					$csvSuccessCnt = 0;
					
					foreach($csvData as $key => $line){
						/** 一行目は飛ばす */
						if ($key != 0) {
							/** 区切り文字で分割する */
							$record = split(',', $line);
							mb_language('Japanese');
							/** インポートするデータをコンバートする */
							$data = array( 
								'customer_cd'   => mb_convert_encoding(html_entity_decode($record[0]),  'UTF-8', 'auto'),
								'name'          => mb_convert_encoding(html_entity_decode($record[1]),  'UTF-8', 'auto'), 
								'kana'          => mb_convert_encoding(html_entity_decode($record[2]),  'UTF-8', 'auto'), 
								'company_id'    => mb_convert_encoding(html_entity_decode($record[3]),  'UTF-8', 'auto'), 
								'member_id'     => mb_convert_encoding(html_entity_decode($record[4]),  'UTF-8', 'auto'), 
								'estimate'      => mb_convert_encoding(html_entity_decode($record[5]),  'UTF-8', 'auto'), 
								'output'        => mb_convert_encoding(html_entity_decode($record[6]),  'UTF-8', 'auto'), 
								'lasttrade'     => mb_convert_encoding(html_entity_decode($record[7]),  'UTF-8', 'auto'), 
							);
							/** データを登録する */
							$this->Customer->create(); 
							if ($this->Customer->save($data)){
								$csvSuccessCnt++;
							}
						} 
					}
				} catch(Exception $e) {
				}
			}
			$this->Session->setFlash((count($csvData) - 1).'件中'.$csvSuccessCnt.'件のCSVデータのインポートが完了しました。', 'Flash/success');
		}
	}

/**
 * csvCustomer method
 *
 * @return string
 */
	private function csvCustomer() {
		/** ファイル名を指定する */
		$filename = date('YmdHis');
		
		/** 案件情報を取得する */
		$th = array('customer_cd', 'name', 'kana', 'company_id', 'member_id', 'estimate', 'output', 'lasttrade');
		$td = $this->Customer->find('all', array('fields' => $th));

		/** 情報を結合する */
		$table = compact('th', 'td');
		
		/** CsvHelperを使用してCsv出力する */
		$this->Csv = new CsvHelper();
		$this->Csv->addRow($th);
		foreach ($table['td'] as $t) {
			$this->Csv->addField(h($t['Customer']['customer_cd']));
			$this->Csv->addField(h($t['Customer']['name']));
			$this->Csv->addField(h($t['Customer']['kana']));
			$this->Csv->addField(h($t['Customer']['company_id']));
			$this->Csv->addField(h($t['Customer']['member_id']));
			$this->Csv->addField(h($t['Customer']['estimate']));
			$this->Csv->addField(h($t['Customer']['output']));
			$this->Csv->addField(h($t['Customer']['lasttrade']));
			$this->Csv->endRow();
		}
		$this->Csv->setFilename($filename);
		echo $this->Csv->render('utf-8');
	}
	
/**
 * csvExport method
 *
 * @return boolean
 */
	public function csvExport() {
		/** レイアウトを使用しない */
		$this->autoRender = false;
		$this->layout = false;

		$this->csvCustomer();
		return ;
	}

/**
 * ajaxList method
 *
 * @return void
 */
	public function ajaxList($ctp = null) {
		/** デバッグ情報出力を抑制 */
		Configure::write('debug', 0);
		
		/** レイアウトを使用しない */
		$this->autoRender = false;
		$this->layout = false;

		/** テンプレートの指定 */
		if (empty($ctp)) {
			$renderCtp = 'list';
		} else {
			/** ディレクトリを取得 */
			$listDirname = explode('-', $ctp);
			$ctpNumber = str_replace('list', '', $listDirname[0]);
			if (!empty($ctpNumber)) {
				$renderCtp = $ctpNumber."/".$ctp;
			} else {
				$renderCtp = $ctp;
			}
		}
		$option   = array();
		$datalist = array();
		$page     = null;
		$lasttrade_start = null;
		$lasttrade_end   = null;
		$twitter  = false;
		$facebook = false;

		/** Ajaxによる呼び出しかどうかの確認 */
		if ($this->RequestHandler->isAjax()) {
			foreach ($this->request->data as $search_key => $search_value) {
				if (isset($search_value) && $search_value != '') {
					if (strstr($search_key, 'prefecture_id')) { // && strpos($search_key, 'prefecture') == false) {
                                                //$mode = implode(",", $this->request->data['Customer']['prefecture_id']); 
                                                $mode = implode(",", $search_value);
						$option[$search_key.' LIKE'] = "%{$mode}%";
						/** _idを含む場合、完全一致にする */
	    				        //$option[$search_key] = $search_value;

			//		} elseif (strstr($search_key, 'prefecture')) {
			//		    //explode(",",$search_value);
                        //                   $option[$search_key.' LIKE'] = "%{$search_value}%";

					} elseif(strstr($search_key, 'page')) {
						$this->paginate['page'] = $search_value;
					} elseif(strstr($search_key, 'lasttrade')) {
						/** 日付の検索 */
						$year  = strval($search_value['year']);
						$month = strval($search_value['month']);
						$day   = strval($search_value['day']);
						
						if (!empty($year) && !empty($month) && !empty($day)) {
							/** 日付が存在するか確認 */
							if (checkdate($month, $day, $year)) {
								if(strstr($search_key, '_start')) {
									$lasttrade_start = $year.'-'.$month.'-'.$day;
								} elseif(strstr($search_key, '_end')) {
									$lasttrade_end = $year.'-'.$month.'-'.$day;
								}
							}
						}
					} else {
						/** その他の項目は部分一致 */
						$option[$search_key.' LIKE'] = "%{$search_value}%";
					}
				}
			}

			/** 開始日と終了日を検索する */
			if ($lasttrade_start || $lasttrade_end) {
				if ($lasttrade_start == null) {
					$lasttrade_start =  date('Y')-100 .'-'. date('m') .'-'. date('d');
				}
				if ($lasttrade_end == null) {
					$lasttrade_end =  date('Y')+100 .'-'. date('m') .'-'. date('d');
				}
				$option['lasttrade BETWEEN ? AND ?'] = array($lasttrade_start, $lasttrade_end);
			}
			
			/** データを取得 */
			$ajax_views = $this->paginate($option);

			/** TwitterIDが無い場合、Twitterを使用しない */
			if (!empty($this->Twitter)) {
				$twitter = true;
			}

			/** FacebookIDが無い場合、Facebookを使用しない */
			if (!empty($this->Facebook)) {
				$facebook = true;
			}

			/** テーブルのViewを文字列として取得 */
			foreach ($ajax_views as $ajax_view) {
				$this->set('customer', $ajax_view);
				$this->set('twitter',  $twitter);
				$this->set('facebook', $facebook);
				$datalist[] = strval($this->render($renderCtp));
			}
			
			/** ページのViewを文字列として取得 */
			$this->set('customers', $ajax_views);
			$page = strval($this->render('ajax_paginate'));
			
			/** JSONで返す */
			$this->response->type('json');
			$this->response->body(
				json_encode(
					array(
						'result' => true,
						'list'   => $datalist,
						'page'   => $page
					)
				)
			);
			return $this->response;
		}
	}
}
