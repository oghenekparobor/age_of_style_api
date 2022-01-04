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
                                <div class="card-header">
                                    <div class="card-title">Add Category</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <form action="/new/category" method="POST" enctype="multipart/form-data"
                                            id="form">
                                            @csrf
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="product-block">
                                                    <div class="product-title">General Information</div>
                                                    <div class="product-body">
                                                        <div class="row gutters">
                                                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-6 col-12">
                                                                <div class="mb-3 control-dark"><label
                                                                        class="form-label">Title <span
                                                                            class="text-red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Enter Product Name" name="cat"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <div class="mb-3 control-dark">
                                                                    <label class="form-label">Photo <span
                                                                            class="text-red">*</span></label>
                                                                    <input type="file" name="file"
                                                                        class="form-control" accept="image/*"
                                                                        required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <button form="form" type="submit" class="btn btn-success">Add
                                                Category</button>
                                        </div>
                                    </div>
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
