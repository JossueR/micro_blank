<?php


namespace myapp\controllers;


use MicroORM\QueryParams;
use myapp\models\BankDAO;

class baseHandler extends \Micro\ApiController
{

    function indexAction(){
        $page = self::getRequestAttr("page");
        if(!$page){
            $page=0;
        }
        $params = new QueryParams();
        $params->setEnablePaging("15", $page);


        $dao = new BankDAO();
        $dao->setQueryFilters($params);
        $dao->getAll();

        //echo $dao->getSummary()->sql;
        $this->setVar("hola",$dao->fetchAll());

        //$this->addError("bad");
        $this->toJSON();
    }

    /**
     * Example of auth method
     */
    function authAction(){
        $user = self::getRequestAttr("user");
        $password = self::getRequestAttr("password");

        //TODO: IMPLEMENT VALIDATION METHOD
        if($user == "admin" && $password=="123456"){

            //TODO: IMPLEMENT TOKEN GENERATION
            $token = hash("sha256", "secret_uniq");

            $this->setVar("token",$token);
        }else{
            $this->addError("access denied");
            $this->serverError("400");

        }

        $this->toJSON();
    }
}