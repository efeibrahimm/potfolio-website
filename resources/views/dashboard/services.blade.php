@extends('dashboard.layouts.default')
@section('content')
<section class="content-main">
    <div class="content-header">
        <a href="/admin/services-add" class="btn btn-sm font-sm btn-light rounded">
            <i class="material-icons md-plus"></i> Yeni Ekle
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            @isset($data)
            @foreach ($data as $item)
            <article class="itemlist">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-sm-4 col-4 flex-grow-1 col-name">
                        <a class="itemside" href="#">
                            <div class="info">
                                <h6 class="mb-0">{{$item->title}}</h6>
                            </div>
                        </a>
                    </div>
              
                    <div class="col-lg-4 col-sm-2 col-4 col-date">
                        <span>{{$item->content}}</span>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                        <a href="/admin/services-add/{{$item->id}}" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Edit
                        </a>
                        <a href="/admin/services-del/{{$item->id}}" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Delete
                        </a>
                    </div>
                </div> <!-- row .// -->
            </article> <!-- itemlist  .// -->
            @endforeach
            @endisset
           

        </div> <!-- card-body end// -->
    </div> <!-- card end// -->
</section> <!-- content-main end// -->
@endsection