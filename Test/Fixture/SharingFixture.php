<?php
/**
 * SharingFixture
 *
 */
class SharingFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sharing';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'User_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'Card_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'User_ID' => array('column' => 'User_ID', 'unique' => 0),
			'Card_ID' => array('column' => 'Card_ID', 'unique' => 0)
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
			'Card_ID' => 1
		),
	);

}
