<style>
    /* Custom Styles */
    .custom-divider {
        text-align: center;
        margin: 25px 0;
        border-bottom: 1px solid #212121;
        position: relative;
    }

    .custom-divider::after {
        content: "♦";
        background: whte;
        padding: 0 10px;
        position: relative;
        top: 11.5px;
    }

    /* Styling for Right Section (Image with Decorations) */
    .custom-image-container {
        position: relative;
        display: inline-block;
    }

    .custom-decorative-image {
        border-radius: 16px;
        box-shadow: 0 50px 100px rgba(0, 0, 0, 0.55);
        object-fit: cover;
        height: 500px;
        width: auto;
    }

    /* Decorative elements */
    .custom-decoration {
        position: absolute;
        width: 40px;
        height: 40px;
        background-color: #5BC2C1;
        transform: rotate(45deg);
        border-radius: 4px;
        opacity: 0.8;
    }

    .custom-decoration.plus {
        background-color: #40BFB4;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        transform: none;
    }

    .custom-decoration1 {
        top: -10px;
        left: -15px;
    }

    .custom-decoration2 {
        bottom: -10px;
        right: -15px;
    }

    .custom-decoration.plus::before {
        content: "+";
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center align-items-center">
        <!-- Left Section -->
        <div class="col-lg-5 col-md-6 text-center text-md-start">
            <div class="title-container mb-4 py-5">
                <h2><span class="kuning">Daftar</span> Sekarang dan Wujudkan Prestasimu di SMPN 15 Malang!</h2>
            </div>
            <p class="description">
                Segera daftarkan diri Anda di SMPN 15 Malang <br>dan jadilah bagian dari generasi unggul yang berprestasi dan berkarakter! Nikmati pengalaman belajar yang seru, lingkungan yang mendukung, serta berbagai ekstrakurikuler menarik yang siap mengembangkan bakat dan minat Anda.
            </p>
            <div class="custom-divider"></div>
            <div class="py-5">
            <a href="https://ppdbjatim.net/" target="_blank" class="btn" >PPDB Jatim</a>
            </div>
        </div>

        <!-- Right Section (Image with Decorations) -->
        <div class="col-lg-5 col-md-6 text-center" data-aos="fade-left" data-aos-offset="700" data-aos-easing="linear">
            <div class="custom-image-container">
                <img src="images/ppdb.jpg" alt="Panduan PPDB Jatim" class="img-fluid rounded-3 custom-decorative-image">
                <!-- Decorative Elements -->
                <div class="custom-decoration custom-decoration1"></div>
                <div class="custom-decoration custom-decoration2 plus"></div>
            </div>
        </div>
    </div>
</div>
