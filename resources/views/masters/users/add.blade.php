@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            @include('alert_message')
            <div class="panel-hdr d-flex">
                <h2>
                    Add <span class="fw-300"><i>User</i></span>
                </h2>
                <a href="{{ route('users.list') }}" class="ctm-btn-info">
                    <span class="ctm-btn-text">List</span>
                    <span class="ctm-btn-icon"><i class="fa fa-list-alt"></i></span>
                </a>
                &nbsp;
            </div>
            @can('user-create')
            <form method="POST" onsubmit="return submitForm()" action="{{ route('users.create') }}" id="formSave">
            <div class="panel-container show">
                <div class="panel-content">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control required" placeholder="Name" autocomplete="off">
                            </div>
                            <div class="col-md-4">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control required" placeholder="Email" autocomplete="off">
                            </div>
                            <div class="col-md-4">
                                <label>Role</label>
                                <select name="role_id" class="form-control select2 required" placeholder="Role">
                                    <option value="">Select Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mt-4">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control required" placeholder="Username" autocomplete="off">
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-info">Create</button>
                            <button type="button" onclick="return window.location.reload()" class="btn btn-warning">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
            @endcan
        </div>
    </div>
</div>
@endsection
