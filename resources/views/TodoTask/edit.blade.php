@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card my-5">
                <div class="card-header"><h4 class="card-title">Edit Task</h4></div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Task</label>
                            <input type="text" class="form-control" name="task" value="{{ $edittask->task }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Process</label>
                            <input type="text" class="form-control" name="process" value="{{ $edittask->process }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection