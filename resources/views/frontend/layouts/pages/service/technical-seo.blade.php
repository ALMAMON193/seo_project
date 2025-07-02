 <!-- =========================== Our approach Section Start Here ==============================================-->
 <section class="og-beyond-basic-keyword-section">
     <div class="container">
         <div class="our-approach-container">
             <div class="og-beyond-basic-keyword-left">
                 <img src="{{ asset($technicalSeo->image ?? 'frontend/assets/images/Technical-SEO.jpeg') }}"
                     alt="{{ $technicalSeo->image_alt ?? 'Technical SEO' }}" class="og-beyond-basic-keyword-left-image" />
             </div>
             <div class="og-beyond-basic-keyword-right">
                 <div>
                     <h2 class="og-beyond-content-seo-section-heading">
                         {{ $technicalSeo->title ?? 'Technical SEO' }}

                     </h2>
                     <p class="og-beyond-basic-keyword-description">
                         {!! $technicalSeo->content ??
                             ' Behind every high-performing site is clean, crawlable code. We
                                                                                                    audit and optimize your site structure, speed, indexing,
                                                                                                    mobile experience, and more, ensuring search engines can
                                                                                                    access and understand your content without friction.
                                                                                                    <br>
                                                                                                    Whether you already have a development team or need one, we’ve
                                                                                                    got you covered. We can collaborate seamlessly with your
                                                                                                    in-house devs or connect you with one of our trusted technical
                                                                                                    partners to implement changes the right way.
                                                                                                    <br>
                                                                                                    Our goal is to eliminate technical roadblocks and make sure
                                                                                                    your site’s foundation supports scalable, long-term growth.' !!}
                     </p>

                     <a href="{{ route('contact') }}"
                         class="og-keyword-section-btn">{{ $technicalSeo->btn_text ?? 'Get started' }}</a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- =========================== Our approach Section End Here ==============================================-->
