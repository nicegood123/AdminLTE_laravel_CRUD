{{-- Main Layout --}}
@extends('layouts.app')


{{-- Page Header --}}
@section('page-header')
    <section class="content-header mx-2">
        <div class="d-flex flex-wrap justify-content-between">
            <h1>Users</h1>

            <button onclick="createModal()" class="btn btn-dark">
                <i class="fas fa-plus"></i>
                Add User
            </button>
        </div>
    </section>
@endsection


{{-- Main Content --}}
@section('main-content')
    <section class="content mx-2 pb-5">
        <div class="card px-2 py-2 shadow-lg">
            <table id="dtUsers" class="table table-hover">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date Created</th>
                    <th>Actions</th>
                </thead>
            </table>
        </div>
    </section>
@endsection


@section('modals')
    @include('users.components.modals.create')
    @include('users.components.modals.show')
    @include('users.components.modals.edit')
    @include('users.components.modals.delete')
@endsection


@section('scripts')
    @include('users.scripts.ajax.list')
    @include('users.scripts.ajax.create')
    @include('users.scripts.ajax.show')
    @include('users.scripts.ajax.edit')
    @include('users.scripts.ajax.delete')
@endsection
