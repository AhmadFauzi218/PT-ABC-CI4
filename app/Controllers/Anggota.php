<?php

namespace App\Controllers;

class Anggota extends BaseController
{
    public function index()
    {

        return view('Anggota');
    }

    public function generate()
    {
        echo password_hash('1234', PASSWORD_BCRYPT);
    }
}
