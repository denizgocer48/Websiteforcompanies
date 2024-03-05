<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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

        $social = $this->default_model->get_all("social",array("status"=>1),"rank ASC");
        $viewData->social               = $social;

        $about_us = $this->default_model->get("about_us",array("id"=>1));
        $viewData->contact             = $about_us;

        $services = $this->default_model->get_all("services",array("status"=>1),"rank ASC");
        $viewData->services             = $services;

        $projects = $this->default_model->get_all("projects",array("status"=>1),"rank ASC");
        $viewData->projects             = $projects;

        $pages = $this->default_model->get_all("pages",array("status"=>1),"rank ASC");
        $viewData->pages                = $pages;





        $viewData->url = "contact";
        $this->load->view('contact',$viewData);
    }


    public function insert()
    {


        $name     = $this->input->post("name",true);
        $mail     = $this->input->post("mail",true);
        $phone    = $this->input->post("phone",true);
        $subject  = $this->input->post("subject",true);
        $content  = $this->input->post("content",true);


        /**verilerimizin inputlarda dolu yada boşluk kontrolunu yapıcağız.*/
        if(!$name ||!$mail ||!$phone ||!$subject ||!$content)

            /**todo alert notification gelicek unutma.*/
        {
            $alert = array(
                'title'    => "Dikkat!",
                'subtitle' => "Lütfen form alanında boş stun bırakmayınız!",
                'type'     => "warning"
            );
            $this->session->set_flashdata("alert",$alert);
            redirect(base_url("contact"));
        }else{
            $insert = $this->default_model->insert("message",
                array(
                    "name"      =>$name,
                    "mail"      =>$mail,
                    "subject"   =>$subject,
                    "phone"     =>$phone,
                    "content"   =>$content,
                    "reply_status"    =>0,
                    "created_at"=>date("Y-m-d")));
            if($insert)
            {
                $smtp_data = $this->default_model->get("settings",array("id"=>1));

                //Smtp Mail kodları
                $config = array(
                    "protocol"  => "smtp",
                    "smtp_host" => "$smtp_data->host",
                    "smtp_port" => "$smtp_data->port",
                    "smtp_user" => "$smtp_data->user_mail",
                    "smtp_pass" => "$smtp_data->user_password",
                    "mailtype"  => "html",
                    "charset"   => "utf-8",
                    "wordwrap"  => true,
                    "newline"   => "\r\n"

                );

                $this->load->library('email'); //email kütüphanesini includ ettik.

                $this->email->initialize($config); //sunucu bilgilerini email kütüphanesine gönderdik

                $this->email->from($smtp_data->user_mail,"İletişim formundan bir mesaj geldi!");//mail gönderen bilgileri

                $this->email->to($smtp_data->notification_mail); //formdan gelen mail alıcı bilgileri

                $this->email->subject("İletişim Formu"); //Formdan gelen mail konusu

                $this->email->message("Sitenize yeni bir mesaj geldi,Tebrikler!"); //Formdan gelen mail içeriği

                $send=$this->email->send(); //Email kütüphanesi ile maili gönderiyoruz.

                $alert = array(
                    'title'    => "Tebrikler!",
                    'subtitle' => "Mesaj Gönderme İşlem başarılı bir şekilde gerçekleşti!",
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
            redirect(base_url("contact"));
        }

    }





}
