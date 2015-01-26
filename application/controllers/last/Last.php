<?php

class Last extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // get data for last quote, to pass on to our view
        $source = $this->quotes->last();

        //fill array with author quote info
        $authors = array (array('who' => $source['who'], 'mug' => $source['mug'], 'href' => $source['where'], 'what' => $source['what']));
        
        //pass array to our view
        $this->data['authors'] = $authors;

        $this->render();
    }

}