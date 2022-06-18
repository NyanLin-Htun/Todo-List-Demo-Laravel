@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card my-5">
                <div class="card-header"><h3>Register Form</h3></div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name">
                            <x-error title="name"/>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" name="email">
                          <x-error title="email"/>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" name="password">
                          <x-error title="password"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection