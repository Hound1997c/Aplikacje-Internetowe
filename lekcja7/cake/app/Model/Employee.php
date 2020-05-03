<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 */
class Employee extends AppModel {
	var $validate = array(
		'nazwisko' => array('rule' => 'notBlank'),
		'etat' => array('rule' => 'notBlank'),
		'placa_pod' => array(
			'numeric' => array(
				'rule' => array('range', -1, 2001),
				'message' => 'Please enter a number between -1 and 2001'
			),
		),
	);
	//var $validate1 = array('etat' => array('rule' => 'notBlank'));
}
