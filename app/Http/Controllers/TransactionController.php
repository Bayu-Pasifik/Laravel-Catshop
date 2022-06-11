<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function tampil(){
        $transaction = Transaction::all();
        return view('transaction.transaction', compact('transaction'));
    }
    public function tambah(){
        return view('transaction.transaction-entry');
    }
    // function untuk insert data
    function upload(Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'tgl' => 'required'
        ]);

        Transaction::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'tgl' => $request->tgl
        ]);

        return redirect('/transaction')->with('success', 'Data berhasil ditambahkan');
    }

    function edit($id_transaction) {
        $transaction = Transaction::find($id_transaction);
        return view('transaction.transaction-edit', compact('transaction'));
    }
    // update data ke database
    function update($id_transaction, Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'jenis' => 'required',
            'tgl' => 'required'
        ]);

        $transaction = Transaction::find($id_transaction);
        $transaction->nama = $request->nama;
        $transaction->jenis = $request->jenis;
        $transaction->harga = $request->harga;
        $transaction->tgl = $request->tgl;

        $transaction->save();
        return redirect('/transaction').with('success', 'Data berhasil diubah');
    }

    function hapus($id_transaction) {
        $transaction = Category::find($id_transaction);
        return view('transaction.transaction-hapus', compact('transction'));
    }

    function delete($id_transaction) {
        // hapus file
        $transaction = Transaction::find($id_transaction);
        // hapus data
        $transaction->delete();
        return redirect('/transction');
    }

    function noDelete() {
        return redirect('/transcation')->with('error', 'Data tidak dapat dihapus');
    }
  
}
