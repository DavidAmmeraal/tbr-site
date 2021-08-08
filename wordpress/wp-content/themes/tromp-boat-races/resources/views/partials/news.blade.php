<section>
    @query([
        // $news_category comes from Controller
        'cat' => $news_settings->category->term_id,
        'posts_per_page' => $news_settings->limit
    ])

    @posts
        <article class="news-item">
            <header>
                <h3>
                    {!! get_the_title() !!}
                </h3>
                <p class="byline author vcard">
                    <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}"
                        rel="author" class="fn">
                        {{ get_the_author() }}
                    </a>
                </p>
                <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
            </header>
            @if(has_post_thumbnail())
                <div class="news-item__thumb-wrapper">
                    @php the_post_thumbnail('large', array('class' => 'news-item__thumb')) @endphp
                </div>
            @endif
            @php the_excerpt() @endphp
        </article>
    @endposts
</section>
