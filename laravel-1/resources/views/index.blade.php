                @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Tambah Barang</div>

                <div class="card-body">
                    <h1>Tambah Barang</h1>
                    <form method="POST" action="/barang/save">
                    {{ csrf_field() }}
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="nama">
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi Barang</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Tambah Barang</button>
                        </div>
                      </div>
                </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Tabel Barang</div>

                <div class="card-body">
                    <h1>Daftar Barang Hilang/Ditemukan</h1>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama Barang</th>
                          <th scope="col">Deskripsi Barang</th>
                          <th scope="col">Waktu Hilang Barang</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($Founds as $c)
                        <tr>
                          <th scope="row">{{ $c->id }}</th>
                          <th scope="col">{{ $c->name }}</th>
                          <th scope="col">{{ $c->deskripsi }}</th>
                          <th scope="col">{{ $c->created_at }}</th>
                          <th scope="col"> <a href="/claim/{{ $c->id }}" class="btn btn-primary"> Claim </a> </th>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Tabel Claim</div>

                <div class="card-body">
                    <h1>Daftar Claim Barang</h1>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Nama Barang</th>
                          <th scope="col">Kontak</th>
                          <th scope="col">Email</th>
                          <th scope="col">Kode Ambil</th>
                          <th scope="col">Waktu Claim</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($Claims as $c)
                        <tr>
                          <th scope="col">{{ $c->id }}</th>
                          <th scope="col">{{ $c->nama }}</th>
                          <th scope="col">{{ $c->barang_nama }}</th>
                          <th scope="col">{{ $c->kontak}}</th>
                          <th scope="col">{{ $c->email}}</th>
                          <th scope="col">{{ $c->kode_ambil}}</th>
                          <th scope="col">{{ $c->created_at}}</th>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>




        </div>
    </div>
</div>
@endsection
