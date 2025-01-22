<?php

namespace App\Controllers;

use App\Models\MetaModel;
use App\Models\ProfilModel;
use CodeIgniter\RESTful\ResourceController;

class ProfilController extends ResourceController
{
    public function index()
    {
        $profil = new ProfilModel();
        $meta = new MetaModel();
        $lang = session()->get('lang') ?? 'id';

        $data = [
            'tb_profil' => $profil->findAll(),
            'tb_meta' => $meta->find(2),
            'lang' => $lang
        ];

        return view('/profil', $data);
    }

    //     // Menampilkan form untuk menambah data profil baru
    //     public function create()
    //     {
    //         return view('profils/create');
    //     }

    //     // Menyimpan data profil baru ke database
    //     public function store()
    //     {
    //         $data = [
    //             'nama_perusahaan' => $this->request->getPost('nama_perusahaan'),
    //             'foto_perusahaan' => $this->request->getPost('foto_perusahaan'),
    //             'logo_perusahaan' => $this->request->getPost('logo_perusahaan'),
    //             'deskripsi_perusahaan_id' => $this->request->getPost('deskripsi_perusahaan_id'),
    //             'deskripsi_perusahaan_en' => $this->request->getPost('deskripsi_perusahaan_en'),
    //         ];

    //         if (!$this->profilModel->save($data)) {
    //             return redirect()->back()->withInput()->with('errors', $this->profilModel->errors());
    //         }

    //         return redirect()->to('/profils')->with('success', 'Profil berhasil ditambahkan.');
    //     }

    //     // Menampilkan form untuk mengedit data profil
    //     public function edit($id = null)
    //     {
    //         $profil = $this->profilModel->find($id);

    //         if (!$profil) {
    //             throw new \CodeIgniter\Exceptions\PageNotFoundException("Profil dengan ID $id tidak ditemukan.");
    //         }

    //         return view('profils/edit', ['profil' => $profil]);
    //     }

    //     // Memperbarui data profil
    //     public function update($id = null)
    //     {
    //         $data = [
    //             'id_perusahaan' => $id,
    //             'nama_perusahaan' => $this->request->getPost('nama_perusahaan'),
    //             'foto_perusahaan' => $this->request->getPost('foto_perusahaan'),
    //             'logo_perusahaan' => $this->request->getPost('logo_perusahaan'),
    //             'deskripsi_perusahaan_id' => $this->request->getPost('deskripsi_perusahaan_id'),
    //             'deskripsi_perusahaan_en' => $this->request->getPost('deskripsi_perusahaan_en'),
    //         ];

    //         if (!$this->profilModel->save($data)) {
    //             return redirect()->back()->withInput()->with('errors', $this->profilModel->errors());
    //         }

    //         return redirect()->to('/profils')->with('success', 'Profil berhasil diperbarui.');
    //     }

    //     // Menghapus data profil
    //     public function delete($id = null)
    //     {
    //         if (!$this->profilModel->delete($id)) {
    //             return redirect()->back()->with('error', 'Gagal menghapus profil.');
    //         }

    //         return redirect()->to('/profils')->with('success', 'Profil berhasil dihapus.');
    //     }
}
