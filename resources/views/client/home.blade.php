@extends('client.layouts.default')

@section('content')
    <!-- section begin -->
    <section id="section-home" aria-label="section" class="full-height no-top no-bottom text-light"
        data-bgimage="url(images/background/2.jpg)">
        <div id="particles-js"></div>
        <div class="overlay-bg t50">
            <div class="middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="lead"><span class="id-color">{{$slider->subtitle}}</span>
                            </p>
                            <div class="spacer20"></div>
                            <div class="h1_big">{{$slider->title}}
                                <br> London based
                                <div class="typed-strings">
                                    @php
                                    $vars =   explode(",",$slider->animasyon)
                                  @endphp
                                  @foreach ($vars as $var)
                                          <p>{{$var}}</p>
                                  @endforeach
                                </div>
                                <div class="typed"></div>
                            </div>
                            <div class="spacer60"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#section-services" class="scroll-to">
            <span class="arrow bounce">
                <i class="arrow_down"></i>
            </span>
        </a>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-services" class="fluid">
        <div class="container-fluid">
            <div class="row-fluid table">
                <div class="col-md-6 va-top">
                    <div class="img-fx">
                        <img src="images/{{$services->file}}" alt="">
                        <div class="img-url"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="content-wrap">

                        @foreach ($servicess as $service)
                             <!-- service box begin -->
                        <div class="feature-box mb30">
                            <div class="inner">
                                <div class="text">
                                    <i class="{{$service->icon}} id-color"></i>
                                    <h3>{{$service->title}}</h3>{{$service->content}}
                                </div>
                                <i class="big {{$service->icon}} id-color"></i>
                            </div>
                        </div>
                        <!-- service box close -->
                        @endforeach
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-experiences" class="fluid">
        <div class="container-fluid">
            <div class="row-fluid table">
                <div class="col-md-6 va-top">
                    <div class="img-fx">
                        <img src="images/{{$experiences->file}}" alt="">
                        <div class="img-url"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="content-wrap">
                        <p class="lead">
                            {{$experiences->content}}
                        </p>

                        <div class="spacer30"></div>

                        <div class="de_tab tab_style_2">
                            <ul class="de_nav">
                                <li class="active">
                                    <span>Works</span>
                                </li>
                                <li>
                                    <span>Education</span>
                                </li>
                            </ul>

                            <div class="de_tab_content text-left">

                                <div class="tab_single_content">
                                    @foreach ($experiencess_works as $exp)
                                    <div class="exp-box">
                                        <h5>{{$exp->start_yerar}} - {{$exp->end_year}}</h5>
                                        <h4>{{$exp->title}}</h4>
                                        <p>{{$exp->content}}</p>
                                    </div>
                                    @endforeach
                                  
                                  
                                </div>

                                <div class="tab_single_content">
                                    @foreach ($experiencess_education as $exp)
                                    <div class="exp-box">
                                        <h5>{{$exp->start_yerar}} - {{$exp->end_year}}</h5>
                                        <h4>{{$exp->title}}</h4>
                                        <p>{{$exp->content}}</p>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-portfolio" aria-label="section-portfolio" class="fluid overwidth">
        <div class="container-fluid">
            @foreach ($portfolio as $prt)
            <div id="album-carousel-2" class="owl-carousel owl-theme">
                <div class="carousel-item click" data-bgimage="url(images/{{$prt->image}})"
                    data-url="/blog/{{$prt->id}}/{{$prt->slug}}">
                    <div class="mask s2 full-height">
                        <div class="cover">
                            <div class="text">
                                <h2>{{$prt->title}}</h2>
                                <div class="tiny-border"></div>
                                <div class="clearfix"></div>
                                <p>{{$prt->content}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
          

        
            </div>
        </div>

        <div class="pf-nav left"><i class="arrow_left"></i></div>
        <div class="pf-nav right"><i class="arrow_right"></i></div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-blog" class="fluid">
        <div class="container-fluid">
            <div class="row-fluid table">
                <div class="col-md-6 va-top">
                    <div class="img-fx">
                        <img src="images/{{$blog->file}}" alt="">                        
                        <div class="img-url"></div>
                        
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="content-wrap">

                        @foreach ($blogs as $blg)
                        <div class="bloglist s1 item">
                            <div class="post-content">
                                <div class="date-box">
                                    <div class="d">{{$blg->day}}</div>
                                    <div class="m">{{$blg->month}}</div>
                                </div>
                                <div class="post-text">
                                    <h3><a href="/blog/{{$blg->id}}/{{$blg->slug}}">{{$blg->title}}</a></h3>
                                    <p>{{substr($blg->content,0,200).'...'}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                      

                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <!-- section close -->



    <!-- section begin -->
    <section id="section-contact" class="fluid">
        <div class="container-fluid">
            <div class="row-fluid table">
                <div class="col-md-6 va-top">
                    <div class="img-fx">
                        <img src="images/{{$contact->file}}" alt="">
                        <div class="img-url"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-wrap">
                        <div class="in-box">
                            <ul class="data">
                                <li>
                                    <div>E-mail</div>
                                    <div>{{$settings->email}}</div>
                                </li>
                                <li>
                                    <div>Phone</div>
                                    <div>{{$settings->phone}}</div>
                                </li>
                                <li>
                                    <div>Website</div>
                                    <div>{{$settings->website}}</div>
                                </li>
                                <li>
                                    <div>Address</div>
                                    <div>{{$settings->address}}</div>
                                </li>
                            </ul>
                        </div>

                        <div class="spacer60"></div>

                        <h3>Send message</h3>
                        <div class="spacer20"></div>
                        <form name="contactForm" id='contact_form' class="form-transparent" method="post"
                            action='https://www.designesia.com/themes/jonna/email.php'>

                            <div class="field-set">
                                <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                <div class="line-fx"></div>
                            </div>

                            <div class="field-set">
                                <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                                <div class="line-fx"></div>
                            </div>

                            <div class="field-set">
                                <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone">
                                <div class="line-fx"></div>
                            </div>

                            <div class="field-set">
                                <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                <div class="line-fx"></div>
                            </div>

                            <div id='submit'>
                                <input type='submit' id='send_message' value='Send' class="btn btn-custom">
                            </div>
                            <div id='mail_success' class='success'>Your message has been sent successfully.
                            </div>
                            <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>

                        </form>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <!-- section close -->
@endsection
