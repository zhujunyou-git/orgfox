<?php
namespace Library;
class Base {
    public $datas = array();
    public $dataReturn = array(
        'status' => 0,
        'info'   => '操作失败!',
        'data'   => ''
    );
    public $obj;
    public function __construct() {

    }
}