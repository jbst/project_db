<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 */
class Member extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'members_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'members_idを入力してください',
			)
		),
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'nameを入力してください',
			)
		),
	);

/**
 * beforeSave method
 *
 * @var string
 */
        /*
	public function beforeSave() {
		if (isset($this->data[$this->alias]['name'])) {
			$this->data[$this->alias]['name'] =
				AuthComponent::password($this->data[$this->alias]['name']);
		}
		if (isset($this->data[$this->alias]['members_id'])) {
			$this->data[$this->alias]['members_id'] =
				AuthComponent::password($this->data[$this->alias]['members_id']);
		}
		return true;
	}
        */


}

