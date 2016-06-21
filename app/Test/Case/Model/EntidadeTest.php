<?php
App::uses('Entidade', 'Model');

/**
 * Entidade Test Case
 */
class EntidadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.entidade',
		'app.user',
		'app.entidades_tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Entidade = ClassRegistry::init('Entidade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Entidade);

		parent::tearDown();
	}

}
