<?php
/**
 * Subcategory Fixture
 */
class SubcategoryFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Subcategory');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Action',
			'category_id' => '4'
		),
		array(
			'id' => '2',
			'name' => 'Aventure',
			'category_id' => '4'
		),
		array(
			'id' => '3',
			'name' => 'RSS Reader',
			'category_id' => '5'
		),
		array(
			'id' => '4',
			'name' => 'Magazines',
			'category_id' => '5'
		),
		array(
			'id' => '5',
			'name' => 'Music Player',
			'category_id' => '6'
		),
		array(
			'id' => '6',
			'name' => 'Math',
			'category_id' => '7'
		),
		array(
			'id' => '7',
			'name' => 'Cloud',
			'category_id' => '8'
		),
		array(
			'id' => '8',
			'name' => 'Developer',
			'category_id' => '7'
		),
		array(
			'id' => '9',
			'name' => 'Widgets',
			'category_id' => '7'
		),
		array(
			'id' => '10',
			'name' => 'Transport',
			'category_id' => '7'
		),
	);

}
