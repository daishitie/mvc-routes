<?php

namespace App\Controllers;

use App\Libraries\Controller;
use App\Libraries\Request;

/**
 * Auth controller
 *
 * @author daishitie <daishitie@otakunity.net>
 * @copyright 2020 daishitie
 */
class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()) {
            return 'Register process';
        }

        $this->setLayout('auth');
        return $this->render('register');
    }
}
