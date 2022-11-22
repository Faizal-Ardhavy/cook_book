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
        if (!$this->validate([
			'namaResep' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
            'bahan' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
            'penjelesan' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
			'gambar' => [
				'rules' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,2048]',
				'errors' => [
					'uploaded' => 'Harus Ada File yang diupload',
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => 'Ukuran File Maksimal 2 MB'
				]
 
			]
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
            // return redirect()->back()->withInput();

        }
 		$dataGambar = $this->request->getFile('gambar');
        $fileName = $dataGambar->getRandomName();
        $resep->insert([
            'id_author' => $dataUser->id,
            'author' => $dataUser->nama,
            'resep' => $this->request->getVar('namaResep'),
            'bahan' => $this->request->getVar('bahan'),
            'penjelasan_resep' => $this->request->getVar('penjelasan'),
            'gambar_resep' => $fileName,
            
        ]);
        $dataGambar->move('../public/img', $fileName);
		session()->setFlashdata('success', 'Berkas Berhasil diupload');
        // dd($resep);
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
