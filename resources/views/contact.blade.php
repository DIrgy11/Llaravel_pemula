@extends('layouts.app')

@section('title', 'Halaman Kontak')

@section('content')
    <div class="bg-white rounded-xl shadow-lg p-8 max-w-2xl mx-auto mt-10 border border-slate-100">
        <h1 class="text-3xl font-extrabold text-slate-800 border-b border-slate-200 pb-4 mb-6 tracking-tight">Hubungi Saya</h1>
        
        <p class="text-slate-600 mb-6 text-lg">
            Punya pertanyaan atau masukan?
        </p>

        <form action="#" method="POST" class="space-y-6">
            <div>
                <label class="block text-slate-700 font-semibold mb-2">Nama Lengkap</label>
                <input type="text" class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition" placeholder="Masukkan nama Anda">
            </div>
            
            <div>
                <label class="block text-slate-700 font-semibold mb-2">Alamat Email</label>
                <input type="email" class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition" placeholder="nama@email.com">
            </div>
            
            <div>
                <label class="block text-slate-700 font-semibold mb-2">Pesan</label>
                <textarea rows="5" class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition" placeholder="Tuliskan pesan atau pertanyaan di sini..."></textarea>
            </div>
            
            <button type="button" class="bg-blue-600 text-white font-bold px-6 py-3 rounded-lg hover:bg-blue-700 w-full transition duration-300 shadow-md hover:shadow-lg">
                Kirim Pesan
            </button>
        </form>
    </div>
@endsection