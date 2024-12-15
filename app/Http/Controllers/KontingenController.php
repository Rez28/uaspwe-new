<?php

namespace App\Http\Controllers;

use App\Models\Kontingen;

class KontingenController extends Controller
{
    public function show(Kontingen $kontingen)
    {
        // Ambil data kontingen beserta officials dan atlets
        $kontingen->load(['officials', 'atlets']);

        // Kirim data ke view
        return view('admin.manajemen.show', compact('kontingen'));
    }
}
