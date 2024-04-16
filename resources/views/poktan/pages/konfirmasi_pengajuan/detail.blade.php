@extends('petani.layouts.app')

@section('title', 'Dashboard | Konfirmasi Pengajuan')

@section('feature', 'Detail Konfirmasi Modal')

@section('content')
    <div class="w-full min-h-screen pt-3">
        <div class="bg-white w-full mx-auto">
            <form action="{{ route('poktan.konfirmasi.status', $pengajuanmodals->id) }}" method="POST" class="bg-gray-100 rounded-xl">
                @csrf
                @method('PUT')
                <h1 class="text-2xl pt-4 font-semibold justify-center flex">Form Pengajuan Modal</h1>
                <hr class="border-b-2 border-gray-500 my-3">
                <div class="px-10 py-5">
                    <div class="flex items-center mb-5">
                        <label for="name"
                            class="inline-block w-1/3 mr-5 text-left 
                                    font-bold text-gray-600">Nama
                            Petani</label>
                        <p class="mr-4">:</p>
                        <input readonly value="{{ $pengajuanmodals->name }}" type="text" id="name" name="name"
                            placeholder="Masukan Nama Petani"
                            class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 
                            text-gray-600 placeholder-gray-400
                            outline-none">
                    </div>

                    <div class="flex items-center mb-5">
                        <label for="pekerjaan"
                            class="inline-block w-1/3 mr-5 text-left 
                                    font-bold text-gray-600">Pekerjaan</label>
                        <p class="mr-4">:</p>
                        <input readonly value="{{ $pengajuanmodals->pekerjaan }}" type="text" id="pekerjaan"
                            name="pekerjaan" placeholder="Masukan Pekerjaan"
                            class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 
                            text-gray-600 placeholder-gray-400
                            outline-none">
                    </div>

                    <div class="flex items-center mb-5">
                        <label for="alamat"
                            class="inline-block w-1/3 mr-5 text-left 
                                    font-bold text-gray-600">Alamat</label>
                        <p class="mr-4">:</p>
                        <input readonly value="{{ $pengajuanmodals->alamat }}" type="text" id="alamat" name="alamat"
                            placeholder="Masukan Alamat"
                            class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 
                            text-gray-600 placeholder-gray-400
                            outline-none">
                    </div>

                    <div class="flex items-center mb-5">
                        <label for="poktan"
                            class="inline-block w-1/3 mr-5 text-left 
                                    font-bold text-gray-600">Poktan</label>
                        <p class="mr-4">:</p>
                        <input readonly value="{{ $pengajuanmodals->poktan }}" type="text" id="poktan" name="poktan"
                            placeholder="Masukan Poktan"
                            class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 
                            text-gray-600 placeholder-gray-400
                            outline-none">
                    </div>

                    <div class="flex items-center mb-5">
                        <label for="jumlah_pinjaman"
                            class="inline-block w-1/3 mr-5 text-left 
                                    font-bold text-gray-600">Jumlah
                            Peminjaman</label>
                        <p class="mr-4">:</p>
                        <input readonly value="{{ $pengajuanmodals->jumlah_pinjaman }}" type="number" id="jumlah_pinjaman"
                            name="jumlah_pinjaman" placeholder="Masukan Jumlah Peminjaman"
                            class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 
                            text-gray-600 placeholder-gray-400
                            outline-none">
                    </div>

                    <div class="flex items-center mb-5">
                        <label for="bunga"
                            class="inline-block w-1/3 mr-5 text-left 
                                    font-bold text-gray-600">Bunga</label>
                        <p class="mr-4">:</p>
                        <input readonly value="{{ $pengajuanmodals->bunga }}" type="number" id="bunga" name="bunga"
                            placeholder="Masukan Bunga"
                            class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 
                            text-gray-600 placeholder-gray-400
                            outline-none">
                    </div>

                    <div class="flex items-center mb-5">
                        <label for="jumlah_diterima"
                            class="inline-block w-1/3 mr-5 text-left 
                                    font-bold text-gray-600">Jumlah
                            Diterima</label>
                        <p class="mr-4">:</p>
                        <input readonly value="{{ $pengajuanmodals->jumlah_diterima }}" type="number" id="jumlah_diterima"
                            name="jumlah_diterima" placeholder="Masukan Jumlah Diterima"
                            class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 
                            text-gray-600 placeholder-gray-400
                            outline-none">
                    </div>

                    <div class="flex items-center mb-5">
                        <label for="tanggal_pinjam"
                            class="inline-block w-1/3 mr-5 text-left 
                                    font-bold text-gray-600">Tanggal
                            Pinjam</label>
                        <p class="mr-4">:</p>
                        <input readonly value="{{ date('Y-m-d', strtotime($pengajuanmodals->tanggal_pinjam)) }}"
                            type="date" id="tanggal_pinjam" name="tanggal_pinjam" placeholder="Masukan Tanggal Pinjam"
                            class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 
                            text-gray-600 placeholder-gray-400
                            outline-none">
                    </div>

                    <div class="flex items-center mb-5">
                        <label for="tanggal_kembali"
                            class="inline-block w-1/3 mr-5 text-left 
                                    font-bold text-gray-600">Tanggal
                            Kembali</label>
                        <p class="mr-4">:</p>
                        <input readonly value="{{ date('Y-m-d', strtotime($pengajuanmodals->tanggal_kembali)) }}"
                            type="date" id="tanggal_kembali" name="tanggal_kembali" placeholder="Masukan Tanggal Kembali"
                            class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 
                            text-gray-600 placeholder-gray-400
                            outline-none">
                    </div>
                    <div>
                        <button class="w-full h-10 bg-gray-500 px-10 font-semibold rounded-md text-white" type="submit">
                            Konfirmasi
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
