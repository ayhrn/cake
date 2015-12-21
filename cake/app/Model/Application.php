<?php
App::uses('AppModel', 'Model');
/**
 * Application Model
 *
 * @property Users $Users
 * @property Category $Category
 * @property OSystem $OSystem
 */
class Application extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'app_name';

        public function isOwnedBy($post, $user) {
            return $this->field('id', array('id' => $post, 'users_id' => $user)) !== false;
        }    
        
        public $validate = array(
        'app_name' => array(
                'notBlank' => array(
                        'rule' => array('notBlank'),
                        //'message' => 'Your custom message here',
                        //'allowEmpty' => false,
                        //'required' => false,
                        //'last' => false, // Stop validation after this rule
                        //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
        ),
        'app_description' => array(
                'notBlank' => array(
                        'rule' => array('notBlank'),
                        //'message' => 'Your custom message here',
                        //'allowEmpty' => false,
                        //'required' => false,
                        //'last' => false, // Stop validation after this rule
                        //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
        ),
    );
        
//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Users' => array(
			'className' => 'Users',
			'foreignKey' => 'users_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'Subcategory' => array(
			'className' => 'Subcategory',
			'foreignKey' => 'subcategory_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'OSystem' => array(
			'className' => 'OSystem',
			'joinTable' => 'app_system',
			'foreignKey' => 'app_id',
			'associationForeignKey' => 'os_id',
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
