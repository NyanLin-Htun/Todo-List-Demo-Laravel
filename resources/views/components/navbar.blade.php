<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="navbar bg-info d-flex justify-content-between align-items-center">
                <div class="nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                    @endguest
                    @auth
                    <form action="/index" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-link nav-link">Logout</button>
                   </form>
                </div>
                @if (auth()->user())
                  <div>
                    <p class="text-secondary me-5">Login with >>> {{auth()->user()->name}}</p>
                  </div>
                @endif
                  @endauth
            </div>

        </div>
    </div>
</div>