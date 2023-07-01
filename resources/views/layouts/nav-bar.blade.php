<nav class="navbar navbar-expand-sm navbar-dark px-5 shadow border border-success fixed-top"
    style="background: linear-gradient(45deg, rgb(185, 193, 27), rgb(69, 182, 73)) !important;">
    <a class="navbar-brand" href="{{ url('/') }}">CodeVerse</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/home') }}" aria-current="page">Home <span
                        class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                {{-- <span class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">SignUp</span class="nav-link"> --}}
                <a class="nav-link" href="{{ url('/register') }}">Sign Up</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/customer') }}">Dashboard</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Upload Content</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="{{ url('/php') }}">PHP Content</a>
                    <a class="dropdown-item" href="#">Action 2</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/atm-bank') }}">ATM</a></li>
        </ul>
        <form class="d-flex my-2 my-lg-0">
            <input class="form-control me-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary text-light btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<div class="row my-5">
    <div class="container">
        @if (session()->has('name'))
            {{ session()->get('name') }}
        @else
            Guest
        @endif
    </div>
</div>
