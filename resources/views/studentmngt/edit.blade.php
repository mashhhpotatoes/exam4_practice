@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0">{{ __('Student Update') }}</h1>
        @if (session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
        @endif
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 m-auto">
                <div class="card card-secondary">

                    <div class="card-header">
                        <h3 class="card-title">Edit Student Information</h3>
                    </div>

                    <form action="{{ route('studentmngt.update', $student->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row card-body col-12">
                                <div class="form-group col-4">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control g-2" id="fname" name="fname" placeholder="Enter your first name" value="{{$student->fname}}">
                                </div>
                                @error('fname') <span class="text-danger">{{$message}}</span> @enderror

                                <div class="form-group col-4">
                                    <label for="midname">Middle Name</label>
                                    <input type="text" class="form-control g-2" id="midname" name="midname" placeholder="Enter your middle name" value="{{$student->midname}}">
                                </div>
                                @error('midname') <span class="text-danger">{{$message}}</span> @enderror

                                <div class="form-group col-4">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control g-2" id="lname" name="lname" placeholder="Enter your last name" value="{{$student->lname}}">
                                </div>
                                @error('lname') <span class="text-danger">{{$message}}</span> @enderror

                                <div class="form-group col-12">
                                    <label for="add">Address</label>
                                    <input type="text" class="form-control g-2" id="add" name="add" placeholder="Enter your address" value="{{$student->add}}">
                                </div>
                                @error('add') <span class="text-danger">{{$message}}</span> @enderror

                                <div class="form-group col-12">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" class="form-control g-2" id="dob" name="dob" placeholder="Enter your date of birth" value="{{$student->dob}}">
                                </div>
                                @error('dob') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                        
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success col-12">Update</button>
                                </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.content -->
@endsection