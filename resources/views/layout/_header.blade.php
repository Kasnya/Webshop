<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
   

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Signout</a>
                </li>
                <li class="nav-item">
                <span class="navbar-brand" > {{ Auth::user()->vez_nev}} {{ Auth::user()->ker_nev }}</span>
                </li>

                <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart.index') }}">Kosár({{Cart::count()}})</a>
                    </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="signup">Signup</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Signin</a>
                </li>

               
              
            @endauth
            <li class="nav-item">
                    <a class="nav-link" href="/termekek">Termékek</a>
                </li>
        </ul>
      
        </form>
    </div>
</nav>