<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/global.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/style.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/login.css" />
    <style>
        .form-label {
            margin-top: -30px !important;

        }

        .form-control {
            background-color: #d3d3d3 !important;
            margin-top: -10px;
            height: 37px;

        }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" />
</head>

<body>
    <div class="register1">
        <img class="politeknik-subang-1-icon2" alt="" src="<?= base_url() ?>/css/public/politekniksubang-11@2x.png" />

        <img class="image-1-icon3" alt="" src="<?= base_url() ?>/css/public/image-11@2x.png" />

        <b class="virtual-tour-360-container2">
            <p class="virtual-tour-3602">VIRTUAL TOUR 360 KAMPUS</p>
            <p class="virtual-tour-3602">POLITEKNIK NEGERI SUBANG</p>
        </b>
        <form action="<?php echo base_url('login'); ?>" method="post">

            <div class="vector-parent">
                <img class="rectangle-icon" alt="" src="<?= base_url() ?>/css/public/rectangle-12.svg" />

                <div class="group-div">

                    <label for="exampleInputemail1" class="form-label">email</label>
                    <input type="email" class="form-control" id="exampleInputemail1" name="email" value="<?php echo session()->getFlashdata('email'); ?>" aria-describedby="emailHelp" required>
                </div>
                <div class="rectangle-parent1">

                    <label for="exampleInputpassword1" class="form-label">password</label>
                    <input type="password" class="form-control" id="exampleInputpassword1" name="password" value="<?php echo session()->getFlashdata('password'); ?>" required>

                </div>

                <div class="selamat-datang">Selamat Datang !</div>

                <div class="vector-group" name="login" value="login" type="submit">
                    <img class="group-child4" alt="" src="<?= base_url() ?>/css/public/rectangle-17.svg" />
                    <div class="login1">

                        <button type="submit" name="login" class="btn btn-primary" value="login" style="background-color: #00116d; border-color: #00116d ; height: 30px ;">Login</button>
                    </div>
                </div>

            </div>
        </form>
        <div class="bar-bawah2">
            <div class="bar-bawah-inner"></div>
            <img class="image-3-icon2" alt="" src="<?= base_url() ?>/css/public/image-3@2x.png" />

            <b class="polsub2">POLSUB</b>
            <b class="informasi-kontak2">Informasi Kontak</b>
            <div class="kampus-1-jl-container2">
                <p class="virtual-tour-3602">Kampus 1:</p>
                <p class="virtual-tour-3602">
                    Jl. Brigjen Katamso No. 37 (Belakang RSUD Subang), Dangdeur, Kec.
                    Subang, Kabupaten Subang, Jawa Barat 41211
                </p>
                <p class="virtual-tour-3602">Phone: (0260) 417648</p>
                <p class="virtual-tour-3602">Kampus 2:</p>
                <p class="virtual-tour-3602">
                    Blok Kaleng Banteng Desa Cibogo, Kec. Cibogo, Kabupaten Subang, Jawa
                    Barat 41285
                </p>
                <p class="virtual-tour-3602">E-mail: info@polsub.ac.id</p>
            </div>
            <div class="politeknik-negeri-subang5">POLITEKNIK NEGERI SUBANG</div>
            <div class="manajemen-informatika-agroindu-container2">
                <p class="virtual-tour-3602">&nbsp;</p>
                <p class="virtual-tour-3602">
                    <a class="manajemen-informatika9" href="https://mi.polsub.ac.id/" target="_blank">
                        <span class="manajemen-informatika10">Manajemen Informatika</span>
                    </a>
                </p>
                <p class="virtual-tour-3602">
                    <a class="manajemen-informatika9" href="https://agroindustry.polsub.ac.id/" target="_blank">
                        <span class="manajemen-informatika10">Agroindustri</span>
                    </a>
                </p>
                <p class="virtual-tour-3602">
                    <a class="manajemen-informatika9" href="https://mesin.polsub.ac.id/" target="_blank">
                        <span class="manajemen-informatika10">Teknik Perawatan dan Perbaikan Mesin</span>
                    </a>
                </p>
                <p class="virtual-tour-3602">
                    <a class="manajemen-informatika9" href="https://kesehatan.polsub.ac.id/" target="_blank">
                        <span class="manajemen-informatika10">Kesehatan</span>
                    </a>
                </p>
            </div>
            <div class="pusat-penelitian-dan-container2">
                <p class="virtual-tour-3602">
                    <a class="manajemen-informatika9" href="https://p3m.polsub.ac.id/" target="_blank">Pusat Penelitian dan Pengabdian Kepada Masyarakat</a>
                </p>
                <p class="virtual-tour-3602">
                    <a class="manajemen-informatika9" href="https://p4mp.polsub.ac.id/" target="_blank">Pusat Pengembangan Pembelajaran dan Penjaminan Mutu Pendidikan</a>
                </p>
            </div>
            <div class="copyright-2023-container2">
                Copyright © 2023 MI Polsub
                <a class="manajemen-informatika9" href="https://himmi-polsub.com/" target="_blank">
                    <span class="manajemen-informatika10">.</span>
                </a>
                All rights reserved.
            </div>
            <b class="jurusan3">Jurusan</b>
            <b class="pusat2">Pusat</b>
        </div>
</body>

</html>



<?= $this->endSection(); ?>