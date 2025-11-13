@extends('admin-layouts.master')
@section('title')
   {{'Edit Role'}}
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
             Edit Role
        @endslot
    @endcomponent
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Role: {{ $role->name }}</h4>
                    <p class="card-title-desc">Update the role details and permissions below.</p>
                    
                    <form action="{{ route('roles.update', $role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Role Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                           id="name" name="name" value="{{ old('name', $role->name) }}" 
                                           placeholder="Enter role name" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Permissions</label>
                                    <div class="mb-2">
                                        <input type="checkbox" id="select-all-permissions" class="form-check-input">
                                        <label for="select-all-permissions" class="form-check-label"><strong>Select All</strong></label>
                                    </div>
                                    <div class="row">
                                        @foreach($permissions as $permission)
                                                <div class="col-md-3 mb-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" 
                                                            name="permissions[]" value="{{ $permission->id }}" 
                                                            id="permission_{{ $permission->id }}"
                                                            {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}
                                                            @if($role->name === 'admin') disabled @endif>
                                                        <label class="form-check-label" for="permission_{{ $permission->id }}">
                                                            {{ ucfirst(str_replace('-', ' ', $permission->name)) }}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary"
                                    @if($role->name === 'admin') disabled @endif>Update Role</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const selectAll = document.getElementById('select-all-permissions');
            const checkboxes = document.querySelectorAll('input[name="permissions[]"]');
            selectAll.addEventListener('change', function () {
                checkboxes.forEach(cb => cb.checked = selectAll.checked);
            });

            // Optional: If all permissions are checked on load, check "Select All"
            function updateSelectAll() {
                selectAll.checked = Array.from(checkboxes).every(cb => cb.checked);
            }
            checkboxes.forEach(cb => cb.addEventListener('change', updateSelectAll));
            updateSelectAll();
        });
    </script>
@endsection
