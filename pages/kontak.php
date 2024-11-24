    <style>
/* Reset margin dan padding untuk seluruh elemen */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.custom-hero {
    background-color: #227B94;
    color: #ffffff;
    padding: 50px;
    height: 542px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    flex-direction: column;
}

.contact-info .d-flex {
    margin-bottom: 1.5rem;
}

/* Atur ukuran gambar di map agar responsif */
.map-container iframe {
    width: 100%;
    height: 300px;
    border: none;
}

    </style>
<div class="custom-hero text-white text-center py-5">
    <h1 class="display-4">Ingin Tahu Tentang Sekolah SMPN 15 Malang?</h1>
    <h2><div class="kuning">Beri Kami Pesan!</div></h2>
</div>

<div class="container mt-5">
    <div class="row">
        <!-- Formulir Kontak -->
        <div class="col-md-6">
            <form action="feedback/submit_feedback.php" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama Lengkap Anda">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email Anda">
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea class="form-control" name="message" placeholder="Pesan"></textarea>
                </div>
                <button type="submit" class="btn btn-info text-white">Kirim</button>
            </form>
        </div>

        <!-- Google Maps -->
        <div class="col-md-6">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d987.805364752919!2d112.60295626962326!3d-7.976048671371745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7882910bc6a4cd%3A0xcda3bbf0e304c149!2sSMP%20Negeri%2015%20Kota%20Malang!5e0!3m2!1sid!2sid!4v1731679325106!5m2!1sid!2sid" width="600" height="450" style="border:1px solid #227B94;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- Info Kontak -->
            <div class="contact-info mt-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-wrapper bg-info text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="ms-3">
                        <div class="fw-bold" style="color: #78B7D0;">Alamat</div>
                        <div>Jl. Bukit Dieng Permai No.8 Blok T, Pisang Candi, Kec. Sukun, Kota Malang, Jawa Timur 65146</div>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <div class="icon-wrapper bg-info text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="ms-3">
                        <div class="fw-bold" style="color: #78B7D0;">Email</div>
                        <div>smpn15mlg@gmail.com</div>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="icon-wrapper bg-info text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="ms-3">
                        <div class="fw-bold" style="color: #78B7D0;">Telepon</div>
                        <div>(0341) 571715</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>