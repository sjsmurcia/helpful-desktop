<?php

namespace app\controllers;

use app\models\viewsModel;

class viewsController extends viewsModel
{
    public function getviewController($view)
    {
        if ($view != "") {
            $respuesta = $this->getViewsModels($view);
        } else {
            $respuesta = "login";
        }
        return $respuesta;
    }
}
