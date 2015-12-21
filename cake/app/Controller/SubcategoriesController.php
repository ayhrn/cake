<?php
App::uses('AppController', 'Controller');
 
class SubcategoriesController extends AppController {
 
public function getByCategory() {
$category_id = $this->request->data['Application']['category_id'];
 
$subcategories = $this->Subcategory->find('list', array(
'conditions' => array('Subcategory.category_id' => $category_id),
'recursive' => -1
));
 
$this->set('subcategories',$subcategories);
$this->layout = 'ajax';
}
}