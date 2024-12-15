@extends('layouts.app')
@section('content')
    @if ($categories && $kontingen)
        <form action="{{ route('admin.atlets.update', ['id' => $atlet->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama Atlet</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $atlet->name) }}"
                    required>
            </div>
            <div class="form-group">
                <label for="birth_date">Tanggal Lahir</label>
                <input type="date" name="birth_date" id="birth_date" class="form-control"
                    value="{{ old('birth_date', $atlet->birth_date) }}" required>
            </div>
            <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="L" {{ old('gender', $atlet->gender) == 'L' ? 'selected' : '' }}>Laki-laki
                    </option>
                    <option value="P" {{ old('gender', $atlet->gender) == 'P' ? 'selected' : '' }}>Perempuan
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label for="weight">Berat Badan (kg)</label>
                <input type="number" name="weight" id="weight" class="form-control"
                    value="{{ old('weight', $atlet->weight) }}" required>
            </div>
            <div class="form-group">
                <label for="height">Tinggi Badan (cm)</label>
                <input type="number" name="height" id="height" class="form-control"
                    value="{{ old('height', $atlet->height) }}" required>
            </div>
            <div class="form-group">
                <label for="category_id">Kategori</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $atlet->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Atlet</button>
        </form>
        </div>
    @else
        <p>Kategori tidak ditemukan.</p>
    @endif
@endsection
