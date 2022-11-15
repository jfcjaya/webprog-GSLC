<!-- Navbar -->
<nav class="navbar px-5 py-2 mb-5 navbar-expand-lg navbar-dark shadow-5-strong">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">GSLC Web Programming</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link {{ Request::is('home') ? 'active':'' }}" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('spending') ? 'active':'' }}" href="spending">Spendings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('income') ? 'active':'' }}" href="income">Income</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<!-- credit: https://mdbootstrap.com/how-to/bootstrap/navbar-transparent/ -->