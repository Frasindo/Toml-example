<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require_once('./vendor/autoload.php');
use Yosymfony\Toml\Toml;
/**
 	 * API Restfull
 	 * @author Indra Gunanda
	 */

class Api extends REST_Controller
{
    /**
 	 * Konstruktor
 	 * Konstruktor Berisi, pemuatan model "crud/main" dan "admin/car"  serta limitasi pengguna hanya untuk hak akses "admin"
 	 * @return json
	 */

    public function __construct()
    {
        parent::__construct();
        $this->load->model("crud/main");
        $this->load->library("curl_lib");
        $this->curl = $this->curl_lib;
    }
    /**
 	 * Initial Method
 	 *
 	 * @return json
	 */

    public function index_post()
    {
        $this->response([], 404);
    }
    /**
   * Initial Method
   *
   * @return json
   */
    public function index_get()
    {
        $this->response([], 404);
    }
    /**
   * Initial Method
   *
   * @return json
   */
    public function index_put()
    {
        $this->response([], 404);
    }
    /**
   * Initial Method
   *
   * @return json
   */
    public function index_delete()
    {
        $this->response([], 404);
    }
    /**
 	 * Get Car
 	 * Memuat data Tracking Mobil
 	 * @return json
	 */
   public function test_get()
   {
     $a = $this->curl->get("https://www.frasindo.com/.well-known/stellar.toml");
     $data = $a->body;
     $bulk = Toml::Parse($data); //Formatnya udah array
     $this->response($bulk);
   }

}
