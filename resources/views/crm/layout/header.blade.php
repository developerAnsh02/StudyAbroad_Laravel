<header class="nxl-header">
    <div class="header-wrapper">
        <!-- [Start] Header Left -->
        <div class="header-left d-flex align-items-center gap-4">
            <a href="javascript:void(0);" class="nxl-head-mobile-toggler" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>

            {{-- nxl-navigation-toggle --}}
            <div class="nxl-navigation-toggle">
                <a href="javascript:void(0);" id="menu-mini-button">
                    <i class="feather-align-left"></i>
                </a>
                <a href="javascript:void(0);" id="menu-expend-button" style="display: none">
                    <i class="feather-arrow-right"></i>
                </a>
            </div>

            
        </div>

        <!-- [Start] Header Right -->
        <div class="header-right ms-auto">
            <div class="d-flex align-items-center">

                {{-- Dark/Light Theme Toggle --}}
                <div class="nxl-h-item dark-light-theme">
                    <a href="javascript:void(0);" class="nxl-head-link me-0 dark-button">
                        <i class="feather-moon"></i>
                    </a>
                    <a href="javascript:void(0);" class="nxl-head-link me-0 light-button" style="display: none">
                        <i class="feather-sun"></i>
                    </a>
                </div>

                {{-- Timesheets --}}
                <div class="dropdown nxl-h-item">
                    <a href="javascript:void(0);" class="nxl-head-link me-0" data-bs-toggle="dropdown" role="button"
                        data-bs-auto-close="outside">
                        <i class="feather-clock"></i>
                        <span class="badge bg-success nxl-h-badge">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-timesheets-menu">
                        <div class="d-flex justify-content-between align-items-center timesheets-head">
                            <h6 class="fw-bold text-dark mb-0">Timesheets</h6>
                            <a href="javascript:void(0);" class="fs-11 text-success ms-auto" data-bs-toggle="tooltip"
                                title="Upcoming Timers">
                                <i class="feather-clock"></i>
                                <span>3 Upcoming</span>
                            </a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center flex-column timesheets-body">
                            <i class="feather-clock fs-1 mb-4"></i>
                            <p class="text-muted">No started timers found yet!</p>
                            <a href="javascript:void(0);" class="btn btn-sm btn-primary">Start Timer</a>
                        </div>
                        <div class="text-center timesheets-footer">
                            <a href="javascript:void(0);" class="fs-13 fw-semibold text-dark">All Timesheets</a>
                        </div>
                    </div>
                </div>

                {{-- Notifications --}}
                <div class="dropdown nxl-h-item">
                    <a class="nxl-head-link me-3" data-bs-toggle="dropdown" href="#" role="button"
                        data-bs-auto-close="outside">
                        <i class="feather-bell"></i>
                        <span class="badge bg-danger nxl-h-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-notifications-menu">
                        <div class="d-flex justify-content-between align-items-center notifications-head">
                            <h6 class="fw-bold text-dark mb-0">Notifications</h6>
                            <a href="javascript:void(0);" class="fs-11 text-success ms-auto" data-bs-toggle="tooltip"
                                title="Mark as Read">
                                <i class="feather-check"></i>
                                <span>Mark as Read</span>
                            </a>
                        </div>

                        {{-- Example notification item --}}
                        <div class="notifications-item">
                            <img src="{{ asset('crm-assets/assets/images/avatar/2.png') }}" alt=""
                                class="rounded me-3 border">
                            <div class="notifications-desc">
                                <a href="javascript:void(0);" class="font-body text-truncate-2-line">
                                    <span class="fw-semibold text-dark">Malanie Hanvey</span> We should talk about that
                                    at lunch!
                                </a>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="notifications-date text-muted border-bottom border-bottom-dashed">2
                                        minutes ago</div>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="javascript:void(0);"
                                            class="d-block wd-8 ht-8 rounded-circle bg-gray-300"
                                            data-bs-toggle="tooltip" title="Mark as Read"></a>
                                        <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip"
                                            title="Remove">
                                            <i class="feather-x fs-12"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Footer --}}
                        <div class="text-center notifications-footer">
                            <a href="javascript:void(0);" class="fs-13 fw-semibold text-dark">All Notifications</a>
                        </div>
                    </div>
                </div>

                {{-- User Menu --}}
                @auth
                    <div class="dropdown nxl-h-item">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" data-bs-auto-close="outside">
                            <img src="{{ asset('crm-assets/assets/images/avatar/1.png') }}" alt="user-image"
                                class="img-fluid user-avtar me-0">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
                            <div class="dropdown-header">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('crm-assets/assets/images/avatar/1.png') }}" alt="user-image"
                                        class="img-fluid user-avtar">
                                    <div>
                                        <h6 class="text-dark mb-0">{{ Auth::user()->name }} <span
                                                class="badge bg-soft-success text-success ms-1">PRO</span></h6>
                                        <span class="fs-12 fw-medium text-muted">{{ Auth::user()->email }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="" class="dropdown-item">
                                <i class="feather-user"></i> Profile Details
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-activity"></i> Activity Feed
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-bell"></i> Notifications
                            </a>
                            <div class="dropdown-divider"></div>
                            {{-- Logout --}}
                            <form action="{{ route('logout') }}" method="POST" class="dropdown-item p-0 m-0">
                                @csrf
                                <button type="submit" class="btn w-100 text-start">
                                    <i class="feather-log-out"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @endauth

            </div>
        </div>
        <!-- [End] Header Right -->
    </div>
</header>