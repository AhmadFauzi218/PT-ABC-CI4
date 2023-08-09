<?php

namespace App\Controllers;

class Pengguna extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('pengguna');
        $query = $builder->get()->getResult();
        $data['pengguna'] = $query;
        return view('pengguna/get', $data);

        // print_r($query->getResult());
    }

    public function create()
    {
        return view('pengguna/add');
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

        $this->db->table('pengguna')->insert($data);     //simpan data

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('pengguna'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('pengguna')->getWhere(['id_pengguna' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['pengguna'] = $query->getRow();
                return view('pengguna/edit', $data);
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

        $this->db->table('pengguna')->where(['id_pengguna' => $id])->update($data);
        return redirect()->to(site_url('pengguna'))->with('success', 'Data Berhasil DiUpdate');
    }

    public function destroy($id)
    {
        $this->db->table('pengguna')->where(['id_pengguna' => $id])->delete();
        return redirect()->to(site_url('pengguna'))->with('success', 'Data Berhasil DiHapus');
    }
}
