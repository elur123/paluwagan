@extends('layouts.auth')
@section('title', 'Login')
@section('content')

    <div class="main_content_iner h-100">
        <div class="container-fluid h-100 p-0">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">

                                <div class="modal-content cs_modal">
                                    <div class="modal-header justify-content-center theme_bg_1">
                                        <h5 class="modal-title text_white">Log in</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('login') }}" method="post">
                                            @csrf
                                            <div class="">
                                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                                    placeholder="Enter your email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="">
                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn_1 full_width text-center">Log in</button>
                                            <p>Need an account? <a data-bs-toggle="modal" data-bs-target="#sing_up"
                                                    data-bs-dismiss="modal" href="#"> Sign Up</a></p>
                                            <div class="text-center">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#forgot_password"
                                                    data-bs-dismiss="modal" class="pass_forget_btn">Forget
                                                    Password?</a>
                                            </div>
                                        </form>
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