
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/home">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        {{-- <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Blogs
        </div>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-blog"></i>
                <span>Blogs</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Blogs</h6>
                    <a class="collapse-item" href="/blogs">All Blogs</a>
                    <a class="collapse-item" href="/blogs/create">Create a Blog</a>
                    <a class="collapse-item" href="/categories">All Categories</a>
                    <a class="collapse-item" href="/categories/create">Create a Category</a>
                </div>
            </div>
        </li> --}}

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Main
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-coffee "></i>
                <span>Menu Bar</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Main Menu:</h6>
                    <a class="collapse-item" href="{{ route('menu-category.index') }}">Menu Categories</a>
                    <a class="collapse-item" href="{{ route('menu-category.create') }}">Create Category</a>
                    <a class="collapse-item" href="{{ route('menu-subcategory.index') }}">Menu Sub-Categories</a>
                    <a class="collapse-item" href="{{ route('menu-subcategory.create') }}">Create Sub-Category</a>
                    <a class="collapse-item" href="{{ route('menu-product.index') }}">Menu Products</a>
                    <a class="collapse-item" href="{{ route('menu-product.create') }}">Create Product</a>
                    <div class="collapse-divider"></div>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecourse"
                aria-expanded="true" aria-controls="collapsecourse">
                <i class="fa-fw fas fa-pepper-hot"></i>
                <span>Menu Restaurant</span>
            </a>
            <div id="collapsecourse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Main Menu:</h6>
                    <a class="collapse-item" href="{{ route('resto-category.index') }}">Menu Categories</a>
                    <a class="collapse-item" href="{{ route('resto-category.create') }}">Create Category</a>
                    <a class="collapse-item" href="{{ route('resto-product.index') }}">Menu Products</a>
                    <a class="collapse-item" href="{{ route('resto-product.create') }}">Create Product</a>
                    <div class="collapse-divider"></div>
                </div>
            </div>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStaff"
                aria-expanded="true" aria-controls="collapseStaff">
                <i class="fas fa-fw fa-chalkboard-teacher"></i>
                <span>Staff</span>
            </a>
            <div id="collapseStaff" class="collapse" aria-labelledby="headingStaff" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Staff:</h6>
                    <a class="collapse-item" href="/staff">Academic Staff</a>
                    <a class="collapse-item" href="/staff/create">Create Staff</a>
                    <div class="collapse-divider"></div>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCourses"
                aria-expanded="true" aria-controls="collapseCourses">
                <i class="fas fa-fw fa-laptop-code"></i>
                <span>Courses</span>
            </a>
            <div id="collapseCourses" class="collapse" aria-labelledby="headingCourses" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Courses:</h6>
                    <a class="collapse-item" href="/courses">All Courses</a>
                    <a class="collapse-item" href="/courses_category">All Categories</a>
                    <a class="collapse-item" href="/courses_category/create">Create Category</a>
                    <a class="collapse-item" href="/courses/create">Create a Course</a>
                    <div class="collapse-divider"></div>
                </div>
            </div>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGallery"
                aria-expanded="true" aria-controls="collapseGallery">
                <i class="fas fa-fw fa-picture-o"></i>
                <span>Galeri</span>
            </a>
            <div id="collapseGallery" class="collapse" aria-labelledby="headingCourses" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Galeria:</h6>
                    <a class="collapse-item" href="/dropzone">Upload Images</a>
                    <div class="collapse-divider"></div>
                </div>
            </div>
        </li>


        <!-- Nav Item - Charts -->
        {{-- <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Charts</span></a>
        </li> --}}

        <!-- Nav Item - Tables -->
        {{-- <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li> --}}

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
        <div class="sidebar-card">
            <a href="https://momentumo.com" target="_blank">
                <img class="sidebar-card-illustration mb-2" src="{{ asset('storage/images/momentum.png') }}" alt="">
            </a>
            <p class="text-center mb-2"><strong>POWERED BY</strong></p>
            <a class="btn btn-success btn-sm" href="https://momentumo.com" target="_blank">MOMENTUM MARKETING</a>
        </div>

    </ul>
    <!-- End of Sidebar -->
