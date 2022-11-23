<?php

namespace App\Controllers;

use App\Database\Migrations\Resep;
use App\Models\AkunModel;
use App\Models\ResepModel;

class Proses extends BaseController
{
    public function index()
    {
        return view('beranda');
    }

    public function delete($id)
    {
        $session = session();
        $resep = new ResepModel();

        $hapus = $resep->where('id', $id)->delete($id);

        if ($hapus) {
            return redirect()->back();
        } else {
            echo "Something went wrong";
            return redirect()->back();
        }
    }


    public function update()
    {
        $id = $this->request->getVar('id');
        $session = session();
        $data = [
            'resep' => $this->request->getVar('namaResep'),
            'bahan' => $this->request->getVar('bahan'),
            'penjelasan_resep' => $this->request->getVar('penjelasan')
        ];

        $resep = new ResepModel();
        $result =  $resep->update($id, $data);
        if ($result) {
            return redirect()->to('myResep');
        } else {
            echo "Something went wrong";
            return redirect()->back();
        }
    }

    public function search()
    {
        $session = session();
        if (!$session->logged_in == true) {
            echo "<script type='text/javascript'>alert('Belum sign in');</script>";
            return redirect()->to(base_url() . '/');
        } else {
            $list = new ResepModel();
            $akun = new AkunModel();

            $kunci = $this->request->getVar('cari');

            if ($kunci) {
                $query = $list->pencarian($kunci);
                $jumlah = "Pencarian dengan nama <B>$kunci</B> ditemukan " . $query->affectedRows() . " Data";
            } else {
                $query = $list;
                $jumlah = "";
            }
            $dataAll["dataAll"] = [
                $dataUser['dataUser'] = $akun->where('username', $_SESSION["username"])->find(),

                $data["data"] = $query->paginate()

            ];
            // dd($dataAll["dataAll"][1]);
            return view('hasil', $dataAll);

        }

    }
}
