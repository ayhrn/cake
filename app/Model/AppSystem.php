<?php
App::uses('AppModel', 'Model');
/**
 * AppSystem Model
 *
 * @property App $App
 * @property Os $Os
 */
class AppSystem extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'app_system';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Application' => array(
			'className' => 'Application',
			'foreignKey' => 'app_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'OSystem' => array(
			'className' => 'OSystem',
			'foreignKey' => 'os_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
