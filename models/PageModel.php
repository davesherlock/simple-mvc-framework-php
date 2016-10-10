<?php


class PageModel extends ProjectClass
{

    public function __construct()
    {
        parent::__construct();
        //$this->log = parent::createLog(basename(__FILE__));
    }

    public function getSomething($valArr = [])
    {

        $dataArr = ["msg" => 'hello world'];
        //do something
        return $dataArr;
    }


}