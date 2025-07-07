<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button">
        <i class="fas fa-bars"></i>
      </a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-responsive-nav-link :href="route('logout')" class="pr-5 text-black"
          onclick="event.preventDefault();
          this.closest('form').submit();">
          {{ __('Log Out') }}
        </x-responsive-nav-link>
      </form>
    </li>

    <!-- Additional Navbar Items (Messages, Notifications, etc.) -->
    <!-- Your other nav items go here -->
  </ul>
</nav>

<!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <div class="sidebar">
    <!-- Sidebar content here -->
  </div>

</aside>