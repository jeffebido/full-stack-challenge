@extends('admin.layout.main')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Appointments</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Appointments</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Service</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $item)
                            <tr>
                                <td class="col-2">{{$item->name}}</td>
                                <td class="col-2">{{$item->email}}</td>
                                <td>{{$item->service}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{date('d-m-Y H:i', strtotime($item->time ))}}</td>
                                <td>{{$item->notes}}</td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@stop
