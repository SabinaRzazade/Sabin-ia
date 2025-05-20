<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a
          class="navbar-brand"
          href="{{route("sabina.home")}}"
          style="font-size: 1.9rem; font-family: 'Engravers MT', serif"
          >Sabin</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route("sabina.home")}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route("sabina.collections")}}">Collections</a>
              <!--Spring Collection, Fall fashion-->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Categories
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">New arrivals</a></li>
                <li><a class="dropdown-item" href="{{route("sabina.products")}}">All</a></li>
                <li><a class="dropdown-item" href="#">Dresses</a></li>
                <li><a class="dropdown-item" href="#">Blouses</a></li>
                <li><a class="dropdown-item" href="#">T-shirts</a></li>
                <li>
                  <a class="dropdown-item" href="#">Shirts/Polo Shirts</a>
                </li>
                <li><a class="dropdown-item" href="#">Skirts</a></li>
                <li><a class="dropdown-item" href="#">Trousers</a></li>
                <li><a class="dropdown-item" href="#">Sweatshirts</a></li>
                <li><a class="dropdown-item" href="#">Blazers</a></li>
                <li><a class="dropdown-item" href="#">Outerwear</a></li>
                <li><a class="dropdown-item" href="#">Accessories</a></li>
                <li><a class="dropdown-item" href="#">Shoes</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex gap-2" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <a href="{{route("sabina.register")}}" class="btn btn-signup">Sign Up</a>
            <a href="{{route("sabina.login")}}" class="btn btn-login">Login</a>
          </form>
        </div>
      </div>
    </nav>
