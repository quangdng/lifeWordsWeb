<?php
/**
 * CardFixture
 *
 */
class CardFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Card_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'Card_Text' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Card_Photo' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Card_Sound' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Card_Sound_Time' => array('type' => 'integer', 'null' => true, 'default' => null),
		'Card_Voice' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Card_Voice_Time' => array('type' => 'integer', 'null' => true, 'default' => null),
		'Card_Length' => array('type' => 'integer', 'null' => true, 'default' => null),
		'Card_Date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'Card_Owner' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'Card_URL' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Card_ID', 'unique' => 1),
			'Card_Owner' => array('column' => 'Card_Owner', 'unique' => 0)
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
			'Card_ID' => 1,
			'Card_Text' => 'Lorem ipsum dolor sit amet',
			'Card_Photo' => 'Lorem ipsum dolor sit amet',
			'Card_Sound' => 'Lorem ipsum dolor sit amet',
			'Card_Sound_Time' => 1,
			'Card_Voice' => 'Lorem ipsum dolor sit amet',
			'Card_Voice_Time' => 1,
			'Card_Length' => 1,
			'Card_Date' => '2012-10-24 04:02:37',
			'Card_Owner' => 1,
			'Card_URL' => 'Lorem ipsum dolor sit amet'
		),
	);

}
