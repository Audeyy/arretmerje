<?php

namespace App\controllers\user;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;

class Login {

  public function httpGetMethod(Application $app) {
    return $app['twig']->render('login.twig');
  }

  public function httpPostMethod(Application $app, Request $request) {
    return $app['twig']->render(
      'login.twig',
      [
        'email' => $request->get('email'),
        'password' => $request->get('password'),
      ]
    );
  }

}
