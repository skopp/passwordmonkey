<?php
App::uses('Site', 'Model');

/**
 * Site Test Case
 *
 */
class SiteTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.site', 'app.client', 'app.service', 'app.password_type', 'app.password');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Site = ClassRegistry::init('Site');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Site);

		parent::tearDown();
	}

}