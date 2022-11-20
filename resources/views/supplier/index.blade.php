@extends('template')
@section('content')

<div class="float-start">
    <a href="supplier/tambah"><btn class="btn btn-success">Tambah Supplier</btn></a>
</div>
<div class="float-end mb-3 ">
    <a href="logout"><btn class="btn btn-danger">Logout</btn></a>
</div>
<table class="table table-striped table-hover table-bordered ">
    <tr>
        <th>
            NO
        </th>
        <th>
            Nama Supplier
        </th>
        <th>
            Alamat Supplier
        </th>
        <th>
            No Telp
        </th>
        <th>
            AKSI
        </th>
    </tr>
    <?php
    $no = 1;
    ?>
    @foreach($supplier as $item)

    <tr>
        <td>
            {{$no++}}
        </td>
        <td>
            {{$item->nama_supplier}}
        </td>
        <td>
            {{$item->alamat_supplier}}
        </td>
        <td>
            {{$item->no_telp}}
        </td>
        <td>
            <a href="supplier/edit/{{$item->id_supplier}}"><btn class="btn btn-info">EDIT</btn></a>
            <a href="supplier/hapus/{{$item->id_supplier}}"><btn class="btn btn-warning">Hapus</btn></a>
        </td>
    </tr>
    @endforeach
</table>
@endsection