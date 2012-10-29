<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'Users';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'User_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'User_Email' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'User_Password' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'User_Profile_Photo' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'User_Nickname' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'User_ID', 'unique' => 1),
			'Unique_Email' => array('column' => 'User_Email', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'User_ID' => 1,
			'User_Email' => 'Lorem ipsum dolor sit amet',
			'User_Password' => 'Lorem ipsum dolor sit amet',
			'User_Profile_Photo' => 'Lorem ipsum dolor sit amet',
			'User_Nickname' => 'Lorem ipsum dolor sit amet'
		),
	);

}
