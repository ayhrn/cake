<?php
/**
 * User Fixture
 */
class UsersFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'User');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'username' => 'adminnn',
			'password' => '$2a$10$2vcw.ee1dZD4Pbr9tyo5tO9VoCVOYfnHmijp.RF5Y7q9cIn4BQc/i',
			'role' => 'admin',
			'email' => 'vladasd@hotmail.com',
			'created' => '2015-10-07',
			'modified' => '2015-10-08',
			'active' => '1'
		),
		array(
			'id' => '4',
			'username' => 'Vlad',
			'password' => '$2a$10$vvc5/zpGiyzPxFFfmg3vMOeyeWoaCl8cbJgLgz9Gi5rL0eUD6STZO',
			'role' => 'admin',
			'email' => '',
			'created' => '2015-10-07',
			'modified' => '2015-10-07',
			'active' => '1'
		),
		array(
			'id' => '5',
			'username' => 'fran',
			'password' => '$2a$10$MtnmVxaiJEkOOxY4gxpKXuvF0cZ0/0QI6aVTZbDDb2BNJbf7oqsmC',
			'role' => 'admin',
			'email' => 'fran@fr.fr',
			'created' => '2015-10-07',
			'modified' => '2015-10-08',
			'active' => '1'
		),
		array(
			'id' => '6',
			'username' => 'eng',
			'password' => '$2a$10$dqHC25gEKfqaVCqWdgTXr.ovv95ksoePcWab2rvBQ/eDEIcHkyWuK',
			'role' => 'user',
			'email' => 'eng@eng.com',
			'created' => '2015-10-07',
			'modified' => '2015-10-09',
			'active' => '1'
		),
		array(
			'id' => '8',
			'username' => 'Vian',
			'password' => '$2a$10$PL3IZEP9polnTVyQlcAzheEbd6VH4MNEYrVpxnRtsXyQkp97isfmy',
			'role' => 'user',
			'email' => 'vian@vian.com',
			'created' => '2015-10-08',
			'modified' => '2015-10-09',
			'active' => '0'
		),
		array(
			'id' => '9',
			'username' => 'user',
			'password' => '$2a$10$4UGM8bLazsuTaz1wHJbtQucwRIqwKYjWodCW6LL0YbBHeNXVpzY/2',
			'role' => 'user',
			'email' => 'vladkimkim@gmail.com',
			'created' => '2015-11-13',
			'modified' => '2015-11-13',
			'active' => '0'
		),
	);

}
