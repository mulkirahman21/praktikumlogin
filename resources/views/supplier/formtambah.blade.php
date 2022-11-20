@extends('template')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Form Tambah Supplier</h4>
    </div>
    <form method="POST" action="simpan">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Nama Supplier</label>
                        <input type="text" name="nama_supplier" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Alamat Supplier</label>
                        <input type="text" name="alamat_supplier" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-label">No Telp</label>
                        <input type="text" name="no_telp" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <button class="btn btn-primary mt-3" type="submit">SIMPAN</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection