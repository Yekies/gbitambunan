@extends('layout.home')
@section('content')
<form action="{{ route('dewasa.update',$dewasa->id) }}" method="POST">
    @csrf
    @method('PUT')

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="text-center">
        <h5>Membuat Data Jemaat Baru</h5>
    </div><hr>  
    <i><center><b class="text-center">Kerohanian</b></center></i><hr>
 
    <div class="row">
        <div class="col-sm-7">
            <div class="form-group">
                <p>Terdaftar Sejak Tgl:</p>
                <input type="date" name="terdaftarsejak_tgl" value="{{ $dewasa->terdaftarsejak_tgl }}" class="form-control" placeholder="Tanggal">
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <p>Foto:</p>
                <input type="file" name="gambar" class="form-control">
                <img src="/gambar/{{ $dewasa->gambar }}" width="300px">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <p>Nama Lengkap:</p>
                <input type="text" name="nama_lengkap" class="form-control" value="{{ $dewasa->nama_lengkap }}">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <p>Tempat Lahir:</p>
                <input type="text" name="tl" class="form-control" value="{{ $dewasa->tl }}">
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <p>Tanggal Lahir:</p>
                <input type="date" name="tanggal_l" class="form-control" value="{{ $dewasa->tanggal_l }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <p>Jenis Kelamin:</p>
                <select class="form-control" name="jenis" id="jenis">
                    <option value="Laki-laki" {{ $dewasa->jenis === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $dewasa->jenis === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <p>Alamat Lengkap:</p>
                <input type="text" name="nama_lengkap" class="form-control" value="{{ $dewasa->nama_lengkap }}">
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <p>Nomor Telepon:</p>
                <input type="text" name="no_telpon" class="form-control" value="{{ $dewasa->no_telpon }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <p>Status Perkawinan:</p>
                <select class="form-control" name="status_p" id="status_p">
                    <option value="Sudah" {{ $dewasa->status_p === 'Sudah' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Belum" {{ $dewasa->status_p === 'Belum' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
        </div>
    </div>

    <h2>Kerohanian</h2><hr>

    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <p>Tanggal Penyeraan Anak:</p>
                <input type="date" name="tgl_penyeraan_a" class="form-control" value="{{ $dewasa->tgl_penyeraan_a }}">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <p>Dilayani Oleh:</p>
                <input type="text" name="dilayani_oleha" class="form-control" value="{{ $dewasa->dilayani_oleha }}">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <p>Nomor Pa:</p>
                <input type="text" name="no_pa" class="form-control" value="{{ $dewasa->no_pa }}">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <p>Gereja:</p>
                <input type="text" name="gereja_pa" class="form-control" value="{{ $dewasa->gereja_pa }}">
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <p>Tanggal Baptisan Selam:</p>
                <input type="date" name="tgl_baptis" class="form-control" value="{{ $dewasa->tgl_baptis }}">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <p>Dilayani Oleh:</p>
                <input type="text" name="dilayani_olehb" class="form-control" value="{{ $dewasa->dilayani_olehb }}">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <p>Nomor Bs:</p>
                <input type="text" name="no_bs" class="form-control" value="{{ $dewasa->no_bs }}">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <p>Gereja:</p>
                <input type="text" name="gereja_bs" class="form-control" value="{{ $dewasa->gereja_bs }}">
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <p>Tanggal Pernikaan:</p>
                <input type="date" name="tgl_pernikaan" class="form-control" value="{{ $dewasa->tgl_pernikaan }}">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <p>Dilayani Oleh:</p>
                <input type="text" name="dilayani_olehc" class="form-control" value="{{ $dewasa->dilayani_olehc }}">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <p>Nomor Pn:</p>
                <input type="text" name="no_pn" class="form-control" value="{{ $dewasa->no_pn }}">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <p>Gereja:</p>
                <input type="text" name="gereja_per" class="form-control" value="{{ $dewasa->gereja_per }}">
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-12">
        <div class="form-group">
            <p>Beribadah di Cabang:</p>
            <input type="text" name="brb_c" class="form-control" value="{{ $dewasa->brb_c }}">
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <p>Menggikuti Fa:</p>
                <select class="form-control" name="mengikuti_fa" id="mengikuti_fa">
                    <option value="Sudah" {{ $dewasa->mengikuti_fa === 'Sudah' ? 'selected' : '' }}>Sudah</option>
                    <option value="Belum" {{ $dewasa->mengikuti_fa === 'Belum' ? 'selected' : '' }}>Belum</option>
                </select>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <p>Nomor Fa:</p>
                <input type="text" name="no_fa" class="form-control" value="{{ $dewasa->no_fa }}">
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <p>Melayani:</p>
                <select class="form-control" name="melayani" id="melayani">
                    <option value="Sudah" {{ $dewasa->melayani === 'Sudah' ? 'selected' : '' }}>Sudah</option>
                    <option value="Belum" {{ $dewasa->melayani === 'Belum' ? 'selected' : '' }}>Belum</option>
                </select>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <p>Bidang:</p>
                <input type="text" name="bidang" class="form-control" value="{{ $dewasa->bidang }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <p>TST :</p>
                <input type="text" name="tst" class="form-control" value="{{ $dewasa->tst }}">
            </div>
        </div>
    </div>
    </div>
   
   
        <div class="col-sm-4">
            <button type="submit" class="btn-sm btn btn-primary">Kirim</button>
        </div>
        </form>
@endsection