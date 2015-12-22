<?php
App::uses('Application', 'Model');

/**
 * Application Test Case
 */
class ApplicationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.application',
		'app.users',
		'app.subcategory',
		'app.category',
		'app.o_system',
		'app.fournisseur',
		'app.app_system'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Application = ClassRegistry::init('Application');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Application);

		parent::tearDown();
	}

/**
 * testIsOwnedBy method
 *
 * @return void
 */
	public function testIsOwnedBy() {
		$this->markTestIncomplete('testIsOwnedBy not implemented.');
	}

}
