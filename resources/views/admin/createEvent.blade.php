@extends('layouts.master')

@section('title')
    Manage Your are Cpanel : TH Events : Add New Events 
@endsection

@section('subtitle')
    <li class="nav-item d-none d-sm-inline-block active">
        <a href="#" class="nav-link">Events</a>
    </li>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>Events</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Events</li>
                </ol>
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card card-purple">
                    <div class="card-header">
                        <h3 class="card-title">New Events</h3>
            
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                    </div>

                    <form method="POST" action="{{route('booking-events.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" id="name">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group select2-purple">
                                    <label>Category</label>
                                        <select class="form-control select2" multiple="multiple" name="category_id" data-placeholder="Choose category" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                            @foreach($categories as $categorie)
                                              <option value="{{ $categorie->id }}" >{{$categorie->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group select2-purple">
                                        <label>Status</label>
                                        <select class="form-control select2" name="status" data-placeholder="Choose status" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                            <option selected>Choose...</option>
                                            <option value="Publisher">Publisher</option>
                                            <option value="Pending">Pending</option>
                                    </select>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label>Date</label>
                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" name="date" data-target="#reservationdate"/>
                                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Hours</label>
                                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" name="hours" data-target="#timepicker"/>
                                            <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label>Duration</label>
                                        <select class="form-control select2" style="width: 100%;" name="duration">
                                            <option selected>Choose...</option>
                                            <option value="1h">1h</option>
                                            <option value="2h">2h</option>
                                            <option value="3h">3h</option>
                                            <option value="4h">4h</option>
                                            <option value="5h">5h</option>
                                            <option value="1jour">1d</option>
                                            <option value="2jour">2d</option>
                                            <option value="3jour">3d</option>
                                            <option value="4jour">4d</option>
                                            <option value="5jour">5d</option>
                                            <option value="6jour">6d</option>
                                            <option value="1sem">1week</option>
                                            <option value="2sem">2week</option>
                                            <option value="3sem">3week</option>
                                            <option value="4sem">4week</option>
                                            <option value="1mois">1month</option>
                                            <option value="+2mois">+2month</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Picture</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                            <input type="file" class="form-control custom-file-input" id="exampleInputFile" name="image" accept=".jpg, .png, .gif, .jpeg">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="3" name="description"></textarea>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" name="city" class="form-control" id="city">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" name="country" class="form-control" id="country">
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" id="address">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label>Code Postal</label>
                                        <input type="text" name="code_postal" class="form-control" id="code_postal">
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Type Event</label>
                                        <select class="form-control select2" style="width: 100%;" name="type">
                                            <option selected>Choose...</option>
                                            <option value="Online">Online</option>
                                            <option value="Avenue (Offline)">Avenue (Offline)</option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
