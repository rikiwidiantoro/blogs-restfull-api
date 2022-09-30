<nav class="navbar-dark navbar navbar-expand-lg bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Blogs Restfull API</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link mx-4 {{ ($title === 'Home') ? 'active' : '' }}" href="/home">Home</a>
        <a class="nav-link {{ ($title === 'Posts') ? 'active' : '' }}" href="/posts">Posts</a>
      </div>
    </div>
  </div>
</nav>