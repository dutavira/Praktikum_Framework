@extends('layouts.global')
@section('content')
    <div clas="isi">
        <h2 class="pb-2 border-bottom">Siap Sedia Sepatu</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            @foreach ($sepatus as $sepatu)
            <div class=" col">
                <h3 class="fs-2">{{ $sepatu['nama_sepatu'] }}</h3>
                <p>merk : {{ $sepatu['merk'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
@endsection