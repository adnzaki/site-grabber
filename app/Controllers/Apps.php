<?php

namespace App\Controllers;

use App\Models\SiteListModel;

class Apps extends BaseController
{
    public function index(string $backhalf = '')
    {
        if(empty($backhalf)) {
            return view('nothing');
        } else {           
            $model = new SiteListModel;
            $data['site'] = $model->siteList[$backhalf];
            return view('app', $data);
        }
    }
}
