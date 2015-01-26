<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->first();
        //foreach ($source as $record) {
        $authors = array (array('who' => $source['who'], 'mug' => $source['mug'], 'href' => $source['where'], 'what' => $source['what']));
        //}
        $this->data['authors'] = $authors;

        $this->render();
    }

}