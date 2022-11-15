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

    public function delete()
    {
        $session = session();
        $data["data"] = $this->request->getVar('id');
        
        $resep = new ResepModel();
        
        $hapus = $resep->where('id', $data)->delete($data);

        if($hapus){
            return redirect("beranda");
        }else{
            echo "Something went wrong";
            return redirect()->back();
        }
        
    }


    public function update(){
        $session = session();
        $id = $this->request->getVar('id');
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