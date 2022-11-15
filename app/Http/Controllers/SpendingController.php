<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpendingController extends Controller {
    private $spend = [
        "Uang Kuliah" => 2000,
        "Sewa Kos" => 300,
        "Makanan" => 200,
        "Listrik" => 50,
        "Transportasi" => 50,
        "Hiburan" => 500
    ];
    private $budget = 3000;
    
    public function index() {
        return view('spending')
        -> with('spending', $this -> spend)
        -> with('budget', $this -> budget);
    }
}