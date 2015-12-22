<?php
/**
 * Application Fixture
 */
class ApplicationFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Application');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'app_name' => 'Evernota',
			'date_submitted' => '2015-03-04',
			'app_description' => 'Prends pleins de notes',
			'users_id' => '1',
			'category_id' => '5',
			'subcategory_id' => '3'
		),
		array(
			'id' => '3',
			'app_name' => 'asddddddddddd',
			'date_submitted' => '2015-10-08',
			'app_description' => 'L\'alphabet pour frustré',
			'users_id' => '1',
			'category_id' => '4',
			'subcategory_id' => '1'
		),
		array(
			'id' => '4',
			'app_name' => 'Robot Cats Attack',
			'date_submitted' => '2011-01-03',
			'app_description' => 'Les chats de se monde résisteront-ils à cette attaque sanglante ?',
			'users_id' => '1',
			'category_id' => '4',
			'subcategory_id' => '2'
		),
		array(
			'id' => '5',
			'app_name' => '123 News',
			'date_submitted' => '2035-01-01',
			'app_description' => '123 News Flash 123',
			'users_id' => '1',
			'category_id' => '5',
			'subcategory_id' => '4'
		),
		array(
			'id' => '6',
			'app_name' => 'Rare Vlad',
			'date_submitted' => '2035-01-01',
			'app_description' => 'Rare Vlad can only be seen once every 1 million app',
			'users_id' => '4',
			'category_id' => '7',
			'subcategory_id' => '11'
		),
		array(
			'id' => '7',
			'app_name' => 'User App',
			'date_submitted' => '2035-01-01',
			'app_description' => 'User application',
			'users_id' => '9',
			'category_id' => '7',
			'subcategory_id' => '10'
		),
		array(
			'id' => '10',
			'app_name' => 'Transit',
			'date_submitted' => '2015-11-12',
			'app_description' => 'abc',
			'users_id' => '4',
			'category_id' => '7',
			'subcategory_id' => '6'
		),
	);

}
