<nav class="navbar navbar-expand-sm navbar-dark px-5" style="background-color: #0492f8;">

    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0 text-center item-center">
            <li class="nav-item">

            </li>
            <li class="nav-item">

            </li>
            <li class="nav-item dropdown">

                <div class="dropdown-menu" aria-labelledby="dropdownId">

                </div>
            </li>
        </ul>
        <div class="row justify-content-center align-items-center text-light g-2">
            <div class="col"> {{ $_SESSION['loger'] }} </div>
            {{-- <div class="col">{{ '| ' . date('H:i:s', time()) . '| '  }} </div> --}}
            <div class="col">
                <span><a class="nav-link active text-danger" href="{{ route('logout') }}">Logout</a></span>
            </div>
        </div>
    </div>
</nav>
