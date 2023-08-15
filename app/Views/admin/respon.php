<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/global.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/adrespon.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" />
</head>

<body>
    <div class="kkategori4">
        <div class="kelola-kategori-panorama-container4">
            <p class="kelola-kategori-panorama4">Respon Ketertarikan</p>
        </div>
        <div class="kkategori-inner"></div>
        <div class="samping4">
            <div class="samping-child2"></div>

            <div class="kkategori5" id="kategori">
                <button class="button-like">
                    <script>
                        var kategori = document.getElementById("kategori");
                        if (kategori) {
                            kategori.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('admin/add') ?>";
                            });
                        }
                    </script>

                    <p class="kelolakategoripanorama">Kelola Kategori <br> Panorama</p>

                    <img class="school-1-icon4" alt="" src="<?= base_url() ?>/css/public/school-1@2x.png" />
            </div>

            <div class="dashboard8" id="dashboard">
                <button class="button-like">
                    <script>
                        var dashboard = document.getElementById("dashboard");
                        if (dashboard) {
                            dashboard.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('admin/dashboard') ?>";
                            });
                        }
                    </script>
                    <img class="location-1-icon4" alt="" src="<?= base_url() ?>/css/public/categories-1@2x.png" />

                    <div class="dashboard9">Dashboard</div>
            </div>

            <div class="krespon">
                <div class="kminimap-child"></div>

                <div class="kelola-respon-ketertarikan">
                    Kelola Respon Ketertarikan
                </div>
                <img class="school-1-icon" alt="" src="<?= base_url() ?>/css/public/registrationform-2@2x.png" />
            </div>
            <div class="back8" id="frameContainer1">
                <button class="button-like">
                    <script>
                        var frameContainer1 = document.getElementById("frameContainer1");
                        if (frameContainer1) {
                            frameContainer1.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('admin/dashboard') ?>";
                            });
                        }
                    </script>
                    <img class="back-child1" alt="" src="<?= base_url() ?>/css/public/rectangle-18.svg" />

                    <div class="back9">Back</div>
            </div>
        </div>
        <div class="tabel">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Gedung</th>
                        <th scope="col">kritik Saran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($respon as $k) :
                        // Mendapatkan peran admin yang sedang login
                        $role = session()->get('role');

                        // Mengecek peran admin dan gedung yang sesuai
                        if ($role === '2' && $k['gedung'] === 'Agroindustri') {
                    ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $k['id']; ?></td>
                                <td><?= $k['rating']; ?></td>
                                <td><?= $k['gedung']; ?></td>
                                <td><?= $k['kritik']; ?></td>
                                <td>
                                    <form action="/superadmin/deleterespon/<?= $k['id']; ?>" method="POST" style="display: inline-block;">
                                        <?= csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        } elseif ($role === '3' && $k['gedung'] === 'Keperawatan') {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $k['id']; ?></td>
                                <td><?= $k['rating']; ?></td>
                                <td><?= $k['gedung']; ?></td>
                                <td><?= $k['kritik']; ?></td>
                                <td>
                                    <form action="/superadmin/deleterespon/<?= $k['id']; ?>" method="POST" style="display: inline-block;">
                                        <?= csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        } elseif ($role === '4' && $k['gedung'] === 'TPPM') {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $k['id']; ?></td>
                                <td><?= $k['rating']; ?></td>
                                <td><?= $k['gedung']; ?></td>
                                <td><?= $k['kritik']; ?></td>
                                <td>
                                    <form action="/superadmin/deleterespon/<?= $k['id']; ?>" method="POST" style="display: inline-block;">
                                        <?= csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        } elseif ($role === '5' && $k['gedung'] === 'JMI') {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $k['id']; ?></td>
                                <td><?= $k['rating']; ?></td>
                                <td><?= $k['gedung']; ?></td>
                                <td><?= $k['kritik']; ?></td>
                                <td>
                                    <form action="/superadmin/deleterespon/<?= $k['id']; ?>" method="POST" style="display: inline-block;">
                                        <?= csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">delete</button>
                                    </form>
                                </td>
                            </tr>
                    <?php
                        }
                    endforeach;
                    ?>


                    </tr>
                </tbody>

            </table>
        </div>


    </div>
</body>

</html>
<?= $this->endSection(); ?>