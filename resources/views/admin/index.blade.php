@extends('admin.layouts.main')
@section('heading_buttons')
    @can('position.create')
        {{-- <button type="button" class="btn btn-primary display-b float-right arrow-none waves-effect waves-light create">
    <i class="fas fa-plus mr-2"></i> Əlavə et
</button> --}}
    @endcan
@endsection



@section('content')
    <!-- start page title -->
    <div class="row mb-3 pb-1">
        <div class="col-12">
            <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-16 mb-1">Hello, @if (Auth::user()->gender == 1)
                            Mr.
                        @else
                            Mrs.
                        @endif{{ Auth::user()->name }} </h4>
                    <p class="text-muted mb-0">Create children's entertainment content with Kidquizzit Admin Panel</p>
                </div>
                <div class="mt-3 mt-lg-0">
                    <form action="javascript:void(0);">
                        <div class="row g-3 mb-0 align-items-center">
                            <div class="col-sm-auto">
                                <div class="input-group">
                                    <input type="text"
                                        class="w-160 form-control input-color-date border-0 date-picker form-control shadow"
                                        readonly="readonly">
                                    <div class="input-group-text bg-primary border-primary text-white ">
                                        <i class="ri-calendar-2-line"></i>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            {{-- <div class="col-auto">
                                <a href="{{ route('task.index') }}" type="button" class="btn btn-soft-success mb-0"><i
                                        class="ri-add-circle-line align-middle me-1"></i> Tapşırıq</a>
                            </div> --}}
                            <!--end col-->
                            {{-- <div class="col-auto">
                                <button type="button"
                                    class="btn btn-soft-info btn-icon waves-effect waves-light layout-rightside-btn"><i
                                        class="ri-pulse-line"></i></button>
                            </div> --}}
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                </div>
            </div><!-- end card header -->
        </div>
        <!--end col-->
    </div>

    <!-- end page title -->

    <div class="row">
        <div class="col-xxl-12">
            <div class="d-flex flex-column h-100">

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium font-size-department text-muted mb-0">Quizes</p>
                                        <h2 class="mt-3 mb-0 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="{{ $counts->task_count }}">0</span></h2>
                                    </div>
                                    {{-- <div>
                                        <p class="mb-0 font-size-department text-muted"><span class="badge bg-light font-size-department text-success mb-0">
                                                <i class="ri-arrow-up-line align-middle"></i> 7.05 % </p>
                                    </div> --}}
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('task.index') }}" class="text-decoration-un">Bütün tapşırıqlar</a>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-info border-icon-department fs-2">
                                            <i data-feather="external-link" class="text-info"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium font-size-department text-muted mb-0">Colourings</p>
                                        <h2 class="mt-3 mb-0 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="{{ $counts->customer_count }}">0</span></h2>
                                    </div>
                                    {{-- <div>
                                        <p class="mb-0 font-size-department text-muted"><span class="badge bg-light font-size-department text-success mb-0">
                                                <i class="ri-arrow-up-line align-middle"></i> 7.05 % </p>
                                    </div> --}}
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('customer.index') }}" class="text-decoration-un">Bütün müştərilər</a>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-info border-icon-department fs-2">
                                            <i data-feather="external-link" class="text-info"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium font-size-department text-muted mb-0">Find matches</p>
                                        <h2 class="mt-3 mb-0 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="{{ $counts->user_count }}">0</span></h2>
                                    </div>
                                    {{-- <div>
                                        <p class="mb-0 font-size-department text-muted"><span class="badge bg-light font-size-department text-success mb-0">
                                                <i class="ri-arrow-up-line align-middle"></i> 7.05 % </p>
                                    </div> --}}
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('personal.index') }}" class="text-decoration-un">Bütün
                                        istifadəçilər</a>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-info border-icon-department fs-2">
                                            <i data-feather="external-link" class="text-info"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium font-size-department text-muted mb-0">Why questions</p>
                                        <h2 class="mt-3 mb-0 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="{{ $counts->departemet_count }}">0</span></h2>
                                    </div>
                                    {{-- <div>
                                        <p class="mb-0 font-size-department text-muted"><span class="badge bg-light font-size-department text-success mb-0">
                                                <i class="ri-arrow-up-line align-middle"></i> 7.05 % </p>
                                    </div> --}}
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('department.index') }}" class="text-decoration-un">Bütün
                                        departamentlər</a>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-info border-icon-department fs-2">
                                            <i data-feather="external-link" class="text-info"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->
            </div>
        </div> <!-- end col-->


    </div> <!-- end row-->

    {{-- <div class="row">
        <div class="col-xl-4">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Users by Device</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span class="text-muted fs-16"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Current Year</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->
                <div class="card-body">
                    <div id="user_device_pie_charts" data-colors='["--vz-primary", "--vz-warning", "--vz-info"]'
                        class="apex-charts" dir="ltr"></div>

                    <div class="table-responsive mt-3">
                        <table class="table table-borderless table-sm table-centered align-middle table-nowrap mb-0">
                            <tbody class="border-0">
                                <tr>
                                    <td>
                                        <h4 class="text-truncate fs-14 fs-medium mb-0"><i
                                                class="ri-stop-fill align-middle fs-18 text-primary me-2"></i>Desktop Users
                                        </h4>
                                    </td>
                                    <td>
                                        <p class="text-muted mb-0"><i data-feather="users" class="me-2 icon-sm"></i>78.56k
                                        </p>
                                    </td>
                                    <td class="text-end">
                                        <p class="text-success fw-medium fs-12 mb-0"><i
                                                class="ri-arrow-up-s-fill fs-5 align-middle"></i>2.08% </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="text-truncate fs-14 fs-medium mb-0"><i
                                                class="ri-stop-fill align-middle fs-18 text-warning me-2"></i>Mobile Users
                                        </h4>
                                    </td>
                                    <td>
                                        <p class="text-muted mb-0"><i data-feather="users"
                                                class="me-2 icon-sm"></i>105.02k</p>
                                    </td>
                                    <td class="text-end">
                                        <p class="text-danger fw-medium fs-12 mb-0"><i
                                                class="ri-arrow-down-s-fill fs-5 align-middle"></i>10.52%
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="text-truncate fs-14 fs-medium mb-0"><i
                                                class="ri-stop-fill align-middle fs-18 text-info me-2"></i>Tablet Users
                                        </h4>
                                    </td>
                                    <td>
                                        <p class="text-muted mb-0"><i data-feather="users"
                                                class="me-2 icon-sm"></i>42.89k</p>
                                    </td>
                                    <td class="text-end">
                                        <p class="text-danger fw-medium fs-12 mb-0"><i
                                                class="ri-arrow-down-s-fill fs-5 align-middle"></i>7.36%
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-4 col-md-6">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Top Referrals Pages</h4>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-soft-primary btn-sm">
                            Export Report
                        </button>
                    </div>
                </div>

                <div class="card-body">

                    <div class="row align-items-center">
                        <div class="col-6">
                            <h6 class="text-muted text-uppercase fw-semibold text-truncate fs-12 mb-3">Total Referrals Page
                            </h6>
                            <h4 class="mb-0">725,800</h4>
                            <p class="mb-0 mt-2 text-muted"><span class="badge badge-soft-success mb-0"> <i
                                        class="ri-arrow-up-line align-middle"></i> 15.72 % </span> vs. previous month</p>
                        </div><!-- end col -->
                        <div class="col-6">
                            <div class="text-center">
                                <img src="{{ asset('admin/assets/images/illustrator-1.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="mt-3 pt-2">
                        <div class="progress progress-lg rounded-pill">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info" role="progressbar" style="width: 18%" aria-valuenow="18"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 22%"
                                aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 16%"
                                aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 19%" aria-valuenow="19"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!-- end -->

                    <div class="mt-3 pt-2">
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <p class="text-truncate text-muted fs-14 mb-0"><i
                                        class="mdi mdi-circle align-middle text-primary me-2"></i>www.google.com </p>
                            </div>
                            <div class="flex-shrink-0">
                                <p class="mb-0">24.58%</p>
                            </div>
                        </div><!-- end -->
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <p class="text-truncate text-muted fs-14 mb-0"><i
                                        class="mdi mdi-circle align-middle text-info me-2"></i>www.youtube.com </p>
                            </div>
                            <div class="flex-shrink-0">
                                <p class="mb-0">17.51%</p>
                            </div>
                        </div><!-- end -->
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <p class="text-truncate text-muted fs-14 mb-0"><i
                                        class="mdi mdi-circle align-middle text-success me-2"></i>www.meta.com </p>
                            </div>
                            <div class="flex-shrink-0">
                                <p class="mb-0">23.05%</p>
                            </div>
                        </div><!-- end -->
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <p class="text-truncate text-muted fs-14 mb-0"><i
                                        class="mdi mdi-circle align-middle text-warning me-2"></i>www.medium.com </p>
                            </div>
                            <div class="flex-shrink-0">
                                <p class="mb-0">12.22%</p>
                            </div>
                        </div><!-- end -->
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate text-muted fs-14 mb-0"><i
                                        class="mdi mdi-circle align-middle text-danger me-2"></i>Other </p>
                            </div>
                            <div class="flex-shrink-0">
                                <p class="mb-0">17.58%</p>
                            </div>
                        </div><!-- end -->
                    </div><!-- end -->

                    <div class="mt-2 text-center">
                        <a href="javascript:void(0);" class="text-muted text-decoration-underline">Show All</a>
                    </div>

                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-4 col-md-6">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Top Pages</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted fs-16"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Current Year</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table align-middle table-borderless table-centered table-nowrap mb-0">
                            <thead class="text-muted table-light">
                                <tr>
                                    <th scope="col" style="width: 62;">Active Page</th>
                                    <th scope="col">Active</th>
                                    <th scope="col">Users</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">/themesbrand/skote-25867</a>
                                    </td>
                                    <td>99</td>
                                    <td>25.3%</td>
                                </tr><!-- end -->
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">/dashonic/chat-24518</a>
                                    </td>
                                    <td>86</td>
                                    <td>22.7%</td>
                                </tr><!-- end -->
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">/skote/timeline-27391</a>
                                    </td>
                                    <td>64</td>
                                    <td>18.7%</td>
                                </tr><!-- end -->
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">/themesbrand/minia-26441</a>
                                    </td>
                                    <td>53</td>
                                    <td>14.2%</td>
                                </tr><!-- end -->
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">/dashon/dashboard-29873</a>
                                    </td>
                                    <td>33</td>
                                    <td>12.6%</td>
                                </tr><!-- end -->
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">/doot/chats-29964</a>
                                    </td>
                                    <td>20</td>
                                    <td>10.9%</td>
                                </tr><!-- end -->
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);">/minton/pages-29739</a>
                                    </td>
                                    <td>10</td>
                                    <td>07.3%</td>
                                </tr><!-- end -->
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div><!-- end -->
                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div> --}}
    <!-- end row -->
    {{-- <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Line Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="lineChart" class="chartjs-chart"
                        data-colors="[&quot;--vz-primary-rgb, 0.2&quot;, &quot;--vz-primary&quot;, &quot;--vz-success-rgb, 0.2&quot;, &quot;--vz-success&quot;]"
                        width="894" height="446"
                        style="display: block; box-sizing: border-box; height: 223px; width: 447px;"></canvas>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Tapşırıqlar</h4>
                </div>
                <div class="card-body">
                    <canvas id="bar" class="chartjs-chart"
                        data-colors="[&quot;--vz-primary-rgb, 0.8&quot;, &quot;--vz-primary-rgb, 0.9&quot;]"
                        width="894" height="446"
                        style="display: block; box-sizing: border-box; height: 223px; width: 447px;"></canvas>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Pie Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="pieChart" class="chartjs-chart"
                        data-colors="[&quot;--vz-success&quot;, &quot;--vz-light&quot;]" width="894" height="640"
                        style="display: block; box-sizing: border-box; height: 320px; width: 447px;"></canvas>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Donut Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="doughnut" class="chartjs-chart"
                        data-colors="[&quot;--vz-primary&quot;, &quot;--vz-light&quot;]" width="894" height="640"
                        style="display: block; box-sizing: border-box; height: 320px; width: 447px;"></canvas>
                </div>
            </div>
        </div> <!-- end col -->
    </div> --}}
@endsection
