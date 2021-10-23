<?php namespace App\Controllers;

use CodeIgniter\Controller;

class mini extends Controller {
    public function index() {
        echo view('mini');
    }
}