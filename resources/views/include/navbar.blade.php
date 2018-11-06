<div class=' '>
<nav class="navbar navbar-header navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link " href="/">{{ config('app.name', 'withBrian') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/services">Services</a>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="/posts">Posts</a>
            </li>
        </ul>

        <ul class='nav navbar-nav navbar-right'>
            <li class="nav-item">
                <a class="nav-link" href="/posts/create">Create Posts</a>
            </li>
        </ul>
    </div>
</nav>
</div>