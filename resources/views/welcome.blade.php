@extends('layouts.app')
@section('content')
    <section class="container py-lg-8 py-5 animate__animated animate__fadeIn" data-cue="fadeIn" data-show="true">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-12" data-cues="zoomIn" data-group="page-title" data-delay="700"
                data-disabled="true">
                <div class="text-center d-flex flex-column gap-5" data-cue="zoomIn" data-group="page-title" data-delay="700"
                    data-show="true">
                    <div class="d-flex justify-content-center">
                        <span
                            class="bg-primary bg-opacity-10 text-primary border-primary border p-2 fs-6 rounded-pill lh-1 d-flex align-items-center">
                            <span>Modern Solutions</span>
                        </span>
                    </div>
                    <div class="d-flex flex-column gap-3 mx-lg-8">
                        <h1 class="mb-0 display-5">Kickstart your sales with Google review</h1>
                        <p class="mb-0 lead">Build with a modular web design concept will easily kickstart your
                            project, and build website &amp; marketing site faster.</p>
                    </div>
                    <div class="d-flex flex-row gap-2 justify-content-center">
                        <a href="{{route('register')}}" class="btn btn-primary" target="_blank">Purchase Widget</a>
                        <a href="#demo" class="btn btn-light">Demos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
