<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta name="theme-color" content="#ffffff">
		<title>
			Jose Felipe Alvarado Solano
		</title>
		<meta
			name="name"
			content="Costa Rica Developer"
		/>
		<meta
			name="description"
			content="Este es mi sitio Yo lo hice como un testamento viviente de mi camino como desarrollador."
		/>

    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
  <!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
    <section>
        <header>
            @include('_partials.nav')
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
            <small>
                &copy; <span data-year></span> {{ $page->owner->name }}
            </small>
        </footer>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @stack('head')
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
