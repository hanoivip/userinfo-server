<?php

namespace App;


use Laravel\Passport\HasApiTokens;
use Hanoivip\Userinfo\User as BaseUser;

class User extends BaseUser
{
    use HasApiTokens;

}
