@extends('index')

@section('content')
    <main>

        <section class="position-relative overflow-hidden pb-0 pb-sm-5">

            <!-- SVG decoration -->
            <figure class="ms-5 position-absolute top-0 start-0">
                <svg width="29px" height="29px">
                    <path class="fill-purple opacity-4"
                          d="M29.004,14.502 C29.004,22.512 22.511,29.004 14.502,29.004 C6.492,29.004 -0.001,22.512 -0.001,14.502 C-0.001,6.492 6.492,-0.001 14.502,-0.001 C22.511,-0.001 29.004,6.492 29.004,14.502 Z"></path>
                </svg>
            </figure>

            <!-- Content START -->
            <div class="container">
                <div class="row align-items-center justify-content-xl-between g-4 g-md-5">
                    <!-- Left content START -->
                    <div
                        class="col-lg-7 col-xl-5 position-relative z-index-1 text-center text-lg-start mb-2 mb-md-9 mb-xl-0">
                        <!-- Badge -->
                        <h6 class="mb-3 font-base bg-primary bg-opacity-10 text-primary py-2 px-4 rounded-2 d-inline-block">
                            با من شروع کنید :)
                        </h6>

                        <!-- Title -->
                        <h1 class="mb-4 display-6">به DaM
                            <span class="position-relative d-inline-block">خوش آمدید
                                <!-- SVG decoration -->
						<span class="position-absolute top-50 start-50 translate-middle z-index-n1 d-none d-sm-block">
							
						</span>
					</span>
                        </h1>
                        <!-- Content -->
                        <p class="mb-3">
                            مرجع آموزش رایگان برنامه نویسی
                        </p>
                        <!-- Search bar -->
                        <form class="border rounded p-2 mb-4" action="{{ route('courses') }}">
                            <div class="input-group">
                                <input class="form-control border-0 me-1" type="search" placeholder="جستجو..."
                                       name="search">
                                <button type="submit" class="btn btn-primary mb-0 rounded"><i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>

                    </div>

                    <div class="col-lg-5 col-xl-6 text-center position-relative">
{{--                        <figure--}}
{{--                            class="position-absolute top-100 start-0 translate-middle mt-n6 ms-5 ps-5 d-none d-md-block">--}}
{{--                            <svg width="297.5px" height="295.9px">--}}
{{--                                <path stroke="#db15be" fill="none" stroke-width="13"--}}
{{--                                      d="M286.2,165.5c-9.8,74.9-78.8,128.9-153.9,120.4c-76-8.6-131.4-78.2-122.8-154.2C18.2,55.8,87.8,0.3,163.7,9"></path>--}}
{{--                            </svg>--}}
{{--                        </figure>--}}

{{--                        <div class="icon-lg bg-primary text-white rounded-4 shadow position-absolute top-0 start-100 translate-middle z-index-9 ms-n4 d-none d-md-block">--}}
{{--                            <i class="fas fa-code"></i>--}}
{{--                        </div>--}}

                        <!-- Live class -->
 
                    <!-- Right content END -->
                </div>
            </div>
            <!-- Content END -->
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bg-light rounded-3 p-4">
                            <div class="tiny-slider arrow-round">
                                <div class="tiny-slider-inner" data-arrow="false" data-autoplay="true" data-dots="false"
                                     data-gutter="80" data-items-xl="6" data-items-lg="5" data-items-md="4"
                                     data-items-sm="3" data-items-xs="2">
                                    @foreach($brands as $brand)
                                        <div class="item"><img src="{{ Voyager::image($brand->image) }}" alt=""></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- =======================
        Trending course START -->
        <section class="pt-0 pt-lg-5">
            <div class="container">
                <!-- Title -->
                <div class="row mb-4">
                    <div class="col-12">
                        <h2 class="fs-3 fw-bold">
                            <span class="position-relative z-index-9">دوره های</span>
                            <span class="position-relative z-index-1">پیشنهادی
                                <!-- SVG START -->
					
                                <!-- SVG END -->
					</span>
                        </h2>
                        <p class="mb-0">دوره هایی را پیدا کنید که برای حرفه شما مناسب هستند.</p>
                    </div>
                </div>

                <div class="row g-4">
                    @foreach($courses as $course)
                        <div class="col-md-6 col-xl-4">
                            <div class="card shadow-hover overflow-hidden bg-transparent">
                                <div class="position-relative">
                                    <img class="card-img-top" src="{{ Voyager::image($course->image) }}"
                                         alt="{{ $course->title }}">
{{--                                    <div class="bg-overlay bg-dark opacity-4"></div>--}}
{{--                                    <div class="card-img-overlay d-flex align-items-start flex-column">--}}
{{--                                        <div class="w-100 mt-auto d-inline-flex">--}}
{{--                                            <div class="d-flex align-items-center bg-white p-2 rounded-2">--}}
{{--                                                <div class="avatar avatar-sm me-2">--}}
{{--                                                    <img class="avatar-img rounded-1"--}}
{{--                                                         src="{{  Voyager::image($course->teacher->image )}}"--}}
{{--                                                         alt="avatar">--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <h6 class="mb-0"><a href="" class="text-dark">{{ $course->teacher->name }}</a></h6>--}}
{{--                                                    <span class="small">{{ $course->teacher->title }}</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-3">
                                        <div class="hstack gap-2">
                                            <a href="" class="badge bg-purple bg-opacity-10 text-purple">
                                                {{ config('enum.course')[$course->level] }}
                                            </a>

                                        </div>
                                        <a href="" class="h6 fw-light mb-0"><i class="far fa-bookmark"></i></a>
                                    </div>
                                    <h5 class="card-title fw-normal"><a href="{{ route('single_course' , $course->slug) }}">{{ $course->title }}</a></h5>

                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h4 class="text-success mb-0">رایگان</h4>
                                        <span class="h6 fw-light mb-0 me-3"><i
                                                class="far fa-clock text-danger me-2"></i>
                                            {{ $course->hour }}
                                            ساعت
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
