<?php
/**
 * AppSystem Fixture
 */
class AppSystemFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'app_system';

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'AppSystem');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '3',
			'app_id' => '3',
			'os_id' => '4'
		),
		array(
			'id' => '4',
			'app_id' => '3',
			'os_id' => '1'
		),
		array(
			'id' => '5',
			'app_id' => '3',
			'os_id' => '3'
		),
		array(
			'id' => '7',
			'app_id' => '1',
			'os_id' => '2'
		),
		array(
			'id' => '8',
			'app_id' => '4',
			'os_id' => '2'
		),
		array(
			'id' => '9',
			'app_id' => '5',
			'os_id' => '1'
		),
		array(
			'id' => '10',
			'app_id' => '5',
			'os_id' => '2'
		),
		array(
			'id' => '11',
			'app_id' => '5',
			'os_id' => '7'
		),
		array(
			'id' => '12',
			'app_id' => '6',
			'os_id' => '6'
		),
		array(
			'id' => '14',
			'app_id' => '7',
			'os_id' => '8'
		),
	);

}
