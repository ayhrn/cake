<?php
/**
 * OSystem Fixture
 */
class OSystemFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'o_system';

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'OSystem');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Jelly Bean',
			'fournisseur_id' => '1'
		),
		array(
			'id' => '2',
			'name' => 'KitKat',
			'fournisseur_id' => '1'
		),
		array(
			'id' => '3',
			'name' => 'Windows 10',
			'fournisseur_id' => '2'
		),
		array(
			'id' => '4',
			'name' => 'Windows RT',
			'fournisseur_id' => '2'
		),
		array(
			'id' => '5',
			'name' => 'Anti Ubi',
			'fournisseur_id' => '4'
		),
		array(
			'id' => '6',
			'name' => 'Windows XP',
			'fournisseur_id' => '2'
		),
		array(
			'id' => '7',
			'name' => 'Marshmallow',
			'fournisseur_id' => '1'
		),
		array(
			'id' => '8',
			'name' => 'Lollipop',
			'fournisseur_id' => '1'
		),
	);

}
