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
                        <h4>Experience</h4>
                    </div>
                    <div class="card-body">
                        <form class="col-md-12 d-flex" action="/admin/experience" method="POST">
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
                                    <label for="product_name" class="form-label">Experience Type</label>
                                    <select placeholder="Type here" class="form-control" id="product_name" value="{{isset($data) ? $data->type : ''}}"
                                        name="type">
                                    <option value="works">Works</option>
                                    <option value="education">Education</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Experience Start Year</label>
                                    <select placeholder="Type here" class="form-control" id="product_name" value="{{isset($data) ? $data->type : ''}}"
                                        name="start_year">
                                        @for ($i = 2000 ; $i < 2022 ; $i++)
                                        <option value="{{$i}}">{{$i}}</option>

                                        @endfor
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Experience End Year</label>
                                    <select placeholder="Type here" class="form-control" id="product_name" value="{{isset($data) ? $data->type : ''}}"
                                        name="end_year">
                                        @for ($i = 2000 ; $i < 2022 ; $i++)
                                        <option value="{{$i}}">{{$i}}</option>

                                        @endfor
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save & Push to
                                    server</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- card end// -->
        </div>
    </section> <!-- content-main end// -->
@endsection
