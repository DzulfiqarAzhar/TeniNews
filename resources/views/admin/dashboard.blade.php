@extends('admin.layout.template-main')
@section('title', '{{ $title }}')
@section('content')
    <div class="container-lg">
        <div class="row">
            <h2>Dashboard</h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <div class="fs-4 fw-semibold">{{ $countArticle->NewsCount }}</div>
                        <div>Total Articles</div>
                        <small class="text-medium-emphasis text-dark">Number of Articles</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info">
                    <div class="card-body">
                        <div class="fs-4 fw-semibold">{{ explode('=', $mostComment->MostComment)[1] }}</div>
                        <div>Most Commented</div>
                        <small class="text-medium-emphasis text-dark">From News ID {{ explode('=', $mostComment->MostComment)[0] }}</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                    <div class="card-body">
                        <div class="fs-4 fw-semibold">{{ $countVisitor->VisitorsCount }}</div>
                        <div>Current Month Viewers</div>
                        <small class="text-medium-emphasis">Latest From {{ $visitor->ip_address }}</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4 mt-4">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="card-title mb-0">Traffic</h4>
                        <div class="small text-medium-emphasis">January - July 2022</div>
                    </div>
                    <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
                        <div class="btn-group btn-group-toggle mx-3" data-coreui-toggle="buttons">
                            <input class="btn-check" id="option1" type="radio" name="options" autocomplete="off" />
                            <label class="btn btn-outline-secondary"> Day</label>
                            <input class="btn-check" id="option2" type="radio" name="options" autocomplete="off" checked="" />
                            <label class="btn btn-outline-secondary active"> Month</label>
                            <input class="btn-check" id="option3" type="radio" name="options" autocomplete="off" />
                            <label class="btn btn-outline-secondary"> Year</label>
                        </div>
                        <button class="btn btn-primary" type="button">
                            <svg class="icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cloud-download"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="c-chart-wrapper" style="height: 300px; margin-top: 40px;">
                    <canvas class="chart" id="main-chart" height="300"></canvas>
                </div>
            </div>
            <div class="card-footer">
                <div class="row row-cols-1 row-cols-md-5 text-center">
                    <div class="col mb-sm-2 mb-0">
                        <div class="text-medium-emphasis">Visits</div>
                        <div class="fw-semibold">29.703 Users (40%)</div>
                        <div class="progress progress-thin mt-2">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col mb-sm-2 mb-0">
                        <div class="text-medium-emphasis">Unique</div>
                        <div class="fw-semibold">24.093 Users (20%)</div>
                        <div class="progress progress-thin mt-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col mb-sm-2 mb-0">
                        <div class="text-medium-emphasis">Pageviews</div>
                        <div class="fw-semibold">78.706 Views (60%)</div>
                        <div class="progress progress-thin mt-2">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col mb-sm-2 mb-0">
                        <div class="text-medium-emphasis">New Users</div>
                        <div class="fw-semibold">22.123 Users (80%)</div>
                        <div class="progress progress-thin mt-2">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col mb-sm-2 mb-0">
                        <div class="text-medium-emphasis">Bounce Rate</div>
                        <div class="fw-semibold">40.15%</div>
                        <div class="progress progress-thin mt-2">
                            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
