<style>
    nav {
        background: #89CFF0 !important;

    }

    .dropdown-menu:hover a {
        color: black !important;

    }

    .nav-item {
        position: relative;
    }

    .number {
        position: absolute;
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
    }

</style>

<nav class="navbar navbar-expand-lg w-100" style="top:0; z-index:222;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('add')}}">Add Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Add Categories</a>
                </li>
                <li class="nav-item">
                    <div class="number">0</div>
                    <a class="nav-link" href="#"><i class="bi bi-cart fs-5"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" style="background: #89CFF0">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
