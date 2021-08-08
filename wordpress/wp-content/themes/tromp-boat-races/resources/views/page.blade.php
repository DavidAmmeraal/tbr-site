@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('partials.page-header')
            </div>
            <div class="col-md-9">
                @while (have_posts())
                    @php the_post() @endphp

                    @include('partials.content-page')
                @endwhile
            </div>
        </div>
    </div>
@endsection
