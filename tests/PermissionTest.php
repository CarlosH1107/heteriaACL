<?php

namespace Heteria\Shinobi\Tests;

use Heteria\Shinobi\Tests\User;
use Heteria\Shinobi\Exceptions\PermissionNotFoundException;

class PermissionTest extends TestCase
{
    /** @test */
    public function a_non_existant_permission_should_throw_an_exception()
    {
        $this->expectException(PermissionNotFoundException::class);

        $user = factory(User::class)->create();
        
        $user->hasPermissionTo('i.dont.exist');
    }
}
