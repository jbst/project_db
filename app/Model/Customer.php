<?php
App::uses('AppModel', 'Model');
/**
 * Customer Model
 *
 * @property Company $Company
 * @property Prefecture $Prefecture
 */
class Customer extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'customer_cd' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => '顧客コードを入力してください',
			),
			'maxlength' => array(
				'rule' => array('maxlength',10),
				'message' => '10文字以内にしてください',
			),
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => '数値を入力してください',
			),
		),
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => '顧客名を入力してください',
			),
			'maxlength' => array(
				'rule' => array('maxlength',50),
				'message' => '50文字以内にしてください',
			),
		),
		'kana' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => '顧客名を入力してください',
			),
			'maxlength' => array(
				'rule' => array('maxlength',50),
				'message' => '50文字以内にしてください',
			),
		),
		'company_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => '会社名を選択してください',
			),
		),
		'created' => array(
		),
		'modified' => array(
		),
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
			'conditions' => '',
			'fields' => 'id, company_name',
			'order' => ''
		),
		'Member' => array(
			'className' => 'Member',
			'foreignKey' => 'member_id',
			'conditions' => '',
			'fields' => 'id, name',
			'order' => ''
		),
		'Member2' => array(
			'className' => 'Member',
			'foreignKey' => 'member2_id',
			'conditions' => '',
			'fields' => 'id, name',
			'order' => ''
		),
		'Member3' => array(
			'className' => 'Member',
			'foreignKey' => 'member3_id',
			'conditions' => '',
			'fields' => 'id, name',
			'order' => ''
		),
		'Member4' => array(
			'className' => 'Member',
			'foreignKey' => 'member4_id',
			'conditions' => '',
			'fields' => 'id, name',
			'order' => ''
		),
		'Member5' => array(
			'className' => 'Member',
			'foreignKey' => 'member5_id',
			'conditions' => '',
			'fields' => 'id, name',
			'order' => ''
		),
		'Sale' => array(
			'className' => 'Sale',
			'foreignKey' => 'sale_id',
			'conditions' => '',
			'fields' => 'id, name',
			'order' => ''
		),
	);

}
