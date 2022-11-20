@extends('template')
@section('content')
<h4>Form Edit Supplier</</h4>
<hr>
<form method="POST" action="editsimpan">
    <table border="0" cellpadding="20px">
        <tr>
            <td>
                Nama Supplier
            </td>
            <td>
                <input type="text" name="nama_supplier" value="{{$nama_supplier}}"/>
                <input type="hidden"  name="id_supplier" value="{{$id_supplier}}" />
            </td>
        </tr>
        <tr>
            <td>
                Alamat
            </td>
            <td>
                <input type="text" name="alamat_supplier" value="{{$alamat_supplier}}" />
            </td>
        </tr>
        <tr>
            <td>
                no_telp
            </td>
            <td>
                <input type="text" name="no_telp" value="{{$no_telp}}" />
            </td>
        </tr>
    </table>
    <button type="submit" value="Simpan">SIMPAN</button>
</form>
@endsection