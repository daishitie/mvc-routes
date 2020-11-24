<?php

namespace App\Models;

use App\Libraries\Model;

/**
 * Register model
 *
 * @author daishitie <daishitie@otakunity.net>
 * @copyright 2020 daishitie
 */
class RegisterModel extends Model
{
    public string $name = '';
    public string $username = '';
    public string $email = '';
    public string $password = '';
    public string $confirmPassword = '';

    public function register()
    {
        echo 'Creating new user';
    }

    public function rules()
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'username' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL], 'password' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }
}
