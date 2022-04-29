@extends('dashboard.layouts.default')
@section('content')
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                  
                    <div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Blog</h4>
                    </div>
                    <div class="card-body">
                        <form class="col-md-12 d-flex" action="/admin/blog" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6 pr-4" style="padding-right: 20px">
                                <input type="hidden" name="id" value="{{isset($data) ? $data->id : ''}}">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Title</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name"
                                        name="title" value="{{isset($data) ? $data->title : ''}}">
                                </div>
                                
                                <div class="mb-4">
                                    <label class="form-label">Description</label>
                                    <textarea placeholder="Type here" class="form-control" cols="12" rows="10" name="content" >{{isset($data) ? $data->content : ''}}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Month</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name"
                                        name="month" value="{{isset($data) ? $data->month : ''}}">
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Day</label>
                                    <select name="day" class="form-control" id="" value="{{isset($data) ? $data->day : ''}}">
                                        @for ($i =1 ; $i <30 ; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Image</label>
                                    <input type="file" placeholder="Type here" class="form-control" id="product_name"
                                        name="image" >
                                </div>
                                @isset($data->image)
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Mevcut Görsel</label>
                                    <img src="{{ asset('images/'.$data->image)}}" alt="">
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
