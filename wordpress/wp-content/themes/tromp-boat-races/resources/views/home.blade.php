@extends('layouts.app')

@section('content')
    @include('partials.hero')

    <div class="py-4 bg-light w-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-5">
                    @include('partials.introduction')
                </div>
                <div class="col-md-7 col-xl-5">
                    @include('partials.notifications')
                </div>
                <div class="col-md-5 col-xl-2">
                    @include('partials.sponsors')
                </div>
            </div>
        </div>
    </div>
@endsection
