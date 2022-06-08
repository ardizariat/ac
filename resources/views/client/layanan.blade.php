<x-app-layout title="{{ $title }}">

    <section class="bg-light pt-sm-0 py-5">
        <div class="container py-5">

            <h1 class="h2 semi-bold-600 text-center mt-2 mb-3">Layanan Kami</h1>

            <!-- Rental AC Standing -->
            <div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden bg-white">
                <div class="pricing-horizontal-icon col-md-3 text-center bg-secondary text-light py-4">
                    <h5 class="h5 semi-bold-600 light-300 pt-3">Rental AC Standing</h5>
                </div>
                <div
                    class="pricing-horizontal-body offset-lg-1 col-md-5 col-lg-4 d-flex align-items-center pl-5 pt-lg-0 pt-4">
                    <ul class="text-left px-4 list-unstyled mb-0 light-300">
                        <li><i class="bx bxs-circle me-2"></i>AC Standing 3 PK</li>
                        <li><i class="bx bxs-circle me-2"></i>AC Standing 5 PK</li>
                    </ul>
                </div>
                <div class="pricing-horizontal-tag col-md-4 text-center pt-3 d-flex align-items-center">
                    <div class="w-100 light-300">
                        <a href="{{ route('layanan.detail.ac-standing') }}"
                            class="btn rounded-pill px-4 btn-outline-primary mb-3">Lihat sekarang</a>
                    </div>
                </div>
            </div>
            <!-- End Rental AC Standing -->

            <!-- Rental Misty Fan -->
            <div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden my-5 bg-white">
                <div class="pricing-horizontal-icon col-md-3 text-center bg-secondary text-light py-4">
                    <h5 class="h5 semi-bold-600 light-300 pt-3">Rental Misty Fan</h5>
                </div>
                <div
                    class="pricing-horizontal-body offset-lg-1 col-md-5 col-lg-4 d-flex align-items-center pl-5 pt-lg-0 pt-4">
                    <ul class="text-left px-4 list-unstyled mb-0 light-300">
                        <li><i class="bx bxs-circle me-2"></i>Misty Fan</li>
                    </ul>
                </div>
                <div class="pricing-horizontal-tag col-md-4 text-center pt-3 d-flex align-items-center">
                    <div class="w-100 light-300">
                        <a href="{{ route('layanan.detail.misty-fan') }}"
                            class="btn rounded-pill px-4 btn-outline-primary mb-3">Lihat sekarang</a>
                    </div>
                </div>
            </div>
            <!-- End Rental Misty Fan -->

            <!-- Service AC -->
            <div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden my-5 bg-white">
                <div class="pricing-horizontal-icon col-md-3 text-center bg-secondary text-light py-4">
                    <h5 class="h5 semi-bold-600 light-300 pt-3">Service AC</h5>
                </div>
                <div
                    class="pricing-horizontal-body offset-lg-1 col-md-5 col-lg-4 d-flex align-items-center pl-5 pt-lg-0 pt-4">
                    <ul class="text-left px-4 list-unstyled mb-0 light-300">
                        <li><i class="bx bxs-circle me-2"></i>Service AC &#189; PK</li>
                        <li><i class="bx bxs-circle me-2"></i>Service AC 1 PK</li>
                        <li><i class="bx bxs-circle me-2"></i>Service AC 2 PK</li>
                    </ul>
                </div>
                <div class="pricing-horizontal-tag col-md-4 text-center pt-3 d-flex align-items-center">
                    <div class="w-100 light-300">
                        <a href="{{ route('layanan.detail.service-ac') }}"
                            class="btn rounded-pill px-4 btn-outline-primary mb-3">Lihat sekarang</a>
                    </div>
                </div>
            </div>
            <!-- End Rental Misty Fan -->

        </div>
    </section>
    <!--End Pricing Horizontal Section-->

</x-app-layout>
