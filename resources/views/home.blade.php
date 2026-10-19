@extends('layouts.app')

@section('title', 'Halaman Home')

@section('content')
    <div class="bg-white rounded-xl shadow-lg p-10 text-center mt-12 max-w-3xl mx-auto border border-slate-100">
        <h1 class="text-4xl font-extrabold text-slate-800 mb-4 tracking-tight">Selamat Datang</h1>
        <p class="text-lg text-slate-600 mb-8">implementasi Layouting Blade Laravel.</p>
        <button class="bg-blue-600 text-white font-semibold px-8 py-3 rounded-lg hover:bg-blue-700 transition shadow-md hover:shadow-lg">
            Pelajari Lebih Lanjut
        </button>
    </div>
@endsection