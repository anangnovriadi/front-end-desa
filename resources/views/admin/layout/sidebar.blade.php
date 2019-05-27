<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Desa Digital Admin</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">NA</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="nav-item dropdown active">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Content</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>CMS</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('content.index') }}">Content</a></li>
                    <li><a class="nav-link" href="{{ route('map.index') }}">Maps</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Berita</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="">List</a></li>
                </ul>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="/" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Go to Website
            </a>
        </div>
    </aside>
</div>