<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      /* Small custom tweaks */
      body { background: #f8f9fa; }
      .post-hero { height: 380px; object-fit: cover; width: 100%; border-radius: .5rem; }
      .author-avatar { width:64px; height:64px; object-fit:cover; border-radius:50%; }
      .meta small { color: #6c757d; }
      .tag { font-size: .85rem; }
      .post-content p { line-height:1.75; }
      .sidebar-card { position: sticky; top: 1.5rem; }
    </style>
  </head>
  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">MyBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">  <a class="nav-link active" aria-current="page" href="{{route('posts.index')}}">All Posts</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- MAIN -->
    <main class="container my-5">
      <div class="row g-4">
        @yield('content')
      </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-white border-top py-4">
      <div class="container d-flex justify-content-between small">
        <div>&copy; 2025 MyBlog. All rights reserved.</div>
        <div>
          <a href="#" class="text-decoration-none me-2">Privacy</a>
          <a href="#" class="text-decoration-none">Terms</a>
        </div>
      </div>
    </footer>

    <!-- Bootstrap JS (Popper+Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
