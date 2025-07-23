@extends('layouts.app')

@section('title')
    Dashboard - BES
@endsection

@section('content')
<style>

</style>
<div class="az-content az-content-dashboard" style="background-color: rgb(234, 234, 234)">
    <div class="container">
        <div class="az-content-body">

            <!-- Header: Title + Time/Date -->
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
                <div>
                    <h2 class="az-dashboard-title">Hi, welcome back!</h2>
                    <p class="az-dashboard-text">Your bulk email sender dashboard.</p>
                </div>
                <div class="d-flex gap-4">
                    <div>
                        <label class="text-muted">TIME</label>
                        <h6 id="currentTime"></h6>
                    </div>
                    <div>
                        <label class="text-muted">DATE</label>
                        <h6 id="currentDate"></h6>
                    </div>
                </div>
            </div>

            <!-- Row: Metric Cards in One Line -->
            <div class="row g-3 mb-4">
                <!-- Total Operations -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body d-flex align-items-center ">
                            <div class="bg-info text-white rounded-circle  d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                <i class="typcn typcn-chart-bar-outline fs-5"></i>
                            </div>
                            <div class="m-3">
                                <h6 class="mb-1 ">Total Operations</h6>
                                <p class="mb-0">{{ $total_time }} Times</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Email Sent -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body d-flex align-items-center">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                <i class="typcn typcn-mail fs-5"></i>
                            </div>
                            <div class="m-3">
                                <h6 class="mb-1">Total Email Sent</h6>
                                <p class="mb-0">{{ $total_sent }} Emails</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total User -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                <i class="typcn typcn-user fs-5"></i>
                            </div>
                            <div class="m-3">
                                <h6 class="mb-1">Total User</h6>
                                <p class="mb-0">{{ $total_user }} Users</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Full Width: Recent Operations Table -->
            <div class="card shadow-sm border-0">
                <div class="card-header mb-4" style="background-color: rgb(26, 25, 25); color:aliceblue; ">
                    <h6 class="mb-0">Recent Operations</h6>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped text-center mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>SL</th>
                                <th>Emails</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($operations as $operation)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $operation->total_email_address }}</td>
                                    <td>{{ $operation->created_at->format('M d, Y') }}</td>
                                    <td>{{ $operation->created_at->format('h:i A') }}</td>
                                </tr>
                            @endforeach
                            @if(count($operations) == 0)
                                <tr><td colspan="4">No operations yet.</td></tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Time/Date Script -->
<script>
    function updateDateTime() {
        const now = new Date();
        const currentDate = now.toLocaleDateString('en-US', { year: 'numeric', month: 'short', day: 'numeric' });
        const currentTime = now.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', second: '2-digit' });

        document.getElementById('currentDate').innerText = currentDate;
        document.getElementById('currentTime').innerText = currentTime;
    }
    updateDateTime();
    setInterval(updateDateTime, 1000);
</script>
@endsection
