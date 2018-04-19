@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Student Record</div>

                <div class="panel-body">
                     <form class="form-horizontal" method="POST" action="postcomment">
                        {{ csrf_field() }}

                         <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="title" placeholder="Post Title"   required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Category</label>
                            <div class="col-md-6">
                            <select name="category" class="form-control">
                               <option></option>

                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Question</label>
                            <div class="col-md-6">
                           <textarea id="body" type="text" class="form-control" name="body" placeholder="Type in your Question"   ></textarea>
                           </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Post
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
