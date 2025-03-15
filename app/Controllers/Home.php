<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('homepage');
    }


    public function login(): string
    {
        return view('login');
    }
    
    public function Register(): string
    {
        return view('Register');
    }
    public function Download()
    {
        $filename='Joogle 1.1.zip';
        $filepath = WRITEPATH . 'uploads\\' . $filename;

        if (file_exists($filepath)) {
            return $this->response->download($filepath, null)->setFileName($filename);
        } else {
            return $filepath;
            //return redirect()->back()->with('error', 'File not found.');
        }
    }
    
public function RegisterSubmit()
{
    // Process form submission
    $firstName = $this->request->getPost('first_name');
    $lastName = $this->request->getPost('last_name');
    $email = $this->request->getPost('email');
    $phone = $this->request->getPost('phone');
    $NewPassword = $this->request->getPost('NewPassword');
    $ConfirmPassword = $this->request->getPost('ConfirmPassword');

    $agreePolicy = $this->request->getPost('agree_policy');

    // Validate form data
    if (!$agreePolicy) {
        return redirect()->back()->with('error', 'You must agree to the terms and policy.');
    }

    // Save or process the data (e.g., save to database)
    // ...
    
    // Save to database
    $db = \Config\Database::connect();
    $builder = $db->table('usermaster');
    $data = [
        'FirstName' => $firstName,
        'LastName' => $lastName,
        'EmailId' => $email,
        'PhoneNumber' => $phone,
        'Password' => $NewPassword,
        'RoleId' => 1,
        'PhotoLocation'=>'',
        'CreatedDateTime'=>date('Y-m-d H:i:s'),
        'IsActive'=>1
    ];
    $builder->insert($data);
    $insertID = $db->insertID();
    // Encrypt the $insertID and save in session
    $key = bin2hex(random_bytes(16));
    $insertIDEncrypted = openssl_encrypt($insertID, 'AES-256-CBC', $key, 0, $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC')));
    session()->set('TokenId', $insertIDEncrypted);
    return redirect()->to(base_url('/'));
    //return $insertID;
    // Redirect to a success page
    //return redirect()->to('/success')->with('message', 'Registration successful.');
}
}
