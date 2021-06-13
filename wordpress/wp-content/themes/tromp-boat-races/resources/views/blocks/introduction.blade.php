{{-- 
  Title: Introduction 
  Description: Introduction component for Home Page 
  Category: common 
  Icon: align-full-width 
  Keywords: intro 
  Mode: edit 
  Align: full 
  PostTypes: page 
  SupportsMode: false
  SupportsMultiple: false 
 --}}

<section class="bg-light w-100">
    <div class="container">
        <div class="row">
            <div class="col-md">
                {!! get_field("introduction_text") !!}
            </div>
            <div class="col-md">
                <p class="h3">{{ get_field("introduction_slogan") }}</p>
            </div>
        </div>
    </div>
</section>
