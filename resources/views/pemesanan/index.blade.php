@extends('layouts.layout')

@section('content')
    <!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
          <form class="d-flex" action="" method="get">
              <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
              <button class="btn btn-secondary" type="submit">Cari</button>
          </form>
        </div>
        
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
          <a href='{{ url('pemesanan/create') }}' class="btn btn-primary">+ Tambah Tiket</a>
        </div>
  
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-2">Nama</th>
                    <th class="col-md-2">Email</th>
                    <th class="col-md-2">ID Tiket</th>
                    <th class="col-md-2">Tanggal Acara</th>
                    <th class="col-md-2">Status</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $i=$data->firstItem()?>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->nama}}</td>
                    <td>{{ $item->email}}</td>
                    <td>{{ $item->id_tiket}}</td>
                    <td>{{ $item->tgl_acara}}</td>
                    <td>{{ $item->status}}</td>
                    <td>
                        <a href='{{ url(pemesanan.edit)}}' class="btn btn-warning btn-sm">Edit</a>
                        <a href='' class="btn btn-danger btn-sm">Del</a>
                    </td>
                </tr>
                <?php $i++ ?>
                @endforeach
            </tbody>
        </table>
       {{ $data->links()}}
  </div>
  <!-- AKHIR DATA -->
@endsection