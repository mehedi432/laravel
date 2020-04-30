@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header bg-secondary text-white" style="height: 34pt">Add Task</div>

                <div class="card-body">
                    <form action="{{route('task.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Task title: </label>
                            <input type="text" name="title" placeholder="Enter a task" class="form-control" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-outline-secondary font-weight-bolder">Add Task</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 

        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-secondary text-white" style="height: 34pt">View Task</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Task</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                        </tr>

                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{$task->title}}</td>
                                <td class="text-center">
                                    <a href="{{route('task.edit', $task->id)}}" class="btn btn-outline btn-outline-secondary">Update</a>
                                </td>
                                <td class="text-center">
                                    <form action="{{route('task.destroy', $task->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline btn-outline-secondary" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
