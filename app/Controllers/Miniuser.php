<?php namespace App\Controllers;

use CodeIgniter\Controller;

class miniuser extends Controller {
    public function index() {
        echo view('miniuser');
    }
}