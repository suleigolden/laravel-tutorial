@extends('layouts.app')

@section('content')
<link href="sb-admin-2.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Student Record</div>

                <div class="panel-body">
                     <form class="form-horizontal" method="POST" action="insertStudent">
                        {{ csrf_field() }}
                         <div class="form-group">
                            <label for="name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="f_name" type="text" class="form-control" name="f_name" placeholder="First Name"   required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="l_name" type="text" class="form-control" name="l_name" placeholder="Last Name"   required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                            <select name="gender" class="form-control">
                               <option value="">Select Gender</option>
                               <option value="Male">Male</option>
                               <option value="Female">Female</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Class</label>
                            <div class="col-md-6">
                            <select name="class" class="form-control">
                               <option value="">Select Class</option>
                               <option value="Primary 1">Primary 1</option>
                               <option value="Primary 2">Primary 2</option>
                               <option value="Primary 3">Primary 3</option>
                               <option value="Primary 4">Primary 4</option>
                               <option value="Primary 5">Primary 5</option>
                               <option value="Primary 6">Primary 6</option>
                            </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Mobile Number</label>

                            <div class="col-md-6">
                                <input id="m_number" type="text" class="form-control" name="m_number" placeholder="Mobile Number"   required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save Student
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Display all Students Table -->
                <div class="panel-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>First Name</th>
                        <th>last Name</th>
                        <th>Gender</th>
                        <th>Class</th>
                        <th>Mobile Number</th>
                        <th>update</th>
                         <th>delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($student as $allstudent)
                        <tr>
                        <th>{{ $allstudent->id }}</th>
                        <th>{{ $allstudent->First_Name }}</th>
                        <th>{{ $allstudent->Last_Name }}</th>
                        <th>{{ $allstudent->Gender }}</th>
                        <th>{{ $allstudent->Class }}</th>
                        <th>{{ $allstudent->mobileNumber }}</th>
                        <th><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal{{ $allstudent->id }}">Update</button>
                        <div class="modal fade" id="myModal{{ $allstudent->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">ID {{ $allstudent->id }} : {{ $allstudent->First_Name }}</h4>
                                        </div>
                                        <div class="modal-body">
                 <form class="form-horizontal" method="POST" action="UpdateStudent/update">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $allstudent->id }}">
                         <div class="form-group">
                            <label for="name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="f_name" type="text" class="form-control" name="f_name" placeholder="First Name" value="{{ $allstudent->First_Name }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="l_name" type="text" class="form-control" name="l_name" placeholder="Last Name" value="{{ $allstudent->Last_Name }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                            <select name="gender" class="form-control">
                               <option value="{{ $allstudent->Gender }}">{{ $allstudent->Gender }}</option>
                               <option value="Male">Male</option>
                               <option value="Female">Female</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Class</label>
                            <div class="col-md-6">
                            <select name="class" class="form-control">
                               <option value="{{ $allstudent->Class }}">{{ $allstudent->Class }}</option>
                               <option value="Primary 1">Primary 1</option>
                               <option value="Primary 2">Primary 2</option>
                               <option value="Primary 3">Primary 3</option>
                               <option value="Primary 4">Primary 4</option>
                               <option value="Primary 5">Primary 5</option>
                               <option value="Primary 6">Primary 6</option>
                            </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Mobile Number</label>

                            <div class="col-md-6">
                                <input id="m_number" type="text" class="form-control" name="m_number" placeholder="Mobile Number" value="{{ $allstudent->mobileNumber }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save Student
                                </button>
                            </div>
                        </div>
                        </form>
                       
                   
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" type="submit"  class="btn btn-primary">Update Student</button>
                                        </div>
                                         
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            </th>
                        <th> <i class="fa fa-edit"></i><a class="btn btn-danger" href={{"deleteStudent/delete/".$allstudent->id}}>
                                   Delete
                                </a></th>
                    </tr>

                    @endforeach
                  
                </tbody>
            </table>
        </div>




            </div>
        </div>
    </div>
</div>
@endsection
