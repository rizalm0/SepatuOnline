<?php

namespace App\Controllers;

use App\Models\ModelBarang;

class DataBarang extends BaseController
{
    public function index()
    {
        $barang = new ModelBarang();
        $data['brg'] = $barang->findAll();
        echo view('part_admin/header');
        echo view('part_admin/sidebar');
        echo view('admin/data_barang', $data);
        echo view('part_admin/footer');
    }


    public function tambah()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama_brg'    => 'required',
            'keterangan'  => 'required',
            'kategori'    => 'required',
            'harga'       => 'required',
            'stok'        => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid){
            $brg = new ModelBarang();
            $brg->set([
                'nama_brg'    => $this->request->getPost('nama_brg'),
                'keterangan'  => $this->request->getPost('keterangan'),
                'kategori'    => $this->request->getPost('kategori'),
                'harga'       => $this->request->getPost('harga'),
                'stok'        => $this->request->getPost('stok')
            ]);
            $brg->insert();
            return redirect('admin/data_barang');
        }
    }

    public function edit($id)
{
    $barang = new ModelBarang();
    $data['brg'] = $barang->find($id);

    if (!$data) {
        throw new \Exception('Data not found');
    }

    $validation = \Config\Services::validation();
    $validation->setRules([
        'nama_brg'    => 'required',
        'keterangan'  => 'required',
        'kategori'    => 'required',
        'harga'       => 'required',
        'stok'        => 'required',
    ]);

    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid) {
        $barang->set([
            'nama_brg'    => $this->request->getPost('nama_brg'),
            'keterangan'  => $this->request->getPost('keterangan'),
            'kategori'    => $this->request->getPost('kategori'),
            'harga'       => $this->request->getPost('harga'),
            'stok'        => $this->request->getPost('stok'),
        ]);

        $barang->update($id);
        return redirect('admin/data_barang');
    }
        echo view('part_admin/header');
        echo view('part_admin/sidebar');
        echo view('admin/edit_barang', $data);
        echo view('part_admin/footer');
        
}

    public function delete($id)
    {
        $barang = new ModelBarang();
        $barang->delete($id);

        return redirect('admin/data_barang');
    }

    

}
