<section class="hero" data--{{ $block['id'] }} class="{{ $block['classes'] }}">
    {{-- <img class="hero__bg" src="@asset('images/hero-bg.png')" alt="" /> --}}
    @php
        $bg_image = get_field('hero_background_image', 'option');
    @endphp
    @if ($bg_image)
        {!! wp_get_attachment_image($bg_image, 'full', false, ['class' => 'hero__bg']) !!}
    @endif
    <div class="hero__bg-gradient"></div>
    <div class="hero__content_wrapper">
        <div class="hero__content">
            <div class="hero__badge">
                @php
                    $badge = get_field('hero_badge', 'option');
                @endphp
                @if ($badge)
                    {!! wp_get_attachment_image($badge, 'full') !!}
                @endif
            </div>
            <div class="hero__header">
                <h1>{{ get_field('hero_title', 'option') }}</h1>
                <span role="doc-subtitle">{!! get_field('hero_subtitle', 'options') !!}</span>
            </div>
        </div>
    </div>
</section>
