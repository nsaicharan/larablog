<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/"> {{config('app.name')}} </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item {{Request::is('posts') ? 'active' : ''}}">
                    <a class="nav-link" href="/posts">Posts</a>
                </li>
                <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item {{Request::is('services') ? 'active' : ''}}">
                    <a class="nav-link" href="/services">Services</a>
                </li>
            </ul>
        </div>
    </div>
</nav>