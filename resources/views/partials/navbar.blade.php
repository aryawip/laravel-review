<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">AWP Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $title === "home" ? 'active' : ''}}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === "about" ? 'active' : ''}}"" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === "post" ? 'active' : ''}}"" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === "categories" ? 'active' : '' }}"" href="/categories">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>