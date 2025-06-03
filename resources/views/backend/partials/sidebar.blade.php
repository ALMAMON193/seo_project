@php
    $setting = \App\Models\SystemSetting::first();
@endphp
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <!-- App Brand and Logo -->
    <div class="app-brand demo">
        <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
            @if ($setting && $setting->logo)
                <img src="{{ asset($setting->logo) }}" style="height: 95px; width: 176px;" alt="Logo">
            @else
                <img src="{{ asset('backend/images/logo.png') }}" style="height: 60px; width: 110px;" alt="Default Logo">
            @endif
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="align-middle bx bx-chevron-left bx-sm"></i>
        </a>
    </div>

    <!-- Menu Inner -->
    <ul class="menu-inner py-1">
        <!-- Dashboard Header -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Dashboard</span></li>

        <!-- Dashboard -->
        <li class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.dashboard') }}">
                <i class="menu-icon tf-icons bx bx-home-circle" style="color: #2A6880;"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <!-- Contact List -->
        <li class="menu-item {{ request()->routeIs('admin.contact-history.*') ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.contact-history.index') }}">
                <i class="menu-icon tf-icons bx bx-envelope" style="color: #2A6880;"></i>
                <div data-i18n="Contact List">Contact List</div>
            </a>
        </li>

        <!-- CMS Section -->
        <li class="menu-item {{ request()->routeIs('admin.cms.*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-search-alt" style="color: #2A6880;"></i>
                <div data-i18n="CMS">CMS</div>
            </a>
            <ul class="menu-sub">
                <!-- Home Submenu -->
                <li class="menu-item {{ request()->routeIs('admin.cms.home.*') ? 'active open' : '' }}">
                    {{-- <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-home" style="color: #2A6880;"></i>
                        <div data-i18n="Home">Home</div>
                    </a> --}}
                    <ul class="menu-sub">
                        {{-- <li class="menu-item {{ request()->routeIs('admin.cms.home.banner.index') ? 'active' : '' }}">
                            <a class="menu-link" href="{{ route('admin.cms.home.banner.index') }}">
                                <i class="menu-icon tf-icons bx bx-image" style="color: #2A6880;"></i>
                                <div data-i18n="Banner Section">Banner Section</div>
                            </a>
                        </li> --}}
                        {{-- <li class="menu-item {{ request()->routeIs('admin.cms.home.about.index') ? 'active' : '' }}">
                            <a class="menu-link" href="{{ route('admin.cms.home.about.index') }}">
                                <i class="menu-icon tf-icons bx bx-info-circle" style="color: #2A6880;"></i>
                                <div data-i18n="About Section">About Section</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->routeIs('admin.cms.home.who-we-are.index') ? 'active' : '' }}">
                            <a class="menu-link" href="{{ route('admin.cms.home.who-we-are.index') }}">
                                <i class="menu-icon tf-icons bx bx-group" style="color: #2A6880;"></i>
                                <div data-i18n="Who We Are">Who We Are Section</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->routeIs('admin.cms.what-trust.index') ? 'active' : '' }}">
                            <a class="menu-link" href="{{ route('admin.cms.what-trust.index') }}">
                                <i class="menu-icon tf-icons bx bx-shield" style="color: #2A6880;"></i>
                                <div data-i18n="Why Trust">Why Trust</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->routeIs('admin.cms.what-make.index') ? 'active' : '' }}">
                            <a class="menu-link" href="{{ route('admin.cms.what-make.index') }}">
                                <i class="menu-icon tf-icons bx bx-star" style="color: #2A6880;"></i>
                                <div data-i18n="What Makes">What Makes</div>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                <!-- Service Submenu -->
                <li class="menu-item {{ request()->routeIs('admin.cms.service.*') || request()->routeIs('admin.cms.home.service.*') ? 'active open' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-rocket" style="color: #2A6880;"></i>
                        <div data-i18n="Service">Service</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->routeIs('admin.cms.service.banner.index') ? 'active' : '' }}">
                            <a class="menu-link" href="{{ route('admin.cms.service.banner.index') }}">
                                <i class="menu-icon tf-icons bx bx-image-alt" style="color: #2A6880;"></i>
                                <div data-i18n="Service Banner">Service Banner</div>
                            </a>
                        </li>
                        {{-- <li class="menu-item {{ request()->routeIs('admin.cms.home.service.index') ? 'active' : '' }}">
                            <a class="menu-link" href="{{ route('admin.cms.home.service.index') }}">
                                <i class="menu-icon tf-icons bx bx-briefcase" style="color: #2A6880;"></i>
                                <div data-i18n="Service Section">Service Section</div>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                <!-- About Us Submenu -->
                <li class="menu-item {{ request()->routeIs('admin.cms.about-us.*') ? 'active open' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-info-square" style="color: #2A6880;"></i>
                        <div data-i18n="About Us">About Us</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->routeIs('admin.cms.about-us.seo-esp.index') ? 'active' : '' }}">
                            <a class="menu-link" href="{{ route('admin.cms.about-us.seo-esp.index') }}">
                                <i class="menu-icon tf-icons bx bx-bar-chart-alt-2" style="color: #2A6880;"></i>
                                <div data-i18n="About SEO ESP">About SEO ESP</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->routeIs('admin.cms.about-us.real-experience.index') ? 'active' : '' }}">
                            <a class="menu-link" href="{{ route('admin.cms.about-us.real-experience.index') }}">
                                <i class="menu-icon tf-icons bx bx-check-circle" style="color: #2A6880;"></i>
                                <div data-i18n="Real Experience">Real Experience</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->routeIs('admin.cms.about-us.scales-across.index') ? 'active' : '' }}">
                            <a class="menu-link" href="{{ route('admin.cms.about-us.scales-across.index') }}">
                                <i class="menu-icon tf-icons bx bx-globe" style="color: #2A6880;"></i>
                                <div data-i18n="Scales Across">Scales Across</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <!-- Settings Header -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Settings</span></li>

        <!-- Settings -->
        <li class="menu-item {{ request()->routeIs('admin.system-settings') || request()->routeIs('admin.mail-settings') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog" style="color: #2A6880;"></i>
                <div data-i18n="Settings">Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('admin.system-settings') ? 'active' : '' }}">
                    <a class="menu-link" href="{{ route('admin.system-settings') }}">
                        <i class="menu-icon tf-icons bx bx-wrench" style="color: #2A6880;"></i>
                        <div data-i18n="System Settings">System Settings</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('admin.mail-settings') ? 'active' : '' }}">
                    <a class="menu-link" href="{{ route('admin.mail-settings') }}">
                        <i class="menu-icon tf-icons bx bx-envelope-open" style="color: #2A6880;"></i>
                        <div data-i18n="Mail Settings">Mail Settings</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Terms & Conditions -->
        {{-- <li class="menu-item {{ request()->routeIs('admin.terms.condition.index') ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.terms.condition.index') }}">
                <i class="menu-icon tf-icons bx bx-file" style="color: #2A6880;"></i>
                <div data-i18n="Terms & Conditions">Terms & Conditions</div>
            </a>
        </li>

        <!-- Privacy Policy -->
        <li class="menu-item {{ request()->routeIs('admin.privacy.policy.index') ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.privacy.policy.index') }}">
                <i class="menu-icon tf-icons bx bx-lock-alt" style="color: #2A6880;"></i>
                <div data-i18n="Privacy Policy">Privacy Policy</div>
            </a>
        </li> --}}

        <!-- Profile Settings -->
        <li class="menu-item {{ request()->routeIs('admin.profile') ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('admin.profile') }}">
                <i class="menu-icon tf-icons bx bx-user" style="color: #2A6880;"></i>
                <div data-i18n="Profile Settings">Profile Settings</div>
            </a>
        </li>
    </ul>
</aside>
