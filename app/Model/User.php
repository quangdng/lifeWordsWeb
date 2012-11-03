<?php
App::uses('AppModel', 'Model');
//App::uses('AuthComponent', 'Controller/Component');

/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Users';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'User_ID';
	
/**
 * Basic Validation for User attributes
 */
	public $validate = array(

        'User_Email' => array(
            'valid' => array(
				'rule' => array('email'),
				'message' => 'Please enter a valid email',
				'allowEmpty' => false
			),
			'Unique User Email'=> array(
				'rule' => array('isUnique'),
				'message' => 'This Email is already taken by another user'
			)
		),
		
		'User_Password' => array(
            'Not empty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Please enter your password'
            ),
			'Match passwords' => array(
				'rule' =>'matchPasswords',
				'message'=>'Your passwords do not match'
			)
        ),
		
		'User_Password_Confirmation' => array(
			'Not empty' => array(
			'rule' => 'notEmpty',
			'message' => 'Please confirm your password'
			)
		),
		
		'User_Nickname' => array(
			'Not empty' => array(
			'rule' => 'notEmpty',
			'message' => 'Please write your nickname'
			)
		)
    );
	
	public function matchPasswords($data) {
		if ($data['User_Password'] ==$this->data['User']['User_Password_Confirmation']){
		return true;	
		}
		$this->invalidate('User_Password_Confirmation', 'Your passwords do not match');
		return false;
	}


/**
 * Password Hashing method
 */	
	public function beforeSave($options = array()) {
    	if (isset($this->data[$this->alias]['User_Password'])) {
        	$this->data[$this->alias]['User_Password'] = sha1($this->data[$this->alias]['User_Password']);
    	}
    	return true;
	}

}
