<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>  
            </li>
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Signout</a>
                </li>
                <li class="nav-item">
                <span class="nav-link" > {{ Auth::user()->vez_nev}} {{ Auth::user()->ker_nev }}</span>
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
        </ul>
      
        </form>
    </div>
</nav>