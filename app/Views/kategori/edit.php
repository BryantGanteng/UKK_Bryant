<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <form class="form-sample" action="<?= base_url('kategori/aksi_edit/' . $a->id_kategori) ?>"
                            method="post" class="row g-3" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $a->id_kategori?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kategori</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Kategori" name="nama_k"
                                                value="<?php echo $a->nama_k ?>" id="first-name-icon">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 ml-3">
                                    <div class="form-group row">
                                        <button type="submit"
                                            class="btn btn-primary btn-rounded btn-fw btn-md mr-2">Update</button>
                                        <a href="<?= base_url('/kategori')?>">
                                            <button type="button"
                                                class="btn btn-warning btn-rounded btn-fw btn-md text-white">Back</button></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>