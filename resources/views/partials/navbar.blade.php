<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="#">Joseph</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav">
        <a class="nav-link active {{ ($title === 'home') ? 'active' : ''}}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ ($title === 'About') ? 'active' : ''}}" href="/about">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ ($title === 'Galery') ? 'active' : ''}}" href="/galery">Galery</a>
        </li>
        </ul>
      </div>
    </div>
  </div>
</nav>