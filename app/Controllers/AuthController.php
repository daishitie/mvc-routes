<?php

namespace App\Controllers;

use App\Libraries\Controller;
use App\Libraries\Request;
use App\Models\RegisterModel;

/**
 * Auth controller
 *
 * @author daishitie <daishitie@otakunity.net>
 * @copyright 2020 daishitie
 */
class AuthController extends Controller
{
    /**
     * Auth login
     */
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    /**
     * Auth register
     *
     * @param Request $request
     */
    public function register($request)
    {
        $register = new RegisterModel();

        if ($request->isPost()) {
            $register->loadData($request->getBody());

            if ($register->validate() && $register->register()) {
                return 'success';
            }

            $this->setLayout('auth');
            return $this->render('register', [
                'model' => $register
            ]);
        }

        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $register
        ]);
    }
}
