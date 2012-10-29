<?php
App::uses('AppModel', 'Model');
/**
 * Buddy Model
 *
 */
class Buddy extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Buddies';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'Friend';

}
