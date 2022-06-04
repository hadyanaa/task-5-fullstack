
                  <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
                  <!-- Main-menu -->
                  <div class="main-menu d-none d-md-block">
                    <nav>
                      <ul id="navigation">
                        <li><a href="/">Home</a></li>
                        <li><a href="/post/create">Post</a></li>
                        <li><a href="/category">Category</a></li>
                      </ul>
                    </nav>
                  </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                  <div class="header-right f-right d-none d-lg-block">
                    <!-- Search Nav -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                  </div>
                </div>