<?php
App::uses('Password', 'Model');

/**
 * Password Test Case
 *
 */
class PasswordTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.password', 'app.service', 'app.password_type', 'app.site', 'app.client');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Password = ClassRegistry::init('Password');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Password);

		parent::tearDown();
	}

}
