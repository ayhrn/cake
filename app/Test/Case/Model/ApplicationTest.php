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
                // applications owned by User with id 1
		$this->assertTrue($this->Application->isOwnedBy(1,1));
                $this->assertTrue($this->Application->isOwnedBy(3,1));
                // application owned by other user
                $this->assertTrue($this->Application->isOwnedBy(6,4));
                // Expected false
                $this->assertFalse($this->Application->isOwnedBy(1,9));
	}

}
