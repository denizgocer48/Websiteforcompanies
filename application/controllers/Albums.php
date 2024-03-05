<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Albums extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent:: __construct();
        $this->load->model("default_model");
    }

    public function index()
    {
        $viewData  = new stdClass();

        $settings = $this->default_model->get("settings",array("id"=>1));
        $viewData->settings             = $settings;


        $sliders = $this->default_model->get_all("sliders",array("status"=>1),"rank ASC");
        $viewData->sliders              = $sliders;

        $services = $this->default_model->get_all("services",array("status"=>1),"rank ASC");
        $viewData->services             = $services;

        $teams = $this->default_model->get_all("teams",array("status"=>1),"rank ASC");
        $viewData->teams                = $teams;

        $counters = $this->default_model->get_all("counters",array("status"=>1),"rank ASC");
        $viewData->counters             = $counters;

        $social = $this->default_model->get_all("social",array("status"=>1),"rank ASC");
        $viewData->social               = $social;

        $projects = $this->default_model->get_all("projects",array("status"=>1),"rank ASC");
        $viewData->projects             = $projects;

        $pages = $this->default_model->get_all("pages",array("status"=>1),"rank ASC");
        $viewData->pages                = $pages;

        $albums = $this->default_model->get_all("albums",array("status"=>1),"rank ASC");
        $viewData->albums                = $albums;

        $viewData->url = "albums";
        $this->load->view('albums',$viewData);
    }


    public function detay($id)
    {
        $viewData  = new stdClass();

        $settings = $this->default_model->get("settings",array("id"=>1));
        $viewData->settings             = $settings;


        $sliders = $this->default_model->get_all("sliders",array("status"=>1),"rank ASC");
        $viewData->sliders              = $sliders;

        $services = $this->default_model->get_all("services",array("status"=>1),"rank ASC");
        $viewData->services             = $services;

        $teams = $this->default_model->get_all("teams",array("status"=>1),"rank ASC");
        $viewData->teams                = $teams;

        $counters = $this->default_model->get_all("counters",array("status"=>1),"rank ASC");
        $viewData->counters             = $counters;

        $social = $this->default_model->get_all("social",array("status"=>1),"rank ASC");
        $viewData->social               = $social;

        $projects = $this->default_model->get_all("projects",array("status"=>1),"rank ASC");
        $viewData->projects             = $projects;

        $pages = $this->default_model->get_all("pages",array("status"=>1),"rank ASC");
        $viewData->pages                = $pages;

        $album = $this->default_model->get("albums",array("status"=>1,"id"=>$id));
        $viewData->album                = $album;

        $album_images = $this->default_model->get_all("album_images",array("status"=>1,"album_id"=>$id),"rank ASC");
        $viewData->album_images                = $album_images;

        $viewData->url = "albums";
        $this->load->view('album-detay',$viewData);
    }






}
