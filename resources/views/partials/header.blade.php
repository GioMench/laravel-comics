<header>
    <nav class="navbar navbar-expand-lg navbarblue justify-content-end">
    
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link text-light" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown link</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item " href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
        </ul>
        
    </nav>

     
        <nav class="navbar navbar-expand-lg navbarlogo">
            <div class="container">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""  class="p-3" style="height: 120px" >
            
            <div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-semibold">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase {{Route::currentRouteName() === 'characters' ? 'nav_active' :''}}" aria-current="page" href="{{route('characters')}}">charcters</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" href="#">comics</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" href="#">movies</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" href="#">tv</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" href="#">games</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" href="#">collectibles</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" href="#">videos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" href="#">fans</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" href="#">news</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">shop</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
                
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" type="submit">Search</button>
                </form>
            </div>
  
        </nav>


  


</header>