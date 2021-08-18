<footer class="w-100 footer py-3">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <h5>
                    {{ get_field('footer_title', 'option') }}
                </h5>
                {!! get_field('footer_address', 'option') !!}
            </div>
            <div class="col-xl-6">
                {!! get_field('footer_extra_information', 'option') !!}
            </div>
            <div class="col-xl-3">
                Some links
            </div>
        </div>
    </div>
</footer>
