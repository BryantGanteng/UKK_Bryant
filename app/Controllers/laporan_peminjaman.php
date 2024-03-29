<?php

namespace App\Controllers;
use App\Models\M_model;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class laporan_peminjaman extends BaseController

{
    public function index()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2){
			$model=new M_model();
            $data['title']='Data Peminjaman';
			$kui['kunci']='print_in';
            echo view('partial/header',$data);
      
            echo view('partial/menuutama');
            echo view('filter_peminjaman',$kui);
            echo view('partial/footer');    
		}else{
			return redirect()->to('/login');
		}
	}
    public function print_in()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ){
    $model = new M_model();
    $awal = $this->request->getPost('awal');
    $akhir = $this->request->getPost('akhir');
    $status = "Dipinjam";
    $kui['duar'] = $model->filter22('peminjaman', $awal, $akhir, $status);
    echo view('v_pm', $kui);
}else{
	return redirect()->to('/login');
}
	}
    public function pdf_in()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ){
            $model = new M_model();
            $awal = $this->request->getPost('awal');
            $akhir = $this->request->getPost('akhir');
            $status = "Dipinjam";
            $kui['duar'] = $model->filter22('peminjaman', $awal, $akhir, $status);
		$dompdf = new\Dompdf\Dompdf();
		$dompdf->loadHtml(view('v_pm',$kui));
		$dompdf->setPaper('A4','potrait');
		$dompdf->render();
		$dompdf->stream('my.pdf', array('Attachment'=>0));
	}else{
		return redirect()->to('/login');
	}
	}
    public function excel_in()
	{
		if(session()->get('level')==1 ||  session()->get('level')==2  ){
            $model = new M_model();
            $awal = $this->request->getPost('awal');
            $akhir = $this->request->getPost('akhir');
            $status = "Dipinjam";
           
            $data = $model->filter22('peminjaman', $awal, $akhir, $status);
        
            
		$spreadsheet=new Spreadsheet();

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1', 'Nama Peminjam')
		->setCellValue('B1', 'Nama Buku')
		->setCellValue('C1', 'Tanggal Pinjam')
		->setCellValue('D1', 'Tanggal Kembali')
		->setCellValue('E1', 'Jumlah')
		->setCellValue('F1', 'Status');
		$column=2;
		

		foreach($data as $data){
			$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A'. $column, $data->nama)
			->setCellValue('B'. $column, $data->nama_b)
			->setCellValue('C'. $column, $data->tgl_pinjam)
			->setCellValue('D'. $column, $data->tgl_kembali)
			->setCellValue('E'. $column, $data->jumlah)
			->setCellValue('F'. $column, $data->status);
			$column++;
		}
	

		$writer = new XLsx($spreadsheet);
		$fileName = 'Data Laporan Buku Dipinjam';


		header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition:attachment;filename='.$fileName.'.xls');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}else{
		return redirect()->to('/login');
	}
	}
}