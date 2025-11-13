@extends('admin-layouts.master')
@section('title')
    {{'Edit Consultation'}}
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
    <style>
        .form-select {
            display: block !important;
            width: 100% !important;
            padding: 0.375rem 0.75rem !important;
            font-size: 1rem !important;
            font-weight: 400 !important;
            line-height: 1.5 !important;
            color: #212529 !important;
            background-color: #fff !important;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m1 6 7 7 7-7'/%3e%3c/svg%3e") !important;
            background-repeat: no-repeat !important;
            background-position: right 0.75rem center !important;
            background-size: 16px 12px !important;
            border: 1px solid #ced4da !important;
            border-radius: 0.375rem !important;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out !important;
        }
        
        .form-select:focus {
            border-color: #86b7fe !important;
            outline: 0 !important;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25) !important;
        }
        
        .form-select.is-invalid {
            border-color: #dc3545 !important;
        }
        
        .form-select.is-invalid:focus {
            border-color: #dc3545 !important;
            box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25) !important;
        }
    </style>
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            <a href="{{ route('admin.consultations.index') }}">Consultations</a>
        @endslot
        @slot('title')
            Edit Consultation
        @endslot
    @endcomponent

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Edit Consultation #{{ $consultation->id }}</h4>
                        <a href="{{ route('admin.consultations.show', $consultation->id) }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back to Details
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.consultations.update', $consultation->id) }}" method="POST" id="editConsultationForm">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <!-- Patient Information (Read-only) -->
                            <div class="col-md-6">
                                <div class="card border">
                                    <div class="card-header bg-primary text-white">
                                        <h5 class="mb-0"><i class="fas fa-user"></i> Patient Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label"><strong>Full Name</strong></label>
                                            <input type="text" class="form-control" value="{{ $consultation->full_name }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><strong>Phone</strong></label>
                                            <input type="text" class="form-control" value="{{ $consultation->phone }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><strong>Email</strong></label>
                                            <input type="email" class="form-control" value="{{ $consultation->email ?: 'Not provided' }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><strong>Age</strong></label>
                                            <input type="text" class="form-control" value="{{ $consultation->age }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><strong>Treatment Interest</strong></label>
                                            <input type="text" class="form-control" value="{{ $consultation->treatment }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Editable Information -->
                            <div class="col-md-6">
                                <div class="card border">
                                    <div class="card-header bg-warning text-dark">
                                        <h5 class="mb-0"><i class="fas fa-edit"></i> Update Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="status" class="form-label"><strong>Status *</strong></label>
                                            
                                            <!-- Current Status Display -->
                                            <div class="mb-2">
                                                <span class="badge 
                                                    @if($consultation->status == 'new') bg-info
                                                    @elseif($consultation->status == 'contacted') bg-warning
                                                    @elseif($consultation->status == 'consulted') bg-success
                                                    @elseif($consultation->status == 'cancelled') bg-danger
                                                    @endif
                                                    fs-6">
                                                    Current: {{ ucfirst($consultation->status) }}
                                                </span>
                                            </div>
                                            
                                            <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required style="min-height: 38px;">
                                                <option value="">Select New Status</option>
                                                <option value="new" {{ $consultation->status == 'new' ? 'selected' : '' }}>New</option>
                                                <option value="contacted" {{ $consultation->status == 'contacted' ? 'selected' : '' }}>Contacted</option>
                                                <option value="consulted" {{ $consultation->status == 'consulted' ? 'selected' : '' }}>Consulted</option>
                                                <option value="cancelled" {{ $consultation->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                            </select>
                                            @error('status')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="form-text text-muted">Select a new status to update this consultation.</small>
                                        </div>

                                        <div class="mb-3">
                                            <label for="notes" class="form-label"><strong>Admin Notes</strong></label>
                                            <textarea name="notes" id="notes" rows="6" class="form-control @error('notes') is-invalid @enderror" 
                                                      placeholder="Add notes about this consultation...">{{ old('notes', $consultation->notes) }}</textarea>
                                            @error('notes')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="form-text text-muted">Add any notes about follow-up, patient response, or consultation details.</small>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label"><strong>Submitted</strong></label>
                                            <input type="text" class="form-control" value="{{ $consultation->created_at->format('F d, Y \a\t g:i A') }}" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label"><strong>Last Updated</strong></label>
                                            <input type="text" class="form-control" value="{{ $consultation->updated_at->format('F d, Y \a\t g:i A') }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Information (Read-only) -->
                        @if($consultation->message)
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="card border">
                                    <div class="card-header bg-info text-white">
                                        <h5 class="mb-0"><i class="fas fa-comment"></i> Patient's Additional Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <textarea class="form-control" rows="4" readonly>{{ $consultation->message }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Action Buttons -->
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-save"></i> Update Consultation
                                        </button>
                                        <a href="{{ route('admin.consultations.show', $consultation->id) }}" class="btn btn-secondary">
                                            <i class="fas fa-times"></i> Cancel
                                        </a>
                                    </div>
                                    <div>
                                        <a href="tel:{{ $consultation->phone }}" class="btn btn-success">
                                            <i class="fas fa-phone"></i> Call Patient
                                        </a>
                                        @if($consultation->email)
                                        <a href="mailto:{{ $consultation->email }}" class="btn btn-info">
                                            <i class="fas fa-envelope"></i> Send Email
                                        </a>
                                        @endif
                                    </div>
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
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('editConsultationForm');
            const statusSelect = document.getElementById('status');
            
            // Debug status select
            if (statusSelect) {
                console.log('Status select found:', statusSelect);
                console.log('Current value:', statusSelect.value);
                console.log('Options count:', statusSelect.options.length);
                
                // Log all options
                for (let i = 0; i < statusSelect.options.length; i++) {
                    const option = statusSelect.options[i];
                    console.log(`Option ${i}: value="${option.value}", text="${option.text}", selected=${option.selected}`);
                }
                
                // Add change event listener
                statusSelect.addEventListener('change', function() {
                    console.log('Status changed to:', this.value);
                });
            } else {
                console.error('Status select not found!');
            }
            
            if (form) {
                form.addEventListener('submit', function(e) {
                    console.log('Form submitted');
                    console.log('Form action:', form.action);
                    console.log('Form method:', form.method);
                    console.log('Selected status:', statusSelect ? statusSelect.value : 'N/A');
                    
                    // Show loading state
                    const submitBtn = form.querySelector('button[type="submit"]');
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Updating...';
                    submitBtn.disabled = true;
                });
            }
        });
    </script>
@endsection 