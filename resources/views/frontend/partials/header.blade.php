<nav class="navbar--wrapper">
    <div class="container og-navbar">
        <div>
            <a class="og-logo" href="/">
                <img class="og-nav-logo" src="{{asset('frontend/assets/images/logo.png')}}" alt="">
            </a>
        </div>
        <div>
            <ul class="og-navlink-content">
                <li>
                    <a class="og-navlink" href="{{route('home')}}">Home</a>
                </li>

                <li class="og-dropdown">
                    <div class="flex justify-content-center align-items-center">
                        <a class="og-navlink" href="{{route('service')}}"> Services </a>
                        <button class="dropdown_icon" id="dropdown-icon">
                          <svg
                            id="og-serviceLink"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                          >
                            <path
                              d="M6 9.00005L12 15L18 9"
                              stroke="#84837C"
                              stroke-width="1.5"
                              stroke-miterlimit="16"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                        </button>
                      </div>

                    <ul class="og-dropdown-menu og-space-y-1" id="og-dropdownMenu" style="display: none;">
                        <li class="og-dropdown-list"><a class="og-navlink hover:text-grey" href="/services/#og-content-seo">Content
                                SEO</a></li>
                        <li class="og-dropdown-list"><a class="og-navlink hover:text-grey" href="/services/#og-local_seo">Local
                                SEO</a></li>
                        <li class="og-dropdown-list"><a class="og-navlink hover:text-grey" href="/services/#og-keyword-research">Keyword Research and
                                Tracking</a></li>
                        <li class="og-dropdown-list"><a class="og-navlink hover:text-grey" href="/services/#og-technical-seo">Technical SEO</a></li>
                        <li class="og-dropdown-list"><a class="og-navlink hover:text-grey" href="/services/#og-enterprise">Enterprise SEO</a>
                        </li>
                        <li class="og-dropdown-list"><a class="og-navlink hover:text-grey" href="/services/#on-page-optimization">On-Page
                                Optimization</a></li>
                        <li class="og-dropdown-list"><a class="og-navlink hover:text-grey" href="/services/#og-data-analysis">Off-PageData Analysis</a></li>
                        <li class="og-dropdown-list"><a class="og-navlink hover:text-grey" href="/services/#og-ecommerce">eCommerce</a></li>
                    </ul>
                </li>

                <li>
                    <a class="og-navlink" href="{{route('about')}}">About Us</a>
                </li>
                {{-- <li>
                    <a class="og-navlink" href="#">Blogs</a>
                </li> --}}
            </ul>
        </div>
        <div class="og-nav-button-container">
            <a class="og-btn og-contact-btn" href="{{route('contact')}}">Contact Us</a>
            <button class="mobile-menu-icon" style="border: none; background: none; padding: 0; cursor: pointer;">
                <svg width="42" height="42" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g id="Menu / Menu_Alt_01">
                            <path id="Vector" d="M12 17H19M5 12H19M5 7H19" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                        </g>
                    </g>
                </svg>
            </button>
        </div>
    </div>
</nav>
