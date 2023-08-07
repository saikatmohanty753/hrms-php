@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr text-white d-flex">
                <h2>
                    User <span class="fw-300"><i>List</i></span>
                </h2>
                <a href="#" class="ctm-btn-success">
                    <span class="ctm-btn-text">Add</span>
                    <span class="ctm-btn-icon">+</span>
                </a>
                &nbsp;
            </div>
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
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.datatable').dataTable({});
</script>
@endsection
