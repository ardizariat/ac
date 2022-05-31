 <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
     <div class="container d-flex justify-content-between align-items-center">
         <a class="navbar-brand h1" href="index.html">
             <i class='bx bx-buildings bx-sm text-dark'></i>
             <span class="text-dark h4">Sewa</span> <span class="text-primary h4">AC</span>
         </a>
         <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
             data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false"
             aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between"
             id="navbar-toggler-success">
             <div class="ms-auto">
                 <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                     @foreach ($navmenu as $name => $url)
                         <li class="nav-item">
                             <a class="nav-link {{ isActiveApp($url) }} btn-outline-primary rounded-pill px-3"
                                 href="{{ $url }}">{{ $name }}</a>
                         </li>
                     @endforeach
                 </ul>
             </div>
             <div class="navbar align-self-center d-flex">
                 <a class="nav-link" href="#"><i class='bx bx-user-circle bx-sm text-primary'></i></a>
             </div>
         </div>
     </div>
 </nav>
