<?php
App::uses('AppModel', 'Model');
/**
 * Card Model
 *
 */
class Card extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Cards';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'Card_ID';

/**
 * isOwnedBy function
 *
 * @params string User_ID
 * @params string Card_Owner
 * @return boolean confirmation
 */
	public function isOwnedBy($User_ID, $Card_Owner) {
    	return $this->field('id', array('id' => $Card_Owner, 'user_id' => $User_ID)) === $post;
	}
}
