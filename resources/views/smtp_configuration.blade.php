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
                    <h2 class="az-dashboard-title">Email SMTP Configuration</h2>
                    {{-- <p class="az-dashboard-text">Your bulk email sender dashboard.</p> --}}
                </div>
            </div>
<!-- Email Configuration Form -->
<div class="card mb-4">
    <div class="card-header bg-white border-bottom">
        <h5 class="mb-0">Configure your mail server credentials to enable email sending from the application.</h5>
    </div>
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$smtp->id}}">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="mailer" class="form-label">Mail Mailer</label>
                    <input type="text" value="{{$smtp->mailer}}" class="form-control" id="category_name" name="mailer" placeholder="mailer">
                </div>
                <div class="col-md-6">
                    <label for="host" class="form-label">Mail Host</label>
                    <input type="text" value="{{$smtp->host}}" class="form-control" id="category_name" name="host" placeholder="host">
                </div>
                <div class="col-md-6">
                    <label for="port" class="form-label">Mail Port</label>
                    <input type="text" value="{{$smtp->port}}" class="form-control" id="category_name" name="port" placeholder="port">
                </div>
                <div class="col-md-6">
                    <label for="username" class="form-label">Mail Username</label>
                    <input type="text" value="{{$smtp->username}}" class="form-control" id="category_name" name="username" placeholder="  username">
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Mail Password</label>
                    <input type="text" value="{{$smtp->password}}" class="form-control" id="category_name" name="password" placeholder="password">
                </div>
                <div class="col-md-6">
                    <label for="encryption" class="form-label">Mail Encryption</label>
                    <input type="text" value="{{$smtp->encryption}}" class="form-control" id="category_name" name="encryption" placeholder="encryption">

                    {{-- <select class="form-select" id="encryption" name="mail_encryption">
                        <option value="tls" {{ env('MAIL_ENCRYPTION') == 'tls' ? 'selected' : '' }}>TLS</option>
                        <option value="ssl" {{ env('MAIL_ENCRYPTION') == 'ssl' ? 'selected' : '' }}>SSL</option>
                        <option value="" {{ env('MAIL_ENCRYPTION') == '' ? 'selected' : '' }}>None</option>
                    </select> --}}
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Mail From</label>
                    <input type="text" value="{{$smtp->from_address}}" class="form-control" id="category_name" name="from_address" placeholder="from_address">
                </div>
            </div>

            <div class="mt-4 text-end">
                <button type="submit" class="btn btn-primary">Submit Changes</button>
            </div>
        </form>
    </div>
</div>



            <!-- Full Width: Recent Operations Table -->


        </div>
    </div>
</div>
@endsection
