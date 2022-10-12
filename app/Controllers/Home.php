<?php

namespace App\Controllers;

use App\Models\ResepModel;

class Home extends BaseController
{
    public function index()
    
    {
        $list = new ResepModel();

        $listData = $list->findAll();
        
        $data = ['data' => $listData];
    
        return view('beranda',$data);
    }
}
