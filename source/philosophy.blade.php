@extends('_layouts.master')

@section('title', 'Philosophy')

@section('content')
<div class="container">
  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark mt-5">
    <div class="col px-0">
      <h1 class="display-4 font-italic">Blog</h1>
      <p class="lead my-3">This is a collection of thoughts I will try to categorize at the best of my extend but basically you are seeing my everyday thoughts.</p>
      <p class="lead mb-0">Why should you keep reading?</p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Meditation</strong>
          <h3 class="mb-0">Meditation and wellness</h3>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="/assets/img/meditation.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Life Style</strong>
          <h3 class="mb-0">Living the life</h3>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="/assets/img/lifestyle.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Technology</strong>
          <h3 class="mb-0">I am a software developer</h3>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="/assets/img/technology.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Nature</strong>
          <h3 class="mb-0">Our biggest treasure is nature</h3>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="/assets/img/nature.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        Blog posts
      </h3>
            @forelse ($posts->sortBy('title') as $post)

            <div class="blog-post">
                    <a href="{{ $post->getPath() }}">
                        <h2 class="blog-post-title">{{ $post->title }}</h2>
                    </a>
                    <p class="blog-post-meta">{{ $post->prettyDate() }} <a href="#">Felps</a></p>
            </div><!-- /.blog-post -->
            @empty
                <p>No posts to show.</p>
            @endforelse
    </div>

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-secondary rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">I will do my best effort to present my ideas in a semantic and systematic way...</p>
      </div>

      <!-- <div class="p-4">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="#">March 2014</a></li>
          <li><a href="#">February 2014</a></li>
          <li><a href="#">January 2014</a></li>
          <li><a href="#">December 2013</a></li>
          <li><a href="#">November 2013</a></li>
          <li><a href="#">October 2013</a></li>
          <li><a href="#">September 2013</a></li>
          <li><a href="#">August 2013</a></li>
          <li><a href="#">July 2013</a></li>
          <li><a href="#">June 2013</a></li>
          <li><a href="#">May 2013</a></li>
          <li><a href="#">April 2013</a></li>
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </aside> -->

  </div><!-- /.row -->

</main>
@endsection

@push('head')
    <!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
@endpush
