@extends('layout.template')

@section('title', 'Watchlist')

@section('content')
<h1>Watchlist</h1>
@if (count($watchlist) > 0)
    <ul>
        @foreach ($watchlist as $movie)
            <li>{{ $movie['judul'] }}</li>
        @endforeach
    </ul>
@else
    <p>Watchlist Anda kosong.</p>
@endif
<a href="/" class="btn btn-success">Kembali ke Beranda</a>
@endsection
