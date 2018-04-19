@extends('layouts.app')

@section('content')
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
            </div>
        </div>
    </div>
</div>
@endsection
