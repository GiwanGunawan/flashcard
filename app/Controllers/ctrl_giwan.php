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
        return view('vi_init_giwan');
    }

    public function init_filter()
    {
        $data1 = $this->request->getVar('label');
        $data2 = $this->request->getVar('status');

        return redirect()->to('giwan/' . $data1 . '/' . $data2);
    }

    public function show_filter($label, $status)
    {

        $tb_giwan = $this->mdl_giwan->where([

            'label' => $label,
            'status' => $status

        ])->first();

        $count_tb_giwan = $this->mdl_giwan
            // ->select('label')
            ->where([

                'label' => $label,
                'status' => $status
            ])
            ->countAll();
        //dd($count_tb_giwan);

        $data = [
            'tb_giwan' => $tb_giwan,
            'count_tb_giwan' => $count_tb_giwan
        ];


        return view('vi_sh_giwan', $data);
    }

    public function simpan($data1, $data2)
    {
        $this->mdl_giwan->save([
            'id' => $this->request->getVar('id'),
            'status' => $this->request->getVar('status')
        ]);
        return redirect()->to('giwan/' . $data1 . '/' . $data2);
    }
}
