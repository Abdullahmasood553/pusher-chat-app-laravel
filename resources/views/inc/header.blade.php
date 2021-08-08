<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="#"><span style="color:red">{{ Auth::user()->name ? Auth::user()->name : '' }}</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            
            <li class="nav-item active px-2">
                <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>

            

            <li class="nav-item dropdown px-2">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                </div>
            </li>

            @if((Auth::check()))
            <li>
                <img src="{{ Auth()->user()->avatar }}" height="40px" 
          width="40px" style="border-radius: 50%" alt="" class="pull-right img-circle login" />
            </li>
            @endif
        </ul>
    </div>
</nav>