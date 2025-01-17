<header class="header_section navbarcontainer">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href={{ url('/') }}><img width="130" src="/Image/logonobg.png" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href={{ url('/userpage') }}>Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href={{ url('/blog') }}>Blog Posts</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href={{ url('/about') }}>About Us</a>
                </li>

                 <li class="nav-item">
                    <a class="nav-link" href={{ url('/contact') }}>Contact</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{ url('/calendar') }}">Calendar</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href={{ url('create_post')}}> Create Post</a>
                 </li>

                 <li class="nav-item">
                    <a class="nav-link" href={{url('my_post') }}> My Post</a>
                 </li>



                @if (Route::has('login'))

                @auth

                <li class="nav-item afterlogin">
                <x-app-layout>

                </x-app-layout>
                </li>
                




                @else
                <li class="nav-item">
                    <a class="btn btn-light" id="logincss" href="{{ route('login') }}">Login</a>
                </li>
                @endauth
                @endif



             </ul>
          </div>
       </nav>
    </div>
</header>
