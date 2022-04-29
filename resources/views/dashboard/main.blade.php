@extends('dashboard.layouts.default')
@section('content')
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                  Görsel İşlemleri
                    <div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Services</h4>
                    </div>
                    <div class="card-body">
                        <form class="col-md-12 d-flex" action="/admin/main" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="services" name="type">

                            <div class="col-md-12 pr-4" style="padding-right: 20px">
                                <input type="hidden" name="id" value="{{isset($services) ? $services->id : ''}}">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Image</label>
                                    <input type="file" placeholder="Type here" class="form-control" id="product_name"
                                        name="file" >
                                </div>
                                @isset($services->file)
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Mevcut Görsel</label>
                                    <img src="{{ asset('images/'.$services->file)}}" alt="">
                                </div>  
                                @endisset
                                <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save & Push to Server</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- card end// -->
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Experience</h4>
                    </div>
                    <div class="card-body">
                        <form class="col-md-12 d-flex" action="/admin/main" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="experiences" name="type">

                            <div class="col-md-12 pr-4" style="padding-right: 20px">
                                <input type="hidden" name="id" value="{{isset($experiences) ? $experiences->id : ''}}">

                                <div class="mb-4">
                                    <label class="form-label">Description</label>
                                    <textarea placeholder="Type here" class="form-control" cols="12" rows="10" name="content" >{{isset($experiences) ? $experiences->content : ''}}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Image</label>
                                    <input type="file" placeholder="Type here" class="form-control" id="product_name"
                                        name="file" >
                                </div>
                                @isset($experiences->file)
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Mevcut Görsel</label>
                                    <img src="{{ asset('images/'.$experiences->file)}}" alt="">
                                </div>  
                                @endisset
                                <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save & Push to Server</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- card end// -->
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Blog</h4>
                    </div>
                    <div class="card-body">
                        <form class="col-md-12 d-flex" action="/admin/main" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="blog" name="type">

                            <div class="col-md-12 pr-4" style="padding-right: 20px">
                                <input type="hidden" name="id" value="{{isset($blog) ? $blog->id : ''}}">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Image</label>
                                    <input type="file" placeholder="Type here" class="form-control" id="product_name"
                                        name="file" >
                                </div>
                                @isset($blog->file)
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Mevcut Görsel</label>
                                    <img src="{{ asset('images/'.$blog->file)}}" alt="">
                                </div>  
                                @endisset
                                <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save & Push to Server</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- card end// -->
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Contact</h4>
                    </div>
                    <div class="card-body">
                        <form class="col-md-12 d-flex" action="/admin/main" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12 pr-4" style="padding-right: 20px">
                                <input type="hidden" name="id" value="{{isset($contact) ? $contact->id : ''}}">

                                <input type="hidden" value="contact" name="type">

                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Image</label>
                                    <input type="file" placeholder="Type here" class="form-control" id="product_name"
                                        name="file" >
                                </div>
                                @isset($contact->file)
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Mevcut Görsel</label>
                                    <img src="{{ asset('images/'.$contact->file)}}" alt="">
                                </div>  
                                @endisset
                                <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save & Push to Server</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- card end// -->
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>CV</h4>
                    </div>
                    <div class="card-body">
                        <form class="col-md-12 d-flex" action="/admin/main" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12 pr-4" style="padding-right: 20px">
                                <input type="hidden" name="id" value="{{isset($cv) ? $cv->id : ''}}">
                                <input type="hidden" value="cv" name="type">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Dosya</label>
                                    <input type="file" placeholder="Type here" class="form-control" id="product_name"
                                        name="file" >
                                </div>
                                @isset($cv->file)
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Mevcut CV</label>
                                    <a href="{{ asset('images/'.$cv->file)}}" download>Mevcut CV</a>
                                </div>  
                                @endisset
                                <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save & Push to Server</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- card end// -->
        </div>
    </section> <!-- content-main end// -->
@endsection
