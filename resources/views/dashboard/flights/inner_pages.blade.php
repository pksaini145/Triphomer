@section('title','Flight Inner Pages')
@extends('layouts.dashboard')
@section('content')
 <!-- Begin Page Content -->

                <div class="container-fluid">
                	<style type="text/css">
 	.headersection h1{
 		display: inline-block !important;
 	}
 	.add-new-flight{
 		float: right;
 	}
 </style>

                    <!-- Page Heading -->
                    <div class="headersection">
                    <h1 class="h3 mb-2 text-gray-800">Flights Inner Pages</h1>
                    <a href="{{ route('add.inner.pages') }}" class="btn btn-info btn-icon-split add-new-flight">
<span class="text">Add New</span>
</a>
</div>
                    
                    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                 

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- <h6 class="m-0 font-weight-bold text-primary"></h6> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>PID</th>
                                            <th>Cache</th>
                                            <th>PortalID</th>
                                            <th>URL</th>
                                            <th>DeskTemplate</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                   <tbody>
                                    @foreach($pages as $page)
                                      <tr>
                                            <td>{{ $page->id }}</td>
                                            <td>Cache</td>
                                            <td>PortalID</td>
                                            <td>{{ $page->slug }}</td>
                                            <td>{{ $page->heading }}</td>
                                            <td>
                                                <a href="{{ route('edit_inner_page',$page->id) }}" class="btn btn-info btn-icon-split">
                                                <span class="text">Edit</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                       
                                        
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection