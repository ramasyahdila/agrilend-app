<?php

namespace App\Http\Controllers\Petani;

use App\Http\Controllers\Controller;
use App\Models\PengajuanModal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengajuanModalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('petani.pages.main');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function pengajuan()
    {
        $pengajuanmodals = PengajuanModal::all();

        return view('petani.pages.pengajuan.index', compact('pengajuanmodals'));
    }

    public function add()
    {
        return view('petani.pages.pengajuan.add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'pekerjaan' => 'required|string',
            'alamat' => 'required|string',
            'poktan' => 'required|string',
            'jumlah_pinjaman' => 'required|numeric',
            'bunga' => 'required|numeric',
            'jumlah_diterima' => 'required|numeric',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        PengajuanModal::create($request->all());
        return redirect()->route('partner.dashboard.pengajuan')->with('success', 'Data pengajuan modal berhasil disimpan.');
    }

    public function show($id)
    {
        $pengajuanmodals = PengajuanModal::where('id', $id)->first();

        return view('petani.pages.pengajuan.edit', compact('pengajuanmodals'));
    }
    public function detail($id)
    {
        $pengajuanmodals = PengajuanModal::where('id', $id)->first();

        return view('petani.pages.pengajuan.detail', compact('pengajuanmodals'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'pekerjaan' => 'required|string',
            'alamat' => 'required|string',
            'poktan' => 'required|string',
            'jumlah_pinjaman' => 'required|numeric',
            'bunga' => 'required|numeric',
            'jumlah_diterima' => 'required|numeric',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pengajuanModal = PengajuanModal::findOrFail($id);

        $pengajuanModal->update($request->all());

        return redirect()->route('partner.dashboard.pengajuan')->with('success', 'Data pengajuan modal berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengajuanModal = PengajuanModal::find($id);

        if ($pengajuanModal) {
            $pengajuanModal->delete();

            return redirect()->route('partner.dashboard.pengajuan')->with('success', 'Data pengajuan modal berhasil dihapus.');
        } else {
            return redirect()->route('partner.dashboard.pengajuan')->with('error', 'Data pengajuan modal tidak ditemukan.');
        }
    }
}
