@extends('admin-layouts.master')
@section('title')
    {{'Consultation Details'}}
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            <a href="{{ route('admin.consultations.index') }}">Consultations</a>
        @endslot
        @slot('title')
            Consultation Details
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Consultation #{{ $consultation->id }}</h4>
                        <div>
                            <a href="{{ route('admin.consultations.edit', $consultation->id) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="{{ route('admin.consultations.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Patient Information -->
                        <div class="col-md-6">
                            <div class="card border">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="mb-0"><i class="fas fa-user"></i> Patient Information</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-borderless">
                                        <tr>
                                            <td><strong>Full Name:</strong></td>
                                            <td>{{ $consultation->full_name }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Phone:</strong></td>
                                            <td>
                                                <a href="tel:{{ $consultation->phone }}" class="text-primary">
                                                    {{ $consultation->phone }}
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email:</strong></td>
                                            <td>
                                                @if($consultation->email)
                                                    <a href="mailto:{{ $consultation->email }}" class="text-primary">
                                                        {{ $consultation->email }}
                                                    </a>
                                                @else
                                                    <span class="text-muted">Not provided</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Age:</strong></td>
                                            <td>{{ $consultation->age }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Treatment Interest:</strong></td>
                                            <td>
                                                <span class="badge bg-info">{{ $consultation->treatment }}</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Consultation Details -->
                        <div class="col-md-6">
                            <div class="card border">
                                <div class="card-header bg-success text-white">
                                    <h5 class="mb-0"><i class="fas fa-clipboard-list"></i> Consultation Details</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-borderless">
                                        <tr>
                                            <td><strong>Status:</strong></td>
                                            <td>
                                                <span class="badge {{ $consultation->status_badge }}">
                                                    {{ ucfirst($consultation->status) }}
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Submitted:</strong></td>
                                            <td>{{ $consultation->created_at->format('F d, Y \a\t g:i A') }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Last Updated:</strong></td>
                                            <td>{{ $consultation->updated_at->format('F d, Y \a\t g:i A') }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>IP Address:</strong></td>
                                            <td>{{ $consultation->ip_address ?: 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>User Agent:</strong></td>
                                            <td>
                                                <small class="text-muted">{{ Str::limit($consultation->user_agent, 50) }}</small>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    @if($consultation->message)
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card border">
                                <div class="card-header bg-info text-white">
                                    <h5 class="mb-0"><i class="fas fa-comment"></i> Additional Information</h5>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0">{{ $consultation->message }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Admin Notes -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card border">
                                <div class="card-header bg-warning text-dark">
                                    <h5 class="mb-0"><i class="fas fa-sticky-note"></i> Admin Notes</h5>
                                </div>
                                <div class="card-body">
                                    @if($consultation->notes)
                                        <p class="mb-0">{{ $consultation->notes }}</p>
                                    @else
                                        <p class="text-muted mb-0">No notes added yet.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card border">
                                <div class="card-header bg-secondary text-white">
                                    <h5 class="mb-0"><i class="fas fa-tools"></i> Quick Actions</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3 mb-2">
                                            <a href="tel:{{ $consultation->phone }}" class="btn btn-success btn-sm w-100">
                                                <i class="fas fa-phone"></i> Call Patient
                                            </a>
                                        </div>
                                        @if($consultation->email)
                                        <div class="col-md-3 mb-2">
                                            <a href="mailto:{{ $consultation->email }}" class="btn btn-info btn-sm w-100">
                                                <i class="fas fa-envelope"></i> Send Email
                                            </a>
                                        </div>
                                        @endif
                                        <div class="col-md-3 mb-2">
                                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $consultation->phone) }}" 
                                               target="_blank" class="btn btn-success btn-sm w-100">
                                                <i class="fab fa-whatsapp"></i> WhatsApp
                                            </a>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <a href="{{ route('admin.consultations.edit', $consultation->id) }}" 
                                               class="btn btn-warning btn-sm w-100">
                                                <i class="fas fa-edit"></i> Update Status
                                            </a>
                                        </div>
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
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection 