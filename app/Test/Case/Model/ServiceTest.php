<?php
App::uses('Service', 'Model');

/**
 * Service Test Case
 *
 */
class ServiceTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.service', 'app.password_type', 'app.site', 'app.client', 'app.password');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Service = ClassRegistry::init('Service');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Service);

		parent::tearDown();
	}

}
