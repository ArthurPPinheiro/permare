<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          PERMARE
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li <?php echo $page == 'dashboard' ? 'class="active nav-item"' : 'class="nav-item"'; ?> >
            <a class="nav-link" href="<?php echo $base; ?>dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li <?php echo $page == 'portifolio/list' || $page == 'portifolio/add' || $page == 'portifolio/edit'  ? 'class="active nav-item"' : 'nav-item'; ?> >
            <a class="nav-link"href="<?php echo $base; ?>portifolio">
              <i class="material-icons">list</i>
              <p>Portifolio</p>
            </a>
          </li>
          <li <?php echo $page == 'header/list' || $page == 'header/add' || $page == 'header/edit'  ? 'class="active nav-item"' : 'nav-item'; ?> >
            <a class="nav-link"href="<?php echo $base; ?>header">
              <i class="material-icons">list</i>
              <p>Header / Imagem Inicio</p>
            </a>
          </li>
          <li <?php echo $page == 'projeto/list' || $page == 'projeto/add' || $page == 'projeto/edit'  ? 'class="active nav-item"' : 'nav-item'; ?> >
            <a class="nav-link"href="<?php echo $base; ?>projeto">
              <i class="material-icons">list</i>
              <p>Projetos</p>
            </a>
          </li>
          <li <?php echo $page == 'usuarios/list' || $page == 'usuarios/add' || $page == 'usuarios/edit'  ? 'class="active nav-item"' : 'nav-item'; ?> >
            <a class="nav-link"href="<?php echo $base; ?>usuarios">
              <i class="material-icons">list</i>
              <p>Usuarios</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./logout">
              <i class="material-icons">power_settings_new</i>
              <p>Sair</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;"><?php echo $page ?></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->