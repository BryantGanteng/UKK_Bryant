<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <form class="form-sample" novalidate action="<?= base_url('User/aksi_tambah')?>" method="post"
                            enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nama" id="first-name-icon"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="username" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="email" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="password" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Level</label>
                                        <div class="col-sm-9">
                                            <select name="level" class="form-control">
                                                <?php
                                        foreach ($a as $b) {
                                            ?>
                                                <option value="<?= $b->id_level?>"><?php echo $b->nama_level?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Foto</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control file-upload" name="foto" id="foto"
                                                onchange="previewImage()">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-sm-5">
                                            <img id="preview" src="" alt="" style="max-width: 100px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 ml-3">
                                    <div class="form-group row">
                                        <button type="submit"
                                            class="btn btn-primary btn-rounded btn-fw btn-md mr-2">Add</button>
                                        <a href="<?= base_url('/user')?>">
                                            <button type="button"
                                                class="btn btn-warning btn-rounded btn-fw btn-md text-white">Back</button></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <script>
            function previewImage() {
                var preview = document.querySelector('#preview');
                var file = document.querySelector('#foto').files[0];
                var reader = new FileReader();

                reader.addEventListener("load", function() {
                    preview.src = reader.result;
                }, false);

                if (file) {
                    reader.readAsDataURL(file);
                }
            }
            </script>