<?php
/**
 * Created by PhpStorm.
 * User: ryansadio
 * Date: 15-02-20
 * Time: 21:03
 */

class Admin extends Application {

    function __construct()
    {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index()
    {
        $this->data['pagebody'] = 'homepage';    // this is the view we want shown

        $this->render();
    }

}