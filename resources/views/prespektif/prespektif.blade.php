@extends('layouts.master')

@section('content')
<section class="section first-section">
    <div class="container-fluid">
        <div class="masonry-blog clearfix">
          
        </div><!-- end masonry -->
    </div>
</section>
<br>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h3 class="color-aqua">Motivation</h3>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="single.html" title="">
                                    <img src="upload/blog_05.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                    @if ($dataMotivation)
                            
                        <div class="blog-meta big-meta">
                            <h4>{{ $dataMotivation->title }}</h4>
                            <p>{{ $dataMotivation->content }}.</p>
                            
                        </div><!-- end meta -->
                    @endif    
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box">
                            <div class="post-media">
                                <a href="single.html" title="">
                                    <img src="upload/blog_06.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                        @if ($dataNews)
                                
                            @foreach ($dataNews as $news)    
                                <div class="media">
                                    <img src="{{ asset('images/news/'. $news->photo) }}" width="300px" class="mr-3" alt="...">
                                    <div class="media-body">
                                       <h5 class="mt-0">{{ $news->title }}</h5>
                                       {{ $news->content }}.
                                    </div>
                                </div><br>
                             @endforeach    
                        @endif            
                        @if ($dataInfograph)     
                            <div class="media">
                                <img width="800px" height="350px" src="{{ asset('images/infograph/'. $dataInfograph->photo) }}" class="mr-3" alt="...">
                            </div><br>
                        @endif            
                        </div><!-- end blog-box -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->
            
            <div class="col-md-4">
                
                {{-- <div class="row"> --}}
                    
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              @php($i=0)
                              @foreach($dataGambar as $gambar)
                                    <div class="carousel-item {{$i==0?'active':null}}">
                                        <img style="height: 250px" src="{{asset('images/foto/'. $gambar->name)}}" class="d-block w-100" alt="...">
                                    </div>
                              @php($i++)    
                              
                              @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>

                        <hr class="invis">
                        <br>                       

                        <div class="blog-box">
                            <div class="post-media">
                                <a href="single.html" title="">
                            @if ($dataVideo)                              
                                <video width="400" height="315" controls src="{{ asset('images/video/'. $dataVideo->name) }}"></video>
                            @endif        
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                           
                        </div><!-- end blog-box -->
                {{-- </div><!-- end row --> --}}
            </div><!-- end col -->
        </div><!-- end row -->

        {{-- <hr class="invis1"> --}}

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="banner-spot clearfix">
                    <div class="banner-img">
                        <img src="upload/banner_01.jpg" alt="" class="img-fluid">
                    </div><!-- end banner-img -->
                </div><!-- end banner -->
            </div><!-- end col -->
        </div><!-- end row -->

        {{-- <hr class="invis1"> --}}

        {{-- <div class="row">
            <div class="col-lg-9">
                <div class="blog-list clearfix">
                    <div class="section-title">
                        <h3 class="color-green"><a href="blog-category-01.html" title="">Travel</a></h3>
                    </div><!-- end title -->

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="single.html" title="">
                                    <img src="upload/blog_square_01.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="single.html" title="">5 Beautiful buildings you need to visit without dying</a></h4>
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <small><a href="blog-category-01.html" title="">Travel</a></small>
                            <small><a href="single.html" title="">21 July, 2017</a></small>
                            <small><a href="blog-author.html" title="">by Boby</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="single.html" title="">
                                    <img src="upload/blog_square_02.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="single.html" title="">Let's make an introduction to the glorious world of history</a></h4>
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <small><a href="blog-category-01.html" title="">Travel</a></small>
                            <small><a href="single.html" title="">20 July, 2017</a></small>
                            <small><a href="blog-author.html" title="">by Samanta</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="single.html" title="">
                                    <img src="upload/blog_square_03.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="single.html" title="">Did you see the most beautiful sea in the world?</a></h4>
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <small><a href="blog-category-01.html" title="">Travel</a></small>
                            <small><a href="single.html" title="">19 July, 2017</a></small>
                            <small><a href="blog-author.html" title="">by Jackie</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->
                </div><!-- end blog-list -->

                <hr class="invis">

                <div class="blog-list clearfix">
                    <div class="section-title">
                        <h3 class="color-red"><a href="blog-category-01.html" title="">Food</a></h3>
                    </div><!-- end title -->

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="single.html" title="">
                                    <img src="upload/blog_square_05.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="single.html" title="">Banana-chip chocolate cake recipe</a></h4>
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <small><a href="blog-category-01.html" title="">Food</a></small>
                            <small><a href="single.html" title="">11 July, 2017</a></small>
                            <small><a href="blog-author.html" title="">by Matilda</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="single.html" title="">
                                    <img src="upload/blog_square_06.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="single.html" title="">10 practical ways to choose organic vegetables</a></h4>
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <small><a href="blog-category-01.html" title="">Food</a></small>
                            <small><a href="single.html" title="">10 July, 2017</a></small>
                            <small><a href="blog-author.html" title="">by Matilda</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="single.html" title="">
                                    <img src="upload/blog_square_07.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="single.html" title="">We are making homemade ravioli</a></h4>
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <small><a href="blog-category-01.html" title="">Food</a></small>
                            <small><a href="single.html" title="">09 July, 2017</a></small>
                            <small><a href="blog-author.html" title="">by Matilda</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->
                </div><!-- end blog-list -->
            </div><!-- end col -->

            <div class="col-lg-3">
                <div class="section-title">
                    <h3 class="color-yellow"><a href="blog-category-01.html" title="">Vlogs</a></h3>
                </div><!-- end title -->

                <div class="blog-box">
                    <div class="post-media">
                        <a href="single.html" title="">
                            <img src="upload/blog_10.jpg" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span class="videohover"></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="single.html" title="">We are guests of ABC Design Studio - Vlog</a></h4>
                        <small><a href="blog-category-01.html" title="">Videos</a></small>
                        <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box">
                    <div class="post-media">
                        <a href="single.html" title="">
                            <img src="upload/blog_11.jpg" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span class="videohover"></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="single.html" title="">Nostalgia at work</a></h4>
                        <small><a href="blog-category-01.html" title="">Videos</a></small>
                        <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box">
                    <div class="post-media">
                        <a href="single.html" title="">
                            <img src="upload/blog_12.jpg" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span class="videohover"></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="single.html" title="">How to become a good vlogger</a></h4>
                        <small><a href="blog-category-01.html" title="">Beauty</a></small>
                        <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="section-title">
                    <h3 class="color-grey"><a href="blog-category-01.html" title="">Health</a></h3>
                </div><!-- end title -->

                <div class="blog-box">
                    <div class="post-media">
                        <a href="single.html" title="">
                            <img src="upload/blog_07.jpg" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="single.html" title="">Opened the doors of the Istanbul spa center</a></h4>
                        <small><a href="blog-category-01.html" title="">Spa</a></small>
                        <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box">
                    <div class="post-media">
                        <a href="single.html" title="">
                            <img src="upload/blog_08.jpg" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="single.html" title="">2017 trends in health tourism</a></h4>
                        <small><a href="blog-category-01.html" title="">Health</a></small>
                        <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box">
                    <div class="post-media">
                        <a href="single.html" title="">
                            <img src="upload/blog_09.jpg" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="single.html" title="">Experience the effects of miraculous stones</a></h4>
                        <small><a href="blog-category-01.html" title="">Beauty</a></small>
                        <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis1"> --}}

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="banner-spot clearfix">
                    <div class="banner-img">
                        <img src="upload/banner_02.jpg" alt="" class="img-fluid">
                    </div><!-- end banner-img -->
                </div><!-- end banner -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

@endsection