@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@if(isset($task)){{ 'Edit' }}@else{{ 'Add' }}@endif Task</div>

                <div class="panel-body">
                    <form action="@if(isset($task)){{ route('updateTask', $task->id) }}@else{{ route('postTask') }}@endif" method="POST">

                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="name">Task Name</label>
                        <input type="text" value="@if(isset($task)){{ $task->name }}@endif" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description">@if(isset($task)){{ $task->description }}@endif</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
