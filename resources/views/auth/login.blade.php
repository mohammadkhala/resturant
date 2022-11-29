@extends('layouts.app')

@section('content')
<style>
    body {
      background-image: url('https://pic.i7lm.com/wp-content/uploads/2019/07/%D8%B5%D9%88%D8%B1%D8%A9-%D8%B3%D8%A7%D9%86%D8%AF%D9%88%D8%AA%D8%B4-%D8%A8%D8%B1%D8%AC%D8%B1-%D9%84%D8%B0%D9%8A%D8%B0-%D9%85%D8%B9-%D8%A8%D8%B7%D8%A7%D8%B7%D8%B3-%D8%B4%D9%87%D9%8A%D8%A9-%D8%A8%D8%AC%D8%A7%D9%86%D8%A8%D9%87.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    </style>
<div class="container " dir="rtl">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header text-center bg-success text-light" >{{ __('تسجيل الدخول') }}</div>

                <div class="card-body" >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('البريد الاكتروني') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('كلمة المرور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success text-center  text-dark">
                                    {{ __('دخول') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('نسيت كلمةالمرور؟') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
