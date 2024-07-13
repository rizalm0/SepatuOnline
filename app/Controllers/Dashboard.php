<?php

namespace App\Controllers;

use App\Models\ModelBarang;

class Dashboard extends BaseController
{
    public function index()
    {
        $barang = new ModelBarang();
        $data['brg'] = $barang->findAll();
        echo view('part/header');
        echo view('part/sidebar');
        echo view('dashboard', $data);
        echo view('part/footer');
    }

    public function tambah_keranjang()
    {
        $barang = new ModelBarang();
        $cart = \Config\Services::cart();

        $cart->insert(array(
            'id'    => $this->request->getPost('id'),
            'qty'    => 1,
            'harga'    => $this->request->getPost('harga'),
            'nama'    => $this->request->getPost('nama')
        ));
        return redirect('dashboard');
    }

    public function detail_barang($id)
    {
        $barang = new ModelBarang();
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

    public function searchByName()
    {
        $nama_barang = $this->request->getVar('nama_barang');
        $barangModel = new ModelBarang();
        $results = $barangModel->getProductsByName($nama_barang);
        return view('dashboard', ['results' => $results]);
    }
}