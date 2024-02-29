<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Buku</th>
                                        <th>Nama User</th>
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



                                    <td><?php echo $riz->nama_b?></td>
                                    <td><?php echo $riz->nama?></td>
                                    <td><?php echo $riz->status?></td>
                                    <td>


                                        <a href="<?=base_url('/book/detail/'.$riz->book_id)?>"><button
                                                class="btn btn-warning text-white"><i
                                                    class="mdi mdi-format-list-bulleted "></i></button></a>

                                    </td>

                                    <?php   }
                                ?>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>