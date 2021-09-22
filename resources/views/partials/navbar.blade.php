 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
     <div class="container">
         <a class="navbar-brand" href="#">Laravel Blog</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
             aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav mr-auto">
                 <li class="nav-item">
                     <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link {{ $active === 'post' ? 'active' : '' }}" href="/blog">Blog</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}"
                         href="/categories">Categories</a>
                 </li>
             </ul>

             <ul class="navbar-nav ms-auto">
                 @auth
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Hello {{ auth()->user()->name }}
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <li><a class="dropdown-item" href="#"><i class="bi bi-layout-sidebar-inset"></i> Dashboard</a>
                             </li>
                             <li>
                                 <div class="dropdown-divider"></div>
                             </li>
                             <li>
                                 <form action="/logout" method="POST">
                                     @csrf
                                     <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                         Logout</button>

                                 </form>
                             </li>
                         </ul>
                     </li>
                 @else
                     <li class="nav-item">
                         <a class="nav-link {{ $active === 'login' ? 'active' : '' }}" href="/login"><i
                                 class="bi bi-box-arrow-in-right"></i> Login</a>
                     </li>
                 @endauth
             </ul>


         </div>
     </div>
 </nav>
