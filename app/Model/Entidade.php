<?php
App::uses('AppModel', 'Model');
/**
 * Entidade Model
 *
 * @property User $User
 * @property EntidadesTipo $EntidadesTipo
 */
class Entidade extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EntidadesTipo' => array(
			'className' => 'EntidadesTipo',
			'foreignKey' => 'entidades_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
