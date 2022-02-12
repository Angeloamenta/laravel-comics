<header>
    <div class="header-top">
        <div class="container">
            <ul>
                <li><a href="">DC POWER&trade; VISA&reg;</a></li>
                <li><a href="">ADDITIONAL DC SITES</a><i class="fa-solid fa-caret-down"></i></li>
            </ul>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="col-sx ">
                <img src="{{asset('/images/dc-logo.png')}}" alt="">
                </div>
            <div class="col-cent">
                <ul class="list-none">
                    <li><a href="">CHARACTERS</a></li>
                    <li><a class="{{ 'comics' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('comics')}}">COMICS</a></li>
                    <li><a href="">MOVIES</a></li>
                    <li><a href="">TV</a></li>
                    <li><a class="{{ 'prova' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('prova')}}">GAMES</a></li>
                    <li><a href="">COLLECTIBLES</a></li>
                    <li><a href="">VIDEOS</a></li>
                    <li><a href="">FANS</a></li>
                    <li><a href="">NEWS</a></li>
                    <li><a href="">SHOP</a><i class="fa-solid fa-sort-down"></i></li>
                </ul>
            </div>
            <div class="col-dx">
                <div class="input">
                 <input type="text" placeholder="Search"><i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron">
        <div class="container">
        <div class="current">
            <h3>CURRENT SERIES</h3>
        </div>
        </div>
    </div>
</header>