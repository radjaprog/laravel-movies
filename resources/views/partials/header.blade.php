<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-white">A film also called a movie, motion picture, moving picture, picture,
                        photoplay or slang flick is a work of visual art that simulates experiences and
                        otherwise communicates ideas, stories, perceptions, feelings, beauty, or atmosphere through
                        the use of moving images. - wikipedia</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Status</h4>
                    <ul class="list-unstyled">
                        @if (auth()->check())
                            <li>
                                <p class="blog-header-logo text-dark">{{ auth()->user()->name }}</p>
                            </li>
                            <li><a href="/login" class="text-white">Logout</a></li>
                        @else
                            <li><a href="/login" class="text-white">Login</a></li>
                            <li><a href="/register" class="text-white">Sign up</a></li>
                            <li><a href="#" class="text-white">Email me</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                    <path
                        d="M15.6 11.6L22 7v10l-6.4-4.5v-1zM4 5h9a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7c0-1.1.9-2 2-2z" />
                    <circle cx="12" cy="13" r="4" />
                </svg>
                <strong>Movies</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

{{-- <header class="blog-header lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <a class="link-secondary" href="/">Movies</a>
        </div>
        <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="/add">Add Movie</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            @if (auth()->check()) --}}
{{-- koriscenje blade @ direktive i if else direktive, ako je ulogovan prikazi to i to a ako nije ulogovan prikazi to i to , auth()->check() proveravamo da li je korisnik authentifikovan --}}
{{--                <p class="blog-header-logo text-dark">{{ auth()->user()->name }}</p> {{-- auth()->user() poziv ove metode vraca trenutno ulogovanog user-a a onda cu iz tog objekta izvuci name --}}
{{--          <a class="btn btn-sm btn-outline-secondary" href="/logout">Logout</a>
            @else
                <a class="btn btn-sm btn-outline-secondary" href="/login">Login</a>
                <a class="btn btn-sm btn-outline-secondary" href="/register">Sign up</a>
            @endif
        </div>
    </div>
</header> 
--}}
