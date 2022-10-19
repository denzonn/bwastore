@extends('layouts.dashboard')

@section('title')
  Store Dashboard Transactions
@endsection

@section('content')
    <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
    <div class="dashboard-heading">
        <div class="dashboard-title">Transactions</div>
        <p class="dashboard-subtitle">
        Big result start from the small one
        </p>
    </div>
    <div class="dashboard-content">
        <div class="row">
        <div class="col-12 mt-2">
            <ul
            class="nav nav-pills mb-3"
            id="pills-tab"
            role="tablist"
            >
            <li class="nav-item" role="presentation">
                <a
                class="nav-link active"
                id="pills-home-tab"
                data-toggle="pill"
                data-target="#pills-home"
                type="button"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
                >
                Sell Product
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a
                class="nav-link"
                id="pills-profile-tab"
                data-toggle="pill"
                data-target="#pills-profile"
                type="button"
                role="tab"
                aria-controls="pills-profile"
                aria-selected="false"
                >
                Buy Product
                </a>
            </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
            <div
                class="tab-pane fade show active"
                id="pills-home"
                role="tabpanel"
                aria-labelledby="pills-home-tab"
            >
                <a
                href="dashboard-transactions-details.html"
                class="card card-list d-block"
                >
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-1">
                        <img src="/images/dashboard-icon1.png" alt="" />
                    </div>

                    <div class="col-md-4">Shirup Marzzan</div>

                    <div class="col-md-3">Angga Risky</div>

                    <div class="col-md-3">12 Januari, 2020</div>

                    <col class="md-1 d-none d-md-block" />
                    <img src="/images/dashboard-arrow.svg" alt="" />
                    </div>
                </div>
                </a>

                <a
                href="dashboard-transactions-details.html"
                class="card card-list d-block"
                >
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-1">
                        <img src="/images/dashboard-icon1.png" alt="" />
                    </div>

                    <div class="col-md-4">Shirup Marzzan</div>

                    <div class="col-md-3">Angga Risky</div>

                    <div class="col-md-3">12 Januari, 2020</div>

                    <col class="md-1 d-none d-md-block" />
                    <img src="/images/dashboard-arrow.svg" alt="" />
                    </div>
                </div>
                </a>

                <a
                href="dashboard-transactions-details.html"
                class="card card-list d-block"
                >
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-1">
                        <img src="/images/dashboard-icon1.png" alt="" />
                    </div>

                    <div class="col-md-4">Shirup Marzzan</div>

                    <div class="col-md-3">Angga Risky</div>

                    <div class="col-md-3">12 Januari, 2020</div>

                    <col class="md-1 d-none d-md-block" />
                    <img src="/images/dashboard-arrow.svg" alt="" />
                    </div>
                </div>
                </a>
            </div>
            <div
                class="tab-pane fade"
                id="pills-profile"
                role="tabpanel"
                aria-labelledby="pills-profile-tab"
            >
                <a
                href="dashboard-transactions-details.html"
                class="card card-list d-block"
                >
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-1">
                        <img src="/images/dashboard-icon1.png" alt="" />
                    </div>

                    <div class="col-md-4">Shirup Marzzan</div>

                    <div class="col-md-3">Angga Risky</div>

                    <div class="col-md-3">12 Januari, 2020</div>

                    <col class="md-1 d-none d-md-block" />
                    <img src="/images/dashboard-arrow.svg" alt="" />
                    </div>
                </div>
                </a>

                <a
                href="dashboard-transactions-details.html"
                class="card card-list d-block"
                >
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-1">
                        <img src="/images/dashboard-icon1.png" alt="" />
                    </div>

                    <div class="col-md-4">Shirup Marzzan</div>

                    <div class="col-md-3">Angga Risky</div>

                    <div class="col-md-3">12 Januari, 2020</div>

                    <col class="md-1 d-none d-md-block" />
                    <img src="/images/dashboard-arrow.svg" alt="" />
                    </div>
                </div>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
@endsection


