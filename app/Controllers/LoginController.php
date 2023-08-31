<?php

namespace App\Controllers;

use Config\Services;
// use App\Controllers\BaseController;
// use App\Models\UserModel;

class LoginController extends BaseController
{   
    /**
     * Access to current session.
     * 
     * @var \CodeIgniter\Session\Session
     */
    protected $session;

    /**
     * Aunthentication settings.
     */
    protected $config;

    public function __construct()
    {
        // start session
        $this->session = Services::session();
    }

    /**
     * Display login form or redirects if user is already logged in.
     */
    public function index()
    {
        $data = [
            'title' => 'Please login into system.'
        ];

        if ($this->session->isLoggedIn) {
            return redirect()->to('home');
        }

        return view('auth/login', $data);       
    }
}