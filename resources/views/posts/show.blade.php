
@extends('layouts.app')

@section('title')
    posts
@endsection
@section('content')
    

        <!-- Content -->
        <article class="col-lg-8">
          <header class="mb-4">
            <h1 class="display-6 fw-bold">How to write a clean, responsive blog post with Bootstrap</h1>
            <div class="d-flex align-items-center mt-3">
              <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=200&auto=format&fit=crop&q=60" alt="Author" class="author-avatar me-3">
              <div>
                <div class="fw-semibold">Ahmed Salama</div>
                <div class="meta"><small>Published Oct 29, 2025 · 8 min read · <span class="text-muted">Tech & Design</span></small></div>
              </div>
            </div>
      
          </header>

          <figure class="mb-4">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1200&auto=format&fit=crop&q=60" class="post-hero shadow-sm" alt="Post hero image">
            <figcaption class="text-muted small mt-2">Photo by Unsplash</figcaption>
          </figure>

          <div class="post-content bg-white p-4 rounded shadow-sm">
            <p>This sample post shows how you can structure a single post page using Bootstrap. Use the grid for layout, utility classes for spacing, and components for lists, badges, and forms. The markup below is semantic and easy to customize.</p>

            <h3>Why Bootstrap?</h3>
            <p>Bootstrap provides a robust set of CSS classes and components that make it faster to build responsive pages. The grid system, utilities, and components such as cards and navbars let you build consistent layouts with minimal custom CSS.</p>

            <h4>Example code snippet</h4>
            <pre class="bg-light p-3 rounded"><code>&lt;div class="container"&gt;...&lt;/div&gt;</code></pre>

            <p>Continue the article with paragraphs, images, blockquotes and code. Keep headings at logical levels and include accessible alt text for images. At the end, include tags and author info.</p>

            <blockquote class="blockquote p-3 border-start border-4 border-primary bg-light rounded">
              <p class="mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
              <footer class="blockquote-footer mt-2">— Steve Jobs</footer>
            </blockquote>

            <h5>Key takeaways</h5>
            <ul>
              <li>Use semantic HTML to improve accessibility.</li>
              <li>Use utility classes instead of custom CSS when possible.</li>
              <li>Keep the content readable by using comfortable line-height and font-size.</li>
            </ul>

            <div class="d-flex flex-wrap gap-2 mt-3">
              <a class="badge bg-secondary tag text-decoration-none" href="#">#bootstrap</a>
              <a class="badge bg-secondary tag text-decoration-none" href="#">#webdev</a>
              <a class="badge bg-secondary tag text-decoration-none" href="#">#responsive</a>
            </div>
          </div>

          <!-- Author box -->
          <div class="mt-4 p-3 bg-white rounded shadow-sm d-flex gap-3 align-items-center">
            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=200&auto=format&fit=crop&q=60" alt="Author" class="author-avatar">
            <div>
              <h6 class="mb-0">Ahmed Salama</h6>
              <p class="mb-0 text-muted small">Chemical Engineer, Frontend tinkerer, and blogger. I write about engineering, code and practical design tips.</p>
              <div class="mt-2">
                <a href="#" class="text-decoration-none me-2">Twitter</a>
                <a href="#" class="text-decoration-none">LinkedIn</a>
              </div>
            </div>
          </div>

          <!-- Comments (static) -->
          <section class="mt-4">
            <h5>Comments (3)</h5>
            <div class="list-group">
              <div class="list-group-item bg-white">
                <div class="d-flex align-items-start gap-3">
                  <img src="https://randomuser.me/api/portraits/men/34.jpg" class="author-avatar" alt="..">
                  <div>
                    <div class="fw-semibold">Nora</div>
                    <div class="small text-muted">Oct 28, 2025</div>
                    <p class="mt-2">Great article — clear and actionable. Thanks for sharing!</p>
                  </div>
                </div>
              </div>
              <div class="list-group-item bg-white">
                <div class="d-flex align-items-start gap-3">
                  <img src="https://randomuser.me/api/portraits/women/44.jpg" class="author-avatar" alt="..">
                  <div>
                    <div class="fw-semibold">Yousef</div>
                    <div class="small text-muted">Oct 27, 2025</div>
                    <p class="mt-2">Can you share the full template?</p>
                  </div>
                </div>
              </div>
            </div>

            <form class="mt-3 bg-white p-3 rounded shadow-sm">
              <h6>Add a comment</h6>
              <div class="row g-2">
                <div class="col-md-6">
                  <input class="form-control" placeholder="Your name" required>
                </div>
                <div class="col-md-6">
                  <input class="form-control" type="email" placeholder="Email (will not be published)" required>
                </div>
                <div class="col-12 mt-2">
                  <textarea class="form-control" rows="4" placeholder="Your comment" required></textarea>
                </div>
                <div class="col-12 text-end mt-2">
                  <button class="btn btn-primary">Post comment</button>
                </div>
              </div>
            </form>
          </section>
        </article>

        <!-- SIDEBAR -->
        <aside class="col-lg-4">
          <div class="card sidebar-card shadow-sm">
            <div class="card-body">
              <h6 class="card-title">Search</h6>
              <form class="d-flex mb-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search posts...">
                <button class="btn btn-outline-secondary" type="submit">Go</button>
              </form>

              <h6 class="card-title">Recent posts</h6>
              <ul class="list-unstyled small">
                <li class="mb-2"><a href="#" class="text-decoration-none">Building accessible forms</a></li>
                <li class="mb-2"><a href="#" class="text-decoration-none">Design tips for engineers</a></li>
                <li class="mb-2"><a href="#" class="text-decoration-none">Performance tuning with Chrome DevTools</a></li>
              </ul>

              <h6 class="card-title">Categories</h6>
              <div class="d-flex flex-wrap gap-2">
                <a class="badge bg-light text-dark border" href="#">Design</a>
                <a class="badge bg-light text-dark border" href="#">Engineering</a>
                <a class="badge bg-light text-dark border" href="#">Frontend</a>
              </div>

              <hr>
              <h6 class="card-title">Subscribe</h6>
              <form>
                <div class="mb-2">
                  <input type="email" class="form-control" placeholder="Email address">
                </div>
                <button class="btn btn-primary w-100">Subscribe</button>
              </form>
            </div>
          </div>
        </aside>
      </div>
      @endsection