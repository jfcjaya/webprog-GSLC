<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    private $income = [
        "Uang Jajan" => 1000,
        "Gaji" => 2000
    ];
    private $budget = 3000;

    public function index()
    {
        return view('income')
        -> with('income', $this -> income)
        -> with('budget', $this -> budget);
    }
}