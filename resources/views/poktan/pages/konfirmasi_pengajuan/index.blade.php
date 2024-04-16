@extends('petani.layouts.app')

@section('title', 'Dashboard | Petani')

@section('feature', 'Pengajuan Modal')

@section('content')
    @if (session('success'))
        <div class="bg-green-200 px-4 py-2 rounded-md text-green-800">
            {{ session('success') }}
        </div>
    @endif
    <div class="flex min-h-screen justify-center">
        <div class="flex font-sans w-full">

            <div class="flex-auto w-full">
                @foreach ($pengajuanmodals as $pengajuanmodal)
                    <div class="flex p-6 bg-slate-100 items-center rounded-xl">
                        <div class="mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" height="65" viewBox="0 -960 960 960" width="65">
                                <path
                                    d="M240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h287q16 0 30.5 6t25.5 17l194 194q11 11 17 25.5t6 30.5v447q0 33-23.5 56.5T720-80H240Zm280-560v-160H240v640h480v-440H560q-17 0-28.5-11.5T520-640ZM240-800v200-200 640-640Z" />
                            </svg>
                        </div>
                        <div class="flex-auto">
                            <div class="flex flex-wrap w-full">
                                <h1 class="flex-auto text-xl font-semibold text-gray-900">
                                    Pengajuan Modal {{ $loop->iteration }}
                                </h1>
                                <div class="text-lg font-semibold text-black-500">
                                    {{ $pengajuanmodal->created_at->format('d F Y') }}

                                </div>
                            </div>
                            <div class="flex space-x-4 mb-6 text-sm font-medium">
                                <div class="flex-auto flex space-x-4">
                                    <div class="w-full flex-none text-sm font-medium text-black-700 mt-2">
                                        {{ $pengajuanmodal->name }}
                                    </div>
                                </div>
                            
                                <a href="{{ route('poktan.konfirmasi.show', $pengajuanmodal->id) }}">
                                    <button class="h-10 bg-gray-500 px-10 font-semibold rounded-md text-white"
                                        type="button">
                                        Lihat
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection
