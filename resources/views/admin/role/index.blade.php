@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Role</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Role</li>
                        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">
                                <h3>Role List

                                    <a class="btn btn-success float-right btn-sm" href="{{route('role.create')}}"><i class="fa fa-plus-circle"></i> Add Role</a>

                                </h3>

                            </div><!-- /.card-header -->
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-hover">

                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Role Name</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($roles as $role)

                                        <tr>
                                            <td>{{($loop->iteration)}}</td>
                                            <td>{{($role->name)}}</td>




                                            <td>
                                                <a title="Edit" class="btn btn-sm btn-primary" href="{{route('role.edit',$role->id)}}"><i class="fa fa-edit"></i></a>
                                                {{-- <a title="Delete" class="btn btn-sm btn-danger" href="{{route('users.delete',$user->id)}}"><i class="fa fa-trash"></i></a>--}}
                                                <a href="#deleteModal{{$role->id}}" data-toggle="modal" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteModal{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Are You Sure Delete</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('role.destroy',$role->id)}}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit" class="btn btn-danger" >Permanent Delete</button>

                                                                </form>

                                                            </div>

                                                            <div class="modal-footer">

                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                            </td>

                                        </tr>

                                    @endforeach

                                    </tbody>



                                </table>

                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection