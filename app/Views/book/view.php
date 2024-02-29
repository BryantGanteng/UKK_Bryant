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
                         <a href="<?= base_url('/book/tambah/')?>">
                             <button class="btn btn-inverse-primary btn-fw btn-sm ml-2">
                                 <i class="mdi mdi-plus"></i>
                             </button>
                         </a>
                         <div class="table-responsive">
                             <table id="data-table" class="table table-hover">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>Cover</th>
                                         <th>Nama Buku</th>
                                         <th>Penulis</th>

                                         <th>Stok</th>

                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php 
                                $no=1;
                                foreach ($a as $b) {
                                    ?>
                                     <tr>
                                         <td><?php echo $no++ ?></td>
                                         <td>
                                             <img src="<?=base_url('images/'.$b->cover)?>" height="100px">
                                         </td>
                                         <td><?php echo $b->nama_b?> </td>
                                         <td><?php echo $b->penulis?> </td>



                                         <td><?php echo $b->stok?> </td>

                                         <td>
                                             <a class="btn btn-primary"
                                                 href="<?php echo base_url('/book/detail/'.$b->id_book) ?>"><i
                                                     class="mdi mdi-format-list-bulleted"></i></a>
                                             <a class="btn btn-warning text-white"
                                                 href="<?php echo base_url('/book/edit/'.$b->id_book) ?>"><i
                                                     class="mdi mdi-tooltip-edit"></i></a>
                                             <a class="btn btn-danger"
                                                 href="<?php echo base_url('/book/delete/'.$b->id_book) ?>"><i
                                                     class="mdi mdi-delete-sweep"></i></a>
                                             <a class="btn btn-success"
                                                 href="<?php echo base_url('/book/commentForm/' . $b->id_book) ?>"><i
                                                     class="mdi mdi-comment"></i></a>
                                         </td>

                                     </tr>
                                     <?php
                                    }
                                    ?>

                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         </section>
         <?php
        }else if(session()->get('level')== 3){
          ?>
         <div class="main-panel">
             <div class="content-wrapper">
                 <div class="row">
                     <div class="col-lg-12 grid-margin stretch-card">
                         <div class="card">
                             <div class="card-body">
                                 <!-- <h4 class="card-title">Hoverable Table</h4> -->
                                 <a href="<?= base_url('/book/tambah/')?>">
                                     <button class="btn btn-inverse-primary btn-fw btn-sm ml-2">
                                         <i class="mdi mdi-plus"></i>
                                     </button>
                                 </a>
                                 <div class="table-responsive">
                                     <table id="data-table" class="table table-hover">
                                         <thead>
                                             <tr>
                                                 <th>No</th>
                                                 <th>Cover</th>
                                                 <th>Nama Buku</th>
                                                 <th>Penulis</th>

                                                 <th>Stok</th>

                                                 <th>Action</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <?php 
                                $no=1;
                                foreach ($a as $b) {
                                    ?>
                                             <tr>
                                                 <td><?php echo $no++ ?></td>
                                                 <td>
                                                     <img src="<?=base_url('images/'.$b->cover)?>" height="100px">
                                                 </td>
                                                 <td><?php echo $b->nama_b?> </td>
                                                 <td><?php echo $b->penulis?> </td>



                                                 <td><?php echo $b->stok?> </td>

                                                 <td>
                                                     <a class="btn btn-primary"
                                                         href="<?php echo base_url('/book/detail/'.$b->id_book) ?>"><i
                                                             class="mdi mdi-format-list-bulleted"></i></a>
                                                     <?php if ($b->statusKoleksi === 'Masuk') : ?>
                                                     <a href="<?= base_url('/book/batalkan_koleksi/' . $b->id_book) ?>">
                                                         <button class="btn btn-danger">Batalkan
                                                             Koleksi</button>
                                                     </a>
                                                     <?php else : ?>
                                                     <a href="<?= base_url('/book/masukkan_koleksi/' . $b->id_book) ?>">
                                                         <button class="btn btn-primary">Masukkan
                                                             Koleksi</button>
                                                     </a>
                                                     <?php endif; ?>
                                                     <a class="btn btn-success"
                                                         href="<?php echo base_url('/book/commentForm/' . $b->id_book) ?>"><i
                                                             class="mdi mdi-comment"></i></a>
                                                 </td>

                                             </tr>
                                             <?php
                                    }
                                    ?>

                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 </section>
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
                                         <a href="<?= base_url('/book/tambah/')?>">
                                             <button class="btn btn-inverse-primary btn-fw btn-sm ml-2">
                                                 <i class="mdi mdi-plus"></i>
                                             </button>
                                         </a>
                                         <div class="table-responsive">
                                             <table id="data-table" class="table table-hover">
                                                 <thead>
                                                     <tr>
                                                         <th>No</th>
                                                         <th>Cover</th>
                                                         <th>Nama Buku</th>
                                                         <th>Penulis</th>

                                                         <th>Stok</th>

                                                         <th>Action</th>
                                                     </tr>
                                                 </thead>
                                                 <tbody>
                                                     <?php 
                                $no=1;
                                foreach ($a as $b) {
                                    ?>
                                                     <tr>
                                                         <td><?php echo $no++ ?></td>
                                                         <td>
                                                             <img src="<?=base_url('images/'.$b->cover)?>"
                                                                 height="100px">
                                                         </td>
                                                         <td><?php echo $b->nama_b?> </td>
                                                         <td><?php echo $b->penulis?> </td>



                                                         <td><?php echo $b->stok?> </td>

                                                         <td>
                                                             <a class="btn btn-primary"
                                                                 href="<?php echo base_url('/book/detail/'.$b->id_book) ?>"><i
                                                                     class="mdi mdi-format-list-bulleted"></i></a>
                                                             <a class="btn btn-success"
                                                                 href="<?php echo base_url('/book/commentForm/' . $b->id_book) ?>"><i
                                                                     class="mdi mdi-comment"></i></a>
                                                         </td>

                                                     </tr>
                                                     <?php
                                    }
                                    ?>

                                                 </tbody>
                                             </table>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         </section>
                         <?php } ?>