<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Coffeapp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item ">
                <a href="{{route('welcomeA')}}" class="nav-link ">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Accueil
                    </p>
                  </a>
                </li>

          <li class="nav-item ">
          <a href="{{route('categories.index')}}" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Categories
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('offres.index')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Offres
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('cards.index')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Cartes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('orders.index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Commandes
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{route('users.index')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Clients
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
