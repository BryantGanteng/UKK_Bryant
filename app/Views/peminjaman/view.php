 <?php
        if(session()->get('level')== 1){
          ?>
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="row">
             <div class="col-lg-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <!-- <h4 class="card-title">Hoverable Table</h4> -->
                         <a href="<?= base_url('/peminjaman/tambah/')?>">
                             <button class="btn btn-inverse-primary btn-fw btn-sm ml-2">
                                 <i class="mdi mdi-plus"></i>
                             </button>
                         </a>
                         <div class="table-responsive">
                             <table id="data-table" class="table table-hover">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>Nama Peminjam</th>
                                         <th>Nama Buku</th>
                                         <th>Tanggal Pinjam</th>
                                         <th>Tanggal Kembali</th>
                                         <th>Jumlah</th>
                                         <th>Status</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <?php
                            $no=1;
                            foreach ($a as $riz) {
                                ?>
                                 <tr>
                                     <td><?= $no++ ?></td>


                                     <td><?php echo $riz->nama?></td>
                                     <td><?php echo $riz->nama_b?></td>
                                     <td><?php echo $riz->tgl_pinjam?></td>
                                     <td><?php echo $riz->tgl_kembali?></td>
                                     <td><?php echo $riz->jumlah?></td>
                                     <td><?php echo $riz->status?></td>
                                     <td>

                                         <form method="post"
                                             action="<?= base_url('/peminjaman/aksi/'.$riz->id_peminjaman) ?>">
                                             <button class="btn btn-dark" type="submit"
                                                 <?= ($riz->status === 'Dikembalikan') ? 'disabled' : '' ?>>
                                                 <i class="mdi mdi-checkbox-multiple-marked "></i>
                                             </button>
                                         </form>

                                         <!-- Perbaikan disini -->
                                         <?php if ($riz->status !== 'Dikembalikan'): ?>
                                         <a class="btn btn-danger"
                                             href="<?php echo base_url('/peminjaman/delete/'. $riz->id_peminjaman) ?>">
                                             <i class="mdi mdi-delete-sweep"></i>
                                         </a>
                                         <?php endif; ?>

                                     </td>

                                     <?php   }
                                ?>
                                 </tr>
                             </table>
                         </div>
                     </div>
                 </div>
                 <?php
        }else if(session()->get('level')== 2){
          ?>
                 <div class="main-panel">
                     <div class="content-wrapper">
                         <div class="row">
                             <div class="col-lg-12 grid-margin stretch-card">
                                 <div class="card">
                                     <div class="card-body">
                                         <!-- <h4 class="card-title">Hoverable Table</h4> -->
                                         <a href="<?= base_url('/peminjaman/tambah/')?>">
                                             <button class="btn btn-inverse-primary btn-fw btn-sm ml-2">
                                                 <i class="mdi mdi-plus"></i>
                                             </button>
                                         </a>
                                         <div class="table-responsive">
                                             <table id="data-table" class="table table-hover">
                                                 <thead>
                                                     <tr>
                                                         <th>No</th>
                                                         <th>Nama Peminjam</th>
                                                         <th>Nama Buku</th>
                                                         <th>Tanggal Pinjam</th>
                                                         <th>Tanggal Kembali</th>
                                                         <th>Jumlah</th>
                                                         <th>Status</th>
                                                         <th>Action</th>
                                                     </tr>
                                                 </thead>
                                                 <?php
                            $no=1;
                            foreach ($a as $riz) {
                                ?>
                                                 <tr>
                                                     <td><?= $no++ ?></td>


                                                     <td><?php echo $riz->nama?></td>
                                                     <td><?php echo $riz->nama_b?></td>
                                                     <td><?php echo $riz->tgl_pinjam?></td>
                                                     <td><?php echo $riz->tgl_kembali?></td>
                                                     <td><?php echo $riz->jumlah?></td>
                                                     <td><?php echo $riz->status?></td>
                                                     <td>

                                                         <form method="post"
                                                             action="<?= base_url('/peminjaman/aksi/'.$riz->id_peminjaman) ?>">
                                                             <button class="btn btn-dark" type="submit"
                                                                 <?= ($riz->status === 'Dikembalikan') ? 'disabled' : '' ?>>
                                                                 <i class="mdi mdi-checkbox-multiple-marked "></i>
                                                             </button>
                                                         </form>

                                                         <!-- Perbaikan disini -->
                                                         <?php if ($riz->status !== 'Dikembalikan'): ?>
                                                         <a class="btn btn-danger"
                                                             href="<?php echo base_url('/peminjaman/delete/'. $riz->id_peminjaman) ?>">
                                                             <i class="mdi mdi-delete-sweep"></i>
                                                         </a>
                                                         <?php endif; ?>

                                                     </td>

                                                     <?php   }
                                ?>
                                                 </tr>
                                             </table>
                                         </div>
                                     </div>
                                 </div>
                                 <?php
        }else if(session()->get('level')== 3){
          ?>
                                 <div class="content-wrapper">
                                     <!-- Content -->

                                     <div class="container-xxl flex-grow-1 container-p-y">
                                         <h4 class="fw-bold py-3 mb-4"><span
                                                 class="text-muted fw-light"></span><?=$title?>
                                         </h4>

                                         <section class="section">
                                             <div class="card">
                                                 <div class="card-body">
                                                     <div class="table-responsive">
                                                         <table class="table table-striped" id="table1">
                                                             <thead>
                                                                 <tr>
                                                                     <th>No</th>
                                                                     <th>Nama Peminjam</th>
                                                                     <th>Nama Buku</th>
                                                                     <th>Tanggal Pinjam</th>
                                                                     <th>Tanggal Kembali</th>
                                                                     <th>Jumlah</th>
                                                                     <th>Status</th>

                                                                 </tr>
                                                             </thead>
                                                             <?php
                            $no=1;
                            foreach ($a as $riz) {
                                ?>
                                                             <tr>
                                                                 <td><?= $no++ ?></td>


                                                                 <td><?php echo $riz->nama?></td>
                                                                 <td><?php echo $riz->nama_b?></td>
                                                                 <td><?php echo $riz->tgl_pinjam?></td>
                                                                 <td><?php echo $riz->tgl_kembali?></td>
                                                                 <td><?php echo $riz->jumlah?></td>
                                                                 <td><?php echo $riz->status?></td>


                                                                 <?php   }
                                ?>
                                                             </tr>
                                                         </table>
                                                     </div>
                                                 </div>
                                             </div>
                                             <?php } ?>