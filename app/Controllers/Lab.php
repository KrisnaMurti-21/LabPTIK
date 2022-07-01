<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\modelLab;
use App\Models\FasilitasModel;
use App\Models\RuanganModel;
use App\Models\AdminReservasi;

class Lab extends BaseController
{
    protected $fasilitasModel;
    public function __construct()
    {
        // parent::__construct();
        // $this->load->model('ModelLab');
        $this->model_lab = new modelLab();
        $this->fasilitasModel = new FasilitasModel();
        $this->ruanganModel = new RuanganModel();
        $this->booking = new AdminReservasi();
    }

    public function index()
    {
        $data['page'] = 'lab';
        $data['level'] = "user";
        return view('laboratorium/rpl', $data);
    }

    public function rpl()
    {
        $data['page'] = 'lab';
        $data['level'] = "user";
        $data['hasil'] = $this->model_lab->where(['id_lab' => 1])->first();
        $data['item'] = $this->booking->where('id_lab', '1')->find();
        return view('laboratorium/rpl', $data);
    }

    public function mulmed()
    {
        $data['page'] = 'lab';
        $data['level'] = "user";
        $data['hasil'] = $this->model_lab->where(['id_lab' => 2])->first();
        $data['item'] = $this->booking->where('id_lab', '2')->find();
        return view('laboratorium/mulmed', $data);
    }

    public function tkj()
    {
        $data['page'] = 'lab';
        $data['level'] = "user";
        $data['hasil'] = $this->model_lab->where(['id_lab' => 3])->first();
        $data['item'] = $this->booking->where('id_lab', '3')->find();
        return view('laboratorium/tkj', $data);
    }

    public function fac_tkj()
    {
        $data =
            [
                'level' =>  "user",
                'page' => 'fasilitas',
                'item' => $this->fasilitasModel->where('ruangan', 'tkj')->find()
            ];
        return view('fasilitas/fasilitas_tkj', $data);
    }

    public function fac_rpl()
    {
        $data =
            [
                'level' =>  "user",
                'page' => 'fasilitas',
                'item' => $this->fasilitasModel->where('ruangan', 'rpl')->find()
            ];
        return view('fasilitas/fasilitas_rpl', $data);
    }

    public function fac_mulmed()
    {
        $data =
            [
                'level' =>  "user",
                'page' => 'fasilitas',
                'item' => $this->fasilitasModel->where('ruangan', 'mulmed')->find()
            ];
        return view('fasilitas/fasilitas_mulmed', $data);
    }

    public function reservasi()
    {
        $data['level'] = "user";
        $data['page'] = 'reservasi';
        // $data['lab'] = $this->model_lab->where('status', '1')->find();
        $data['lab'] = $this->model_lab->findAll();
        return view('home/reservasi', $data);
    }
    public function reservedLab()
    {
        // $validation = [
        //     'name' => [
        //         'rules' => 'is_unique[user.username]',
        //         'label' => 'Username',
        //         'errors' => [
        //             'is_unique' => '{Field} Sudah Ada'
        //         ]
        //     ],
        //     'email' => [
        //         'rules' => 'is_unique[user.email]',
        //         'label' => 'Email',
        //         'errors' => [
        //             'is_unique' => '{Field} Sudah Ada'
        //         ]
        //     ]
        // ];
        // ngambil data dari form 
        $fiveRandomDigit = uniqid();
        $data = [
            'peminjam' => $this->request->getVar('peminjam'),
            'tgl_pakai' => $this->request->getVar('tgl_pakai'),
            'time_a' => $this->request->getVar('time_a'),
            'time_b' => $this->request->getVar('time_b'),
            'id_lab' => $this->request->getVar('id_lab'),
            'kode_reservasi' => 'LAB-' . $fiveRandomDigit,
            'status' => 0
        ];
        // dd($data);
        // if (!$this->validate($validation)) {
        //     return redirect()->to('/');
        // }

        $this->booking->save($data);

        $model = new modelLab();
        $id_lab = $this->request->getPost('id_lab');
        $dataLab = array(
            'status'        => "0"
        );
        $model->updateStatusLab($dataLab, $id_lab);
        return redirect()->to('bukti_regis');
    }

    public function bukti_regis()
    {
        $data['level'] = "user";
        $data['page'] = 'reservasi';
        return view('home/bukti_regis', $data);
    }
}
