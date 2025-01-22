<?php

namespace App\Controllers;

use App\Models\MetaModel;
use CodeIgniter\RESTful\ResourceController;

class MetaController extends ResourceController
{
    protected $modelName = MetaModel::class;
    protected $format    = 'json';

    /**
     * Menampilkan semua data meta
     * @return \CodeIgniter\HTTP\ResponseInterface
     */
    public function index()
    {
        $data = $this->model->findAll();
        return $this->respond($data);
    }

    /**
     * Menampilkan data meta berdasarkan ID
     * @param int $id
     * @return \CodeIgniter\HTTP\ResponseInterface
     */
    public function show($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            return $this->respond($data);
        }
        return $this->failNotFound('Data tidak ditemukan');
    }

    /**
     * Menambahkan data meta baru
     * @return \CodeIgniter\HTTP\ResponseInterface
     */
    public function create()
    {
        $input = $this->request->getPost();

        if (!$this->validate($this->model->getValidationRules())) {
            return $this->failValidationErrors($this->validator->getErrors());
        }

        $this->model->insert($input);
        return $this->respondCreated(['message' => 'Data berhasil ditambahkan']);
    }

    /**
     * Memperbarui data meta berdasarkan ID
     * @param int $id
     * @return \CodeIgniter\HTTP\ResponseInterface
     */
    public function update($id = null)
    {
        $input = $this->request->getRawInput();

        if (!$this->model->find($id)) {
            return $this->failNotFound('Data tidak ditemukan');
        }

        if (!$this->validate($this->model->getValidationRules())) {
            return $this->failValidationErrors($this->validator->getErrors());
        }

        $this->model->update($id, $input);
        return $this->respond(['message' => 'Data berhasil diperbarui']);
    }

    /**
     * Menghapus data meta berdasarkan ID
     * @param int $id
     * @return \CodeIgniter\HTTP\ResponseInterface
     */
    public function delete($id = null)
    {
        if (!$this->model->find($id)) {
            return $this->failNotFound('Data tidak ditemukan');
        }

        $this->model->delete($id);
        return $this->respondDeleted(['message' => 'Data berhasil dihapus']);
    }
}
