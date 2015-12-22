<?php
/**
 * Category Fixture
 */
class CategoryFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Category');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '4',
			'name' => 'Games'
		),
		array(
			'id' => '5',
			'name' => 'News'
		),
		array(
			'id' => '6',
			'name' => 'Music'
		),
		array(
			'id' => '7',
			'name' => 'Utilities'
		),
		array(
			'id' => '8',
			'name' => 'Productivity'
		),
	);

}
