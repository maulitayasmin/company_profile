<?php

namespace App\Controllers;

use App\Models\SliderModel;
use App\Models\ProfilModel;
use App\Models\KontakModel;
use App\Models\MetaModel;
use CodeIgniter\HTTP\ResponseInterface;

class SliderController extends BaseController
{
    public function index()
    {
        $slider = new SliderModel();
        $profile = new ProfilModel(); // Model untuk data profil
        $kontak = new KontakModel();
        $meta = new MetaModel();
        $lang = session()->get('lang') ?? 'id';

        // Ambil data slider dan profil
        $data = [
            'tb_slider' => $slider->findAll(),
            'tb_profil' => $profile->findAll(), 
            'tb_kontak' => $kontak->findAll(),
            'tb_meta' => $meta->find(1),
            'lang' => $lang
        ];

        return view('welcome_message', $data);
    }


    //     // Menampilkan form tambah slider
    //     public function create()
    //     {
    //         return view('sliders/create');
    //     }

    //     // Menyimpan data slider baru
    //     public function store()
    //     {
    //         $data = [
    //             'foto_slider1' => $this->request->getPost('foto_slider1'),
    //             'foto_slider2' => $this->request->getPost('foto_slider2'),
    //             'foto_slider3' => $this->request->getPost('foto_slider3'),
    //             'caption_slider_id' => $this->request->getPost('caption_slider_id'),
    //             'caption_slider_en' => $this->request->getPost('caption_slider_en'),
    //         ];

    //         if ($this->sliderModel->save($data)) {
    //             return redirect()->to('/sliders')->with('success', 'Slider berhasil ditambahkan.');
    //         }

    //         return redirect()->back()->withInput()->with('error', 'Gagal menambahkan slider.');
    //     }

    //     // Menampilkan form edit slider
    //     public function edit($id)
    //     {
    //         $slider = $this->sliderModel->find($id);

    //         if (!$slider) {
    //             throw new \CodeIgniter\Exceptions\PageNotFoundException("Slider dengan ID $id tidak ditemukan.");
    //         }

    //         $data = [
    //             'slider' => $slider,
    //         ];

    //         return view('sliders/edit', $data);
    //     }

    //     // Mengupdate data slider
    //     public function update($id)
    //     {
    //         $data = [
    //             'id_slider' => $id,
    //             'foto_slider1' => $this->request->getPost('foto_slider1'),
    //             'foto_slider2' => $this->request->getPost('foto_slider2'),
    //             'foto_slider3' => $this->request->getPost('foto_slider3'),
    //             'caption_slider_id' => $this->request->getPost('caption_slider_id'),
    //             'caption_slider_en' => $this->request->getPost('caption_slider_en'),
    //         ];

    //         if ($this->sliderModel->save($data)) {
    //             return redirect()->to('/sliders')->with('success', 'Slider berhasil diperbarui.');
    //         }

    //         return redirect()->back()->withInput()->with('error', 'Gagal memperbarui slider.');
    //     }

    //     // Menghapus slider
    //     public function delete($id)
    //     {
    //         if ($this->sliderModel->delete($id)) {
    //             return redirect()->to('/sliders')->with('success', 'Slider berhasil dihapus.');
    //         }

    //         return redirect()->back()->with('error', 'Gagal menghapus slider.');
    //     }
}
