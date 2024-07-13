<?php

namespace App\Controllers;

use App\Models\ModelBarang;

class Checkout extends BaseController
{
    public function index($id)
    {
        $barang = new ModelBarang($id);
        $data['brg'] = $barang->find($id);

        if ($data['brg']) {
            return view('part/header')
            . view('part/sidebar')
            . view('detail_barang', $data)
            . view('part/footer');
        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Barang tidak ditemukan');
        }
    }   

    // public function checkout()
    // {
    // // Get the product information
    // $barang = new \App\Models\ModelBarang();
    // $barang = $barang->find($this->request->getVar('id_brg'));

    // // Check if the product exists
    // if (!$barang) {
    //     return redirect()->to('/')->with('error', 'Product not found!');
    // }

    // // Get the order details from the request
    // $nama = $this->request->getVar('name_cust');
    // $alamat = $this->request->getVar('alamat');

    // // Create a new invoice
    // $invoice = new \App\Models\Invoice();
    // $invoice->nama = $nama_cust;
    // $invoice->alamat = $alamat;
    // $invoice->id_brg = $barang->id_brg;
    // $invoice->total = $barang->harga;
    // $invoice->save();

    // // Redirect to the order confirmation page
    // return redirect()->to('/order/confirmation')->with('success', 'Your order has been placed successfully!');
    // }
}