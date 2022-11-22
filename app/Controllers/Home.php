<?php

namespace App\Controllers;

use App\Models\AkunModel;
use App\Models\ResepModel;

class Home extends BaseController
{
    public function index()
    
    {
        $session = session();
        if(!$session->logged_in==true){
            echo "<script type='text/javascript'>alert('Belum sign in');</script>";
            return redirect()->to(base_url() . '/');
        }else{
            $list = new ResepModel();
            $akun = new AkunModel();

            $listData = $list->findAll();
            
            $dataAll["dataAll"] =[
                $dataUser['dataUser'] = $akun->where('username',$_SESSION["username"])->find(),
            
                $data = ['data' => $listData],
                
            ];

        
            return view('beranda', $dataAll);
        }

    }

    public function detil($id){
        $resep = new ResepModel();
        $data["data"] = $resep->where('id',$id)->find();

        return view('detil',$data);
    }

    public function form(){
        return view("formResep");
    }

    public function formAction(){
        $session = session();
        $users = new AkunModel();
        $resep = new ResepModel();
        $dataUser = $users->where([
            'username' => $_SESSION["username"] 
        ])->first();
        $resep->insert([
            'id_author' => $dataUser->id,
            'author' => $dataUser->nama,
            'resep' => $this->request->getVar('namaResep'),
            'bahan' => $this->request->getVar('bahan'),
            'penjelasan_resep' => $this->request->getVar('penjelasan')
            
        ]);
        return redirect()->to("beranda");
    }

    public function loginPage(){
        return view("login");
    }

    public function resepSaya(){
        $session = session();
        if(!$session->logged_in==true){
            echo "<script type='text/javascript'>alert('Belum sign in');</script>";
            return redirect()->to(base_url() . '/');
        }else{
            $list = new ResepModel();
            $akun = new AkunModel();
            
            $dataAll["dataAll"] =[
                $dataUser['dataUser'] = $akun->where('username',$_SESSION["username"])->find(),
            
                $data["data"] = $list->where('id_author',session()->id)->findAll(),
                
            ];

        
            return view('myResep', $dataAll);
        }
    }
    public function updatePage($id){
        $session = session();
        $list = new ResepModel();
        if(!$session->logged_in==true){
            echo "<script type='text/javascript'>alert('Belum sign in');</script>";
            return redirect()->to(base_url() . '/');
        }else{
            $list = new ResepModel();
            $resep["resep"] =  $list->where('id',$id)->find();

        return view('formUpdateResep',$resep);
        }
    }


}
