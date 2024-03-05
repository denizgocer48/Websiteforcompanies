<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

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

        $projects    = $this->default_model->get_all("projects",array(),"rank ASC");

        $admin= $this->default_model->get("admin",array("id"=>1));

        $settings= $this->default_model->get("settings",array("id"=>1));
        $viewData->settings = $settings;

        $viewData->admin   = $admin;
        $viewData->title = $settings->title;
        $viewData->projects   = $projects;
        $viewData->url = "projects";
        $this->load->view('projects',$viewData);
    }

	public function insert()
{
        $title      = $this->input->post("title");
        $link       = $this->input->post("link");


        if(!$title || !$link ) {
            $alert = array(
                'title' => "Dikkat!",
                'subtitle' => "Lütfen form alanında boş stun bırakmayınız!",
                'type' => "warning"
            );
            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("projects"));
        }else{
            if(!empty($_FILES["image"]["name"]))
            {

                $config["upload_path"]   = "../uploads/projects/";
                $config["allowed_types"] = "gift|jpg|jpeg|png|svg";
                $config["file_name"]     = uniqid();

                $this->load->library("upload",$config);
                $upload = $this->upload->do_upload("image");

                if($upload)
                {
                    $uploaded_filename = $this->upload->data("file_name");

                    $config["image_library"]   = "gd2";
                    $config["source_image"]    =  "../uploads/sliders/".$uploaded_filename;
                    $config["create_thumb"]    = FALSE;
                    $config["maintain_ratio"]  = TRUE;
                    $config["quality"]         ="100%";
                    $config["witdh"]  = 527;
                    $config["height"] = 307;

                    $this->load->library("image_lib",$config);
                    $this->image_lib->resize();

                    $insert = $this->default_model->insert("projects",
                        array("image"=>"projects/".$uploaded_filename,
                            "title"=>$title,
                            "link"=>$link,
                            "status"=> 1,
                            "rank"=> 0,
                            "created_at"=>date("Y-m-d")));

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
                    redirect(base_url("projects"));

                }else{

                    $alert = array(
                        'title'    => "Hata!",
                        'subtitle' => "Ürün yüklenirken işlem başarısız oldu.Tekrar deneyin!",
                        'type'     => "error"
                    );

                    $this->session->set_flashdata("alert",$alert);
                    redirect(base_url("projects"));

                }


            }else{

                $alert = array(
                    'title'    => "Hata!",
                    'subtitle' => "Ürün resim alanı boş olamaz.Tekrar deneyin!",
                    'type'     => "error"
                );

                $this->session->set_flashdata("alert",$alert);
                redirect(base_url("projects"));

            }
        }
}

    public function update($id)
    {
        $title      = $this->input->post("title");
        $link       = $this->input->post("link");


        if(!$title || !$link ) {
            $alert = array(
                'title' => "Dikkat!",
                'subtitle' => "Lütfen form alanında boş stun bırakmayınız!",
                'type' => "warning"
            );
            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("projects"));
        }else{
            if(!empty($_FILES["image"]["name"]))
            {
                $image_data = $this->default_model->get("projects",array("id"=>$id));

                unlink("uploads/".$image_data->image);

                $config["upload_path"]   = "../uploads/projects/";
                $config["allowed_types"] = "gift|jpg|jpeg|png|svg";
                $config["file_name"]     = uniqid();

                $this->load->library("upload",$config);
                $upload = $this->upload->do_upload("image");

                if($upload)
                {
                    $uploaded_filename = $this->upload->data("file_name");

                    $config["image_library"]   = "gd2";
                    $config["source_image"]    =  "../uploads/projects/".$uploaded_filename;
                    $config["create_thumb"]    = FALSE;
                    $config["maintain_ratio"]  = TRUE;
                    $config["quality"]         ="100%";
                    $config["witdh"]  = 527;
                    $config["height"] = 307;

                    $this->load->library("image_lib",$config);
                    $this->image_lib->resize();

                    $update = $this->default_model->update("projects",
                        array("id"=>$id),
                        array("image"=>"projects/".$uploaded_filename,
                            "title"=>$title,
                            "link"=>$link
                            ));

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
                    redirect(base_url("projects"));

                }else{

                    $alert = array(
                        'title'    => "Hata!",
                        'subtitle' => "Ürün yüklenirken işlem başarısız oldu.Tekrar deneyin!",
                        'type'     => "error"
                    );

                    $this->session->set_flashdata("alert",$alert);
                    redirect(base_url("projects"));

                }


            }else{

               // resim güncellenmese gelicek...olan form
                $update = $this->default_model->update("projects",
                    array("id"=>$id),

                    array( "title"=>$title,
                        "link"=>$link
                        ));

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
                redirect(base_url("projects"));


            }
        }
    }


    public function delete($id)
    {
            $image_data = $this->default_model->get("projects",array("id"=>$id));

            unlink("uploads/".$image_data->image);

            $delete = $this->default_model->delete("projects",array("id"=>$id));
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
            $this->session->set_flashdata("alert",$alert);
            redirect(base_url("projects"));
        }

    public function isactivesetter($id)
    {
        if($id)
        {
            $isActive = ($this->input->post("data") == "true") ? 1 : 0;
            $this->default_model->update("projects",array("id"=>$id),array("status"=>$isActive));
        }
    }

    public function ranksetter()
    {
        $data = $this->input->post("data");
        parse_str($data,$rank);
        $value = $rank["rank"];
        foreach ($value as $rank =>$id)
        {
            $this->default_model->update("projects",array("id"=>$id),array("rank"=>$rank));
        }
    }





}
