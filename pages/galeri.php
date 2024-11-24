<style>
.gallery-container {
    max-width: 1000px;
    margin: 40px auto;
    padding: 0 20px;
}

/* Judul Galeri */
.gallery-title {
    font-size: 1.8em;
    font-weight: 700;
    margin-bottom: 40px;
    text-align: center;
    color: #333;
    position: relative;
}

/* Baris Galeri */
.gallery-row {
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-template-areas:
        "large right"
        "left right";
    gap: 20px;
}

/* Kolom Galeri */
.gallery-column {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* Elemen Galeri */
.gallery-item {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.gallery-item.large {
    grid-area: large;
    height: 400px;
}

.gallery-item.right {
    grid-area: right;
    height: 100%;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

/* Hover Efek */
.gallery-item:hover {
    transform: translateY(-5px); /* Gerakkan elemen ke atas saat hover */
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2); /* Perbesar shadow */
}

.gallery-item:hover img {
    transform: scale(1.05); /* Perbesar gambar */
}

/* Caption */
.gallery-caption {
    position: absolute;
    bottom: 0;
    width: 100%;
    padding: 15px;
    background: rgba(0, 0, 0, 0.6);
    text-align: center;
    transition: background 0.3s ease, transform 0.3s ease;
}

.gallery-item:hover .gallery-caption {
    background: rgba(0, 0, 0, 0.8); /* Lebih gelap saat hover */
}

.gallery-caption h2.putih {
    margin: 0;
    color: white;
    font-size: 1.2em; /* Sesuaikan ukuran */
    font-weight: bold;
}

/* Responsif */
@media (max-width: 768px) {
    .gallery-row {
        grid-template-columns: 1fr;
        grid-template-areas:
            "large"
            "left"
            "right";
    }

    .gallery-item.large {
        height: 300px;
    }
}
</style>
<div class="gallery-container">
    <h2 class="gallery-title">━━━━━━━━━━━━ <i class="bi bi-images"></i>Galeri ━━━━━━━━━━━━</h2>

    <div class="gallery-row">
        <!-- Gambar Besar -->
        <div class="gallery-item large"  data-aos="fade-up" data-aos-duration="600">
            <img src="images/hut.jpg" alt="Semarak HUT RI Ke-79" loading="lazy">
            <div class="gallery-caption">
                <h2 class="putih">Semarak HUT RI Ke-79 di Bumi SPENLIBEL</h2>
            </div>
        </div>

        <!-- Kolom Kiri -->
        <div class="gallery-column">
            <div class="gallery-item"  data-aos="fade-up" data-aos-duration="700">
                <img src="images/perpus1.jpg" alt="Perpustakaan Keliling" loading="lazy">
                <div class="gallery-caption">
                    <h2 class="putih">Perpustakaan Keliling</h2>
                </div>
            </div>
            <div class="gallery-item" data-aos="fade-up" data-aos-duration="800">
                <img src="images/perpus2.jpg" alt="Kunjungan Sekretaris Dinas Pendidikan Kota Malang" loading="lazy">
                <div class="gallery-caption">
                    <h2 class="putih">Kunjungan Sekretaris Dinas Pendidikan Kota Malang</h2>
                </div>
            </div>
        </div>

        <!-- Gambar Kanan -->
        <div class="gallery-item right" data-aos="fade-left" data-aos-duration="600">
            <img src="images/semarakkk.jpg" alt="Semarakkan Hari Pramuka ke-63" loading="lazy">
            <div class="gallery-caption">
                <h2 class="putih">Semarakkan Hari Pramuka ke-63</h2>
            </div>
        </div>
    </div>
</div>
