<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sss extends CI_Controller {

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

        $sss    = $this->default_model->get_all("faq",array(),"rank ASC");

        $admin= $this->default_model->get("admin",array("id"=>1));

        $settings= $this->default_model->get("settings",array("id"=>1));
        $viewData->settings = $settings;

        $viewData->admin   = $admin;
        $viewData->title = $settings->title;
        $viewData->sss   = $sss;
        $viewData->url = "faq";
        $this->load->view('faq',$viewData);
    }


	public function insert()
{
    $title   = $this->input->post("title");
    $icon    = $this->input->post("icon");
    $content = $this->input->post("content");

    if(!$title || !$icon || !$content )
    {
        $alert = array(
            'title'    => "Dikkat!",
            'subtitle' => "Lütfen form alanında boş stun bırakmayınız!",
            'type'     => "warning"
        );
        $this->session->set_flashdata("alert",$alert);
        redirect(base_url("faq"));
    }else{
        $insert = $this->default_model->insert("faq",array("title"=>$title,"icon"=>$icon,"content"=>$content,"status"=>1,"created_at"=>date("Y-m-d")));
        if($insert)
        {
            $alert = array(
                'title'    => "Tebrikler!",
                'subtitle' => "İşlem başarılı bir şekilde gerçekleşti!",
                'type'     => "success"
            );

        }else{
            $alert = array(
                'title'    => "Hata!",
                'subtitle' => "İşlem başarısız oldu.Tekrar deneyin!",
                'type'     => "error"
            );
        }
        $this->session->set_flashdata("alert",$alert);
        redirect(base_url("faq"));
    }

}

    public function update($id)
    {
        $title   = $this->input->post("title");
        $icon    = $this->input->post("icon");
        $content = $this->input->post("content");


        if(!$title || !$icon || !$content )            
        {
            $alert = array(
                'title'    => "Dikkat!",
                'subtitle' => "Lütfen form alanında boş stun bırakmayınız!",
                'type'     => "warning"
            );
            $this->session->set_flashdata("alert",$alert);
            redirect(base_url("sss"));
        }else{
            $update = $this->default_model->update("faq",array("id"=>$id),array("title"=>$title,"icon"=>$icon,"content"=>$content,"status"=>1,"created_at"=>date("Y-m-d")));
            if($update)
            {
                $alert = array(
                    'title'    => "Tebrikler!",
                    'subtitle' => "İşlem başarılı bir şekilde gerçekleşti!",
                    'type'     => "success"
                );

            }else{
                $alert = array(
                    'title'    => "Hata!",
                    'subtitle' => "İşlem başarısız oldu.Tekrar deneyin!",
                    'type'     => "error"
                );
            }
            $this->session->set_flashdata("alert",$alert);
            redirect(base_url("sss"));
        }

    }

    public function delete($id)
    {

            $delete = $this->default_model->delete("faq",array("id"=>$id));
            if($delete)
            {
                $alert = array(
                    'title'    => "Tebrikler!",
                    'subtitle' => "Silme işlemi başarışı bir şekilde gerçekleşti!",
                    'type'     => "success"
                );

            }else{
                $alert = array(
                    'title'    => "Hata!",
                    'subtitle' => "İşlem başarısız oldu.Tekrar deneyin!",
                    'type'     => "error"
                );
            }
            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("faq"));
        }

    public function isactivesetter($id)
    {
        if($id)
        {
            $isActive = ($this->input->post("data") == "true") ? 1 : 0;
            $this->default_model->update("faq",array("id"=>$id),array("status"=>$isActive));
        }
    }

    public function ranksetter()
    {
        $data = $this->input->post("data");
        parse_str($data,$rank);
        $value = $rank["rank"];
        foreach ($value as $rank =>$id)
        {
            $this->default_model->update("faq",array("id"=>$id),array("rank"=>$rank));
        }
    }




}
