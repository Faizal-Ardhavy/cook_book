<?php

namespace App\Controllers;

use App\Models\AkunModel;
use App\Models\ResepModel;
use App\Models\ProfileModel;

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

    public function profile(){

        
            {
        $session = session();
        if(!$session->logged_in==true){
            echo "<script type='text/javascript'>alert('Belum sign in');</script>";
            return redirect()->to(base_url() . '/');
        }else{
            $list = new ResepModel();
            $akun = new AkunModel();
            $profil = new ProfileModel();
            

            $listData = $list->findAll();
            
            $dataAll["dataAll"] =[
                $dataUser['dataUser'] = $akun->where('username',$_SESSION["username"])->find(),
            
                $data = ['data' => $listData],
                
            ];

        
            return view('Profil', $dataAll);
        }

    }
    }
    public function editProfile(){

        
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

        
            return view('editProfil', $dataAll);
        }

    }
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
    public function formProfile(){
        $session = session();
        $users = new AkunModel();
        $profil = new ProfileModel();
        $dataUser = $users->where([
            'username' => $_SESSION["username"] 
        ])->first();
        if (!$this->validate([
			'namaUser' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
            'job' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
            'userId' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
            'email' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
            'telp' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak boleh kosong'
				]
			],
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
            // return redirect()->back()->withInput();

        }
        $profil->insert([
            'namaUser' => $this->request->getVar('namaUser'),
            'job' => $this->request->getVar('job'),
            'userId' => $this->request->getVar('userId'),
            'email' => $this->request->getVar('email'),
            'telp' => $this->request->getVar('telp'),
    
            
        ]);
        // dd($resep);
        return redirect()->to("profile");
    }

    public function profilePage(){
        $session = session();
        if(!$session->logged_in==true){
            echo "<script type='text/javascript'>alert('Belum sign in');</script>";
            return redirect()->to(base_url() . '/');
        }else{
            $profile = new ProfileModel();
            $akun = new AkunModel();

            
            $dataAll["dataAll"] =[
                $dataProfile["dataProfile"] = $profile->where('userId',$_SESSION["username"])->find(),
                $dataUser['dataUser'] = $akun->where('username',$_SESSION["username"])->find()


            ];

        
            return view('profil', $dataAll);
        }

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
            $resepAll["resepAll"] =  [
                $resep["resep"]=$list->where('id',$id)->find(),
                $id
            ];

        return view('formUpdateResep',$resepAll);
        }
    }


}
