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
            if(!array_key_exists($backhalf, $model->siteList)) {
                return view('nothing');
            } else {
                $site = $model->siteList[$backhalf];
                $paid = ($site['paid'] === true && $site['exp'] > strtotime('now')) ? true : false;

                $data['site'] = $site;
                $data['paid'] = $paid;

                return view('app', $data);
            }
        }
    }

    public function generateExpiredTime()
    {
        print_r(strtotime('+6 months'));
    }
}
