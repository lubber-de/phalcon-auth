<?php

namespace Sinbadxiii\PhalconAuth\Tests\Users;

use Sinbadxiii\PhalconAuth\Contracts\AuthenticatableInterface;
use Sinbadxiii\PhalconAuth\Contracts\RememberingInterface;
use Sinbadxiii\PhalconAuth\Contracts\RememberTokenterface;
use Sinbadxiii\PhalconAuth\RememberToken\RememberTokenModel;

/**
 * Class UserStub
 * @package Sinbadxiii\PhalconAuth\Tests\Users
 */
class UserModelStub implements AuthenticatableInterface, RememberingInterface
{
    public int $id;
    public int $password;
    public RememberTokenterface $remember_token;

    public function getAuthIdentifier()
    {
        $this->id;
    }

    public function getAuthPassword()
    {
        $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken(RememberTokenterface $value)
    {
        $this->remember_token = $value;

        return $this;
    }
}