<?php
App::uses('Fournisseur', 'Model');

/**
 * Fournisseur Test Case
 */
class FournisseurTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fournisseur',
		'app.o_system',
		'app.application',
		'app.users',
		'app.subcategory',
		'app.category',
		'app.app_system'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fournisseur = ClassRegistry::init('Fournisseur');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fournisseur);

		parent::tearDown();
                
		// Remove Uploaded file
		@unlink(WWW_ROOT.'uploads'.DS.'TestFile.jpg');
	}

	public function testEmptyForm() {
		// Build the data to save
		$data = array(
			'Fournisseur' => array(
				'name' => '',
			)
		);

		// Attempt to save
		$result = $this->Fournisseur->save($data);

		// Test save failed
		$this->assertFalse($result);
	}
        
        public function testFormWithEmptyFile() {
        // Build the data to save along with an empty file
        $data = array('Fournisseur' => array(
                'name' => 'HOKUM',
                'filename' => array(
				'name' => '',
				'type' => '',
				'tmp_name' => '',
				'error' => 4,
				'size' => 0,
			)
		));
        
        // Attempt to save
        $result = $this->Fournisseur->save($data);

        $this->assertArrayHasKey('Fournisseur', $result);
        // Get the count in the DB
        $result = $this->Fournisseur->find('count', array(
                'conditions' => array(
                        'Fournisseur.name' => 'HOKUM',
                ),
        ));
        
        // Test DB entry
        $this->assertEqual($result, 1);
    }

}
