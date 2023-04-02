<?php

namespace App\Controllers;

use App\Models\mdl_jihan;

class ctrl_jihan extends BaseController
{

    protected $mdl_jihan;

    public function __construct()
    {
        $this->mdl_jihan = new mdl_jihan();
    }

    public function index()
    {

        $kategori_tb_jihan = $this->mdl_jihan->select('label')->distinct()->findAll();

        $data = [
            'kategori_tb_jihan' => $kategori_tb_jihan
        ];

        return view('vi_init_jihan', $data);
    }

    public function init_filter()
    {
        $data1 = $this->request->getVar('label');
        $data2 = $this->request->getVar('status');

        return redirect()->to('jihan/' . $data1 . '/' . $data2);
    }

    public function show_filter($label, $status)
    {

        $tb_jihan = $this->mdl_jihan->where([
            'label' => $label,
            'status' => $status
        ])->first();

        $count_tb_jihan = $this->mdl_jihan->select('label')->where([
            'label' => $label,
            'status' => $status
        ])->countAllResults();

        $data = [
            'tb_jihan' => $tb_jihan,
            'count_tb_jihan' => $count_tb_jihan
        ];

        return view('vi_sh_jihan', $data);
    }

    public function simpan($data1, $data2)
    {
        $this->mdl_jihan->save([
            'id' => $this->request->getVar('id'),
            'status' => $this->request->getVar('status')
        ]);
        return redirect()->to('jihan/' . $data1 . '/' . $data2);
    }
}
