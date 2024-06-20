@extends('auth/index')
@section('content')
    <main>
        <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

            <div class="container-fluid">
                <div class="row">
                    <!-- left -->
                    <div
                        class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
                        <div class="p-3 p-lg-5">
                            <!-- Title -->
                            <div class="text-center">
                                <h2 class="fw-bold fs-3">به بزرگترین انجمن ما خوش آمدید</h2>
                                <p class="mb-0 h6 fw-light">بیایید امروز چیز جدیدی یاد بگیریم!</p>
                            </div>
                            <!-- SVG Image -->
                            <img src="{{ asset('assets/images/element/02.svg') }}" class="mt-5" alt="">
                            <!-- Info -->
                           
                        </div>
                    </div>
                    <!-- Right -->
                    <div class="col-12 col-lg-6 d-flex justify-content-center">
                        <div class="row my-5">
                            <div class="col-sm-10 col-xl-12 m-auto">

                                <!-- Title -->
                                <span class="mb-0 fs-1">🔐</span>
                                <h1 class="fs-4">ورود</h1>
                                <h5 class="fw-light mb-4">برای وارد شدن به حساب کاربری خود، اطلاعات زیر را وارد
                                    کنید:</h5>

                                <!-- Form START -->
                                <form action="{{ route('login_post') }}  " method="post">
                                    @csrf

                                    <!-- Email -->
                                    <div class="mb-4">
                                        <label for="exampleInputEmail1" class="form-label">ایمیل *</label>
                                        <div class="input-group input-group-lg">
                                        <span
                                            class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                class="bi bi-envelope-fill"></i></span>
                                            <input type="email" class="form-control border-0 bg-light rounded-end ps-1"
                                                   placeholder="***@gmail.com" id="exampleInputEmail1" name="email">
                                        </div>
                                    </div>

                                    @error('email')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                    <!-- Password -->
                                    <div class="mb-4">
                                        <div style="display: flex;justify-content: space-between;">
                                            <label for="password" class="form-label">رمز عبور *</label>
                                            <a style="color: blue" href="{{ route('forget_password') }}">
                                                فراموشی رمز عبور
                                            </a>
                                        </div>

                                        <div class="input-group input-group-lg">
                                        <span
                                            class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                class="bi bi-lock-fill"></i></span>
                                            <input type="password"
                                                   class="form-control border-0 bg-light rounded-end ps-1"
                                                   placeholder="رمز عبور" id="password" name="password">
                                        </div>
                                    </div>
                                    @error('password')
                                    <span style="color: red">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                    <!-- Login Button -->
                                    <div class="align-items-center">
                                        <div class="d-grid">
                                            <button class="btn btn-primary mb-0" type="submit">ورود</button>
                                        </div>
                                    </div>
                                    <div style="display: flex; justify-content: center ; margin-top: 10px">
                                        حساب کاربری ندارید ؟
                                        <a style="color: blue" href="{{ route('register') }}">
                                            ثبت نام
                                        </a>
                                    </div>
                                </form>
                                <!-- Form END -->

                                <!-- Login by Google Button -->
                                {{--                                <div class="text-center mt-4">--}}
                                {{--                                    <button class="btn btn-danger">ورود با گوگل</button>--}}
                                {{--                                </div>--}}
                            </div>
                        </div> <!-- Row END -->
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
    </main>
@endsection
