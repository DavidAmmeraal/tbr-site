<ul class="sponsors">
    @while (have_rows('sponsors_sponsor', 'option')) @php the_row() @endphp
        @php
            $image = get_sub_field('sponsor_image');
            $link = get_sub_field('sponsor_link');
        @endphp
        <li class="sponsors__sponsor">
            @if (!empty($link))
                <a href="{{ $link }}" target="_blank">
                    {!! wp_get_attachment_image($image, 'full') !!}
                </a>
            @else
                {!! wp_get_attachment_image($image, 'full') !!}
            @endif
        </li>
    @endwhile
</ul>
