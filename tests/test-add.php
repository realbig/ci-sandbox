<?php

class AddTest extends WP_UnitTestCase {

	public function test_works() {
		$this->assertEquals( add_the_crap( 1, 1 ), 2 );
	}

	public function test_comesOutPositive() {
		$this->assertTrue( add_the_crap( 1, 6 ) > 0 );
	}
}

