@extends('layouts.app')

@section('title', 'Coba')

@section('content')
<div class="card">
    <div class="card-body">
    <h3>Name: {{$group['name']}}</h3>
    <h3>Description: {{$group['description']}}</h3>
    <h3>Jumlah Seluruh Anggota : {{ $group->friends->count() }}</h3>
    <h3>Jumlah Anggota Masuk : {{ $group->details->count() }}</h3>
    <h3>Jumlah Anggota Keluar : {{ $group->details->where('status', 'inactive')
        ->count() }}</h3>
    </div>
</div>

@endsection
