<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
   

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Főoldal</a>
                </li>
            @auth
            <li class="nav-item">
                <span class="navbar-brand" > {{ Auth::user()->vez_nev}} {{ Auth::user()->ker_nev }}</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Kijelentkezés</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart.index') }}">Kosár({{Cart::count()}})</a>
                    </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="signup">Regisztárció</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Bejelentkezés</a>
                </li>

               
              
            @endauth
            <li class="nav-item">
                    <a class="nav-link" href="/termekek">Termékek</a>
                </li>
        </ul>
      
        </form>
    </div>
</nav>