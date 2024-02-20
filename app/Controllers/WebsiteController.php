<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\WebsiteModel;

class WebsiteController extends BaseController
{
    public function signup_form(){
        $model = new WebsiteModel();
        print_r($model->findAll());
        return view('signup_form/signup_form');
    }
}
