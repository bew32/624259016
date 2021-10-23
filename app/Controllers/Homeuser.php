<?php namespace App\Controllers;

use CodeIgniter\Controller;

class homeuser extends Controller {
    public function index() {
        echo view('homeuser');
    }
}