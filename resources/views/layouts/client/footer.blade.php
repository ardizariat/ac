<footer class="bg-secondary pt-4">
    <div class="container">
        <div class="row py-4">

            <div class="col-lg-3 col-12 align-left">
                <a class="navbar-brand" href="index.html">
                    <i class='bx bx-buildings bx-sm text-light'></i>
                    <span class="text-light h5">Sewa</span> <span class="text-light h5 semi-bold-600">AC</span>
                </a>
                <p class="text-light my-lg-4 my-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut.
                </p>
                <ul class="list-inline footer-icons light-300">
                    <li class="list-inline-item mr-1">
                        <a class="text-light" target="_blank" href="http://facebook.com/">
                            <i class="fa-brands fa-whatsapp fa-xl"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-1">
                        <a class="text-light" target="_blank" href="https://www.whatsapp.com/">
                            <i class="fa-brands fa-facebook fa-xl"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-1">
                        <a class="text-light" target="_blank" href="https://www.whatsapp.com/">
                            <i class="fa-brands fa-instagram fa-xl"></i>
                        </a>
                    </li>

                    <li class="list-inline-item mr-1">
                        <a class="text-light" target="_blank" href="https://www.whatsapp.com/">
                            <i class="fa-brands fa-youtube fa-xl"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                <h3 class="h4 pb-lg-3 text-light light-300">Sewa AC</h2>
                    <ul class="list-unstyled text-light light-300">
                        @foreach ($navmenu as $name => $url)
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a
                                    class="text-decoration-none text-light"
                                    href="{{ $url }}">{{ $name }}</a>
                            </li>
                        @endforeach
                    </ul>
            </div>

            <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                <h2 class="h4 pb-lg-3 text-light light-300">Layanan Kami</h2>
                <ul class="list-unstyled text-light light-300">
                    @foreach ($services as $item)
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a
                                class="text-decoration-none text-light py-1" href="#">{{ $item }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                <h2 class="h4 pb-lg-3 text-light light-300">Kontak</h2>
                <ul class="list-unstyled text-light light-300">
                    <li class="pb-2">
                        <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1"
                            href="https://bit.ly/3LXjxfD">+62-858-2412-1523</a>
                    </li>
                    {{-- <li class="pb-2">
                        <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1"
                            href="mailto:info@company.com">info@company.com</a>
                    </li> --}}
                </ul>
            </div>

        </div>
    </div>

    <div class="w-100 bg-primary py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-lg-6 col-sm-12">
                    <p class="text-lg-start text-center text-light light-300">
                        © Sewa AC 2022. All Rights Reserved.
                    </p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p class="text-lg-end text-center text-light light-300">
                        Designed by <a rel="sponsored" class="text-decoration-none text-light"
                            href="https://templatemo.com/" target="_blank"><strong>TemplateMo</strong></a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
