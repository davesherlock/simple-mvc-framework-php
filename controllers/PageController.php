<?php

include_once("models/PageModel.php");

class Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new PageModel();
    }

    public function invoke()
    {
        //Sanitize Inputs
        $action = filter_input(INPUT_GET, 'a', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

        if ($action === NULL) {
            $action = 'view';
        }

        switch ($action) {
            case "view":
                $dataArr = $this->model->getSomething(["msg" => "hello"]);
                include 'views/page/defaultview.php';
                break;
            default:
                http_response_code(404);
                die();
        }
    }
}

?>