<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Error;
use Exception;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    protected $supplierModel;
    public function __construct()
    {
        $this->supplierModel = new Supplier;
        $this->middleware('auth:web', []);
    }
    public function index()
    {
        //menampilkan seluruh supplier
        $data = [
            'title' => 'Daftar supplier Gudang',
            'supplier' => $this->supplierModel->all()
        ];
        return view('supplier.index', $data);
    }
    public function formTambah()
    {
        return view('supplier.formtambah');
    }
    public function simpan(Request $request)
    {
        try {
            $data = [
                'nama_supplier' => $request->input('nama_supplier'),
                'alamat_supplier' => $request->input('alamat_supplier'),
                'no_telp'        => $request->input('no_telp')
            ];
            //substr(hexdec(random_int(0,9999908)),4,-4);

            $id_supplier = substr(md5(rand(0, 99999)), -4);
            $data['id_supplier'] = $id_supplier;
            // echo json_encode($data);
            //insert data ke database
            $insert = $this->supplierModel->create($data);
            //Promise 
            if ($insert) {
                //redirect('gudang','refresh');
                return redirect('supplier');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
            //return "yaaah error nih, sorry ya";
        }
    }

    public function edit($id = null)
    {

        $edit = $this->supplierModel->find($id);
        // echo json_encode($edit);
        return view('supplier.formedit', $edit);
    }
    public function editsimpan(Request $request)
    {
        try {
            $data = [
                'nama_supplier'   => $request->input('nama_supplier'),
                'alamat_supplier' => $request->input('alamat_supplier'),
                'no_telp'    => $request->input('no_telp')
            ];
            $upd = $this->supplierModel
                ->where('id_supplier', $request->input('id_supplier'))
                ->update($data);
            if ($upd) {
                return redirect('supplier');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function hapus($id = null)
    {
        try {
            $hapus = $this->supplierModel
                ->where('id_supplier', $id)
                ->delete();
            if ($hapus) {
                return redirect('supplier');
            }
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
}
