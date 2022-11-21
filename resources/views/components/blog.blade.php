<?php

// use App\Http\Controllers\BlogsController;
use App\Models\blog as Blogs;
?>

<style>
    .w-tab-menu {
        position: relative;
    }

    .tab-menu-round {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 40px;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .tab-link-round {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        min-height: 52px;
        margin-right: 15px;
        margin-left: 15px;
        padding-right: 45px;
        padding-left: 45px;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        border-style: solid;
        border-width: 1px;
        border-color: rgba(97, 114, 131, 0.2);
        border-radius: 6px;
        background-color: transparent;
        font-size: 16px;
    }

    .w-inline-block {
        max-width: 100%;
        display: inline-block;
    }

    .w-tab-link {
        position: relative;
        display: inline-block;
        vertical-align: top;
        text-decoration: none;
        padding: 12px 30px;
        text-align: left;
        cursor: pointer;
        color: #222222;
    }

    .tab-link-round.w--current {
        border-color: rgba(97, 114, 131, 0);
        border-radius: 6px;
        background-color: #35b8be;
        background-image: url('public/images/2022/08/cart-btn.svg');
        background-position: 0px 0px;
        background-size: cover;
        background-repeat: no-repeat;
        color: #fff;
    }
</style>

<div style="opacity: 1;" class="content-section">
    <div class="container">
        <div data-duration-in="300" data-duration-out="100" data-current="Full Menu" data-easing="ease" class="w-tabs">
            <div class="tab-menu-round w-tab-menu" role="tablist">
                <a data-w-tab="1" class="tab-link-round w-inline-block w-tab-link w--current" id="w-tabs-0-data-w-tab-1" href="#w-tabs-0-data-w-pane-1" role="tab" aria-controls="w-tabs-0-data-w-pane-1" aria-selected="true">
                    <div>1</div>
                </a>
                <a data-w-tab="2" class="tab-link-round w-inline-block w-tab-link" tabindex="-1" id="w-tabs-0-data-w-tab-2" href="#w-tabs-0-data-w-pane-2" role="tab" aria-controls="w-tabs-0-data-w-pane-2" aria-selected="false">
                    <div>2</div>
                </a>
                <a data-w-tab="3" class="tab-link-round w-inline-block w-tab-link" tabindex="-1" id="w-tabs-0-data-w-tab-3" href="#w-tabs-0-data-w-pane-3" role="tab" aria-controls="w-tabs-0-data-w-pane-3" aria-selected="false">
                    <div>3</div>
                </a>
                <a data-w-tab="4" class="tab-link-round w-inline-block w-tab-link" tabindex="-1" id="w-tabs-0-data-w-tab-4" href="#w-tabs-0-data-w-pane-4" role="tab" aria-controls="w-tabs-0-data-w-pane-4" aria-selected="false">
                    <div>4</div>
                </a>
                <a data-w-tab="5" class="tab-link-round w-inline-block w-tab-link" tabindex="-1" id="w-tabs-0-data-w-tab-5" href="#w-tabs-0-data-w-pane-5" role="tab" aria-controls="w-tabs-0-data-w-pane-5" aria-selected="false">
                    <div>5</div>
                </a>
            </div>
            <div class="w-tab-content">
                <div data-w-tab="1" class="tab-pane-wrap w-tab-pane w-tab-pane1" id="w-tabs-0-data-w-pane-1" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-1">
                    <div class="row">
                        @php
                        $blogs = Blogs::where("category", '=', 1)->get();
                        // print_r($blogs[0]['name']);exit;
                        @endphp
                        @foreach ($blogs as $blog => $key)
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="blogs" style="border: 1px solid #eee;padding: 2rem;border-radius: 10px;">
                                <div class="card">
                                    <img src="{{url('/')}}/public/images/blog/{{ $key['image'] }}" class="card-img-top" alt="test">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $key['name'] }}</h5>
                                        <p class="card-text">{{ $key['description'] }}</p>
                                        <a href="{{ $key['ref1'] }}" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div data-w-tab="2" class="w-tab-pane w-tab-pane2 d-none" id="w-tabs-0-data-w-pane-2" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-2">
                    <div class="row">
                        @php
                        $blogs = Blogs::where("category", '=', 2)->get();
                        // print_r($blogs[0]['name']);exit;
                        @endphp
                        @foreach ($blogs as $blog => $key)
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="blogs" style="border: 1px solid #eee;padding: 2rem;border-radius: 10px;">
                                <div class="card">
                                    <img src="{{url('/')}}/public/images/blog/{{ $key['image'] }}" class="card-img-top" alt="test">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $key['name'] }}</h5>
                                        <p class="card-text">{{ $key['description'] }}</p>
                                        <a href="{{ $key['ref1'] }}" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div data-w-tab="3" class="w-tab-pane w-tab-pane3 d-none" id="w-tabs-0-data-w-pane-3" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-3">
                    <div class="row">
                        @php
                        $blogs = Blogs::where("category", '=', 3)->get();
                        // print_r($blogs[0]['name']);exit;
                        @endphp
                        @foreach ($blogs as $blog => $key)
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="blogs" style="border: 1px solid #eee;padding: 2rem;border-radius: 10px;">
                                <div class="card">
                                    <img src="{{url('/')}}/public/images/blog/{{ $key['image'] }}" class="card-img-top" alt="test">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $key['name'] }}</h5>
                                        <p class="card-text">{{ $key['description'] }}</p>
                                        <a href="{{ $key['ref1'] }}" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div data-w-tab="4" class="w-tab-pane w-tab-pane4 d-none" id="w-tabs-0-data-w-pane-4" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-4">
                    <div class="row">
                        @php
                        $blogs = Blogs::where("category", '=', 4)->get();
                        // print_r($blogs[0]['name']);exit;
                        @endphp
                        @foreach ($blogs as $blog => $key)
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="blogs" style="border: 1px solid #eee;padding: 2rem;border-radius: 10px;">
                                <div class="card">
                                    <img src="{{url('/')}}/public/images/blog/{{ $key['image'] }}" class="card-img-top" alt="test">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $key['name'] }}</h5>
                                        <p class="card-text">{{ $key['description'] }}</p>
                                        <a href="{{ $key['ref1'] }}" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div data-w-tab="5" class="w-tab-pane w-tab-pane5 d-none" id="w-tabs-0-data-w-pane-5" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-5">
                    <div class="row">
                        @php
                        $blogs = Blogs::where("category", '=', 5)->get();
                        // print_r($blogs[0]['name']);exit;
                        @endphp
                        @foreach ($blogs as $blog => $key)
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="blogs" style="border: 1px solid #eee;padding: 2rem;border-radius: 10px;">
                                <div class="card">
                                    <img src="{{url('/')}}/public/images/blog/{{ $key['image'] }}" class="card-img-top" alt="test">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $key['name'] }}</h5>
                                        <p class="card-text">{{ $key['description'] }}</p>
                                        <a href="{{ $key['ref1'] }}" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>