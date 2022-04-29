@extends('client.layouts.default')
@section('content')
      <!-- section begin -->
      <section id="section-contact" class="fluid full-height relative">
        <div class="container-fluid">
            <div class="row-fluid table">
                <div class="col-md-6 va-top">
                    <div class="img-fx">
                        <img src="{{asset('images/'.$blog->image)}}" alt="">
                        <div class="img-url to-size img-main"></div>
                    </div>
                </div>
                <div class="col-md-6 va-top">
                    <div class="view-scroll">

                        <div class="content-wrap">
                            <h2>{{$blog->title}}</h2>
                            <div class="spacer20"></div>
                            <p>{{$blog->content}}</p>
                    </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
           
        </div>
    </section>
    <!-- section close -->
@endsection