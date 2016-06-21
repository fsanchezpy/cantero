<?php
App::uses('EntidadesTipo', 'Model');

/**
 * EntidadesTipo Test Case
 */
class EntidadesTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.entidades_tipo',
		'app.entidade',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EntidadesTipo = ClassRegistry::init('EntidadesTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EntidadesTipo);

		parent::tearDown();
	}

}
