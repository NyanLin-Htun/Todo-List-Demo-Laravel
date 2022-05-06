@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border border-0 mt-3">
                <div class="card-header bg-secondary">
                    <h3 class="card-title">Todo List</h3>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center mb-3">
                        <a href="/create" class="btn btn-success">+Add Task</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border border-0">
                <div class="card-header bg-secondary"><h3 class="card-title">Tasks</h3></div>
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="card border border-0">
                                <div class="card-header"><h3 class="card-title">Task in Progress</h3></div>
                                <div class="card-body">
                                    @foreach ($todotasks as $todotask)
                                        <div class="card mb-3">
                                            <div class="card-header bg-warning">
                                                <h5 class="card-title">Task {{$todotask->id}}</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex justify-content-left align-items-center">
                                                            <div><a href="/complete/{{ $todotask->id }}" class="btn btn-outline-secondary">Complete</a></div>
                                                            <div>
                                                                <h5 class="ms-2">{{ $todotask->task }}</h5>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="/edit/{{ $todotask->id }}" class="btn btn-outline-dark">Edit</a>
                                                            <a href="/delete/{{ $todotask->id }}" class="btn btn-outline-danger">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border border-0">
                                <div class="card-header"><h3 class="card-title">Task Completed</h3></div>
                                <div class="card-body">
                                    @foreach ($comtask as $ctask)
                                    {{-- @dd($ctask); --}}
                                        <div class="card mb-3">
                                            <div class="card-header bg-success">
                                                <h5 class="card-title">Task {{$ctask->id}}</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex justify-content-left align-items-center">
                                                            <div><a href="/incomplete/{{ $ctask->id }}" class="btn btn-outline-secondary">Incomplete</a></div>
                                                            <div>
                                                                <h5 class="ms-2">{{ $ctask->task }}</h5>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="/edit/{{ $ctask->id }}" class="btn btn-outline-dark">Edit</a>
                                                            <a href="/delete/{{ $ctask->id }}" class="btn btn-outline-danger">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
