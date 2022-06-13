<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 03.01.2019
 * Time: 12:49
 */
namespace App\Controllers;


use core\CoreClass as Core;
use App\Model\SecondTaskModel;

class testController extends Controller
{
    private $secondTaskModel = null;
    private $view            = null;
    private $twig            = null;

    public function __construct($view = null)
    {
        parent::__construct($view);
        if($view){
            $this->view = $view;
            $this->twig = $this->template->getTwig();
        }
    }

    public function secondTask()
    {
        $result = [];
        $this->secondTaskModel = new SecondTaskModel();
        $result["firstQuery"]  = $this->secondTaskModel->firstQuery();
        $result["secondQuery"] = $this->secondTaskModel->secondQuery();
        $result["thirdQuery"]  = $this->secondTaskModel->thirdQuery();
        //die(var_dump($result['firstQuery']));
        echo $this->twig->render($this->view, ["data" => $result]);
    }
} 