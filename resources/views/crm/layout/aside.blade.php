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

                

                {{-- Dashboards --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboards</span>
                        <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="">CRM</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="">Analytics</a></li>
                    </ul>
                </li>

                {{-- Reports --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-cast"></i></span>
                        <span class="nxl-mtext">Reports</span>
                        <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="">Sales Report</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="">Leads Report</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="">Project Report</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="">Timesheets Report</a></li>
                    </ul>
                </li>
            </ul>

            
        </div>
    </div>
</nav>
