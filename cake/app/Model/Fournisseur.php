<?php
App::uses('AppModel', 'Model');
/**
 * Fournisseur Model
 *
 * @property OSystem $OSystem
 */
class Fournisseur extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
                'filename' => array(
                        // http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::uploadError
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Something went wrong with the file upload',
				'required' => FALSE,
				'allowEmpty' => TRUE,
			),
			// http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::mimeType
			'mimeType' => array(
				'rule' => array('mimeType', array('image/gif','image/png','image/jpg','image/jpeg')),
				'message' => 'Invalid file, only images allowed',
				'required' => FALSE,
				'allowEmpty' => TRUE,
			),
                        'filesize' => array(
                             'rule' => array('filesize', '<=', '1MB'),
                             'message' => 'Article image must be less then 1MB',
                             'allowEmpty' => TRUE,
                         ),
			// custom callback to deal with the file upload
			'processImageUpload' => array(
				'rule' => 'processImageUpload',
				'message' => 'Something went wrong processing your file',
				'allowEmpty' => TRUE,
			)
                )
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

        /**
         * hasMany associations
         *
         * @var array
         */
	public $hasMany = array(
		'OSystem' => array(
			'className' => 'OSystem',
			'foreignKey' => 'fournisseur_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

        /**
        * Process the Upload
        * @param array $check
        * @return boolean
        */
       public function processImageUpload($check=array()) {
       //    debug($check); die();
               // deal with uploaded file
               if (!empty($check['filename']['tmp_name'])) {

                       // check file is uploaded
                       if (!is_uploaded_file($check['filename']['tmp_name'])) {
                               return FALSE;
                       }

                       // build full filename
                       $filename = WWW_ROOT . 'img' . DS . 'uploads'. DS . $check['filename']['name'];

                       // @todo check for duplicate filename

                       // try moving file
                       if (!move_uploaded_file($check['filename']['tmp_name'], $filename)) {
                               return FALSE;

                       // file successfully uploaded
                       } else {
                               // save the file path relative from WWW_ROOT e.g. uploads/example_filename.jpg
                               $this->data[$this->alias]['filename'] = 'uploads' . '/' . $check['filename']['name'];
                       }
               }

               return TRUE;
       }

        
}
