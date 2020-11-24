<?php

namespace App\Controllers;

use App\Libraries\Application;
use App\Libraries\Controller;
use App\Libraries\Request;

/**
 * Site controller
 *
 * @author daishitie <daishitie@otakunity.net>
 * @copyright 2020 daishitie
 */
class SiteController extends Controller
{
    public function home()
    {
        $params = ['name' => 'daishitie'];

        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        return 'submit contact info';
    }
}
