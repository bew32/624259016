<?php namespace App\Controllers;

use CodeIgniter\Controller;

class superuser extends Controller {
    public function index() {
        echo view('superuser');
    }
}