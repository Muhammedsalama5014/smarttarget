@extends('admin.inc.layout');
@section('main')
   <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Dashboard</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="home-item" href="index.html"><i
                                        data-feather="home"></i></a></li>
                                <li class="breadcrumb-item"> Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid default-dash">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Jop Requests</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Cover Letter</th>
                                        <th scope="col">CV</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($hirings as $index=>$hiring)
                                        @if($hiring->hiring_id == $id)
                                        <tr>
                                            <th scope="row">{{ $index+1 }}</th>
                                            <td>{{ $hiring->name }}</td>
                                            <td>{{ $hiring->email }}</td>
                                            <td>{{ $hiring->phone }}</td>
                                            <td>{{ $hiring->cover_letter }}</td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ $hiring->cv }}">Download</a>
                                            </td>
                                        </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection