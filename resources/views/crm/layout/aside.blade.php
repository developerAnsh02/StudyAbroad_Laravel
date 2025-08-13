<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('dashboard') }}" class="b-brand">
                <!-- Logo -->
                <img src="{{ asset('/crm-assets/assets/images/logo/logo-wts.webp') }}" alt="Full Logo" class="logo logo-lg" style="max-height: 50px;">
                <img src="{{ asset('/crm-assets/assets/images/logo/wts.webp') }}" alt="Small Logo" class="logo logo-sm">
            </a>
        </div>

        <div class="navbar-content">
            <ul class="nxl-navbar">
                @foreach($menus as $menu)
                    <li class="nxl-item {{ $menu->children->count() ? 'nxl-hasmenu' : '' }}">
                        <a href="{{ $menu->url ?? 'javascript:void(0);' }}" class="nxl-link">
                            @if($menu->icon)
                                <span class="nxl-micon"><i class="{{ $menu->icon }}"></i></span>
                            @endif
                            <span class="nxl-mtext">{{ $menu->name }}</span>
                            @if($menu->children->count())
                                <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                            @endif
                        </a>

                        @if($menu->children->count())
                            <ul class="nxl-submenu">
                                @foreach($menu->children as $child)
                                    <li class="nxl-item">
                                        <a class="nxl-link" href="{{ $child->url }}">{{ $child->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
</nav>
