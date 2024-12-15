<?php
namespace App\Http\Controllers;

use App\Models\Atlet;
use App\Models\Categories;
use App\Models\Kontingen;
use Illuminate\Http\Request;

class AtletController extends Controller
{
    public function create($kontingenId)
    {
        $kontingen = Kontingen::find($kontingenId);
        if (!$kontingen) {
            return redirect()->route('admin.manajemen.index')->with('error', 'Kontingen tidak ditemukan.');
        }

        // Ambil data kategori atau daftar opsi lain yang diperlukan di view
        $categories = Categories::all(); // Sesuaikan dengan model yang sesuai

        return view('admin.atlets.create', compact('kontingen', 'categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kontingen_id' => 'required|exists:kontingens,id',
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'weight' => 'required|integer',
            'height' => 'required|integer',
            'gender' => 'required|in:L,P',
        ]);

        Atlet::create($validatedData);
        return redirect()
            ->route('admin.manajemen.show', $request->kontingen_id)
            ->with('success', 'Atlet berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $atlet = Atlet::find($id);
        $categories = Categories::all(); // Sesuaikan dengan cara Anda mendapatkan data kategori
        if (!$atlet) {
            return redirect()->route('admin.manajemen.index')->with('error', 'Atlet tidak ditemukan');
        }
        return view('admin.atlets.edit', compact('atlet', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $atlet = Atlet::find($id);
        if (!$atlet) {
            return redirect()->route('admin.manajemen.index')->with('error', 'Atlet tidak ditemukan.');
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            // other necessary validations
        ]);

        $atlet->update($validatedData);

        return redirect()->route('admin.manajemen.index')->with('success', 'Atlet berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $atlet = Atlet::find($id);
        if (!$atlet) {
            return redirect()->route('admin.manajemen.index')->with('error', 'Atlet tidak ditemukan.');
        }

        $atlet->delete();

        return redirect()->route('admin.manajemen.index')->with('success', 'Atlet berhasil dihapus.');
    }
}
