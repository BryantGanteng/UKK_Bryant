<?php

namespace App\Controllers;
use App\Models\M_peminjaman;
use App\Models\M_model;


class peminjaman extends BaseController
{

    public function index()
{
    if (session()->get('id') > 0) {
        $model = new M_model();
        $userLevel = session()->get('level');

        if ($userLevel == 1 || $userLevel == 2) {
            $on = 'peminjaman.id_book = book.id_book';
            $on1 = 'peminjaman.id_user = user.id_user';
            $data['a'] = $model->join3('peminjaman', 'book', 'user', $on, $on1);
        } elseif ($userLevel == 3) {
            $userId = session()->get('id');
            $data['a'] = $model->getDataByIdUser($userId);
        }

        $data['title'] = 'Data Peminjaman';

        echo view('partial/header', $data);
       
        echo view('partial/menuutama');
        echo view('peminjaman/view', $data);
        echo view('partial/footer');
    } else {
        return redirect()->to('login');
    }
}

public function tambah()
{
    if (session()->get('id') > 0) {
        $model=new M_model();
        $data['a']=$model->tampil('user');
        $data['c']=$model->tampil('book');
        $data['title']='Data Peminjaman';
        echo view('partial/header', $data);
       
        echo view('partial/menuutama');
        echo view('peminjaman/tambah', $data); 
        echo view('partial/footer');
    }else {
        return redirect()->to('login');
    }
}

public function aksi_tambah()
{ 
    if (session()->get('id') > 0) {
        $a= $this->request->getPost('user');
        $b= $this->request->getPost('book');
        $c= $this->request->getPost('tgl_kembali');
        $d= $this->request->getPost('jumlah');
        

        //Yang ditambah ke user
        $data1=array(
            'id_user'=>$a,
            'id_book'=>$b,
            'tgl_kembali'=>$c,
            'jumlah'=>$d,
            'tgl_pinjam'=>date('Y-m-d'),
            'status'=>'Dipinjam'
        );
        $model=new M_model();
        $model->simpan('peminjaman', $data1);
      
        return redirect()->to('peminjaman');
    }else {
        return redirect()->to('login');
    }
}
public function delete($id)
{ 
    
     $model=new m_model();
     $where=array('id_peminjaman'=>$id);
     $model->hapus('peminjaman',$where);
     return redirect()->to('peminjaman');
    
}
public function aksi($id_peminjaman)
{
    $model = new m_model();
    $peminjaman = $model->getpeminjamanById($id_peminjaman); 
    $newStatus = ($peminjaman->status === 'Dipinjam') ? 'Dikembalikan' : 'Dipinjam';
    $data = array('status' => $newStatus);
    $where = array('id_peminjaman' => $id_peminjaman);
    $model->qedit('peminjaman', $data, $where);
    return redirect()->to('/peminjaman');
}
}