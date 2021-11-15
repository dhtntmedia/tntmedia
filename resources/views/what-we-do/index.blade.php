@extends('layouts.main')

@section('content')
    <div class="header">
        <div class="nav">
            <a href="/" class="nav-logo link w-inline-block">
                <img src="https://assets-global.website-files.com/5fa11be351a3e7485facb4bc/5fb40922a3a4e482786a5397_Tokyo%2BLogo_2021.svg" alt="Tokyo" class="logo__image" />
            </a>
            <div class="nav-links">
                <a href="/contact/start-a-project" class="text__r link cta">Start a project</a>
                <div class="nav-menu open-menu">
                    <a href="#" class="text__r link">Menu</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section wf-section">
        <div class="container">
            <h1 class="text__xxl">What we do</h1>
            <p class="text__l">We work as a fully integrated department within your team to discover, design, develop and deliver bespoke and best-in-class digital campaigns, products and platforms.</p>
            <div class="w-layout-grid services">
                <div class="scroll-trigger">
                    <div class="services___list">
                        <div class="text__s overline">01</div>
                        <h2 class="text__xl process-title">Discover</h2>
                        <div class="text__r w-dyn-list">
                            <div role="list" class="w-dyn-items">
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/analytics-research" class="link-underlined">Analytics Research</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/digital-strategy" class="link-underlined">Digital Strategy</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/persona-development" class="link-underlined">Persona Development</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/user-research" class="link-underlined">User Research</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scroll-trigger">
                    <div class="services___list">
                        <div class="text__s overline">02</div>
                        <h2 class="text__xl process-title">Design</h2>
                        <div class="text__r w-dyn-list">
                            <div role="list" class="w-dyn-items">
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/content-creation" class="link-underlined">Content Creation</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/interface-design-ui" class="link-underlined">Interface Design (UI)</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/motion-design" class="link-underlined">Motion Design</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/rapid-prototyping" class="link-underlined">Rapid Prototyping</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/usability-testing" class="link-underlined">Usability Testing</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/user-experience-ux" class="link-underlined">User Experience (UX)</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/wireframes" class="link-underlined">Wireframes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scroll-trigger">
                    <div class="services___list">
                        <div class="text__s overline">03</div>
                        <h2 class="text__xl process-title">Develop</h2>
                        <div class="text__r w-dyn-list">
                            <div role="list" class="w-dyn-items">
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/api-sdk" class="link-underlined">API + SDK</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/aws-hosting" class="link-underlined">AWS Hosting</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/cms-integration" class="link-underlined">CMS Integration</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/crm-integration" class="link-underlined">CRM Integration</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/experiential-systems" class="link-underlined">Experiential Systems</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/mobile-development" class="link-underlined">Mobile Development</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/web-development" class="link-underlined">Web Development</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scroll-trigger">
                    <div class="services___list">
                        <div class="text__s overline">04</div>
                        <h2 class="text__xl process-title">Deliver</h2>
                        <div class="text__r w-dyn-list">
                            <div role="list" class="w-dyn-items">
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/analytics-reporting" class="link-underlined">Analytics + Reporting</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/handoff-training" class="link-underlined">Handoff + Training</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/product-testing" class="link-underlined">Product Testing</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/project-management" class="link-underlined">Project Management</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/what-we-do/social-campaigns" class="link-underlined">Social Campaigns</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section wf-section">
        <div class="container">
            <h2 class="text__xxl">Entertainment</h2>
            <p class="text__l">Working with some of the best known <a href="/sectors/entertainment">entertainment brands</a>, we deliver innovative apps and websites, designed to spark interest and increase engagement. </p>
            <div class="clientgrid-wrapper w-dyn-list">
                <div role="list" class="clientgrid w-dyn-items">
                    <div role="listitem" class="clientgrid__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a href="/work/sky-mobile" class="clientlogo w-inline-block">
                                <img loading="lazy" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fc9304561099d3fbb902e5a_logo_sky_white.svg" alt="Sky Mobile" class="clientlogo__image" />
                            </a>
                        </div>
                    </div>
                    <div role="listitem" class="clientgrid__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a href="/work/google" class="clientlogo w-inline-block">
                                <img loading="lazy" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fbbcbf00e447fb0236d2cbf_logo_google_white.svg" alt="Google" class="clientlogo__image" />
                            </a>
                        </div>
                    </div>
                    <div role="listitem" class="clientgrid__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a href="/work/disney" class="clientlogo w-inline-block">
                                <img loading="lazy" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fbbfd0b821bb1786a167b5f_logo_disney_white.svg" alt="Disney" class="clientlogo__image" />
                            </a>
                        </div>
                    </div>
                    <div role="listitem" class="clientgrid__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a href="/work/turner" class="clientlogo w-inline-block">
                                <img loading="lazy" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fc924c52b2fdc713b179675_logo_turner_white.svg" alt="Turner" class="clientlogo__image" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="experience-featured w-dyn-list">
                <div role="list" class="experience-featured__list w-dyn-items">
                    <div role="listitem" class="experience-featured__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a data-w-id="7253267c-2bea-bfd1-98c0-21b06d9f4b7f" href="/work/fremantle" class="experience-featured__container w-inline-block">
                                <div class="_16x9-wrapper">
                                    <div class="projecthero">
                                        <img loading="lazy" height="" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cccf13af6db10a8d69fa18_logo_fremantle_white.svg" alt="Fremantle" class="projecthero__logo" />
                                        <img loading="lazy" alt="" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cccec8681c89863be6447e_fremantle_watchparty_hero.jpg" sizes="92vw" srcset="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cccec8681c89863be6447e_fremantle_watchparty_hero-p-500.jpeg 500w, https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cccec8681c89863be6447e_fremantle_watchparty_hero-p-800.jpeg 800w, https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cccec8681c89863be6447e_fremantle_watchparty_hero-p-1600.jpeg 1600w, https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cccec8681c89863be6447e_fremantle_watchparty_hero-p-2000.jpeg 2000w, https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cccec8681c89863be6447e_fremantle_watchparty_hero.jpg 2560w" class="projecthero__image" />
                                    </div>
                                </div>
                                <div class="experience-featured__labels w-clearfix">
                                    <div class="experience-featured__title text__r link">Fremantle</div>
                                    <div class="experience-featured__link text__r link-underlined">View case study</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section wf-section">
        <div class="container">
            <h2 class="text__xxl">Luxury + Fashion</h2>
            <p class="text__l">We work with globally renowned <a href="/sectors/luxury-fashion">luxury and fashion brands</a>, creating premium, bespoke solutions designed to drive engagement and growth. </p>
            <div class="clientgrid-wrapper w-dyn-list">
                <div role="list" class="clientgrid w-dyn-items">
                    <div role="listitem" class="clientgrid__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a href="/work/peter-rabbit" class="clientlogo w-inline-block">
                                <img loading="lazy" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fc91a3ed6ca078a3f070b1c_logo_peterrabbit_white.svg" alt="Peter Rabbit" class="clientlogo__image" />
                            </a>
                        </div>
                    </div>
                    <div role="listitem" class="clientgrid__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a href="/work/harrods" class="clientlogo w-inline-block">
                                <img loading="lazy" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fae5822dae70991b443ce3b_logo_harrods_white.svg" alt="Harrods" class="clientlogo__image" />
                            </a>
                        </div>
                    </div>
                    <div role="listitem" class="clientgrid__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a href="/work/warehouse" class="clientlogo w-inline-block">
                                <img loading="lazy" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fbc35390f903517108cc905_logo_warehouse_white.svg" alt="Warehouse" class="clientlogo__image" />
                            </a>
                        </div>
                    </div>
                    <div role="listitem" class="clientgrid__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a href="/work/valentino" class="clientlogo w-inline-block">
                                <img loading="lazy" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5ffd9f0834b12f10f5e2929a_logo_valentino_white.svg" alt="Valentino" class="clientlogo__image" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="experience-featured w-dyn-list">
                <div role="list" class="experience-featured__list w-dyn-items">
                    <div role="listitem" class="experience-featured__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a data-w-id="d30f0abb-8977-394c-ffc2-dc145767734b" href="/work/adidas" class="experience-featured__container w-inline-block">
                                <div class="_16x9-wrapper">
                                    <div class="projecthero">
                                        <img loading="lazy" height="" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cb2d6c38ca3db52c106284_logo_adidas_white.svg" alt="Adidas 4DFWD" class="projecthero__logo" />
                                        <img loading="lazy" alt="" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cb34c468161ec72242d5d2_adidas_4dfwd_hero_poster.jpg" sizes="92vw" srcset="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cb34c468161ec72242d5d2_adidas_4dfwd_hero_poster-p-800.jpeg 800w, https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cb34c468161ec72242d5d2_adidas_4dfwd_hero_poster-p-1080.jpeg 1080w, https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cb34c468161ec72242d5d2_adidas_4dfwd_hero_poster-p-1600.jpeg 1600w, https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cb34c468161ec72242d5d2_adidas_4dfwd_hero_poster.jpg 1920w" class="projecthero__image" />
                                    </div>
                                </div>
                                <div class="experience-featured__labels w-clearfix">
                                    <div class="experience-featured__title text__r link">Adidas 4DFWD</div>
                                    <div class="experience-featured__link text__r link-underlined">View case study</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section wf-section">
        <div class="container">
            <h2 class="text__xxl">Travel + Hospitality</h2>
            <p class="text__l">Working with <a href="/sectors/travel-hospitality">travel and hospitality brands</a>, we create custom solutions to showcase high profile events and destinations, with a focus on driving interest and revenue. </p>
            <div class="clientgrid-wrapper w-dyn-list">
                <div role="list" class="clientgrid w-dyn-items">
                    <div role="listitem" class="clientgrid__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a href="/work/annabels" class="clientlogo w-inline-block">
                                <img loading="lazy" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fbbc7a29fa75658b35cf1e4_logo_annabels_white.svg" alt="Annabel&#x27;s" class="clientlogo__image" />
                            </a>
                        </div>
                    </div>
                    <div role="listitem" class="clientgrid__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a href="/work/oetker-collection" class="clientlogo w-inline-block">
                                <img loading="lazy" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fbc2cc259e3c219704f65cf_logo_oetker_white.svg" alt="Oetker Collection" class="clientlogo__image" />
                            </a>
                        </div>
                    </div>
                    <div role="listitem" class="clientgrid__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a href="/work/fyre-festival" class="clientlogo w-inline-block">
                                <img loading="lazy" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fbbf965ece6e6f569d3f3e7_logo_fyre_white.svg" alt="Fyre Festival" class="clientlogo__image" />
                            </a>
                        </div>
                    </div>
                    <div role="listitem" class="clientgrid__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a href="/work/emirates" class="clientlogo w-inline-block">
                                <img loading="lazy" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fbc3342ef4b4f31949b8a84_logo_emirates_white.svg" alt="Emirates" class="clientlogo__image" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="experience-featured w-dyn-list">
                <div role="list" class="experience-featured__list w-dyn-items">
                    <div role="listitem" class="experience-featured__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a data-w-id="0682b0c2-18fb-105f-e112-0135bfc89e27" href="/work/annabels" class="experience-featured__container w-inline-block">
                                <div class="_16x9-wrapper">
                                    <div class="projecthero">
                                        <img loading="lazy" height="" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fbbc7a29fa75658b35cf1e4_logo_annabels_white.svg" alt="Annabel&#x27;s" class="projecthero__logo" />
                                        <img loading="lazy" alt="" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fd4f343d660d39f39cfe248_annabels_poster_1.jpg" sizes="92vw" srcset="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fd4f343d660d39f39cfe248_annabels_poster_1-p-800.jpeg 800w, https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fd4f343d660d39f39cfe248_annabels_poster_1-p-1600.jpeg 1600w, https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fd4f343d660d39f39cfe248_annabels_poster_1.jpg 2560w" class="projecthero__image" />
                                    </div>
                                </div>
                                <div class="experience-featured__labels w-clearfix">
                                    <div class="experience-featured__title text__r link">Annabel&#x27;s</div>
                                    <div class="experience-featured__link text__r link-underlined">View case study</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section wf-section">
        <div class="container">
            <h2 class="text__xxl">Business + Corporate</h2>
            <p class="text__l">We work closely with high-profile <a href="/sectors/business-corporate">corporate businesses</a> to deliver results-driven solutions, with a focus on driving leads and increasing conversions. </p>
            <div class="clientgrid-wrapper w-dyn-list">
                <div role="list" class="clientgrid w-dyn-items">
                    <div role="listitem" class="clientgrid__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a href="/work/house" class="clientlogo w-inline-block">
                                <img loading="lazy" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fc904328dc5abd16a03b854_logo_housebyurbansplash_white.svg" alt="House by Urban Splash" class="clientlogo__image" />
                            </a>
                        </div>
                    </div>
                    <div role="listitem" class="clientgrid__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a href="/work/store-first" class="clientlogo w-inline-block">
                                <img loading="lazy" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fbc30d5cff1f81bce6f9b72_logo_storefirst_white.svg" alt="Store First" class="clientlogo__image" />
                            </a>
                        </div>
                    </div>
                    <div role="listitem" class="clientgrid__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a href="/work/urban-splash" class="clientlogo w-inline-block">
                                <img loading="lazy" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fbc29c9c5de9e29c7b5f09f_logo_urbansplash_white.svg" alt="Urban Splash" class="clientlogo__image" />
                            </a>
                        </div>
                    </div>
                    <div role="listitem" class="clientgrid__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a href="/work/volkswagen" class="clientlogo w-inline-block">
                                <img loading="lazy" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fbc0de65be90d0c81dd1128_logo_vw_white.svg" alt="Volkswagen" class="clientlogo__image" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="experience-featured w-dyn-list">
                <div role="list" class="experience-featured__list w-dyn-items">
                    <div role="listitem" class="experience-featured__item w-dyn-item">
                        <div class="scroll-trigger">
                            <a data-w-id="a1e461a6-357b-ab34-c05b-42808ad6e6d1" href="/work/cisco" class="experience-featured__container w-inline-block">
                                <div class="_16x9-wrapper">
                                    <div class="projecthero">
                                        <img loading="lazy" height="" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/5fbc240254558c3212fa81f1_logo_cisco_white.svg" alt="Cisco" class="projecthero__logo" />
                                        <img loading="lazy" alt="" src="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cc522520d414d788451453_cisco_promo_1.jpg" sizes="92vw" srcset="https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cc522520d414d788451453_cisco_promo_1-p-500.jpeg 500w, https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cc522520d414d788451453_cisco_promo_1-p-800.jpeg 800w, https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cc522520d414d788451453_cisco_promo_1-p-1600.jpeg 1600w, https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cc522520d414d788451453_cisco_promo_1-p-2000.jpeg 2000w, https://assets-global.website-files.com/5fa699c7e0851d5bb046ab4f/60cc522520d414d788451453_cisco_promo_1.jpg 2560w" class="projecthero__image" />
                                    </div>
                                </div>
                                <div class="experience-featured__labels w-clearfix">
                                    <div class="experience-featured__title text__r link">Cisco</div>
                                    <div class="experience-featured__link text__r link-underlined">View case study</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.next-link')
    <div class="section wf-section">
        <div class="container">
            <div class="text__xxl">Have a project in mind? <br />
                <a href="/contact?sendusamessage" class="link-underlined">Send us a message</a>
            </div>
        </div>
    </div>
    <div class="w-layout-grid footer">
        <div class="text__s">
            <span class="location_title">London</span>
            <br />81 Rivington Street <br />London EC2A 3AY, UK <br />
            <a href="mailto:london@tokyo.uk?subject=Website%20enquiry%20-%20London" class="link">london@tokyo.uk <br />
            </a>
            <a href="tel:+442077345004" class="link">+44 20 7734 5004</a>
        </div>
        <div class="text__s">
            <span class="location_title">New York</span>
            <br />16 Madison Square W. FL 12 <br />New York City, NY 10010, USA <br />
            <a href="mailto:newyork@tokyo.uk?subject=Website%20enquiry%20-%20New%20York" class="link">newyork@tokyo.uk <br />
            </a>
            <a href="tel:+13474412962" class="link">+1 347-441-2962</a>
        </div>
        <div class="text__s">
            <span class="location_title">Liverpool</span>
            <br />17 Mann Island <br />Liverpool L3 1BP, UK <br />
            <a href="mailto:liverpool@tokyo.uk?subject=Website%20enquiry%20-%20Liverpool" class="link">liverpool@tokyo.uk <br />
            </a>
            <a href="tel:+441517099524" class="link">+44 151 709 9524</a>
        </div>
        <div class="text__s">
            <a href="/contact" class="link">Contact</a>
            <br />
            <a href="/privacy" class="link">Privacy Policy <br />
            </a>
            <a href="/disclaimer" class="link">Disclaimer</a>
            <br />‍ <br />© 2021 TNT Media Tech Ltd.
        </div>
    </div>
    @include('partials.main-menu')
@stop
