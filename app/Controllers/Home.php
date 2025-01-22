<?php

namespace App\Controllers;

use App\Models\MetaModel;

class Home extends BaseController
{
    public function index(): string
    {
        $meta = new MetaModel();
        $lang = session()->get('lang') ?? 'id';
        $data = [
            'tb_meta' => $meta->find(3),
            'lang' => $lang

        ];
        return view('welcome_message', $data);
    }
}
