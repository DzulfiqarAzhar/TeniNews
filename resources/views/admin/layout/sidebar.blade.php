<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('storage/assets/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('storage/assets/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('storage/vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                </svg>
                Dashboard
            </a>
        </li>
        <li class="nav-title">Manage</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('news.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('storage/vendors/@coreui/icons/svg/free.svg#cil-newspaper') }}"></use>
                </svg>
                News
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('storage/vendors/@coreui/icons/svg/free.svg#cil-folder') }}"></use>
                </svg>
                Categories
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('comment.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('storage/vendors/@coreui/icons/svg/free.svg#cil-comment-square') }}"></use>
                </svg>
                Comments
            </a>
        </li>
        <li class="nav-title">Reporting</li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('storage/vendors/@coreui/icons/svg/free.svg#cil-star') }}"></use>
                </svg>
                Trending News
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('storage/vendors/@coreui/icons/svg/free.svg#cil-speech') }}"></use>
                </svg>
                News Comment
            </a>
        </li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
