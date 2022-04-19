@extends('admin.layout.main')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Testimonials</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                <h4 class="card-title d-flex">
                    <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>
                </h4>
                <a href="{{route('admin.testimonials.add')}}" class="btn btn-primary list-inline d-flex mb-0">
                    Add new
                </a>
                
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonials as $item)
                            <tr>
                            
                                <td class="col-2">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="{{asset('public/img/testimonials/'. $item->img )}}">
                                        </div>
                                       
                                    </div>
                                </td>
                                <td class="col-2"> <p class="font-bold ms-3 mb-0">{{$item->name}}</p></td>
                                <td class="col-2">{{$item->role}}</td>
                                <td class="col-4">{{$item->description}}</td>
                                <td class="col-2">   
                                    <a href="{{route('admin.testimonials.update', ['id' => $item->id ]) }}"> 
                                        <span class="badge bg-success">Edit</span>
                                    </a>
                                    <a href="{{route('admin.testimonials.delete', ['id' => $item->id ])}}"> 
                                        <span class="badge bg-danger">Delete</span>
                                    </a>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@stop
