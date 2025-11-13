@extends('admin-layouts.master')
@section('title')
   {{'View Role'}}
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Roles
        @endslot
        @slot('title')
             View Role
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title">Role Details: {{ $role->name }}</h4>
                        <div class="d-flex gap-2">
                            @can('edit-role')
                                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary">Edit Role</a>
                            @endcan
                            @can('view-role')
                            <a href="{{ route('roles.index') }}" class="btn btn-secondary">Back to Roles</a>
                            @endcan
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <h5>Role Information</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Role ID:</strong></td>
                                        <td>{{ $role->id }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Role Name:</strong></td>
                                        <td>{{ $role->name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Guard Name:</strong></td>
                                        <td>{{ $role->guard_name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Created At:</strong></td>
                                        <td>{{ $role->created_at->format('F j, Y g:i A') }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Updated At:</strong></td>
                                        <td>{{ $role->updated_at->format('F j, Y g:i A') }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-4">
                                <h5>Permissions ({{ $role->permissions->count() }})</h5>
                                @if($role->permissions->count() > 0)
                                    <div class="row">
                                        @foreach($role->permissions as $permission)
                                            <div class="col-md-6 mb-2">
                                                <span class="badge bg-primary">{{ ucfirst(str_replace('-', ' ', $permission->name)) }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <p class="text-muted">No permissions assigned to this role.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-4">
                                <h5>Users with this Role ({{ $role->users->count() }})</h5>
                                @if($role->users->count() > 0)
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Created At</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($role->users as $user)
                                                    <tr>
                                                        <td>{{ $user->id }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->created_at->format('F j, Y') }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <p class="text-muted">No users assigned to this role.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection 