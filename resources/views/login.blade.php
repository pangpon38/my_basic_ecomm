@extends('master')
@section('content')
    <div class="container" style="min-height: 100vh;">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="border">
                <form action="{{ route('login') }}" class="p-3" method="post" name="loginform" id="loginform"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="username"
                            aria-describedby="usernameHelp">
                        @error('username')
                            <div class="py-2">
                                <span class="error-message text-danger">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@hotmail.com"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" placeholder="password" class="form-control" id="password">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Login">
                </form>
            </div>
        </div>
    </div>
@endsection
