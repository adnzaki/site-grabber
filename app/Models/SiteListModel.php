<?php namespace App\Models;

class SiteListModel
{
    private $db;
    public function __construct()
    {
        $this->db = db_connect();
    }

    public $siteList = [
        'erapor-pgn7'   => [
            'url'   => 'https://9225-101-255-168-6.ngrok-free.app/login.php',
            'title' => 'eRapor SDN Pengasinan VII',
            'paid'  => true,
            'exp'   => '1724216077'
        ],
        'dapodik-pgn7'  => [
            'url'   => 'https://31a7-101-255-168-6.ngrok-free.app',
            'title' => 'Dapodik SDN Pengasinan VII',
            'paid'  => true,
            'exp'   => '1724216077'
        ],
    ];

    public function getSiteList(string $backhalf)
    {
        return $this->db->table('site_list')
                    ->getWhere(['site_code' => $backhalf])
                    ->getResult()[0];
    }
}