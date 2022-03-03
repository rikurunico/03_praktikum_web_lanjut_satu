<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
    <a class="navbar-brand" href="#">Nico | Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : ''}}" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link {{ ($title === "Product Detail") ? 'active' : ''}} dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produk
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item " href="/produk/1">Produk 1</a></li>
            <li><a class="dropdown-item" href="/produk/2">Produk 2</a></li>
            <li><a class="dropdown-item" href="/produk/3">Produk 3</a></li>
        </ul>
        <li class="nav-item">
            <a class="nav-link {{ ($title === "News") ? 'active' : ''}}" href="/news">News</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link {{ ($title === "Program Detail") ? 'active' : ''}} dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Program
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/program/1">Program 1</a></li>
            <li><a class="dropdown-item" href="/program/2">Program 2</a></li>
            <li><a class="dropdown-item" href="/program/3">Program 3</a></li>
        </ul>
        <li class="nav-item">
            <a class="nav-link {{ ($title === "About Us") ? 'active' : ''}}" href="/about">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($title === "Contact Us") ? 'active' : ''}}" href="/contact">Contact Us</a>
        </li>
        </ul>
    </div>
    </div>
</nav>