<?php
App::uses('AppModel', 'Model');
/**
 * OSystem Model
 *
 * @property Fournisseur $Fournisseur
 */
class OSystem extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'o_system';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Fournisseur' => array(
			'className' => 'Fournisseur',
			'foreignKey' => 'fournisseur_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
	public $hasAndBelongsToMany = array(
		'Application' => array(
			'className' => 'Application',
			'joinTable' => 'app_system',
			'foreignKey' => 'os_id',
			'associationForeignKey' => 'app_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);
}
