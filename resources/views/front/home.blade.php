<x-front-layout>
    <x-page-banner slug="{{ $slug }}" title="{{ $slug }}"
        description="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged."
        bannerBg="public/images/2022/08/banner-bg-svg.png" bannerBtnBg="public/images/2022/08/cart-btn.svg"
        bannerImg="public/images/2022/08/banner-1.png">
    </x-page-banner>

    <div class="content-section-bg" style="background-image: url('public/images/2022/08/Shape-Content.svg')">
        <div class="container">
            <div class="w-layout-grid content-grid">
                <div class="content-block bg-text">
                    <h2>The home of<br>fresh products</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500.</p>
                    <a href="company" class="btn btn-primary custome-btn mt-5"
                        style="background-image: url(public/images/2022/08/cart-btn.svg)">Learn about us</a>
                </div>
                <div class="image-block">
                    <img src="https://assets.website-files.com/5e865e09d8efa3310676b585/5e865e09d8efa3ccac76b5c6_Group%2033.png"
                        sizes="(max-width: 556px) 94vw, 523px" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="content-section">
        <div class="container">
            <div class="title-wrap-centre">
                <h2>How it works.</h2>
            </div>
            <div class="w-layout-grid works-grid">
                <div class="content-card"><img
                        src="https://assets.website-files.com/5e865e09d8efa3310676b585/5e865e09d8efa3dc2276b60f_Step%2001.png"
                        alt="" class="step-image">
                    <div class="content-wrapper">
                        <h5>Adapt your menu items</h5>
                        <p>Easily adapt your menu using the webflow CMS and allow customers to browse your items.</p>
                    </div>
                </div>
                <div class="line-column">
                    <div class="line"></div>
                </div>
                <div class="content-card"><img
                        src="https://assets.website-files.com/5e865e09d8efa3310676b585/5e865e09d8efa3e5bf76b60e_Step%2002.png"
                        alt="" class="step-image">
                    <div class="content-wrapper">
                        <h5>Accept online orders &amp; takeout</h5>
                        <p>Let your customers order and pay via the powerful ecommerce system, or simple let them call
                            your store.</p>
                    </div>
                </div>
                <div class="line-column">
                    <div class="line"></div>
                </div>
                <div class="content-card"><img
                        src="https://assets.website-files.com/5e865e09d8efa3310676b585/5e865e09d8efa3001a76b610_Step%2003.png"
                        alt="" class="step-image">
                    <div class="content-wrapper">
                        <h5>Manage delivery or takeout</h5>
                        <p>Manage your own logistics and take orders simply through the ecommerce system.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-section">
        <div class="container">
            <div class="w-layout-grid content-grid">
                <div class="image-block"><img
                        src="https://assets.website-files.com/5e865e09d8efa3310676b585/5e865e09d8efa379a976b602_Phones.png"
                        srcset="https://assets.website-files.com/5e865e09d8efa3310676b585/5e865e09d8efa379a976b602_Phones-p-500.png 500w, https://assets.website-files.com/5e865e09d8efa3310676b585/5e865e09d8efa379a976b602_Phones-p-800.png 800w, https://assets.website-files.com/5e865e09d8efa3310676b585/5e865e09d8efa379a976b602_Phones.png 2103w"
                        sizes="94vw" alt=""><img
                        src="https://assets.website-files.com/5e865e09d8efa3310676b585/5e865e09d8efa3241b76b605_Content%20Pattern.svg"
                        alt="" class="pattern"></div>
                <div class="content-block">
                    <h2>Order online with our simple checkout.</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500.</p>
                    <a href="faq" class="btn btn-primary custome-btn mt-5"
                        style="background-image: url(public/images/2022/08/cart-btn.svg)">See our FAQ</a>
                </div>
            </div>
        </div>
    </div>
</x-front-layout>
