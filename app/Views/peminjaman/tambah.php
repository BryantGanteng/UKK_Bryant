<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <form class="form-sample" novalidate action="<?= base_url('Peminjaman/aksi_tambah')?>"
                            method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Nama Peminjam</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select class="form-control" id="basicSelect" name="user">
                                                    <option>-PILIH-</option>
                                                    <?php
                                        foreach ($a as $b) {
                                            ?>
                                                    <option value="<?= $b->id_user?>"><?php echo $b->nama?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Nama Buku</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select class="form-control" id="basicSelect" name="book">
                                                    <option>-PILIH-</option>
                                                    <?php
                                        foreach ($c as $b) {
                                            ?>
                                                    <option value="<?= $b->id_book?>"><?php echo $b->nama_b?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Tanggal Kembali</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="date" class="form-control" placeholder="Tanggal Kembali"
                                                name="tgl_kembali" id="first-name-icon" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-clock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Jumlah</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Jumlah" name="jumlah"
                                                id="first-name-icon" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-123"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ml-3">
                                    <div class="form-group row">
                                        <button type="submit"
                                            class="btn btn-primary btn-rounded btn-fw btn-md mr-2">Add</button>
                                        <a href="<?= base_url('/peminjaman')?>">
                                            <button type="button"
                                                class="btn btn-warning btn-rounded btn-fw btn-md text-white">Back</button></a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>