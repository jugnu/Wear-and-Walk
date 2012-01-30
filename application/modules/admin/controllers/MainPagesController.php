<?php

class Admin_MainPagesController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function productsAction()
    {
        $this->view->title = 'Products';
        if (!Zend_Auth::getInstance()->hasIdentity()) {
            $this->_helper->redirector('index', 'index');
        }
        $products = new Admin_Model_Product();
        $results = $products->allPtoducts();
        $this->view->products = $results;
    }


}



