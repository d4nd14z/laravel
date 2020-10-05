<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">
            <span data-feather="home"></span>
            @lang("Dashboard") <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file"></span>
            @lang("Orders")
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="shopping-cart"></span>
            @lang("Products")
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="users"></span>
            @lang("Customers")
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="bar-chart-2"></span>
            @lang("Reports")
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="layers"></span>
            @lang("Integrations")
          </a>
        </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Saved reports</span>
        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link {{ setActive("home") }}" href="{{ route("home") }}">
            <span data-feather="file-text"></span>
            @lang("Home")
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ setActive("portfolio") }}" href="{{ route("portfolio") }}">
            <span data-feather="file-text"></span>
            @lang("Portfolio")
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ setActive("contact") }}" href="{{ route("contact") }}">
            <span data-feather="file-text"></span>
            @lang("Contact")
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ setActive("about") }}" href="{{ route("about") }}">
            <span data-feather="file-text"></span>
            @lang("About")
          </a>
        </li>
      </ul>
    </div>
  </nav>
