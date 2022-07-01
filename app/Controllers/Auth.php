<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use Tests\Support\Entity\User;

class Auth extends BaseController
{
    protected $user;
    function __construct()
    {
        $this->user = new UserModel();
    }

    public function index()
    {
        $data['level'] = "user";
        $data['page'] = 'log';
        $data['title'] = 'Login Page';
        return view('log/log_login', $data);
    }

    public function registration()
    {
        $data = [
            'level' => 'user',
            'page' => 'log',
            'title' => 'Register Page',
            'validation' =>  \Config\Services::validation()
        ];
        return view('log/log_register', $data);
    }


    public function registerUser()
    {
        $validation = [
            'name' => [
                'rules' => 'is_unique[user.username]',
                'label' => 'Username',
                'errors' => [
                    'is_unique' => '{Field} Sudah Ada'
                ]
            ],
            'email' => [
                'rules' => 'is_unique[user.email]',
                'label' => 'Email',
                'errors' => [
                    'is_unique' => '{Field} Sudah Ada'
                ]
            ]
        ];
        // ngambil data dari form 
        $data = [
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'level' => 0,
        ];
        // dd($data);
        if (!$this->validate($validation)) {
            return redirect()->to('/');
        }

        $this->user->save($data);
        return redirect()->to('/Auth/Registration');
    }
    public function login()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $user = $this->user->where('email', $email)->first();
        // dd($user);
        // ketika email ada di database
        if ($user) {
            // ketika password salah 
            $verify = password_verify($password, ($user['password']));
            // dd($verify);
            if (!$verify) {
                session()->setFlashdata('error', 'Pastikan Email/Username & Password Anda Benar');
                return redirect()->to('Auth/Login');
                // ketika password benar
            } else { 
                if (($user['level'] == 1) && ($user['status'] == 1)) {
                    session()->setFlashdata('success', 'Berhasil login');
                    $sesi = [
                        'username'   => $user['username'],
                        'id'   => $user['id_user'],
                        'level' => $user['level'],
                        'email' => $user['email'],
                        'loggedIn'  => TRUE
                       ];
                       session()->set($sesi);
                    $remember = $this->request->getVar('rememberme');
                    if (isset($remember)) {
                        $nama = 'username';
                        $nilai = $user['username'];
                        $durasi = strtotime('+7 days');
                        $path = "/";
                        setcookie($nama, $nilai, $durasi, $path);
                     }

                    return redirect()->to('/admin');
                } else if (($user['level'] == 0) && ($user['status'] == 0)) {
                    session()->setFlashdata('error', 'Akun Belum Aktif');
                    return redirect()->to('Auth/Login');
                } else {
                    $sesi = [
                        'username'   => $user['username'],
                        'id'   => $user['id_user'],
                        'level' => $user['level'],
                        'email' => $user['email'],
                        'loggedIn'  => TRUE
                       ];
                       session()->set($sesi);
                    $remember = $this->request->getVar('rememberme');
                    if (isset($remember)) {
                        $nama = 'username';
                        $nilai = $user['username'];
                        $durasi = strtotime('+7 days');
                        $path = "/";
                        setcookie($nama, $nilai, $durasi, $path);
                     }
                    return redirect()->to('/');
                }
            }
        } else {
            session()->setFlashdata('error', 'Pastikan Email/Username & Password Anda Benar');
            return redirect()->to('/');
        }
    }

    public function metu()
    {
        session()->destroy();
        $nama = 'username';
        $nilai = '';
        $durasi =  strtotime('-7 days'); 
        $path = '/';
        setcookie($nama, $nilai, $durasi, $path);
        return redirect()->to('Auth/Login');
        return redirect()->to('/masuk');

    }
}
