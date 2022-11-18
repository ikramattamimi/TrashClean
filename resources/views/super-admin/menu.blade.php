<div class="card">
    <div class="card-body">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('super_admin/landing-page*') ? 'active' : '' }}" href="/super_admin/landing-page">Konten Landing Page</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('super_admin/admin*') ? 'active' : '' }}" href="/super_admin/admin">Data Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('super_admin/tutorial*') ? 'active' : '' }}" href="/super_admin/tutorial">Tutorial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" aria-disabled="true" tabindex="-1">Disabled</a>
            </li>
        </ul>
    </div>
</div>