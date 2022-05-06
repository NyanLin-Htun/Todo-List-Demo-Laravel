@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card my-5">
                <div class="card-header"><h3>Add a task</h3></div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="" class="form-label">Your task</label>
                          <input type="text" class="form-control" name="task">
                          {{-- <x-error title="email"/> --}}
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">Process</label>
                          <input type="text" class="form-control" name="process">
                          {{-- <x-error title="password"/> --}}
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection