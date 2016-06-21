<?php
App::uses('AppController', 'Controller');
/**
 * Paises Controller
 *
 * @property Paise $Paise
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class PaisesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');

}
