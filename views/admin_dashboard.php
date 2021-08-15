<?php
/*
 * Created on Sun Aug 15 2021
 *
 * https://martdev.info
 * martdevelopers254@gmail.com
 * +254 740 847 563 / +254 737 229 776 
 *
 * The MIT License (MIT)
 * Copyright (c) 2021 MartDevelopers Inc
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
 * TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
session_start();
require_once('../config/checklogin.php');
require_once('../config/config.php');
admin();
require_once('../partials/head.php');
?>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

        <div class="container" data-layout="container">
            <!-- Top Bar -->
            <?php require_once('../partials/topbar.php'); ?>

            <!-- Sidebar -->
            <?php require_once('../partials/sidebar.php'); ?>

            <div class="content">
                <!-- Navigation -->
                <?php require_once('../partials/top_nav.php');?>

                <div class="card mb-3">
                    <div class="card-body rounded-soft bg-gradient">
                        <div class="row text-white align-items-center no-gutters">
                            <div class="col">
                                <h4 class="text-white mb-0">Today $764.39</h4>
                                <p class="fs--1 font-weight-semi-bold">Yesterday <span class="opacity-50">$684.87</span></p>
                            </div>
                            <div class="col-auto d-none d-sm-block"><select class="custom-select custom-select-sm mb-3" id="dashboard-chart-select">
                                    <option value="all">All Payments</option>
                                    <option value="successful" selected="selected">Successful Payments</option>
                                    <option value="failed">Failed Payments</option>
                                </select></div>
                        </div><canvas class="max-w-100 rounded" id="chart-line" width="1618" height="375" aria-label="Line chart" role="img"></canvas>
                    </div>
                </div>
                <div class="card bg-light mb-3">
                    <div class="card-body p-3">
                        <p class="fs--1 mb-0"><a href="#!"><span class="fas fa-exchange-alt mr-2" data-fa-transform="rotate-90"></span>A payout for <strong>$921.42 </strong>was deposited 13 days ago</a>. Your next deposit is expected on <strong>Tuesday, March 13.</strong></p>
                    </div>
                </div>
                <div class="card-deck">
                    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(assets/img/illustrations/corner-1.png);"></div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                            <h6>Customers<span class="badge badge-soft-warning rounded-capsule ml-2">-0.23%</span></h6>
                            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning">58.39k</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">See all<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
                        </div>
                    </div>
                    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(assets/img/illustrations/corner-2.png);"></div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                            <h6>Orders<span class="badge badge-soft-info rounded-capsule ml-2">0.0%</span></h6>
                            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info">73.46k</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">All orders<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
                        </div>
                    </div>
                    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(assets/img/illustrations/corner-3.png);"></div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                            <h6>Revenue<span class="badge badge-soft-success rounded-capsule ml-2">9.54%</span></h6>
                            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif" data-countup='{"count":43594,"format":"comma","prefix":"$"}'>0</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">Statistics<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Recent Purchases</h5>
                            </div>
                            <div class="col-6 col-sm-auto ml-auto text-right pl-0">
                                <div class="d-none" id="purchases-actions">
                                    <div class="input-group input-group-sm"><select class="custom-select cus" aria-label="Bulk actions">
                                            <option selected="">Bulk actions</option>
                                            <option value="Refund">Refund</option>
                                            <option value="Delete">Delete</option>
                                            <option value="Archive">Archive</option>
                                        </select><button class="btn btn-falcon-default btn-sm ml-2" type="button">Apply</button></div>
                                </div>
                                <div id="dashboard-actions"><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">New</span></button><button class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">Filter</span></button><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">Export</span></button></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <div class="dashboard-data-table">
                            <table class="table table-sm table-dashboard fs--1 data-table border-bottom" data-options='{"responsive":false,"pagingType":"simple","lengthChange":false,"searching":false,"pageLength":8,"columnDefs":[{"targets":[0,6],"orderable":false}],"language":{"info":"_START_ to _END_ Items of _TOTAL_ — <a href=https://prium.github.io/"#!\" class=\"font-weight-semi-bold\"> view all <span class=\"fas fa-angle-right\" data-fa-transform=\"down-1\"></span> </a>"},"buttons":["copy","excel"]}'>
                                <thead class="bg-200 text-900">
                                    <tr>
                                        <th class="no-sort pr-1 align-middle data-table-row-bulk-select">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select" id="checkbox-bulk-purchases-select" type="checkbox" data-checkbox-body="#purchases" data-checkbox-actions="#purchases-actions" data-checkbox-replaced-element="#dashboard-actions" /><label class="custom-control-label" for="checkbox-bulk-purchases-select"></label></div>
                                        </th>
                                        <th class="sort pr-1 align-middle">Customer</th>
                                        <th class="sort pr-1 align-middle">Email</th>
                                        <th class="sort pr-1 align-middle">Product</th>
                                        <th class="sort pr-1 align-middle text-center">Payment</th>
                                        <th class="sort pr-1 align-middle text-right">Amount</th>
                                        <th class="no-sort pr-1 align-middle data-table-row-action"></th>
                                    </tr>
                                </thead>
                                <tbody id="purchases">
                                    <tr class="btn-reveal-trigger">
                                        <td class="align-middle">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-0" /><label class="custom-control-label" for="checkbox-0"></label></div>
                                        </td>
                                        <th class="align-middle"><a href="pages/customer-details.html">Sylvia Plath</a></th>
                                        <td class="align-middle">john@gmail.com</td>
                                        <td class="align-middle">Slick - Drag &amp; Drop Bootstrap Generator</td>
                                        <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                                        <td class="align-middle text-right">$99</td>
                                        <td class="align-middle white-space-nowrap">
                                            <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown0" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown0">
                                                    <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="btn-reveal-trigger">
                                        <td class="align-middle">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-1" /><label class="custom-control-label" for="checkbox-1"></label></div>
                                        </td>
                                        <th class="align-middle"><a href="pages/customer-details.html">Homer</a></th>
                                        <td class="align-middle">sylvia@mail.ru</td>
                                        <td class="align-middle">Bose SoundSport Wireless Headphones</td>
                                        <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                                        <td class="align-middle text-right">$634</td>
                                        <td class="align-middle white-space-nowrap">
                                            <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown1" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown1">
                                                    <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="btn-reveal-trigger">
                                        <td class="align-middle">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-2" /><label class="custom-control-label" for="checkbox-2"></label></div>
                                        </td>
                                        <th class="align-middle"><a href="pages/customer-details.html">Edgar Allan Poe</a></th>
                                        <td class="align-middle">edgar@yahoo.com</td>
                                        <td class="align-middle">All-New Fire HD 8 Kids Edition Tablet</td>
                                        <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-secondary">Blocked<span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                                        <td class="align-middle text-right">$199</td>
                                        <td class="align-middle white-space-nowrap">
                                            <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown2" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown2">
                                                    <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="btn-reveal-trigger">
                                        <td class="align-middle">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-3" /><label class="custom-control-label" for="checkbox-3"></label></div>
                                        </td>
                                        <th class="align-middle"><a href="pages/customer-details.html">William Butler Yeats</a></th>
                                        <td class="align-middle">william@gmail.com</td>
                                        <td class="align-middle">Apple iPhone XR (64GB)</td>
                                        <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                                        <td class="align-middle text-right">$798</td>
                                        <td class="align-middle white-space-nowrap">
                                            <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown3" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown3">
                                                    <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="btn-reveal-trigger">
                                        <td class="align-middle">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-4" /><label class="custom-control-label" for="checkbox-4"></label></div>
                                        </td>
                                        <th class="align-middle"><a href="pages/customer-details.html">Rabindranath Tagore</a></th>
                                        <td class="align-middle">tagore@twitter.com</td>
                                        <td class="align-middle">ASUS Chromebook C202SA-YS02 11.6&quot;</td>
                                        <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-secondary">Blocked<span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                                        <td class="align-middle text-right">$318</td>
                                        <td class="align-middle white-space-nowrap">
                                            <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown4" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown4">
                                                    <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="btn-reveal-trigger">
                                        <td class="align-middle">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-5" /><label class="custom-control-label" for="checkbox-5"></label></div>
                                        </td>
                                        <th class="align-middle"><a href="pages/customer-details.html">Emily Dickinson</a></th>
                                        <td class="align-middle">emily@gmail.com</td>
                                        <td class="align-middle">Mirari OK to Wake! Alarm Clock &amp; Night-Light</td>
                                        <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-warning">Pending<span class="ml-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
                                        <td class="align-middle text-right">$11</td>
                                        <td class="align-middle white-space-nowrap">
                                            <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown5" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown5">
                                                    <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="btn-reveal-trigger">
                                        <td class="align-middle">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-6" /><label class="custom-control-label" for="checkbox-6"></label></div>
                                        </td>
                                        <th class="align-middle"><a href="pages/customer-details.html">Giovanni Boccaccio</a></th>
                                        <td class="align-middle">giovanni@outlook.com</td>
                                        <td class="align-middle">Summer Infant Contoured Changing Pad</td>
                                        <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                                        <td class="align-middle text-right">$31</td>
                                        <td class="align-middle white-space-nowrap">
                                            <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown6" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown6">
                                                    <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="btn-reveal-trigger">
                                        <td class="align-middle">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-7" /><label class="custom-control-label" for="checkbox-7"></label></div>
                                        </td>
                                        <th class="align-middle"><a href="pages/customer-details.html">Oscar Wilde</a></th>
                                        <td class="align-middle">oscar@hotmail.com</td>
                                        <td class="align-middle">Munchkin 6 Piece Fork and Spoon Set</td>
                                        <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                                        <td class="align-middle text-right">$43</td>
                                        <td class="align-middle white-space-nowrap">
                                            <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown7" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown7">
                                                    <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="btn-reveal-trigger">
                                        <td class="align-middle">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-8" /><label class="custom-control-label" for="checkbox-8"></label></div>
                                        </td>
                                        <th class="align-middle"><a href="pages/customer-details.html">John Doe</a></th>
                                        <td class="align-middle">doe@gmail.com</td>
                                        <td class="align-middle">Falcon - Responsive Dashboard Template</td>
                                        <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                                        <td class="align-middle text-right">$57</td>
                                        <td class="align-middle white-space-nowrap">
                                            <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown8" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown8">
                                                    <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="btn-reveal-trigger">
                                        <td class="align-middle">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-9" /><label class="custom-control-label" for="checkbox-9"></label></div>
                                        </td>
                                        <th class="align-middle"><a href="pages/customer-details.html">Emma Watson</a></th>
                                        <td class="align-middle">emma@gmail.com</td>
                                        <td class="align-middle">Apple iPhone XR (64GB)</td>
                                        <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-secondary">Blocked<span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span></td>
                                        <td class="align-middle text-right">$999</td>
                                        <td class="align-middle white-space-nowrap">
                                            <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown9" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown9">
                                                    <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="btn-reveal-trigger">
                                        <td class="align-middle">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-10" /><label class="custom-control-label" for="checkbox-10"></label></div>
                                        </td>
                                        <th class="align-middle"><a href="pages/customer-details.html">Sylvia Plath</a></th>
                                        <td class="align-middle">plath@yahoo.com</td>
                                        <td class="align-middle">All-New Fire HD 8 Kids Edition Tablet</td>
                                        <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-warning">Pending<span class="ml-1 fas fa-stream" data-fa-transform="shrink-2"></span></span></td>
                                        <td class="align-middle text-right">$199</td>
                                        <td class="align-middle white-space-nowrap">
                                            <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown10" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown10">
                                                    <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-4 pr-lg-2">
                        <div class="card h-100 bg-gradient">
                            <div class="card-header bg-transparent">
                                <h5 class="text-white">Active users right now</h5>
                                <div class="real-time-user display-1 font-weight-normal text-white" data-countup='{"count":119}'>0</div>
                            </div>
                            <div class="card-body text-white fs--1">
                                <p class="border-bottom pb-2" style="border-color: rgba(255, 255, 255, 0.15) !important">Page views per second</p><canvas class="max-w-100" id="real-time-user" width="10" height="4"></canvas>
                                <div class="list-group-flush mt-4">
                                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1 font-weight-semi-bold border-top-0" style="border-color: rgba(255, 255, 255, 0.15)">
                                        <p class="mb-0">Top Active Pages</p>
                                        <p class="mb-0">Active Users</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
                                        <p class="mb-0">/bootstrap-themes/</p>
                                        <p class="mb-0">3</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
                                        <p class="mb-0">/tags/html5/</p>
                                        <p class="mb-0">3</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none" style="border-color: rgba(255, 255, 255, 0.05)">
                                        <p class="mb-0">/</p>
                                        <p class="mb-0">2</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none" style="border-color: rgba(255, 255, 255, 0.05)">
                                        <p class="mb-0">/preview/falcon/dashboard/</p>
                                        <p class="mb-0">2</p>
                                    </div>
                                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
                                        <p class="mb-0">/100-best-themes...all-time/</p>
                                        <p class="mb-0">1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right bg-transparent border-top" style="border-color: rgba(255, 255, 255, 0.15) !important"><a class="text-white" href="#!">Real-time report<span class="fa fa-chevron-right ml-1 fs--1"></span></a></div>
                        </div>
                    </div>
                    <div class="col-lg-8 pl-lg-2">
                        <div class="card h-100 mt-3 mt-lg-0">
                            <div class="card-header bg-light d-flex flex-between-center">
                                <h5 class="mb-0">Active users</h5>
                                <div class="dropdown text-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                    <div class="dropdown-menu dropdown-menu-right border py-0">
                                        <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Move</a><a class="dropdown-item" href="#!">Resize</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body h-100 p-0">
                                <div class="h-100 bg-white" id="map" style="min-height: 300px;"></div>
                            </div>
                            <div class="card-footer bg-light">
                                <div class="row justify-content-between">
                                    <div class="col-auto"><select class="custom-select custom-select-sm">
                                            <option value="week" selected="selected">Last 7 days</option>
                                            <option value="month">Last month</option>
                                            <option value="year">Last year</option>
                                        </select></div>
                                    <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="#!"><span class="d-none d-sm-inline-block mr-1">Location</span>overview<span class="fa fa-chevron-right ml-1 fs--1"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer>
                    <div class="row no-gutters justify-content-between fs--1 mt-4 mb-3">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy; <a href="https://themewagon.com/">Themewagon</a></p>
                        </div>
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">v2.8.1</p>
                        </div>
                    </div>
                </footer>
            </div>

        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php require_once('../partials/scripts.php'); ?>
</body>



</html>