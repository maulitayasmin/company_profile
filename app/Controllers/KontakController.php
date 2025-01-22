<?php

namespace App\Controllers;

use App\Models\KontakModel;
use App\Models\MetaModel;
use CodeIgniter\RESTful\ResourceController;

class KontakController extends ResourceController
{
    public function index()
    {

        $kontak = new KontakModel();
        $meta = new MetaModel();
        $lang = session()->get('lang') ?? 'id';
        $data = [
            'tb_kontak' => $kontak->findAll(),
            'tb_meta' => $meta->find(3),
            'lang' => $lang

        ];

        return view('kontak', $data);
    }

    /**
     * Get a specific kontak record by ID
     * @param int|null $id
     * @return mixed
     */
    public function show($id = null)
    {
        $data = $this->model->find($id);

        if (!$data) {
            return $this->failNotFound("Kontak dengan ID $id tidak ditemukan.");
        }

        return $this->respond($data);
    }

    /**
     * Create a new kontak record
     * @return mixed
     */
    public function create()
    {
        $input = $this->request->getPost();

        if (!$this->model->insert($input)) {
            return $this->failValidationErrors($this->model->errors());
        }

        return $this->respondCreated([
            'status' => 'success',
            'message' => 'Data kontak berhasil ditambahkan.',
        ]);
    }

    /**
     * Update an existing kontak record by ID
     * @param int|null $id
     * @return mixed
     */
    public function update($id = null)
    {
        $input = $this->request->getRawInput();

        if (!$this->model->update($id, $input)) {
            return $this->failValidationErrors($this->model->errors());
        }

        return $this->respond([
            'status' => 'success',
            'message' => "Data kontak dengan ID $id berhasil diperbarui.",
        ]);
    }

    /**
     * Delete a kontak record by ID
     * @param int|null $id
     * @return mixed
     */
    public function delete($id = null)
    {
        $data = $this->model->find($id);

        if (!$data) {
            return $this->failNotFound("Kontak dengan ID $id tidak ditemukan.");
        }

        $this->model->delete($id);

        return $this->respondDeleted([
            'status' => 'success',
            'message' => "Data kontak dengan ID $id berhasil dihapus.",
        ]);
    }
}
