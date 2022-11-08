@extends('templates.layout')

@section('title', 'Spendings')

<?php 
    $sum = 0;
    foreach($spending as $keterangan => $harga) {
        $sum += $harga;
    }
?>
@section('content')
    <h2>Spendings</h2>
    <div>@include('templates.table', ['data' => $spending])</div>

    <div>
        @if ($sum > $budget)
            <div class="alert alert-danger" role="alert">
                Pengeluaran kamu melebihi batas budget!
            </div>
        @elseif ($sum == $budget)
            <div class="alert alert-warning" role="alert">
                Pengeluaran kamu tepat sebesar batas budget!
            </div>
        @else 
            <div class="alert alert-success" role="alert">
                Pengeluaran kamu kurang dari budget! Congrats!
            </div>
        @endif
    </div>
@endsection