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

        if($hapus){
            return redirect()->back();
        }else{
            echo "Something went wrong";
            return redirect()->back();
        }
        
    }


    public function update($id){
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
    
}