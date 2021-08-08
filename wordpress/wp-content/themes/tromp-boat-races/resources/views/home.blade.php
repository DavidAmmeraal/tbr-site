@extends('layouts.app')

@section('content')
    @include('partials.hero')

    {{-- @if (!have_posts())
        <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
    @endif

    @while (have_posts()) @php the_post() @endphp
        @include('partials.content-'.get_post_type())
    @endwhile

    {!! get_the_posts_navigation() !!} --}}
    <div class="bg-light w-100">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    @include('partials.introduction')
                </div>
                <div class="col-md-5">
                    @include('partials.notifications')
                </div>
                <div class="col-md-2">
                    @include('partials.sponsors')
                </div>
            </div>
        </div>
    </div>
@endsection
