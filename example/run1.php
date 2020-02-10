<?php

require_once __DIR__ . '/../vendor/autoload.php';


class Sample extends ReactOrm\Model
{
    protected $id;
    protected $value;
    protected $image;
    protected $updated_at;
    protected $client_ip;
}


$mysql = new ReactOrm\Adapter\Mysql;


