@extends('login.layout')

@php
    $title = 'Login';
    $form_action = '/login/auth';
    $left_button_href = '/register';
    $left_button = 'Register';
    $right_button = 'Login';
@endphp


@section('content')
    <div class="d-flex flex-row align-items-center mb-4">
        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
        <div class="form-floating flex-fill mb-0">
            <input type="text" class="form-control" name="username" placeholder="username" />
            <label class="form-label">Username</label>
        </div>
    </div>
    <div class="d-flex flex-row align-items-center mb-4">
        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
        <div class="form-floating flex-fill mb-0">
            <input type="password" class="form-control" name="password" placeholder="********" />
            <label class="form-label">Password</label>
        </div>
    </div>
    <div class="d-flex justify-content-between my-5 mb-lg-4">
        <a href="{{ $left_button_href }}"
            class="btn btn-outline-secondary btn-lg">{{ $left_button }}</a>
        <button type="submit"
            class="btn btn-primary btn-lg">{{ $right_button }}</button>
    </div>
@endsection

@section('content-right')
    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid mt-4"
        alt="Sample image">
@endsection
