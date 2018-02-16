<article @php(post_class())>
  <div class="bt bb b--black-10">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4 col-lg-4">
        <a href="{{ get_permalink() }}" class="db pv4 ph3 ph0-l no-underline black dim">
          @if (get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail'))
            <img src="{{ get_the_post_thumbnail_url(get_the_ID(),'post-thumbnail') }}" class="db img-fluid" alt="Photo of a dimly lit room with a computer interface terminal.">
          @else
            <img src="http://via.placeholder.com/600x450" class="db img-fluid" alt="Photo of a dimly lit room with a computer interface terminal.">
          @endif
        </a>
      </div>
      <div class="col-12 col-sm-6 col-md-7 col-lg-7">
        <a href="{{ get_permalink() }}" class="db pt4 ph3 ph0-l no-underline black dim">
          <h1 class="f3 fw1 avenir mt0 lh-title">{{ get_the_title() }}</h1>
        </a>
        <div class="entry-summary">
          <p class="f6 f5-l lh-copy">
            @php(the_excerpt())
          </p>
        </div>
        <p class="f6 lh-copy mv0">@include('partials/entry-meta')</p>
      </div>
    </div>
  </div>
</article>
