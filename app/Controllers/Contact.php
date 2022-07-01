<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use Tests\Support\Entity\User;

class Contact extends BaseController
{
    protected $contact;
    function __construct()
    {
        $this->user = new ContactModel();
    }
    public function l_contact()
    {
        $data['level'] = "user";
        $data['page'] = 'log';
        return view('log/log_contact', $data);
    }
    public function Index()
    {
        $data['level'] = "user";
        $data['page'] = 'log';
        $data['title'] = 'Contact Page';
        return view('log/log_contact', $data);
    }

    public function contactUser()
    {
        // ngambil data dari form 
        $data = [
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'subjek' => $this->request->getVar('subjek'),
            'pesan' => $this->request->getVar('pesan'),

        ];
        // dd($data);

        $this->user->save($data);
        // return redirect()->to('/');
        return redirect()->to('/lab/l_contact');
    }
}
