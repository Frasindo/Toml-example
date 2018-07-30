<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Indra Gunanda
 */
class Home extends CI_Controller{
  /**
 	 * Konstruktor
 	 *
 	 * @return void
	 */

  public function __construct()
  {
    parent::__construct();
    $this->load->model("crud/main");
  }
  /**
 	 * Index Home
 	 *
 	 * @return void
	 */

  function index()
  {
    // Where Folder View ?
    $this->template->setFolder("public");
    //What Default Style ?
    $this->template->defaultStyle("example");
    // Set CSS as Array
    // If TRUE that APPENDING if False that REPLACE ALL STYLESHEET
    $this->template->setcss([
      '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'
    ],true);
    // Set JS as Array
    // If TRUE that APPENDING if False that REPLACE ALL JS
    $this->template->setjs([
      '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'
    ],true);
    // Builder as Array
    $block_looping = [
      [
        "data"=>"Loop 1"
      ],[
        "data"=>"Loop 2"
      ]
    ];
    $build = [
      "block_title"=>"This Content Title",
      "block_looping"=>$block_looping
    ];
    // Render
    $this->template->renderHTML(['head','home','foot'],['title'=>"Example Pages",'other'=>$build]);
  }

}
