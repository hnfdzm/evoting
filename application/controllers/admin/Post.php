<?php

class Post extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['current_user'] = $this->auth_model->current_user();

		$data['articles'] = $this->article_model->get();

		$data['keyword'] = $this->input->get('keyword');

		if(!empty($this->input->get('keyword'))){
			$data['articles'] = $this->article_model->search($data['keyword']);

		}
		if(count($data['articles']) <= 0 && !$this->input->get('keyword')){
			$this->load->view('admin/post_empty.php', $data);
		}else{
			$this->load->view('admin/post_list.php', $data);
		}
	}

	public function new()
	{
		$data['current_user'] = $this->auth_model->current_user();

		if ($this->input->method() === 'post') {
			// TODO: Lakukan validasi sebelum menyimpan ke model

			// generate unique id and slug
			$id = uniqid('', true);
			$slug = url_title($this->input->post('title'), 'dash', TRUE) . '-' . $id;

			

			$article = [
				'id' => $id,
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'kt' => $this->input->post('kt'),
				'content' => $this->input->post('content'),
				'draft' => $this->input->post('draft'),
			];

			$saved = $this->article_model->insert($article);
			
			if($saved) {
				$this->session->set_flashdata('message' , 'Article was Created!');
				return redirect('admin/post');
			}

		}

		$this->load->view('admin/post_new_form.php', $data);
	}

	public function edit($id = null)
	{

		$data['current_user'] = $this->auth_model->current_user();
		$data['article'] = $this->article_model->find($id);

		if (!$data['article'] || !$id) {
			show_404();
		}

		if ($this->input->method() === 'post') {
			//TODO: Lakukan validasi sebelum menyimpan ke model

			//Cek apakah file gambar diunggah
			if(!empty($_FILES['foto']['name'])) {
				//Ambil informasi artikel, termasuk nama file gambar lama
				$existing_blog = $this->article_model->find($id);

				// Hapus gambar lama jika ada
				if(!empty($existing_blog->foto)) {
					$gambar_path = FCPATH . 'upload/gambar' . $existing_blog->foto;
					if(file_exists($gambar_path)) {
						unlink($gambar_path); // Hapus gambar lama dari direktori
					}
				}

				// Konfigurasi upload gambar baru
				$config['upload_path'] = FCPATH . 'upload/gambar';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size'] = 1024; // 1MB
				$config['file_name'] = $data['article']->$id . '_' . $_FILES['foto']['name']; // Nama file unik

				$this->load->library('upload', $config);

				if($this->upload->do_upload('foto')) {
					$upload_data = $this->upload->data();
					$image = $upload_data['file_name']; // Simpan URL gambar baru
				}else{
					$error = array('error' => $this->upload->display_errors());
					// Tampilkan pesan kesalahan upload jika diperlukan
				}
				
			}else{
				// Jika tidak ada gambar yang di unggah, simpan data tanpa mengubah gambar
				$image = $data['article']->foto;
			}

			$article = [
				'id' => $id,
				'title' => $this->input->post('title'),
				'kt' => $this->input->post('kt'),
				'content' => $this->input->post('content'),
				'draft' => $this->input->post('draft'),
				'foto' => $image
			];

			$updated = $this->article_model->update($article);

			if ($updated) {
				$this->session->set_flashdata('message', 'Article was updated');
				redirect('admin/post');
			}
		}

		$this->load->view('admin/post_edit_form.php', $data);
	}

	public function delete($id = null)
	{
		if (!$id) {
			show_404();
		}

		if(!empty($article->foto)){
			$gambar_path = FCPATH . 'upload/gambar' . $article->foto;
			if(file_exists($gambar_path)){
				unlink($gambar_path) ; // Hapus gambar
			}
		}

		$deleted = $this->article_model->delete($id);

		if ($deleted) {
			$this->session->set_flashdata('message', 'Article was deleted');
			redirect('admin/post');
		}
	}
}