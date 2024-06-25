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
            if($model->checkSite($backhalf)) {
                $site = $model->getSiteList($backhalf);
                $paid = ($site->paid === '1' && $site->exp > strtotime('now')) ? true : false;
    
                $data['site'] = $site;
                $data['paid'] = $paid;
    
                return view('app', $data);
            } else {
                return view('nothing');
            }
        }
    }

    public function generateExpiredTime()
    {
        print_r(strtotime('+6 months'));
    }
}
