<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\AdminFasilitas;
use App\Models\AdminLab;
use App\Models\AdminReservasi;
use App\Models\AdminUser;
use App\Models\modelLab;
use CodeIgniter\I18n\Time;

class Admin extends BaseController
{
    function __construct()
    {
        // parent::__construct();
        $this->AdminModel = new AdminModel();
        $this->AdminFasilitas = new AdminFasilitas();
        $this->AdminLab = new AdminLab();
        $this->AdminReservasi = new AdminReservasi();
        $this->AdminUser = new AdminUser();
        $this->Lab = new modelLab();
    }

    public function index()
    {
        $data = 
        [
            'page' => "index",
            'nama' => "Administrator",
            'level' => "admin"
        ];

        return view('admin/index', $data);
    }

    public function home()
    {
        $data = 
        [
            'page' => "index",
            'nama' => "Administrator",
            'level' => "admin"
        ];

        return view('admin/index', $data);
    }

    public function hal_lab()
    {
        $data = 
        [
            'page' => "hal_lab",
            'nama' => "Administrator",
            'level' => "admin"
        ];
        $data['fac'] = $this->AdminLab->findAll();

        return view('admin/lab', $data);
    }

    public function ubahLab()
    {
        $model = new AdminLab();
        $id = $this->request->getPost('product_id');
        $data = array(
            'id_lab'        => $this->request->getPost('edit_kategori'),
            'isi'       => $this->request->getPost('edit_namalab'),
        );
        // var_dump($id);
        $model->updateLab($data, $id);
        return redirect()->to(base_url('admin/hal_lab'));
    }

    public function hal_fasilitas()
    {
        $data = 
        [
            'page' => "hal_fasilitas",
            'nama' => "Administrator",
            'level' => "admin"
        ];
        $data['fac'] = $this->AdminFasilitas->findAll();

        return view('admin/fasilitas', $data);

    }

    public function simpanFasilitas()
    {
        if (!$this->validate([
			'kategori' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
			'nama_barang' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
			'jumlah_barang' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
			'gambar_fasilitas' => [
				'rules' => 'uploaded[gambar_fasilitas]|mime_in[gambar_fasilitas,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar_fasilitas,2048]',
				'errors' => [
					'uploaded' => 'Harus Ada File yang diupload',
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => 'Ukuran File Maksimal 2 MB'
				]
 
			]
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}
 
		$gambar_fasilitas = new AdminFasilitas();
		$datagambar_fasilitas = $this->request->getFile('gambar_fasilitas');
		$fileName = $datagambar_fasilitas->getRandomName();
        $myTime = Time::now()->getLocal();  
		$gambar_fasilitas->insert([
			'gambar' => $fileName,
			'ruangan'=>$this->request->getPost('kategori'),
            'nama_barang'=>$this->request->getPost('nama_barang'),
            'jumlah'=>$this->request->getPost('jumlah_barang'),
            'created_at'=>$myTime
		]);
        // $lokasi = base_url('/assets/images/');
		$datagambar_fasilitas->move('assets/images/', $fileName);
		session()->setFlashdata('success', 'Berkas Berhasil diupload');
        // var_dump($fileName);
		return redirect()->to(base_url('admin/hal_fasilitas'));
    }

    public function ubahFasilitas()
    {
        $model = new AdminFasilitas();
        $id = $this->request->getPost('product_id');
        $data = array(
            'ruangan'        => $this->request->getPost('edit_kategori'),
            'nama_barang'       => $this->request->getPost('edit_namafasilitas'),
            'jumlah' => $this->request->getPost('edit_jumlahbarang'),
        );
        // var_dump($id);
        $model->updateFasilitas($data, $id);
        return redirect()->to(base_url('admin/hal_fasilitas'));
    }

    public function hapusFasilitas()
    {
        $model = new AdminFasilitas();
        $id = $this->request->getPost('product_id');
        $model->deleteFasilitas($id);
        return redirect()->to(base_url('admin/hal_fasilitas'));
    }

    public function reservasi()
    {
        $data = 
        [
            'page' => "reservasi",
            'nama' => "Administrator",
            'level' => "admin"
        ];
        $data['fac'] = $this->AdminReservasi->findAll();
        return view('admin/reservasi', $data);
    }

    public function selesaikan()
    {
        $model = new AdminReservasi();
        $id = $this->request->getPost('product_id');
        $data = array(
            'status'        => "1"
        );
        // var_dump($id);
        $model->updateStatus($data, $id);

        $model = new modelLab();
        $id_lab = $this->request->getPost('id_lab');
        $dataLab = array(
            'status'        => "1"
        );
        $model->updateStatusLab($dataLab, $id_lab);
        return redirect()->to(base_url('admin/reservasi'));
    }

    public function user()
    {
        $data = 
        [
            'page' => "hal_user",
            'nama' => "Administrator",
            'level' => "admin"
        ];
        $data['fac'] = $this->AdminUser->findAll();

        return view('admin/user', $data);
    }

    public function simpanUser()
    {
        if (!$this->validate([
			'level' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
			'nama_user' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
			'username_user' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
            'email_user' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
            'password_user' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
            'alamat_user' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}
 
		$simpanUser = new AdminUser();
		$simpanUser->insert([
			'status'=> "1",
            'level'=>$this->request->getPost('level'),
            'email'=>$this->request->getPost('email_user'),
            'nama'=>$this->request->getPost('nama_user'),
            'username'=>$this->request->getPost('username_user'),
            'alamat'=>$this->request->getPost('alamat_user'),
            'password'=>$this->request->getPost('password_user')
		]);
        // $lokasi = base_url('/assets/images/');
		session()->setFlashdata('success', 'User Sudah Ditambahkan');
        // var_dump($fileName);
		return redirect()->to(base_url('admin/user'));
    }

    public function ubahUser()
    {
        $model = new AdminUser();
        $id = $this->request->getPost('product_id');
        $data = array(
            'level'=>$this->request->getPost('level'),
            'email'=>$this->request->getPost('edit_emailuser'),
            'nama'=>$this->request->getPost('edit_namauser'),
            'username'=>$this->request->getPost('edit_usernameuser'),
            'alamat'=>$this->request->getPost('edit_alamatuser'),
            'password'=>$this->request->getPost('edit_passworduser')
        );
        // var_dump($id);
        $model->updateUser($data, $id);
        return redirect()->to(base_url('admin/user'));
    }

    public function hapusUser()
    {
        $model = new AdminUser();
        $id = $this->request->getPost('product_id');
        $model->deleteUser($id);
        return redirect()->to(base_url('admin/user'));
    }

    public function verif()
    {
        $model = new AdminUser();
        $id = $this->request->getPost('product_id');
        $data = array(
            'status'        => "1"
        );
        // var_dump($id);
        $model->updateStatus($data, $id);
        return redirect()->to(base_url('admin/user'));
    }
}
