<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Hoverable Table</h4> -->
                        <a href="<?= base_url('/user/tambah/')?>">
                            <button class="btn btn-inverse-primary btn-fw btn-sm ml-2">
                                <i class="mdi mdi-plus"></i>
                            </button>
                        </a>
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto Profil</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>E-mail</th>
                                        <th>Level</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                            $no=1;
                            foreach ($jojo as $riz) {
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td style="width: 100px; height: 100px; overflow: hidden; border-radius: 5px;">
                                        <img src="<?php echo base_url('profile/' . $riz->foto) ?>"
                                            style="width: 100%; height: 100%; object-fit: contain;" alt="Foto">
                                    </td>
                                    <td><?php echo $riz->username ?></td>
                                    <td><?php echo $riz->nama ?></td>
                                    <td><?php echo $riz->email ?></td>
                                    <td><?php echo $riz->nama_level?></td>
                                    <td>
                                        <a class="btn btn-primary"
                                            href="<?php echo base_url('user/reset/'. $riz->id_user) ?>"><i
                                                class="mdi mdi-key"></i></a>
                                        <a class="btn btn-warning text-white"
                                            href="<?php echo base_url('user/edit/'. $riz->id_user) ?>"><i
                                                class="mdi mdi-tooltip-edit"></i></a>
                                        <a class="btn btn-danger"
                                            href="<?php echo base_url('user/delete/'. $riz->id_user) ?>"><i
                                                class="mdi mdi-delete-sweep"></i></a>
                                    </td>

                                    <?php   }
                                ?>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>