@extends('dashboard.layouts.main')

@section('content')
    <div class="container-xxl" id="kt_content_container">
        <div class="card">
            <div class="card-header border-0 pt-6">
                <h1 class="h3"><strong>Tambah Role</strong></h1>
            </div>
            <div class="card-body pt-0">
                <form action="{{ route('role.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_role" class="form-label">Nama Role</label>
                        <input type="text" class="form-control" id="nama_role" name="nama_role" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection