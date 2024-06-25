<?php namespace App\Models;

class SiteListModel
{
    private $db;
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getSiteList(string $backhalf)
    {
        return $this->db->table('site_list')
                    ->getWhere(['site_code' => $backhalf])
                    ->getResult()[0];
    }

    public function checkSite(string $backhalf)
    {
        return $this->db->table('site_list')
                    ->getWhere(['site_code' => $backhalf])
                    ->getNumRows() > 0;
    }
}