<!doctype html>
<html lang="en">

@include('head')

<body>
    <div class="page-wrapper">
        @include('nav')
        <div class="main-container">
            @include('header')
            <div class="content-wrapper-scroll">
                <div class="content-wrapper">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card gradient-dark-grey">
                                <div class="card-body">
                                    <form action="/settings/save" method="POST" id="form">
                                        @csrf
                                        <div class="row gutters">
                                            <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="mb-3">
                                                    <div class="form-label">Voting starts ({{ date('D, d M Y. h:i a', strtotime('+1 hour', strtotime($settings->created_at))) }})</div>
                                                    <div class="input-group control-dark"><input type="text" placeholder="DD/MM/YYYY H:S A"
                                                            class="form-control datepicker-time" name="from"><span
                                                            class="input-group-text"><i
                                                                class="icon-date_range"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="mb-3">
                                                    <div class="form-label">Voting ends ({{ date('D, d M Y. h:i a', strtotime('+1 hour', strtotime($settings->updated_at))) }})</div>
                                                    <div class="input-group control-dark"><input type="text" placeholder="DD/MM/YYYY H:S A"
                                                            class="form-control datepicker-time" name="to"><span
                                                            class="input-group-text"><i
                                                                class="icon-date_range"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <button type="submit" form="form" type="submit" class="btn btn-success">Save
                                                    Settings</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-footer"><span>© AOS 2022</span></div>
        </div>
    </div>
    </div>
    @include('footer')
</body>

</html>
