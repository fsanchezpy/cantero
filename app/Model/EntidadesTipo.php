<?php
App::uses('AppModel', 'Model');
/**
 * EntidadesTipo Model
 *
 * @property Entidade $Entidade
 */
class EntidadesTipo extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Entidade' => array(
			'className' => 'Entidade',
			'foreignKey' => 'entidades_tipo_id',
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

}
