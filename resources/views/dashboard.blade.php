@extends('layouts.app')

@section('content')
    <main>
        <!--Dashboard-->
        <section class="py-lg-7 py-5 bg-light-subtle">
            <div class="container">
                <div class="row">
                    @include('layouts.sidebar')
                    <div class="col-lg-9 col-md-8">
                        <div class="mb-4">
                            <h1 class="mb-0 h3">Hey, {{ Auth::user()->first_name." ".Auth::user()->last_name }} ! </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection    
