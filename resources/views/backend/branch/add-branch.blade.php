@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Branch</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Branch</li>
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
                <div class="row" >
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">

                                @if(isset($editData))
                                    <h3> Edit Branch
                                        @else
                                            Add Branch
                                        @endif

                                        <a class="btn btn-success float-right btn-sm" href="{{route('branch.view')}}"><i class="fa fa-list"></i>Branch List</a>
                                    </h3>


                            </div><!-- /.card-header -->
                            <div class="card-body" >



                                <form method="POST" action="{{(@$editData)?route('branch.update',$editData->id):route('branch.store')}}" >
                                    @csrf


                                    <div class="form-group row">
                                        <label>IBF Branch</label>
                                        <div class="col-md-4">
                                            <input type="text" name="name" value="{{@$editData->name}}" class="form-control"id="name">
                                            <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label>Branch Address</label>
                                        <div class="col-md-4">
                                            <input type="text" name="address" value="{{@$editData->address}}" class="form-control"id="address">
                                            <font style="color:red">{{($errors->has('address'))?($errors->first('address')):''}}</font>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label>Branch Contract NO</label>
                                        <div class="col-md-4">
                                            <input type="text" name="mobile" value="{{@$editData->mobile}}" class="form-control"id="mobile">
                                            <font style="color:red">{{($errors->has('mobile'))?($errors->first('mobile')):''}}</font>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-4 offset-md-4">
                                            <button type="submit" class="btn btn-primary">

                                                {{(@$editData)?'Update':'Submit'}}

                                            </button>

                                        </div>
                                    </div>
                                </form>



                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>






@endsection