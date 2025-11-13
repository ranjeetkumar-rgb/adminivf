@extends('admin-layouts.master')
@section('title')
    {{ 'View User' }}
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Dashboard
        @endslot
        @slot('title')
            View User
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">User Details</h4>
                    <p class="card-title-desc">Details of the user in the application.</p>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Name:</strong> {{ $user->name }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                        <li class="list-group-item">
                            <strong>Role:</strong> 
                            @if($user->roles->count() > 0)
                                @foreach($user->roles as $role)
                                    <span class="badge bg-primary">{{ ucfirst($role->name) }}</span>
                                @endforeach
                            @else
                                <span class="text-muted">No role assigned</span>
                            @endif
                        </li>
                        <!-- Add more user details here as needed -->
                    </ul>
                    @can('edit-user')
                        <a href="{{ route('manage-users.edit', $user->id) }}" class="btn btn-primary mt-3">Edit</a>
                    @endcan
                    <a href="{{ route('manage-users.index') }}" class="btn btn-secondary mt-3">Back to List</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection

