<?php
App::uses('PasswordType', 'Model');

/**
 * PasswordType Test Case
 *
 */
class PasswordTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.password_type', 'app.service', 'app.site', 'app.client', 'app.password');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PasswordType = ClassRegistry::init('PasswordType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PasswordType);

		parent::tearDown();
	}

}
