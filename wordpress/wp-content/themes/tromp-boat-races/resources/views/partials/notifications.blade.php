<section class="notifications">
    <header class="notifications__header">
        <h2>Mededelingen</h2>
        <i class="notifications__icon fas fa-exclamation-circle"></i>
    </header>
    @query([
    'cat' => $notifications_settings->category->term_id,
    'posts_per_page' => $notifications_settings->limit
    ])

    @posts
    <article class="notification">
        <div class="notification__body">
            <h4 class="notification__title">
                {!! get_the_title() !!}
            </h4>
            <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
            @php the_content() @endphp
        </div>
    </article>
    @endposts
</section>
