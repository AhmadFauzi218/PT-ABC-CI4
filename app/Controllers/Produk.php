<?php

namespace App\Controllers;

class Produk extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('produk');
        $query = $builder->get()->getResult();
        $data['produk'] = $query;
        return view('produk/get', $data);

        // print_r($query->getResult());
    }
    public function cg()
    {
        $builder = $this->db->table('produk');
        $query = $builder->get()->getResult();
        $data['produk'] = $query;
        return view('anggota/lapbarang/get', $data);

        // print_r($query->getResult());
    }
    public function cg1()
    {
        $builder = $this->db->table('produk');
        $query = $builder->get()->getResult();
        $data['produk'] = $query;
        return view('anggota/barangmasuk/get', $data);

        // print_r($query->getResult());
    }
    public function create()
    {
        return view('produk/add');
    }

    public function store()
    {
        //cara 1 apabila nama filed db == name form
        $data = $this->request->getPost();

        //cara 2 apabila nama filed db != name form
        // $data = [
        //     'name_gawe'=>$this->request->getVar('name_gawe'),
        //     'date_gawe'=>$this->request->getVar('date_gawe'),
        //     'info_gawe'=>$this->request->getVar('info_gawe')
        // ];

        $this->db->table('produk')->insert($data);     //simpan data

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('produk'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('produk')->getWhere(['id' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['produk'] = $query->getRow();
                return view('produk/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id)
    {
        //cara 1 apabila nama filed db == name form
        $data = $this->request->getPost();
        unset($data['_method']);

        // cara 2 apabila nama filed db != name form
        // $data = [
        //     'name_gawe'=>$this->request->getVar('name_gawe'),
        //     'date_gawe'=>$this->request->getVar('date_gawe'),
        //     'info_gawe'=>$this->request->getVar('info_gawe')
        // ];

        $this->db->table('produk')->where(['id' => $id])->update($data);
        return redirect()->to(site_url('produk'))->with('success', 'Data Berhasil DiUpdate');
    }

    public function destroy($id)
    {
        $this->db->table('produk')->where(['id' => $id])->delete();
        return redirect()->to(site_url('produk'))->with('success', 'Data Berhasil DiHapus');
    }
}
