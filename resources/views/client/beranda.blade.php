<x-app-layout>
    <!-- Hero -->
    <div class="banner-wrapper bg-light">
        <div id="bg-banner" class="banner-vertical-center-index container-fluid pt-5">

            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-white display-3 mb-0 pb-5 mx-0 px-0 light-300">
                                    Sewa AC Standing <br> <strong>Harga Terjangkau</strong>
                                    <br>Pasti Dinginnya
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-white display-3 mb-0 pb-5 mx-0 px-0 light-300">
                                    Sewa Misty Fan <br> <strong>Harga Terjangkau</strong>
                                    <br>Pasti Dinginnya
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-white display-3 mb-0 pb-5 mx-0 px-0 light-300">
                                    Service AC<br> <strong>Harga Terjangkau</strong>
                                    <br>Pasti Dinginnya
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button"
                    data-bs-slide="prev">
                    <i class='bx bx-chevron-left text-white'></i>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button"
                    data-bs-slide="next">
                    <i class='bx bx-chevron-right'></i>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
            <!-- End slider -->
        </div>
    </div>
    <!-- End Hero -->

    <!-- AC -->
    <section class="container py-5">
        <div class="pt-5 pb-3 d-lg-flex align-items-center gx-5">

            <div class="col-lg-6">
                <h2 class="h2 py-5 typo-space-line">Sewa AC Standing</h2>
                <p class="text-muted light-300">
                    Kipas pendingin menyejukkan di setiap acara penting Anda
                </p>
            </div>

            <div class="col-lg-6 row">
                <div class="team-member col-md-6">
                    <img class="team-member-img img-fluid rounded-circle p-4"
                        src="{{ asset('client/img/ac/ac2.jpeg') }}" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li>AC Standing</li>
                        <li>3 PK</li>
                    </ul>
                </div>
                <div class="team-member col-md-6">
                    <img class="team-member-img img-fluid rounded-circle p-4"
                        src="{{ asset('client/img/ac/daikin.jpeg') }}" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li>AC Standing</li>
                        <li>5 PK</li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="pt-5 pb-3 d-lg-flex align-items-center gx-5">
            <div class="col-lg-6 row">
                <div class="team-member col-md-6">
                    <img class="team-member-img img-fluid rounded-circle p-4"
                        src="{{ asset('client/img/ac/mistyfan1.jpeg') }}" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li>AC Standing</li>
                        <li>3 PK</li>
                    </ul>
                </div>
                <div class="team-member col-md-6">
                    <img class="team-member-img img-fluid rounded-circle p-4"
                        src="{{ asset('client/img/ac/mistyfan2.jpeg') }}" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li>AC Standing</li>
                        <li>5 PK</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="h2 py-5 typo-space-line">Sewa Misty Fan</h2>
                <p class="text-muted light-300">
                    Kipas pendingin menyejukkan di setiap acara penting Anda
                </p>
            </div>
        </div>
    </section>
    <!-- AC -->


    <!-- Kenapa harus sewa dengan kami -->
    <section class="bg-secondary">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-2 col-12 text-light align-items-center">
                </div>
                <div class="col-lg-7 col-12 text-light pt-2">
                    <i class="fas fa-question-circle fa-4x"></i>
                    <h3 class="h4 light-300 mt-2">Kenapa Harus Sewa Dengan Kami </h3>
                </div>
                <div class="col-lg-3 col-12 pt-4">
                    {{-- <a href="#" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">View Our Work</a> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="banner-bg bg-white py-5">
        <div class="container my-4">
            <div class="row text-center">

                <div class="objective col-lg-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class="fas fa-sack-dollar text-white fa-2x"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Harga Terjangkau</h2>
                    <p class="light-300">
                        Harga layanan yang kami tawarkan sangat terjangkau
                    </p>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class="fas fa-phone-volume text-white fa-2x"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Respon Cepat</h2>
                    <p class="light-300">
                        Kami siap melayani pertanyaan anda 24 jam
                    </p>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class="fas fa-users-cog text-white fa-2x"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Tenaga Kerja Ahli</h2>
                    <p class="light-300">
                        Memiliki teknisi yang handal, sehingga anda tidak khawatir dengan acara anda
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- Kenapa harus sewa dengan kami -->

    <!-- Daftar harga -->
    <div class="container-lg py-5">
        <div class="col-md-12 m-auto text-center py-5">
            <h1 class="pricing-header h2 semi-bold-600">Daftar Harga</h1>
            <p class="pricing-footer">
                Daftar harga dari layanan yang kami tawarkan. Dan pastinya harga lebih murah
            </p>
        </div>
        <div class="row px-lg-3">
            <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body rounded-pill text-center align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 text-secondary fas fa-fan"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">Sewa Misty Fan</h2>
                        <p>Rp. 400.000 <br> perhari </p>
                        <ul class="pricing-table-body text-start text-dark px-4 list-unstyled light-300">
                            <li><i class="bx bxs-circle me-2"></i>Gratis biaya survei lokasi</li>
                            <li><i class="bx bxs-circle me-2"></i>Minimal pemesanan 2 unit</li>
                            <li><i class="bx bxs-circle me-2"></i>Harga sudah termasuk ongkos kirim
                            <li><i class="bx bxs-circle me-2"></i>Bebas biaya instalasi ditempat</li>
                        </ul>
                        <div class="pricing-table-footer pt-5">
                            <a href="#" class="btn rounded-pill px-4 btn-outline-primary light-300">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 pt-sm-0 pt-3 px-xl-3">
                <div class="pricing-table card bg-secondary h-100 card-rounded shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body text-center text-white align-self-center p-md-0">
                        <i class="fas fa-fan text-white py-3 pricing-table-icon display-3"></i>
                        <p>Rp. 550.000 <br>per hari</p>
                        <ul class="pricing-table-list text-start text-dark px-4 list-unstyled light-300">
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Gratis biaya survei lokasi
                            </li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Minimal pemesanan 2 unit</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Harga sudah termasuk ongkos
                                kirim</li>
                            <li class="text-white"><i class="bx bxs-circle me-2"></i>Bebas biaya instalasi
                                ditempat</li>
                        </ul>
                        <div class="pricing-table-footer pt-5 pb-2">
                            <a href="#" class="btn rounded-pill px-4 btn-outline-light light-300">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                    <div class="pricing-table-body card-body text-center align-self-center p-md-0">
                        <i class="pricing-table-icon display-3 bx bx-package text-secondary"></i>
                        <h2 class="pricing-table-heading h5 semi-bold-600">Sewa AC Standing 5 PK</h2>
                        <p>Rp. 650.000 <br> perhari </p>
                        <ul class="pricing-table-list text-start text-dark px-4 list-unstyled light-300">
                            <li><i class="bx bxs-circle me-2"></i>Gratis biaya survei lokasi</li>
                            <li><i class="bx bxs-circle me-2"></i>Minimal pemesanan 2 unit</li>
                            <li><i class="bx bxs-circle me-2"></i>Harga sudah termasuk ongkos kirim
                            <li><i class="bx bxs-circle me-2"></i>Bebas biaya instalasi ditempat</li>
                        </ul>
                        <div class="pricing-table-footer pt-1">
                            <a href="#" class="btn rounded-pill px-4 btn-outline-primary light-300">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- Daftar harga -->

    <!-- Galeri -->
    <section class="bg-secondary">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-2 col-12 text-light align-items-center">
                </div>
                <div class="col-lg-7 col-12 text-light pt-2">
                    <i class="fa-solid fa-image fa-4x"></i>
                    <h3 class="h4 light-300 mt-2">Galeri</h3>
                </div>
                <div class="col-lg-3 col-12 pt-4">
                    {{-- <a href="#" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">View Our Work</a> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="container overflow-hidden py-5">
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">

            <!-- Start Galeri Row -->
            <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">
                <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="service card-img" src="{{ asset('client/img/ac/images/galeri/galeri1.jpg') }}"
                        alt="Card image">
                </a>
            </div>

            <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="service card-img" src="{{ asset('client/img/ac/images/galeri/galeri2.jpg') }}"
                        alt="Card image">
                </a>
            </div>

            <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="service card-img" src="{{ asset('client/img/ac/images/galeri/galeri3.jpg') }}"
                        alt="Card image">
                </a>
            </div>

            <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="service card-img" src="{{ asset('client/img/ac/images/galeri/galeri4.jpg') }}"
                        alt="Card image">
                </a>
            </div>
            <!-- End Galeri Row -->

            <!-- Start Galeri Row -->
            <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">
                <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="service card-img" src="{{ asset('client/img/ac/images/galeri/galeri5.jpg') }}"
                        alt="Card image">
                </a>
            </div>

            <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="service card-img" src="{{ asset('client/img/ac/images/galeri/galeri6.jpg') }}"
                        alt="Card image">
                </a>
            </div>

            <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="service card-img" src="{{ asset('client/img/ac/images/galeri/galeri7.jpg') }}"
                        alt="Card image">
                </a>
            </div>

            <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="service card-img" src="{{ asset('client/img/ac/images/galeri/galeri8.jpg') }}"
                        alt="Card image">
                </a>
            </div>
            <!-- End Galeri Row -->

        </div>
    </section>
    <!-- End Galeri -->

</x-app-layout>
