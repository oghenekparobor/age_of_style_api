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
                        <div class="col-xl-12">
                            <div class="card gradient-dark-grey">
                                <div class="card-body">
                                    <div class="row gutters">
                                        <div class="col-xl-12 col-lg-8 col-md-12 col-sm-12 col-12">
                                            <div class="row gutters">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="d-flex flex-row"><img src="{{ $category->photo }}"
                                                            class="img-fluid change-img-avatar" alt="Image">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table v-middle">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Sub Category</th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @for ($i = 0; $i < count($subCategory); $i++)
                                                            <tr>
                                                                <td>{{ $i + 1 }}</td>
                                                                <td>{{ $subCategory[$i]->sub_category }}</td>
                                                                <td>
                                                                    <a
                                                                        href="/sub/category/remove/{{ $subCategory[$i]->id }}">
                                                                        <span
                                                                            class="badge gradient-red min-90">REMOVE</span></a>
                                                                </td>
                                                            </tr>
                                                        @endfor
                                                    </tbody>
                                                </table>
                                            </div>
                                            <hr class="light">
                                            <div class="row gutters">
                                                <form id="form" action="/category/sub/add/{{ $category->id }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="col-xl-8 col-lg-4 col-md-4 col-sm-6 col-12">
                                                        <div class="mb-3 control-dark"><label for="fullName"
                                                                class="form-label">Add sub category</label>
                                                            <input type="text" class="form-control" id="Sub category"
                                                                placeholder="sub category" name="sub" required>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <button type="submit" form="form" class="btn btn-info">Save sub
                                                category</button>
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
