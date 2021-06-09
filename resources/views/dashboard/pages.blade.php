@section('title','Pages')
@extends('layouts.dashboard')
@section('content')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Page List</h1>
                    
                    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                 

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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
                                                <a href="{{ route('edit_page',$page->id) }}" class="btn btn-info btn-icon-split">
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