@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Kategori</h2>

    {{-- Flash message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Form update --}}
    <form action="{{ route('kategori.update', $kategori->kategori_id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kategori_kode" class="form-label">Kode Kategori</label>
                            <input type="text" class="form-control @error('kategori_kode') is-invalid @enderror"
                                   id="kategori_kode" name="kategori_kode"
                                   value="{{ old('kategori_kode', $kategori->kategori_kode) }}" required>
                            @error('kategori_kode')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kategori_nama" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control @error('kategori_nama') is-invalid @enderror"
                                   id="kategori_nama" name="kategori_nama"
                                   value="{{ old('kategori_nama', $kategori->kategori_nama) }}" required>
                            @error('kategori_nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Action Buttons --}}
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success me-2">Update</button>
                    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
