<?php
/**
 * BuddyFixture
 *
 */
class BuddyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Buddy_1' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'Buddy_2' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'Friend' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1),
		'indexes' => array(
			'Buddy_1' => array('column' => 'Buddy_1', 'unique' => 0),
			'Buddy_2' => array('column' => 'Buddy_2', 'unique' => 0)
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
			'Buddy_1' => 1,
			'Buddy_2' => 1,
			'Friend' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
