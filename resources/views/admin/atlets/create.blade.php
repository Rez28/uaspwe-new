@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Tambah Atlet</h2>

        @if ($kontingen)
            <form action="{{ route('admin.atlets.store') }}" method="POST">
                @csrf
                <input type="hidden" name="kontingen_id" value="{{ $kontingen->id }}">
                <div class="form-group">
                    <label for="name">Nama Atlet</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="birth_date">Tanggal Lahir</label>
                    <input type="date" name="birth_date" id="birth_date" class="form-control"
                    value="{{ old('birth_date') }}" required>
                </div>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="#" {{ old('gender') == 'L' ? 'selected' : '' }}></option>
                        <option value="L" {{ old('gender') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ old('gender') == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="weight">Berat Badan (kg)</label>
                    <input type="number" name="weight" id="weight" class="form-control" value="{{ old('weight') }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="height">Tinggi Badan (cm)</label>
                    <input type="number" name="height" id="height" class="form-control"
                        value="{{ old('height') }}"required>
                </div>
                <div class="form-group">
                    <label for="category_id">Kategori</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary mt-3">Tambah Atlet</button>
            </form>
        @else
            <p>Kontingen tidak ditemukan.</p>
        @endif
    </div>
@endsection
