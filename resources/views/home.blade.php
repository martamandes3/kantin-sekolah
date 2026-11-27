<!-- Perintah untuk mewarisi Master Layout -->
@extends('layouts.app')
<!-- Mengisi slot 'title' pada Master Layout -->
@section('title', 'Halaman Utama')
<!-- Mengisi slot 'content' pada Master Layout -->
@section('content')
    <h1>Selamat Datang di Organisasi Kami!</h1>
    <p>Ini adalah halaman utama, menampilkan konten dinamis dan unik.</p>
    <p>Kami bangga menjadi bagian dari komunitas yang dinamis dan
        bersemangat.</p>

    <div style="margin-top: 30px; padding: 20px; border: 1px solid #ccc; border-
    radius: 5px;">

        <h2>Visi Kami</h2>
        <p>Menjadi organisasi terdepan dalam inovasi dan kontribusi sosial.</p>
    </div>
@endsection