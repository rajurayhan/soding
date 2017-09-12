@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tasks <span class="pull-right"><a href="{{ route('addTask') }}"><button class="btn btn-sm btn-success">Add New</button></a></span></div>

                <div class="panel-body">
                    @if(sizeof($tasks)>0)
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $sl = 1; ?>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{ $sl++ }}</td>
                                <td>{{ $task->name }}</td>
                                <td>{{ $task->description }}</td>
                                <td><a href="{{ route('updateTask', $task->id) }}"><button class="btn btn-sm btn-info">Edit</button></a> <a href="{{ route('deleteTask', $task->id) }}"><button class="btn btn-sm btn-danger">Delete</button></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                    <span>Sorry! No Task Available.</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
