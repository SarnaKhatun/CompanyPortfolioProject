<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{route('dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        @if(Auth()->user()->access_label == 4)
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>User Module</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('users.create')}}">
                        <i class="bi bi-circle"></i><span>Add User</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('users.index')}}">
                        <i class="bi bi-circle"></i><span>Manage User</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        @endif


        @if(Auth()->user()->access_label == 0 || Auth()->user()->access_label == 1 || Auth()->user()->access_label == 2 || Auth()->user()->access_label == 3 || Auth()->user()->access_label == 4 )
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Profile</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('edit.profile')}}">
                        <i class="bi bi-circle"></i><span>Update Profile</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Forms Nav -->
        @endif

        @if(Auth()->user()->access_label == 0)
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Slider Module</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('add-slider')}}">
                        <i class="bi bi-circle"></i><span>Add Slider</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('manage-slider')}}">
                        <i class="bi bi-circle"></i><span>Manage Slider</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->
        @endif

        @if(Auth()->user()->access_label == 1 || Auth()->user()->access_label == 2)

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Price Module</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('add-price')}}">
                        <i class="bi bi-circle"></i><span>Add Price</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('manage-price')}}">
                        <i class="bi bi-circle"></i><span>Manage Price</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Charts Nav -->
        @endif

        @if(Auth()->user()->access_label == 3 || Auth()->user()->access_label == 4)

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Blog Category</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('blogCategories.create')}}">
                        <i class="bi bi-circle"></i><span>Add Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('blogCategories.index')}}">
                        <i class="bi bi-circle"></i><span>Manage Category</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icon-navs" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Blog Module</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icon-navs" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('blogs.create')}}">
                        <i class="bi bi-circle"></i><span>Add Blog</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('blogs.index')}}">
                        <i class="bi bi-circle"></i><span>Manage Blog</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#iconsS-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Service Category</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="iconsS-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('serviceCategories.create')}}">
                        <i class="bi bi-circle"></i><span>Add Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('serviceCategories.index')}}">
                        <i class="bi bi-circle"></i><span>Manage Category</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icon-navsS" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Service Module</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icon-navsS" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('services.create')}}">
                        <i class="bi bi-circle"></i><span>Add Service</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('services.index')}}">
                        <i class="bi bi-circle"></i><span>Manage Service</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icon1-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Portfolio Category</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icon1-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('portfolioCategories.create')}}">
                        <i class="bi bi-circle"></i><span>Add Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('portfolioCategories.index')}}">
                        <i class="bi bi-circle"></i><span>Manage Category</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icon-nav1" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Portfolio Module</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icon-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('portfolios.create')}}">
                        <i class="bi bi-circle"></i><span>Add Portfolio</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('portfolios.index')}}">
                        <i class="bi bi-circle"></i><span>Manage Portfolio</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icon-nav2" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Contact Module</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icon-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('manage.message')}}">
                        <i class="bi bi-circle"></i><span>Manage Message</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->
    </ul>

    @endif

</aside><!-- End Sidebar-->
