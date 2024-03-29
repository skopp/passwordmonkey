<?php
App::uses('Aro', 'Model');

/**
 * Aro Test Case
 *
 */
class AroTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.aro', 'app.aco', 'app.aros_aco', 'app.permission');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Aro = ClassRegistry::init('Aro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aro);

		parent::tearDown();
	}

}
