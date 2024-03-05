<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribers extends CI_Controller {

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



	public function insert()
{


    $mail    = $this->input->post("mail",true);


    /**verilerimizin inputlarda dolu yada boşluk kontrolunu yapıcağız.*/
    if(!$mail )

        /**todo alert notification gelicek unutma.*/
    {
        $alert = array(
            'title'    => "Dikkat!",
            'subtitle' => "Lütfen form alanında boş stun bırakmayınız!",
            'type'     => "warning"
        );
        $this->session->set_flashdata("alert",$alert);
        redirect(base_url("home"));
    }else{
        $insert = $this->default_model->insert("subscribers",
            array("icon"=>"fas fa-user-check",
                  "mail"=>$mail,
                  "status"=>1,
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

            $this->email->from($smtp_data->user_mail,"Yeni bir kişi abone listesine katıldı!");//mail gönderen bilgileri

            $this->email->to($smtp_data->notification_mail); //formdan gelen mail alıcı bilgileri

            $this->email->subject("Yeni Bir Abone"); //Formdan gelen mail konusu

            $this->email->message("Sitenize yeni bir abone katıdı,Tebrikler!"); //Formdan gelen mail içeriği

            $send=$this->email->send(); //Email kütüphanesi ile maili gönderiyoruz.

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
        redirect(base_url("home"));
    }

}






}
