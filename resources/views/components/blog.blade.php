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
            <div class="tab-menu-round w-tab-menu" role="tablist"><a data-w-tab="all"
                    class="tab-link-round w-inline-block w-tab-link w--current" id="w-tabs-0-data-w-tab-0"
                    href="#w-tabs-0-data-w-pane-0" role="tab" aria-controls="w-tabs-0-data-w-pane-0"
                    aria-selected="true">
                    <div>Full Menu</div>
                </a><a data-w-tab="1" class="tab-link-round w-inline-block w-tab-link" tabindex="-1"
                    id="w-tabs-0-data-w-tab-1" href="#w-tabs-0-data-w-pane-1" role="tab"
                    aria-controls="w-tabs-0-data-w-pane-1" aria-selected="false">
                    <div>Burgers</div>
                </a><a data-w-tab="2" class="tab-link-round w-inline-block w-tab-link" tabindex="-1"
                    id="w-tabs-0-data-w-tab-2" href="#w-tabs-0-data-w-pane-2" role="tab"
                    aria-controls="w-tabs-0-data-w-pane-2" aria-selected="false">
                    <div>Sides</div>
                </a>
                <a data-w-tab="3" class="tab-link-round w-inline-block w-tab-link" tabindex="-1"
                    id="w-tabs-0-data-w-tab-3" href="#w-tabs-0-data-w-pane-3" role="tab"
                    aria-controls="w-tabs-0-data-w-pane-3" aria-selected="false">
                    <div>Normal</div>
                </a>
                <a data-w-tab="4" class="tab-link-round w-inline-block w-tab-link" tabindex="-1"
                    id="w-tabs-0-data-w-tab-4" href="#w-tabs-0-data-w-pane-4" role="tab"
                    aria-controls="w-tabs-0-data-w-pane-3" aria-selected="false">
                    <div>Scop</div>
                </a>
                <a data-w-tab="5" class="tab-link-round w-inline-block w-tab-link" tabindex="-1"
                    id="w-tabs-0-data-w-tab-5" href="#w-tabs-0-data-w-pane-5" role="tab"
                    aria-controls="w-tabs-0-data-w-pane-3" aria-selected="false">
                    <div>Chines</div>
                </a>
            </div>
            <div class="w-tab-content">
                <div data-w-tab="all" class="tab-pane-wrap w-tab-pane w--tab-active" id="w-tabs-0-data-w-pane-0"
                    role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-0">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="blogs" style="border: 1px solid #eee;padding: 2rem;border-radius: 10px;">
                                <div class="card">
                                    <img src="https://assets.website-files.com/5e865e09d8efa3d64d76b59d/5e865e09d8efa3676276b5cd_Burger%2003.png"
                                        class="card-img-top" alt="test">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make
                                            up the bulk of the card's content.
                                        </p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="blogs" style="border: 1px solid #eee;padding: 2rem;border-radius: 10px;">

                            </div>
                        </div>
                    </div>
                </div>
                <div data-w-tab="1" class="tab-pane-wrap w-tab-pane" id="w-tabs-0-data-w-pane-1" role="tabpanel"
                    aria-labelledby="w-tabs-0-data-w-tab-1">

                </div>
                <div data-w-tab="2" class="w-tab-pane" id="w-tabs-0-data-w-pane-2" role="tabpanel"
                    aria-labelledby="w-tabs-0-data-w-tab-2">

                </div>
                <div data-w-tab="3" class="w-tab-pane" id="w-tabs-0-data-w-pane-3" role="tabpanel"
                    aria-labelledby="w-tabs-0-data-w-tab-3">

                </div>
                <div data-w-tab="4" class="w-tab-pane" id="w-tabs-0-data-w-pane-4" role="tabpanel"
                    aria-labelledby="w-tabs-0-data-w-tab-4">

                </div>
                <div data-w-tab="4" class="w-tab-pane" id="w-tabs-0-data-w-pane-5" role="tabpanel"
                    aria-labelledby="w-tabs-0-data-w-tab-5">

                </div>
            </div>
        </div>
    </div>
</div>
