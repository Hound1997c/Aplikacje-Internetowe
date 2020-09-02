<?php
 class ProductsController extends AppController {
 var $name = 'Products';
 var $helpers = array('Html','Form');
 
 function index() {
	//$this->Session->destroy();
	$this->set('Products', $this->Product->find('all'));
	$this->set('SessionBucket', $this->Session->read('Session.bucket'));
	$this->set('SessionString', $this->Session->read('Session.string'));
 }

 
 function toBucket($name) {
		$curBucket = $this->Session->read('Session.bucket');
		$bucketArray = explode(" ", $curBucket);
		//$this->Session->write('Session.string',$curBucket);
		//$newBucket = $newBucket . " " . $name;
		//$this->Session->write('Session.bucket',$newBucket);
		if(in_array($name, $bucketArray)){
			$this->Flash->set($name. ' juz masz w koszyku');
		}
		else{
			//array_push($bucketArray,$name);
			//$newBucket = implode(",",$bucketArray);
			$newBucket = $curBucket . " " . $name;
			$this->Flash->set($name. ' dodany do koszyka');
			$this->Session->write('Session.bucket',$newBucket);
			
		}	
		$this->redirect(array('action' => 'index'));
	 }
	 function deleteBucket($name){
		 $this->Flash->set($name. ' usuniety z koszyka');
		 $this->redirect(array('action' => 'index'));
	 }
	 
	 function buyBucket(){
		 $curBucket = $this->Session->read('Session.bucket');
		 $newBucket = "";
		 $this->Session->write('Session.bucket',$newBucket);
		 /*$bucketArray = explode(",", $curBucket);
		 foreach($bucketArray as $prod){
			if(!preg_match('/[^A-Za-z0-9]/', $prod)){
				
			}
		}*/
		 $this->Flash->set($name. ' koszyk kupiony');
		 $this->redirect(array('action' => 'index'));
	 }
 
 }
?>
