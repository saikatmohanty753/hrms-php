@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            @include('alert_message')
            <div class="panel-hdr text-white d-flex">
                <h2>
                    User <span class="fw-300"><i>List</i></span>
                </h2>
                @can('user-create')
                <a href="{{ route('users.index') }}" class="ctm-btn-success">
                    <span class="ctm-btn-text">Add</span>
                    <span class="ctm-btn-icon"><i class="fa fa-plus-circle"></i></span>
                </a>
                &nbsp;
                @endcan
            </div>
            @can('user-list')
            <div class="panel-container show">
                <div class="panel-content">
                    <table class="table datatable table-hover table-striped w-100">
                        <thead>
                            <tr>
                                <th>Sl.no</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key=>$user)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ @$user->name }}</td>
                                <td>{{ @$user->email }}</td>
                                <td>{{ @$user->useroles->name }}</td>
                                <td>
                                    @can('user-edit')
                                    <a href="{{ route('users.edit', [encrypt($user->id)]) }}" class="btn btn-warning btn-sm text-white"><i class="fa fa-edit"></i></a>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endcan
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.datatable').dataTable({});
</script>
@endsection
