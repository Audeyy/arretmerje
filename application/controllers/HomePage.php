<?php

namespace App\controllers;

use Silex\Application;

class HomePage {

  public function httpGetMethod(Application $app) {
    return $app['twig']->render('home.twig');
  }

}
