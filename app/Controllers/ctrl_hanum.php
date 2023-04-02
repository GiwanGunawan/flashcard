<?php

namespace App\Controllers;

use App\Models\mdl_hanum;

class ctrl_hanum extends BaseController
{

    protected $mdl_hanum;

    public function __construct()
    {
        $this->mdl_hanum = new mdl_hanum();
    }

    public function index()
    {

        // $kategori_tb_hanum = $this->mdl_hanum->select('label')->distinct();
        $kategori_tb_hanum = $this->mdl_hanum->select('label')->distinct()->findAll();
        // $kategori_tb_hanum = $this->mdl_hanum->findAll();
        // dd($kategori_tb_hanum = $this->mdl_hanum->select('label')->distinct()->findAll());
        // dd($kategori_tb_hanum = $this->mdl_hanum->findAll());

        // dd($kategori_tb_hanum);

        $data = [

            'kategori_tb_hanum' => $kategori_tb_hanum
        ];

        return view('vi_init_hanum', $data);
    }

    public function init_filter()
    {
        $data1 = $this->request->getVar('label');
        $data2 = $this->request->getVar('status');

        return redirect()->to('hanum/' . $data1 . '/' . $data2);
    }

    public function show_filter($label, $status)
    {

        $tb_hanum = $this->mdl_hanum->where([

            'label' => $label,
            'status' => $status

        ])->first();

        $count_tb_hanum = $this->mdl_hanum
            // ->select('label')
            ->where([

                'label' => $label,
                'status' => $status
            ])
            ->countAll();
        //dd($count_tb_hanum);

        $data = [
            'tb_hanum' => $tb_hanum,
            'count_tb_hanum' => $count_tb_hanum
        ];


        return view('vi_sh_hanum', $data);
    }

    public function simpan($data1, $data2)
    {
        $this->mdl_hanum->save([
            'id' => $this->request->getVar('id'),
            'status' => $this->request->getVar('status')
        ]);
        return redirect()->to('hanum/' . $data1 . '/' . $data2);
    }
}
