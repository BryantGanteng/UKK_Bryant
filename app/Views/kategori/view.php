<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Hoverable Table</h4> -->
                        <a href="<?= base_url('/kategori/tambah/')?>">
                            <button class="btn btn-inverse-primary btn-fw btn-sm ml-2">
                                <i class="mdi mdi-plus"></i>
                            </button>
                        </a>
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                            $no=1;
                            foreach ($jojo as $riz) {
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>


                                    <td><?php echo $riz->nama_k?></td>
                                    <td>
                                        <a class="btn btn-warning text-white"
                                            href="<?php echo base_url('/kategori/edit/'. $riz->id_kategori) ?>"><i
                                                class="mdi mdi-tooltip-edit"></i></a>
                                        <a class="btn btn-danger"
                                            href="<?php echo base_url('/kategori/delete/'. $riz->id_kategori) ?>"><i
                                                class="mdi mdi-delete-sweep"></i></a>
                                    </td>

                                    <?php   }
                                ?>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>