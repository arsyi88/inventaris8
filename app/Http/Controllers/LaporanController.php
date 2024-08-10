<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class LaporanController extends Controller
{
    public function index()
    {
        return view('admin.laporan.index');
    }

    public function cetak_barang()
    {
        $data = Barang::get();
        $pdf = Pdf::loadView('admin.laporan.pdf_barang', compact('data'));
        return $pdf->stream('barang.pdf');

    }
}
