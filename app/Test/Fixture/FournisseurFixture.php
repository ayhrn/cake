<?php
/**
 * Fournisseur Fixture
 */
class FournisseurFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Fournisseur');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Google',
			'filename' => 'uploads/fourn_bg_01.png'
		),
		array(
			'id' => '2',
			'name' => 'Microsoft',
			'filename' => 'uploads/fourn_bg_02.png'
		),
		array(
			'id' => '3',
			'name' => 'MSI',
			'filename' => 'uploads/fourn_bg_03.png'
		),
		array(
			'id' => '4',
			'name' => 'EA',
			'filename' => 'uploads/fourn_bg_04.png'
		),
	);

}
