<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;

class User extends Entity
{
	// Make all fields mass assignable except for primary key field "id".
	protected $_accessible = [
			'*' => true,
			'id' => false
	];
}