@extends('admin-layouts.master')
@section('title')
    @lang('translation.Dashboards')
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
            Welcome !
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-3">
                            <p class="text-muted mb-0">Total Users</p>
                            <h5 class="font-size-15">1,000</h5>
                        </div>
                        <div>
                            <i class="mdi mdi-account-multiple text-primary font-size-24"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-3">
                            <p class="text-muted mb-0">Total Consultations</p>
                            <h5 class="font-size-15">{{ $stats['total'] ?? 0 }}</h5>
                        </div>
                        <div>
                            <i class="mdi mdi-phone text-success font-size-24"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-3">
                            <p class="text-muted mb-0">Total Blogs</p>
                            <h5 class="font-size-15">200</h5>
                        </div>
                        <div>
                            <i class="mdi mdi-currency-inr text-info font-size-24"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-3">
                            <p class="text-muted mb-0">New Consultations</p>
                            <h5 class="font-size-15">{{ $stats['new'] ?? 0 }}</h5>
                        </div>
                        <div>
                            <i class="mdi mdi-plus-circle text-danger font-size-24"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-3">
                            <p class="text-muted mb-0">This Week</p>
                            <h5 class="font-size-15">{{ $stats['this_week'] ?? 0 }}</h5>
                        </div>
                        <div>
                            <i class="mdi mdi-calendar-week text-warning font-size-24"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-3">
                            <p class="text-muted mb-0">This Month</p>
                            <h5 class="font-size-15">{{ $stats['this_month'] ?? 0 }}</h5>
                        </div>
                        <div>
                            <i class="mdi mdi-calendar-month text-secondary font-size-24"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Recent Consultations</h4>
                    <div class="table-responsive">
                        <table class="table table-borderless table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Patient</th>
                                    <th>Treatment</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $recentConsultations = \App\Models\Consultation::latest()->take(5)->get();
                                @endphp
                                @forelse($recentConsultations as $consultation)
                                <tr>
                                    <td>{{ $consultation->id }}</td>
                                    <td>{{ $consultation->full_name }}</td>
                                    <td>{{ $consultation->treatment }}</td>
                                    <td>
                                        @if($consultation->status == 'new')
                                            <span class="badge badge-soft-info font-size-12">New</span>
                                        @elseif($consultation->status == 'contacted')
                                            <span class="badge badge-soft-warning font-size-12">Contacted</span>
                                        @elseif($consultation->status == 'consulted')
                                            <span class="badge badge-soft-success font-size-12">Consulted</span>
                                        @else
                                            <span class="badge badge-soft-danger font-size-12">Cancelled</span>
                                        @endif
                                    </td>
                                    <td>{{ $consultation->created_at->format('M d, Y') }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">No consultations yet.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    @if($recentConsultations->count() > 0)
                    <div class="text-center mt-3">
                        <a href="{{ route('admin.consultations.index') }}" class="btn btn-primary btn-sm">View All Consultations</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Top Selling Products</h4>
                    <div class="chartjs-chart">
                        <canvas id="topSellingProducts"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection

