<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('dashboard') }}" class="b-brand">
                <!-- Logo -->
                <img src="{{ asset('/images/favicon.png') }}" alt="Full Logo" class="logo logo-lg">
                <img src="{{ asset('/images/favicon.png') }}" alt="Small Logo" class="logo logo-sm">
            </a>
        </div>

        <div class="navbar-content">
            <ul class="nxl-navbar">

                {{-- Navigation Label --}}
                <li class="nxl-item nxl-caption">
                    <label>Navigation</label>
                </li>

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

            {{-- Sidebar Info Card --}}
            <div class="card text-center">
                <div class="card-body">
                    <i class="feather-sunrise fs-4 text-dark"></i>
                    <h6 class="mt-4 text-dark fw-bolder">Downloading Center</h6>
                    <p class="fs-11 my-3 text-dark">
                        Duralux is a production ready CRM to get started up and running easily.
                    </p>
                    <a href="#" class="btn btn-primary text-dark w-100">Download Now</a>
                </div>
            </div>
        </div>
    </div>
</nav>
