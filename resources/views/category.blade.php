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
                                    <div class="card-title">Categories</div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table v-middle">
                                            <thead>
                                                <tr>
                                                    <th>Category</th>
                                                    <th>Title</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($category as $cat)
                                                    <tr>
                                                        <td>
                                                            <div class="media-box"><img src="{{ $cat->photo }}"
                                                                    class="media-avatar" alt="User">
                                                                <div class="media-box-body">
                                                                    <div class="text-truncate"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>{{ $cat->category }}</td>
                                                        <td><a href="/category/{{ $cat->id }}"><span
                                                                    class="badge gradient-green min-90">OPEN</span></a>
                                                        </td>
                                                        <td><a href="/category/remove/{{ $cat->id }}"><span
                                                                    class="badge gradient-red min-90">REMOVE</span></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
