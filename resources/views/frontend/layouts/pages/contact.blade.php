@php
$setting = \App\Models\SystemSetting::first();
@endphp
@extends('frontend.app')
@section('title', 'Contact Us | Contact Us')
@section('content')
    <main class="og-bg-primary-color">
        <!-- ===========================Banner Section Start Here==============================================-->
        <section class="og-contact-us-banner">
            <div class="container">
                <h1 class="text-white text-center og-contact-us-title">
                    Contact Us
                </h1>
                <p class="og-contact-us-path-title text-center">
                    Home
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path
                            d="M13.5703 11.22C13.5703 11.3134 13.537 11.3934 13.4703 11.46L8.25031 16.68C8.18365 16.7467 8.10365 16.78 8.01031 16.78C7.91698 16.78 7.83031 16.7467 7.75031 16.68L7.19031 16.12C7.11031 16.04 7.07031 15.9534 7.07031 15.86C7.07031 15.7667 7.11031 15.68 7.19031 15.6L11.5703 11.22L7.19031 6.82003C7.11031 6.75336 7.07031 6.67336 7.07031 6.58003C7.07031 6.4867 7.11031 6.40003 7.19031 6.32003L7.75031 5.76003C7.81698 5.68003 7.90365 5.64003 8.01031 5.64003C8.11698 5.64003 8.19698 5.68003 8.25031 5.76003L13.4703 10.96C13.537 11.0267 13.5703 11.1134 13.5703 11.22Z"
                            fill="#BDBDBD" />
                    </svg>
                    Contact Uss
                </p>
            </div>
        </section>
        <!-- ===========================Banner Section Start Here==============================================-->
        <!-- ===========================About Information section Start Here==============================================-->
        <section class="container og-information-section">
            <div class="og-information">
                <div class="og-information-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                        fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M19.5757 3.7157C16.968 3.65026 15.0307 3.65027 12.4229 3.7157L12.3231 3.71821C10.3107 3.76865 8.65483 3.81015 7.3202 4.04229C5.90372 4.28867 4.71769 4.7685 3.71316 5.77561C2.71388 6.77743 2.23541 7.94475 1.99303 9.33883C1.76555 10.6471 1.73112 12.2616 1.68945 14.2156L1.68731 14.3161C1.65891 15.6468 1.65892 16.3533 1.68733 17.6838L1.68948 17.7844C1.73113 19.7384 1.76556 21.3528 1.99304 22.6612C2.23544 24.0552 2.71391 25.2225 3.71317 26.2244C4.71772 27.2314 5.90373 27.7113 7.32023 27.9577C8.65484 28.1898 10.3107 28.2313 12.3232 28.2817L12.423 28.2842C15.0307 28.3497 16.968 28.3497 19.5757 28.2842L19.6755 28.2817C21.688 28.2313 23.3439 28.1897 24.6785 27.9576C26.0949 27.7113 27.2809 27.2314 28.2855 26.2244C29.2848 25.2225 29.7633 24.0552 30.0056 22.661C30.2332 21.3528 30.2676 19.7384 30.3092 17.7844L30.3113 17.6838C30.3397 16.3532 30.3397 15.6468 30.3113 14.3161L30.3092 14.2157C30.2676 12.2616 30.2331 10.6471 30.0056 9.33883C29.7632 7.94475 29.2848 6.77743 28.2855 5.77561C27.7211 5.20966 27.0992 4.81022 26.4113 4.52514C26.3067 4.46801 26.1945 4.42493 26.0776 4.39743C25.6379 4.24241 25.1721 4.12817 24.6784 4.0423C23.3439 3.81015 21.688 3.76865 19.6755 3.71819L19.5757 3.7157ZM27.5724 11.8004C27.5465 11.2597 27.5336 10.9893 27.3379 10.8814C27.1421 10.7735 26.9013 10.9098 26.42 11.1826L20.7724 14.3826C19.0395 15.3645 17.574 16 15.9991 16C14.4241 16 12.9586 15.3645 11.2258 14.3826L5.57861 11.1829C5.09725 10.9101 4.85657 10.7738 4.66079 10.8817C4.465 10.9896 4.45211 11.26 4.42632 11.8007C4.39156 12.5293 4.37272 13.3741 4.35139 14.3729C4.32379 15.6656 4.3238 16.3344 4.35141 17.627C4.39583 19.707 4.42949 21.119 4.61844 22.2057C4.79636 23.229 5.09319 23.8369 5.60097 24.346C6.10348 24.8498 6.71971 25.1517 7.77741 25.3357C8.895 25.5301 10.3526 25.5701 12.4899 25.6237C15.0529 25.688 16.9457 25.688 19.5088 25.6237C21.646 25.5701 23.1037 25.5301 24.2213 25.3357C25.2789 25.1517 25.8952 24.8498 26.3977 24.346C26.9055 23.8369 27.2024 23.229 27.3803 22.2057C27.5692 21.119 27.6029 19.707 27.6473 17.627C27.6749 16.3344 27.6749 15.6656 27.6473 14.3729C27.626 13.374 27.6071 12.5291 27.5724 11.8004Z"
                            fill="#726352" />
                    </svg>
                </div>
                <div>
                    <h3 class="og-information-title">Email Address</h3>
                    <div class="og-information-descrition">
                        <p>
                            {{$setting->email ?? 'example@gmail.com'}}
                        </p>

                    </div>
                </div>
            </div>
            <div class="og-information">
                <div class="og-information-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                        fill="none">
                        <path
                            d="M12.1223 6.74113L11.7846 5.98135C11.3298 4.95797 11.1023 4.44627 10.7281 4.08459C10.481 3.84585 10.1903 3.65691 9.8718 3.52811C9.38928 3.33301 8.82932 3.33301 7.70941 3.33301C6.04186 3.33301 5.2081 3.33301 4.55848 3.73785C4.16004 3.98614 3.77897 4.40769 3.57202 4.82907C3.23458 5.51614 3.31113 6.2731 3.46422 7.78702C4.73453 20.3495 11.6509 27.2657 24.2133 28.5361C25.7272 28.6892 26.4842 28.7657 27.1713 28.4283C27.5926 28.2213 28.0142 27.8403 28.2625 27.4419C28.6673 26.7923 28.6673 25.9584 28.6673 24.2909C28.6673 23.1711 28.6673 22.6111 28.4722 22.1285C28.3434 21.81 28.1545 21.5193 27.9157 21.2723C27.5541 20.898 27.0424 20.6705 26.019 20.2157L25.2592 19.878C24.3625 19.4795 23.9141 19.2803 23.4644 19.2424C22.986 19.2021 22.5054 19.2913 22.0734 19.5007C21.6672 19.6975 21.3202 20.0444 20.6264 20.7383C19.9437 21.4209 19.6024 21.7623 19.1578 21.9632C18.7253 22.1588 18.1174 22.242 17.6482 22.1697C17.1661 22.0955 16.8117 21.8956 16.1029 21.4959C13.5902 20.0787 11.9216 18.41 10.5045 15.8975C10.1047 15.1887 9.90485 14.8343 9.83058 14.3521C9.75832 13.8829 9.84146 13.275 10.0371 12.8424C10.2381 12.3979 10.5794 12.0566 11.2621 11.3739C11.9559 10.68 12.3029 10.3331 12.4997 9.9269C12.709 9.49483 12.7982 9.01439 12.7579 8.53598C12.7201 8.08622 12.5208 7.63785 12.1223 6.74113Z"
                            fill="#726352" />
                    </svg>
                </div>
                <div>
                    <h3 class="og-information-title">Phone Number</h3>
                    <div class="og-information-descrition">
                        <p>
                           {{$setting->phone ?? '+1 123 456 789'}}
                        </p>

                    </div>
                </div>
            </div>
            <div class="og-information">
                <div class="og-information-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                        fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.5857 30.2433L15.5932 30.2468C15.8517 30.3617 16.1476 30.362 16.4061 30.2472L16.4111 30.2449C16.4413 30.231 16.5159 30.1969 16.5604 30.176C16.6551 30.1314 16.7912 30.0661 16.9628 29.9804C17.3059 29.8088 17.7917 29.555 18.3729 29.2214C19.5328 28.5554 21.084 27.565 22.6401 26.2682C25.7189 23.7025 29 19.781 29 14.6666C29 7.48692 23.1797 1.66663 16 1.66663C8.82029 1.66663 3 7.48692 3 14.6666C3 19.781 6.28103 23.7025 9.35981 26.2682C10.916 27.565 12.4672 28.5554 13.6271 29.2214C14.2083 29.555 14.6941 29.8088 15.0372 29.9804C15.2045 30.064 15.484 30.1954 15.5857 30.2433ZM16 9.33329C13.0545 9.33329 10.6667 11.7211 10.6667 14.6666C10.6667 17.6121 13.0545 20 16 20C18.9455 20 21.3333 17.6121 21.3333 14.6666C21.3333 11.7211 18.9455 9.33329 16 9.33329Z"
                            fill="#726352" />
                    </svg>
                </div>
                <div>
                    <h3 class="og-information-title">Office Address</h3>
                    <div class="og-information-descrition">
                        <p>
                            {{$setting->address ?? '123 Main St, City, Country'}}
                        </p>

                    </div>
                </div>
            </div>
        </section>
        <!-- ===========================About Information section end Here==============================================-->
        <!-- ===========================Lets Work Together section end Here==============================================-->
        <section id="og-lets-work-section" class="container og-lets-work-section">
            <button class="og-about-page-seo-esp-tag-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16" fill="none">
                    <path
                        d="M2.28117 0C1.21848 1.12238 0.556049 2.4367 0.405071 3.9851C0.254094 5.53115 0.646167 6.94729 1.49468 8.26863C0.710537 7.52896 -0.102867 6.00632 0.0106587 4.20278C0.120673 2.45543 0.869707 1.04748 2.28117 0Z"
                        fill="#726352" />
                    <path
                        d="M6.86388 15.9999C7.26298 15.9999 7.6609 15.9999 8.06 15.9999C8.90383 15.9999 9.74649 15.9999 10.5903 15.9999C10.7039 15.9999 10.7752 15.9449 10.7764 15.8431C10.7764 15.794 10.7612 15.7401 10.7378 15.6956C10.4078 15.0601 9.99578 14.4855 9.4621 14.0033C8.91202 13.5059 8.28588 13.1513 7.55206 13.005C7.48418 12.9909 7.48184 12.9535 7.48066 12.9008C7.41981 10.6268 7.35895 8.3516 7.29575 6.07758C7.29341 5.99916 7.31564 5.96405 7.38587 5.92894C7.92189 5.66678 8.17352 5.0617 7.98743 4.49641C7.80369 3.93815 7.23021 3.59874 6.64736 3.70407C6.14411 3.79536 5.75672 4.20733 5.68649 4.72463C5.61978 5.21736 5.88897 5.71242 6.35009 5.93245C6.4168 5.96405 6.43319 6.00033 6.43085 6.06938C6.38988 7.55575 6.35126 9.04212 6.31147 10.5285C6.2904 11.3103 6.26699 12.0933 6.24827 12.8751C6.24593 12.9558 6.22837 12.9933 6.13943 13.0108C5.80002 13.0775 5.47817 13.1969 5.17387 13.3608C4.17204 13.9003 3.48621 14.7348 2.97242 15.7272C2.89517 15.8771 2.97827 15.9988 3.1468 15.9988C4.38622 15.9988 5.62447 15.9988 6.86388 15.9988V15.9999ZM12.2218 8.27787C13.4121 6.98461 13.8826 5.46079 13.6637 3.72397C13.4378 1.93097 12.3529 0.587388 11.4435 0.00805664C12.5249 1.14565 13.1757 2.46349 13.3173 4.01071C13.4601 5.56028 13.0539 6.97525 12.2218 8.2767V8.27787ZM4.44123 1.87713C3.78348 2.2376 3.07892 3.16571 3.06721 4.40629C3.05785 5.36014 3.53068 6.23558 4.00702 6.59137C3.12573 4.92945 3.26969 3.36233 4.44123 1.87596V1.87713ZM9.71958 6.59137C10.3551 6.06236 10.8303 4.9985 10.5974 3.80004C10.423 2.9012 9.82725 2.15802 9.2725 1.87596C9.83544 2.55009 10.1866 3.3003 10.2685 4.16286C10.3492 5.0301 10.1374 5.83297 9.71958 6.59137Z"
                        fill="#726352" />
                </svg>
                Contact Us
            </button>
            <div class="og-lets-work-content">
                <div>
                    <h2 class="og-lets-work-form-title">Lets Work Together</h2>
                    <p class="og-lets-work-form-description">
                        eady to take your social media presence to the next level? Let’s work together to create
                        impactful
                        strategies drive engagement, growth, and success for your brand.
                    </p>
                    <form action="{{ route('contact_page.contact.store') }}" method="POST">
                        @csrf
                        <div class="og-lets-work-form-input">
                            <input class="og-lets-work-form-input-field" type="text" name="fname"
                                placeholder="First Name" required>
                            <input class="og-lets-work-form-input-field" type="text" name="lname"
                                placeholder="Last Name" required>
                        </div>
                        <div class="og-lets-work-form-input">
                            <input class="og-lets-work-form-input-field" type="email" name="email"
                                placeholder="Email Address" required>
                            <input class="og-lets-work-form-input-field" type="text" name="phone"
                                placeholder="Phone Number" required>
                        </div>
                        <select class="og-lets-work-form-input-field" style="margin-bottom: 24px;" name="subject" required>
                            <option value="" selected disabled>Service Type</option>
                            <option value="seo_optimization">SEO</option>
                            <option value="data_integration">Data Integration</option>
                            <option value="analytics_success">Analytics Success</option>
                            <option value="general_inquiry">General Inquiry</option>
                        </select>
                        <textarea class="og-lets-work-form-input-field h-200" name="message" placeholder="How can I help you?" required></textarea>

                        <button class="og-btn mt-5" type="submit">
                            Submit
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path d="M14.4297 7L20.4997 13.07L14.4297 19.14" stroke="#FFFBF4" stroke-width="1.5"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.5 13.0703H20.33" stroke="#FFFBF4" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </form>

                </div>
                <div class="og-lets-work-img-content">
                    <img class="og-lets-work-img" src="{{ asset('frontend/assets/images/lets_work_together.png') }}"
                        alt="" class="og-banner-right-content-image">
                </div>
            </div>
        </section>
        <!-- ===========================Lets Work Together section end Here==============================================-->
        <!-- ===========================Location section end Here==============================================-->
        {{-- <section class="container og-location">
        <h4 class="og-location-title">Location</h4>
        <div class="og-location-location-content">
            <p class="og-location-location-name">Dhaka, Bangladesh</p>
            <div class="og-location-location-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                    <circle cx="14.9999" cy="15" r="6.18714" transform="rotate(-45 14.9999 15)" stroke="#9B907F"
                        stroke-width="2" />
                    <circle cx="15" cy="15" r="1.76775" transform="rotate(-45 15 15)" fill="#9B907F"
                        stroke="#9B907F" stroke-width="1.5" />
                    <path
                        d="M8.81257 15.0001L5 15.0002M14.9997 8.81295L14.9999 5.00031M24.9999 15.0002L21.1869 15.0001M14.9999 25.0002L14.9997 21.1872"
                        stroke="#9B907F" stroke-width="2" stroke-linecap="round" />
                </svg>
            </div>
        </div>
        <div class="og-location-location-map-content">
            <iframe class="og-location-location-map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d456.3816006891862!2d90.40468127355163!3d23.78113387292892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9b0ecf091b9%3A0x1c123e9ed4c43244!2sSoftvence%20Agency!5e0!3m2!1sen!2sbd!4v1745745331397!5m2!1sen!2sbd"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section> --}}
        <!-- ===========================Location section end Here==============================================-->
    </main>
@endsection
