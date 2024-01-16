<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a href="#" class="navbar-brand">NavBar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
     
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('product.index') }}" class="nav-link">Product</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
