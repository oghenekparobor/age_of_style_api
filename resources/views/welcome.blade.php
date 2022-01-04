<!doctype html>
<html lang="en">

@include('head')

<body>
    <div id="loading-wrapper">
        <div class="spinner-border"></div>
        <div class="loading-messsage">
            <span>L</span><span>o</span><span>a</span><span>d</span><span>i</span><span>n</span><span>g</span>
        </div>
    </div>
    <div class="page-wrapper">
        @include('nav')
        <div class="main-container">
            @include('header')
            <div class="content-wrapper-scroll">
                <div class="content-wrapper">
                    <div class="row gutters">
                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row gutters">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="card gradient-violet-pink card-186">
                                        <div class="card-body">
                                            <div class="sales-tile">
                                                <div class="sales-tile-block">
                                                    <div class="sales-tile-icon violet"><i
                                                            class="icon-supervised_user_circle"></i></div>
                                                    <div class="sales-tile-details">
                                                        <h5>Contestants</h5>
                                                        <h2>{{ count($contestants) }}</h2><span>+5.8%</span>
                                                    </div>
                                                </div>
                                                <div id="customersGraph" class="apex-hide-lines"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="card gradient-teal-cream card-186">
                                        <div class="card-body">
                                            <div class="sales-tile">
                                                <div class="sales-tile-block">
                                                    <div class="sales-tile-icon teal"><i
                                                            class="icon-motion_photos_on"></i></div>
                                                    <div class="sales-tile-details">
                                                        <h5>Votes</h5>
                                                        <h2>{{ number_format($total) }}</h2><span>+4.9%</span>
                                                    </div>
                                                </div>
                                                <div id="customersGraph2" class="apex-hide-lines"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="card gradient-green card-186">
                                        <div class="card-body">
                                            <div class="sales-tile">
                                                <div class="sales-tile-block">
                                                    <div class="sales-tile-icon green"><i class="icon-money"></i>
                                                    </div>
                                                    <div class="sales-tile-details">
                                                        <h5>Estimated Sum</h5>
                                                        <h2>{{ '₦'.number_format($total * 20) }}</h2><span>+8.2%</span>
                                                    </div>
                                                </div>
                                                <div id="customersGraph3" class="apex-hide-lines"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="card gradient-peach3 card-186">
                                        <div class="card-body">
                                            <div class="sales-tile">
                                                <div class="sales-tile-block">
                                                    <div class="sales-tile-icon peach"><i
                                                            class="icon-settings_input_svideo"></i></div>
                                                    <div class="sales-tile-details">
                                                        <h5>Voters</h5>
                                                        <h2>0</h2><span>+3.7%</span>
                                                    </div>
                                                </div>
                                                <div id="customersGraph4" class="apex-hide-lines"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card gradient-violet3 card-390">
                                        <div class="card-body">
                                            <div class="get-latest-updates-lg">
                                                <div class="update-details">
                                                    <h5>Head over <br>to<br>Age of Style</h5>
                                                    <a href="https://romantic-mclean-3ab843.netlify.app/#/"><button type="button" class="download-btn lg"><span class="icon"><img src="img/download-white.svg" alt="Download"></span>Voting Platform</button></a></div>
                                                <img
                                                    src="img/blocks2.svg" class="blocks-img animate__animated animate__pulse animate__infinite infinite" alt="Blocks"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row gutters">
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card gradient-violet-pink card-186">
                                        <div class="card-body">
                                            <div class="card-title">Weekly Statistics</div>
                                            <div class="row gutters">
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                    <div class="sales-tile2">
                                                        <div class="sales-tile2-block">
                                                            <div class="sales-tile2-icon"><img src="img/graphcool.svg"
                                                                    alt="Statistics"></div>
                                                            <div class="sales-tile2-details">
                                                                <h2>1.7k</h2>
                                                                <h5>Customers</h5>
                                                            </div>
                                                        </div>
                                                        <div class="sales-tile2-progress">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                    style="width: 70%" aria-valuenow="70"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                    <div class="sales-tile2">
                                                        <div class="sales-tile2-block">
                                                            <div class="sales-tile2-icon"><img src="img/graphcool.svg"
                                                                    alt="Statistics"></div>
                                                            <div class="sales-tile2-details">
                                                                <h2>3.9k</h2>
                                                                <h5>Orders</h5>
                                                            </div>
                                                        </div>
                                                        <div class="sales-tile2-progress">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                    style="width: 80%" aria-valuenow="80"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                    <div class="sales-tile2">
                                                        <div class="sales-tile2-block">
                                                            <div class="sales-tile2-icon"><img src="img/graphcool.svg"
                                                                    alt="Statistics"></div>
                                                            <div class="sales-tile2-details">
                                                                <h2>7.3k</h2>
                                                                <h5>Revenue</h5>
                                                            </div>
                                                        </div>
                                                        <div class="sales-tile2-progress">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                    style="width: 90%" aria-valuenow="90"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="app-footer"><span>© AOS 2022</span></div>
            </div>
        </div>
    </div>
    @include('footer')
</body>

</html>
