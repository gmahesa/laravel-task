 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Claim Barang</div>

                <div class="card-body">
                    <h1>Claim {{ $Founds->name }}</h1>
                    <form method="POST" action="/claim/{{ $Founds->id }}/save">
                    {{ csrf_field() }}
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Anda</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="nama">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Kontak Anda</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="kontak">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email Anda</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Claim Barang</button>
                        </div>
                      </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
