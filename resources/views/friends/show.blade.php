@extends('layouts.app')

@section('title', 'Friends')

@section('content')
<div class="card">
    <div class="card-body">
    <h3>Nama Teman: {{$friend['nama']}}</h3>
    <h3>No Tlp: {{$friend['no_tlp']}}</h3>
    <h3>Alamat Teman: {{$friend['alamat']}}</h3>
    <h3>Group : @if($friend->groups_id != 0) {{ $friend->groups->name }}
        @else Belum Masuk Group Manapun @endif
    </h3>
    <ul>
        @if($friend->groups_id != 0)
        @foreach ($friend->details as $details)
        <li> {{ $detail->groups->name }} </li>
        @endforeach
        @else
        @endif
    </ul>
    </div>
</div>

@endsection
