@extends('layouts.master')
@section('content')
<div class="container">
  {{-- @if (session('error'))
      <div><p class="alert alert-danger text-center">{{session()->has('message')}}</p></div>
  @endif --}}
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card my-5">
                <div class="card-header"><h3>Login Form</h3></div>
                <div class="card-body">
                    <form action="{{ url('login/authenticate') }}" method="POST">
                        @csrf
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