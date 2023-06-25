<?php

namespace App\Controllers;

use App\Models\Profile;
use App\Controllers\BaseController;

class ProfileController extends BaseController
{
    protected $profileModel;

    public function __construct()
    {
        $this->profileModel = new Profile();
    }
    public function index()
    {
        $data['profiles'] = $this->profileModel->findAll();
        return view('profile/index', $data);
    }  

    public function create()
    {
        return view('profile/create');
        
    }
public function store()
{
    $data = [
        'fname' => $this->request->getPost('fname'),
        'lname' => $this->request->getPost('lname'),
        'address' => $this->request->getPost('address'),
        'date' => $this->request->getPost('date'),
    ];
    $this->profileModel->insert($data);
    return redirect()->to('profile');
}

     public function edit($id)
    {
        $data['profile'] = $this->profileModel->find($id);
        return view('profile/edit', $data);
    }

    public function update($id)
{
    $data = [
        'fname' => $this->request->getPost('fname'),
        'lname' => $this->request->getPost('lname'),
        'address' => $this->request->getPost('address'),
        'date' => $this->request->getPost('date'),
    ];
    $this->profileModel->update($id, $data);
    return redirect()->to('profile');
}
public function delete($id)
{
    $this->profileModel->delete($id);
    return redirect()->to('profile');
}

}
