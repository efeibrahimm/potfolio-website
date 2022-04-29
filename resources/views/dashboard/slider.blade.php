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
                        <h4>Slider</h4>
                    </div>
                    <div class="card-body">
                        <form class="col-md-12 d-flex" action="/admin/slider" method="POST">
                            @csrf
                            <div class="col-md-6 pr-4" style="padding-right: 20px">
                                <input type="hidden" name="id" value="{{isset($data) ? $data->id : ''}}">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Title title</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name"
                                        name="title" value="{{isset($data) ? $data->title : ''}}">
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Subtitle</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name" value="{{isset($data) ? $data->subtitle : ''}}"
                                        name="subtitle">
                                </div>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Animation Text</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name" value="{{isset($data) ? $data->animasyon : ''}}"
                                        name="animasyon">
                                </div>

                                <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save & Push to
                                    server</button>
                            </div>
                          
                          

                        </form>
                    </div>

                </div>
            </div> <!-- card end// -->
        </div>

        </div>
    </section> <!-- content-main end// -->
@endsection
