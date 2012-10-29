<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');

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

        'User_Password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
		
		'User_Email' => array(
            'valid' => array(
				'rule' => array('email'),
				'message' => 'Please enter a valid email',
				'allowEmpty' => false
			)
		)	
    );


/**
 * Password Hashing method
 */	
	public function beforeSave($options = array()) {
    	if (isset($this->data[$this->alias]['User_Password'])) {
        	$this->data[$this->alias]['User_Password'] = AuthComponent::password($this->data[$this->alias]['User_Password']);
    	}
    	return true;
	}

}
