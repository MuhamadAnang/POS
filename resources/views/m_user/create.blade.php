@extends('m_user/template')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-lg-8">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h2 class="m-0">Buat Daftar User Baru</h2>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Oops!</strong> Terjadi kesalahan saat memasukkan data.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('m_user.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukkan username">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama">
                    </div>
                    <div class="form-group">
                        <label for="level_id">Level ID:</label>
                        <select name="level_id" class="form-control">
                            @foreach($level as $lv)
                            <option value="{{ $lv->level_id }}">{{ $lv ->level_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('m_user.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
