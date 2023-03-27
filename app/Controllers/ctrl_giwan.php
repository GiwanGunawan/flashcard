<?php

namespace App\Controllers;

use App\Models\mdl_giwan;

class ctrl_giwan extends BaseController
{

    protected $mdl_giwan;

    public function __construct()
    {
        $this->mdl_giwan = new mdl_giwan();
    }



    public function index()
    {
        if ($this->request->getVar('filterlevel')) {
            dd($this->request->getVar('filterlevel'));
        }

        $tb_giwan = $this->mdl_giwan->where(['status' => 'default', 'label' => 'Most 2000'])->first();

        $data = [
            'title' => 'Daftar Komik',
            'tb_giwan' => $tb_giwan
        ];


        // dd($tb_giwan);
        // dd($data);
        return view('vi_giwan', $data);
    }

    public function simpan()
    {
        $this->mdl_giwan->save([
            'id' => $this->request->getVar('id'),
            'status' => $this->request->getVar('status')
        ]);
        return redirect()->back();
    }
}
