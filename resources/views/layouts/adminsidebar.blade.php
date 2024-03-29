   <aside class="main-sidebar sidebar-dark-primary elevation-4 " style="position: fixed;">
       <!-- Brand Logo -->
       <a href="#" class="brand-link">
           <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
           <span class="brand-text font-weight-light">E Market</span>
       </a>

       <!-- Sidebar -->
       <div class="sidebar">
           <!-- Sidebar user panel (optional) -->
           <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                   <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
               </div>
               <div class="info">
                   <a href="#" class="d-block">Saddam Awan</a>
               </div>
           </div>

           <!-- SidebarSearch Form -->
           <div class="form-inline">
               <div class="input-group" data-widget="sidebar-search">
                   <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                   <div class="input-group-append">
                       <button class="btn btn-sidebar">
                           <i class="fas fa-search fa-fw"></i>
                       </button>
                   </div>
               </div>
           </div>

           <!-- Sidebar Menu -->
           <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                   <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->




                   <li class="nav-item">
                       <a href="{{url('dashboard')}}" class="nav-link  {{Request::is ('dashboard') ? 'active' : '' }}">
                           <i class=" nav-icon fas fa-tachometer-alt"></i>
                           <p>
                               Dashboard

                           </p>
                       </a>

                   </li>
                   <li class="nav-item">
                       <a href="{{url('/show_categoryform')}}" class="nav-link {{Request::is ('show_categoryform') ? 'active' : '' }}">
                           <i class="nav-icon fas fa-edit"></i>
                           <p>
                               Add Category

                           </p>
                       </a>

                   </li>
                   <li class="nav-item">
                       <a href="{{url('show_category')}}" class="nav-link {{Request::is ('show_category') ? 'active' : '' }} ">
                           <i class=" nav-icon fas fa-table"></i>
                           <p>
                               Categories

                           </p>
                       </a>

                   </li>
                   <li class="nav-item">
                       <a href="{{url('/show_productform')}}" class="nav-link {{Request::is ('show_productform') ? 'active' : '' }}">
                           <i class="nav-icon fas fa-edit"></i>
                           <p>
                               Add Product

                           </p>
                       </a>

                   </li>
                   <li class="nav-item">
                       <a href="{{url('/show_product')}}" class="nav-link {{Request::is ('show_product') ? 'active' : '' }} ">
                           <i class=" nav-icon fas fa-table"></i>
                           <p>
                               Products

                           </p>
                       </a>

                   </li>





               </ul>
           </nav>
           <!-- /.sidebar-menu -->
       </div>
       <!-- /.sidebar -->
   </aside>