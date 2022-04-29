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
                        <h4>General Setting</h4>
                    </div>
                    <div class="card-body">
                        <form class="col-md-12 d-flex" action="/admin/general-setting" method="POST">
                            @csrf
                            <div class="col-md-6 pr-4" style="padding-right: 20px">
                                <input type="hidden" name="id" value="{{isset($data) ? $data->id : ''}}">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Website title</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name"
                                        name="title" value="{{isset($data) ? $data->title : ''}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Full description</label>
                                    <textarea placeholder="Type here" class="form-control" cols="12" rows="10" name="content" >{{isset($data) ? $data->content : ''}}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Website Tags</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name" value="{{isset($data) ? $data->tags : ''}}"
                                        name="tags" placeholder="tag1,tag2 ...">
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Phone</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name" value="{{isset($data) ? $data->phone : ''}}"
                                        name="phone">
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Email</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name" value="{{isset($data) ? $data->email : ''}}"
                                        name="email">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Address</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name" value="{{isset($data) ? $data->address : ''}}"
                                        name="address">
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Website</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name" value="{{isset($data) ? $data->website : ''}}"
                                        name="website">
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">facebook</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name" value="{{isset($data) ? $data->facebook : ''}}"
                                        name="facebook">
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">instagram</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name" value="{{isset($data) ? $data->instagram : ''}}"
                                        name="instagram">
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">twitter</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name" value="{{isset($data) ? $data->twitter : ''}}"
                                        name="twitter">
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">linkedin</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name" value="{{isset($data) ? $data->linkedin : ''}}"
                                        name="linkedin">
                                </div>
                                <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save & Push to
                                    server</button>

                        </form>
                    </div>

                </div>
            </div> <!-- card end// -->
        </div>

        </div>
    </section> <!-- content-main end// -->
@endsection
