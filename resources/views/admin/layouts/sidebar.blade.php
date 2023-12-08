<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/admin">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/suggestions">
                <i class="mdi mdi-inbox-arrow-down menu-icon"></i>
                <span class="menu-title">Suggestions</span>
            </a>
        </li>
        <li class="nav-item nav-category">Manage Content</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Content</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/carousels">Carousel</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/contents">Contents</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/config">Configuration</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/categories">Category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/galleries">Gallery</a></li>
                </ul>
            </div>
        </li>
        @if (auth()->user()->level == 'admin')
            <li class="nav-item nav-category">Users</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
                    aria-controls="form-elements">
                    <i class="menu-icon mdi mdi-account-multiple"></i>
                    <span class="menu-title">Manage Users</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="form-elements">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="/admin/manage-contributor">Contributor</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin/manage-admin">Admin</a></li>
                    </ul>
                </div>
            </li>
        @endif
        <li class="nav-item nav-category">Sign Out</li>
        <li class="nav-item">
            <a class="nav-link" href="/logout" onclick="confirm('Are you sure want to sign out?')">
                <i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>
