<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><?=$title?></h4>

                            <div class="row justify-content-center">
                                <!-- Menambah kelas 'justify-content-center' untuk menengahkan konten -->
                                <div class="col-md-6 col-12">
                                    <div class="card">
                                        <!-- Menambah kelas 'text-center' untuk menengahkan teks -->
                                        <h4 class="card-title" align="center"><?= $book['nama_b'] ?></h4>

                                        <div class="card-content">
                                            <div class="card-body">
                                                <!-- Menambah kelas 'text-center' untuk menengahkan konten -->
                                                <img src="<?= base_url('images/' . $post['cover']); ?>" alt="Post Image"
                                                    class="img-fluid rounded mx-auto"
                                                    style="max-width: 300px; display: block;">
                                                <br>
                                                <div class="comments-section text-center">
                                                    <p>Ulasan :</p>
                                                    <?php foreach ($comments as $comment) : ?>
                                                    <div class="comment">
                                                        <p><strong><?= $comment['username']; ?></strong>:
                                                            <?= $comment['comment']; ?></p>
                                                    </div>
                                                    <?php endforeach; ?>
                                                </div>

                                                <!-- HTML Form untuk Komentar -->
                                                <form class="comment-form"
                                                    action="<?= base_url('book/submitComment'); ?>" method="post">
                                                    <input type="hidden" name="post_id"
                                                        value="<?= $post['id_book']; ?>">
                                                    <textarea name="comment" placeholder="Add a comment"
                                                        class="form-control"></textarea>
                                                    <br>
                                                    <div class="text-center">
                                                        <button class="btn btn-info" type="submit">Submit
                                                            Comment</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>