    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="{{asset('assets/images/loader.gif')}}" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <div class="collapse top-search" id="collapseExample">
            <div class="card card-block">
                <div class="newsletter-widget text-center">
                    <form class="form-inline">
                        <input type="text" class="form-control" placeholder="What you are looking for?">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- end newsletter -->
            </div>
        </div><!-- end top-search -->

        <div class="topbar-section" style="background-color: #f5f5ef">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs-down">
                        <div class="topsocial">
                            <img style="width: 300px" src="{{asset('assets/images/logo.png')}}" alt="">
                        </div><!-- end social -->
                    </div><!-- end col -->

                    <div class="col-lg-4 hidden-md-down">
                        <div class="topmenu text-center">
                        <img width="250px" src="{{asset('images/logo siska.png')}}" alt="">
                        </div><!-- end topmenu -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="topsearch text-right">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search"></i> Search</a>
                        </div><!-- end search -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end topbar -->

       

        {{-- <header class="header"> --}}
            {{-- <div class="container"> --}}
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #668cff;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item {{ Route::currentRouteNamed('siska.about') ? 'active' : null }}">
                          <a class="nav-link" href="{{ route('siska.about') }}">Tentang SISKA @if(Session::has('about'))<span class="sr-only">(current)</span>@endif</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteNamed('siska.journal') ? 'active' : null }}">
                          <a class="nav-link" href="{{ route('siska.journal') }}">E-Journal</a>
                        </li>
                        {{-- <li class="nav-item {{ Route::currentRouteNamed('siska.kajian') ? 'active' : null }}">
                          <a class="nav-link" href="{{ route('siska.kajian') }}">Kajian</a>
                        </li> --}}
                        <li class="nav-item {{ Route::currentRouteNamed('siska.ekajian') ? 'active' : null }}">
                          <a class="nav-link" href="{{ route('siska.ekajian') }}">E-Kajian</a>
                        </li>
                        {{-- <li class="nav-item {{ Route::currentRouteNamed('siska.puslitbang') ? 'active' : null }}">
                          <a class="nav-link" href="{{ route('siska.puslitbang') }}">Puslitbang</a>
                        </li> --}}
                        <li class="nav-item {{ Route::currentRouteNamed('siska.prespektif') ? 'active' : null }}">
                            <a class="nav-link" href="{{ route('siska.prespektif') }}">Prespektif ASN</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteNamed('siska.menu') ? 'active' : null }}">
                           <a class="nav-link" href="{{ route('siska.menu') }}"><i class="fas fa-plus"></i></a>
                        </li>
                        @if(Auth::user())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('siska.logout') }}">Logout</a>
                            </li>     
                        @endif    
                        {{-- <li class="nav-item">
                          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li> --}}
                      </ul>
                    </div>
                  </nav>
            {{-- </div><!-- end container --> --}}
        {{-- </header><!-- end header --> --}}