<?php

class Admin_Model_Product
{
    public function allPtoducts(){
        $dbTable = new Admin_Model_DbTable_Products();
        $result = $dbTable->fetchAll();
        return $result;
    }

}

