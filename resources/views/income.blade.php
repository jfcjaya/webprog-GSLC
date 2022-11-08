@extends('templates.layout')

@section('title', 'Incomes')

<?php 
    $n = count($income);
    foreach($income as $keterangan => $harga) {
        $budget += $harga;
    }
?>
@section('content')
    <h2>Incomes</h2>
    <div>@include('templates.table', ['data' => $income])</div>

    <div>
        <div class="alert alert-success" role="alert">
            Budget kamu bulan ini adalah {{$budget}}
        </div>
    </div>
@endsection