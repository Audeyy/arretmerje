<?php

namespace App\controllers\user;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;

class CreateUser {

  public function httpGetMethod(Application $app) {
    return $app['twig']->render('createUser.twig');
  }

  public function httpPostMethod(Application $app, Request $request) {
    return $app['twig']->render(
      'createUser.twig',
      [
        'firstname' => $request->get('firstname'),
        'lastname' => $request->get('lastname'),
        'email' => $request->get('email'),
      ]
    );
  }

}
