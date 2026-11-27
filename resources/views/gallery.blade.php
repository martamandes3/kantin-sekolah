@extends('layouts.app')
@section('title', 'Galeri Foto')
@section('content')
    <h1>Galeri Kegiatan Kami</h1>
    <p>Lihat momen-momen terbaik dari berbagai acara dan proyek yang telah
        kami selenggarakan.</p>
    <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content:
                                        space-around;">
        <div style="width: 100%; max-width: 300px; border: 1px solid #eee;
                                        padding: 10px; border-radius: 5px; text-align: center;">

            <p style="height: 150px; background-color: #e0f2f1; display: flex;
                                        align-items: center; justify-content: center; font-size: 24px;"></p>

            <p>Kegiatan Sosial 2024</p>
        </div>
        <div style="width: 100%; max-width: 300px; border: 1px solid #eee;
                                        padding: 10px; border-radius: 5px; text-align: center;">

            <p style="height: 150px; background-color: #e0f2f1; display: flex;
                                        align-items: center; justify-content: center; font-size: 24px;"></p>

            <p>Workshop Kreatif</p>
        </div>
    </div>
@endsection