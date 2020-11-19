<!--  Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Todo List</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item has-treeview menu-open">
            <a href="index.php" class="nav-link <?php if($active == 'dashboard') echo "active";?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
           

          <li class="nav-item">
            <a href="new_task.php" class="nav-link <?php if($active == 'new_task') echo "active"; ?>">
              <i class="nav-icon fa fa-tasks" style="color: #fff;"></i>
              <p style="color: #fff;">
                New Post
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="completed_task.php" class="nav-link <?php if($active == 'completed_task') echo "active"; ?>">
              <i class="nav-icon fa fa-edit" style="color: #fff;"></i>
              <p style="color: #fff;">
                Completed Task
              </p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </aside>
