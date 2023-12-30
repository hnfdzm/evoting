<?php

class Portopolio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('article_model');
        $this->path = FCPATH . "assets/img/";
    }

    public function index()
    {
        $doc['meta'] = [
			'title' => 'Portopolio',
		];
        $data['articles'] = $this->article_model->get_published();

        $this->load->view('portopolio/home', $data, $doc);
    } 

    public function about()
    {
        $data['meta'] = [
            'title' => 'About',
        ];

        $this->load->view('portopolio/about', $data);
    }

    public function contact()
    {
        $data['meta'] = [
            'title' => 'Contact',
        ];

        if($this->input->method() == 'post')
        {
            $this->load->model('feedback_model');

            //@TODO: Lakukan validasi disini sebelum insert ke model

            $feedback = [
                'id' => uniqid('', true),//genearate id unik
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'message' => $this->input->post('message')
            ];

            $feedback_saved = $this->feedback_model->insert($feedback);

            if($feedback_saved)
            {
                return $this->load->view('portopolio/contact_thanks');
            }
        }

        $this->load->view('portopolio/contact', $data);
    }
}