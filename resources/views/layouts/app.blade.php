<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'My Website')</title>
    <link rel="stylesheet" href=https://upgraded-winner-jj9xx45vrj4r2pjjw-8000.app.github.dev/homepage.css />
    <link
      href="https://fonts.googleapis.com/css2?family=Didot&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
      crossorigin="anonymous"
    />
  </head>
  <body>

    @include('partials.nav')<div class="content">
        @yield('content')</div>

    @include('partials.footer')<script src=""></script>

</body>
</html>
