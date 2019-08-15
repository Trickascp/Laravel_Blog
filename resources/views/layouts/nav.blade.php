<nav class="navbar navbar-expand-lg" style="background-color: #FFCC66;">
        <a href="{{ url('/') }}" class="navbar-brand text-dark" style="font-weight: bold;"><img src="{{ asset('img/nep_chan.png') }}" width="40">Blogger</a>
        <button class="navbar-toggler border-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto list">
                <li>
                    <a href="{{ url('/') }}" class="nav-link text-dark p-2">HOME</a>
                </li>
                <li>
                    <a href="{{ route('all.categorie') }}" class="nav-link text-dark p-2">CATEGORIE</a>
                </li>
                <li>
                    <a href="{{ url('/portofolio') }}" class="nav-link text-dark p-2">PORTOFOLIO</a>
                </li>
                @guest
                    <li>
                        <a class="nav-link text-dark p-2" href="{{ route('login') }}">LOGIN</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a class="nav-link text-dark p-2" href="{{ route('register') }}">REGISTER</a>
                        </li>
                    @endif
                @else

                    <li class="dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark p-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="{{ route('home') }}" class="dropdown-item">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                    
                @endguest
            </ul>
            <ul class="navbar-nav ml-auto s-box">
                <li>
                    <form>
                        <div class="input-group">
                        <input type="text" class="form-control" id="s" placeholder="Search" name="search" autocomplete="off" style="border-radius: 0;">
                        <div>
                           <button class="btn text-light" type="submit" style="
                           background-color: #FFCC99; 
                           border-radius: 0px 5px 5px 0px;">

                                <i class="fa fa-search"></i>

                           </button>
                        </div>
                      </div>
                    </form>
                </li>
            </ul>

        </div>
    </nav>