<?php
namespace App\Test;

use App\User;

class UserTest extends \PHPUnit\Framework\TestCase {
	public function testUserHello() {
		$user = new User();
		self::assertStringContainsString(
			"Hello",
			$user->getName("Gheorghina")
		);
	}
}