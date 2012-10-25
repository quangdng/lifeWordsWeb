<?php
App::uses('Buddy', 'Model');

/**
 * Buddy Test Case
 *
 */
class BuddyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.buddy'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Buddy = ClassRegistry::init('Buddy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Buddy);

		parent::tearDown();
	}

}
