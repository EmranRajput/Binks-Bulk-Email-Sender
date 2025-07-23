@extends('layouts.app')

@section('title')
    Configuration - Binks
@endsection
@section('content')

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
<!-- Email Configuration Form -->
<div class="card mb-4">
    <div class="card-header bg-white border-bottom">
        <h5 class="mb-0">Email Configuration</h5>
    </div>
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="mailer" class="form-label">Mail Mailer</label>
                    <input type="text" class="form-control" id="mailer" name="mail_mailer" placeholder="smtp" value="{{ old('mail_mailer', env('MAIL_MAILER')) }}">
                </div>
                <div class="col-md-6">
                    <label for="host" class="form-label">Mail Host</label>
                    <input type="text" class="form-control" id="host" name="mail_host" placeholder="smtp.mailtrap.io" value="{{ old('mail_host', env('MAIL_HOST')) }}">
                </div>
                <div class="col-md-6">
                    <label for="port" class="form-label">Mail Port</label>
                    <input type="number" class="form-control" id="port" name="mail_port" placeholder="2525" value="{{ old('mail_port', env('MAIL_PORT')) }}">
                </div>
                <div class="col-md-6">
                    <label for="username" class="form-label">Mail Username</label>
                    <input type="text" class="form-control" id="username" name="mail_username" placeholder="Your username" value="{{ old('mail_username', env('MAIL_USERNAME')) }}">
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Mail Password</label>
                    <input type="password" class="form-control" id="password" name="mail_password" placeholder="Your password" value="{{ old('mail_password', env('MAIL_PASSWORD')) }}">
                </div>
                <div class="col-md-6">
                    <label for="encryption" class="form-label">Mail Encryption</label>
                    <select class="form-select" id="encryption" name="mail_encryption">
                        <option value="tls" {{ env('MAIL_ENCRYPTION') == 'tls' ? 'selected' : '' }}>TLS</option>
                        <option value="ssl" {{ env('MAIL_ENCRYPTION') == 'ssl' ? 'selected' : '' }}>SSL</option>
                        <option value="" {{ env('MAIL_ENCRYPTION') == '' ? 'selected' : '' }}>None</option>
                    </select>
                </div>
            </div>

            <div class="mt-4 text-end">
                <button type="submit" class="btn btn-primary">Save Settings</button>
            </div>
        </form>
    </div>
</div>



            <!-- Full Width: Recent Operations Table -->


        </div>
    </div>
</div>
@endsection
