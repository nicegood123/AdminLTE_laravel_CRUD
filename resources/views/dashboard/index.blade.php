{{-- Main Layout --}}
@extends('layouts.app')


{{-- Page Header --}}
@section('page-header')
    <section class="content-header mx-2">
        <div class="d-flex flex-wrap justify-content-between">
            <h1>Dashboard</h1>
        </div>
    </section>
@endsection


{{-- Main Content --}}
@section('main-content')
    <section class="content mx-2 pb-5">
        <div class="card px-2 py-2 shadow-lg">
            <h1>
                Hello, <b class="text-primary">{{ auth()->user()->name }}</b>
            </h1>
        </div>
    </section>
@endsection
