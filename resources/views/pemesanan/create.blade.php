@extends('layouts.layout')

@section('content')

    <!-- START FORM -->
    <form action='{{ url('pemesanan') }}' method='post'>
    @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='email' id="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="id_tiket" class="col-sm-2 col-form-label">ID Tiket</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='id_tiket' id="id_tiket">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tgl_acara" class="col-sm-2 col-form-label">Tanggal Acara</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tgl_acara' id="tgl_acara">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='status' id="status">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>
        <!-- AKHIR FORM -->
@endsection