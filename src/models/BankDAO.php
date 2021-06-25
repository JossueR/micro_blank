<?php


namespace myapp\models;


use Exception;
use MicroORM\Datasource;

class BankDAO extends \MicroORM\baseDAO
{

    /**
     * BankDAO constructor.
     * @throws Exception
     */
    public function __construct(Datasource $ds=null)
    {
        parent::__construct("Bank", array("id"), $ds);
    }

    public function getActives(){
        $sql = "select * from Bank";

        $this->find($sql);
    }
}