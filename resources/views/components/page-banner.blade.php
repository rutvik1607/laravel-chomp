<?php if ($slug == 'home') { ?>
<section class="banner" style="background-image: url('{{ $bannerBg }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6">
                <div class="banner-title">
                    {{ Str::ucfirst($title) }}
                </div>
                <div class="banner-sub-title">
                    {{ $description }}
                </div>
                <a class="btn btn-primary custome-btn mt-5" href="#"
                    style="background-image: url('{{ $bannerBtnBg }}')">Place an Order</a>
                <div class=" banner-trustpilot">
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6">
                <div class="banner-img">
                    <img src="{{ $bannerImg }}" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</section>
<?php }else{ ?>
<section class="banner-header-section" style="background-color:#f5fbfc;">
    <div class="container">
        <img src="{{ $bannerBg }}" class="banner-header-section-img" alt="" srcset=""
            sizes="(max-width: 515px) 100vw, 515px">
        <div class="banner-header-section-title">
            {{ Str::ucfirst($title) }}
        </div>
    </div>
</section>
<?php } ?>
