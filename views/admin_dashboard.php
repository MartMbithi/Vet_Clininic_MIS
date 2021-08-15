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
            <nav class="navbar navbar-vertical navbar-expand-xl navbar-light" style="display:none;">
                <script>
                    var navbarStyle = localStorage.getItem("navbarStyle");
                    if (navbarStyle) {
                        document.querySelector('.navbar-vertical').className += ' navbar-' + navbarStyle;
                    }
                </script>
                <div class="d-flex align-items-center">
                    <div class="toggle-icon-wrapper">
                        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-toggle="tooltip" data-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    </div><a class="navbar-brand" href="index.html">
                        <div class="d-flex align-items-center py-3"><img class="mr-2" src="assets/img/illustrations/falcon.png" alt="" width="40" /><span class="text-sans-serif">falcon</span></div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content perfect-scrollbar scrollbar">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#home" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="home">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text">Home</span></div>
                                </a>
                                <ul class="nav collapse show" id="home" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item active"><a class="nav-link" href="index.html">Dashboard</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home/dashboard-alt.html">Dashboard alt</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home/feed.html">Feed</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home/landing.html">Landing</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-copy"></span></span><span class="nav-link-text">Pages</span></div>
                                </a>
                                <ul class="nav collapse" id="pages" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="pages/activity.html">Activity</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/associations.html">Associations</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/billing.html">Billing</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/customer-details.html">Customer details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/event-detail.html">Event detail</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/event-create.html">Event create</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/events.html">Events</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/faq.html">Faq</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/invoice.html">Invoice</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/invite-people.html">Invite people</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/notifications.html">Notifications</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/people.html">People</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/pricing.html">Pricing</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/pricing-alt.html">Pricing alt</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/profile.html">Profile</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/settings.html">Settings</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/starter.html">Starter</a></li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pages-errors" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages-errors">Errors</a>
                                        <ul class="nav collapse" id="pages-errors" data-parent="#pages">
                                            <li class="nav-item"><a class="nav-link" href="pages/errors/404.html">404</a></li>
                                            <li class="nav-item"><a class="nav-link" href="pages/errors/500.html">500</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="chat.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text"> Chat</span></div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link" href="kanban.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text"> Kanban</span></div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link" href="calendar.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text"> Calendar</span></div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#email" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="email">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text">Email</span></div>
                                </a>
                                <ul class="nav collapse" id="email" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="email/inbox.html">Inbox</a></li>
                                    <li class="nav-item"><a class="nav-link" href="email/email-detail.html">Email detail</a></li>
                                    <li class="nav-item"><a class="nav-link" href="email/compose.html">Compose</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-unlock-alt"></span></span><span class="nav-link-text">Authentication</span></div>
                                </a>
                                <ul class="nav collapse" id="authentication" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-basic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-basic">Basic</a>
                                        <ul class="nav collapse" id="authentication-basic" data-parent="#authentication">
                                            <li class="nav-item"><a class="nav-link" href="authentication/basic/login.html">Login</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/basic/logout.html">Logout</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/basic/register.html">Register</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/basic/forgot-password.html">Forgot password</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/basic/reset-password.html">Reset password</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/basic/confirm-mail.html">Confirm mail</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/basic/lock-screen.html">Lock screen</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-card" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-card">Card</a>
                                        <ul class="nav collapse" id="authentication-card" data-parent="#authentication">
                                            <li class="nav-item"><a class="nav-link" href="authentication/card/login.html">Login</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/card/logout.html">Logout</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/card/register.html">Register</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/card/forgot-password.html">Forgot password</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/card/reset-password.html">Reset password</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/card/confirm-mail.html">Confirm mail</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/card/lock-screen.html">Lock screen</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-split" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-split">Split</a>
                                        <ul class="nav collapse" id="authentication-split" data-parent="#authentication">
                                            <li class="nav-item"><a class="nav-link" href="authentication/split/login.html">Login</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/split/logout.html">Logout</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/split/register.html">Register</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/split/forgot-password.html">Forgot password</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/split/reset-password.html">Reset password</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/split/confirm-mail.html">Confirm mail</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/split/lock-screen.html">Lock screen</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="authentication/wizard.html">Wizard</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#!" data-toggle="modal" data-target="#authentication-modal">In Modal</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#e-commerce" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="e-commerce">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-cart-plus"></span></span><span class="nav-link-text">E commerce</span></div>
                                </a>
                                <ul class="nav collapse" id="e-commerce" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="e-commerce/product-list.html">Product list</a></li>
                                    <li class="nav-item"><a class="nav-link" href="e-commerce/product-grid.html">Product grid</a></li>
                                    <li class="nav-item"><a class="nav-link" href="e-commerce/product-details.html">Product details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="e-commerce/orders.html">Orders</a></li>
                                    <li class="nav-item"><a class="nav-link" href="e-commerce/order-details.html">Order details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="e-commerce/customers.html">Customers</a></li>
                                    <li class="nav-item"><a class="nav-link" href="e-commerce/shopping-cart.html">Shopping cart</a></li>
                                    <li class="nav-item"><a class="nav-link" href="e-commerce/checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="navbar-vertical-divider">
                            <hr class="navbar-vertical-hr my-2" />
                        </div>
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="widgets.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-poll"></span></span><span class="nav-link-text"> Widgets</span></div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="components">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-puzzle-piece"></span></span><span class="nav-link-text">Components</span></div>
                                </a>
                                <ul class="nav collapse" id="components" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="components/accordion.html">Accordion</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/alerts.html">Alerts</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/avatar.html">Avatar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/background.html">Background</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/badges.html">Badges</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/breadcrumb.html">Breadcrumb</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/bulk-select.html">Bulk select</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/buttons.html">Buttons</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/cards.html">Cards</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/carousel.html">Carousel</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/collapse.html">Collapse</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/countup.html">Countup</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/dropdowns.html">Dropdowns</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/fancyscroll.html">Fancyscroll</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/fancytab.html">Fancytab</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/forms.html">Forms</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/hoverbox.html">Hoverbox</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/list-group.html">List group</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/modals.html">Modals</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/media-object.html">Media object</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/navs.html">Navs</a></li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#components-navbar" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="components-navbar">Navbar</a>
                                        <ul class="nav collapse" id="components-navbar" data-parent="#components">
                                            <li class="nav-item"><a class="nav-link" href="components/navbar/default.html">Default</a></li>
                                            <li class="nav-item"><a class="nav-link" href="components/navbar/vertical.html">Vertical</a></li>
                                            <li class="nav-item"><a class="nav-link" href="components/navbar/top.html">Top</a></li>
                                            <li class="nav-item"><a class="nav-link" href="components/navbar/combo.html">Combo</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="components/cookie-notice.html">Cookie notice</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/page-headers.html">Page headers</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/pagination.html">Pagination</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/popovers.html">Popovers</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/progress.html">Progress</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/search.html">
                                            <div class="d-flex align-items-center">Search<span class="badge badge-pill ml-2 badge-soft-success">New</span></div>
                                        </a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/scrollspy.html">Scrollspy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/sidepanel.html">Sidepanel</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/spinners.html">Spinners</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/tables.html">Tables</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/tabs.html">Tabs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/toasts.html">Toasts</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/tooltips.html">Tooltips</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#utilities" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="utilities">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-fire"></span></span><span class="nav-link-text">Utilities</span></div>
                                </a>
                                <ul class="nav collapse" id="utilities" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="utilities/borders.html">Borders</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/clearfix.html">Clearfix</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/close-icon.html">Close icon</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/colors.html">Colors</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/display.html">Display</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/embed.html">Embed</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/figures.html">Figures</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/flex.html">Flex</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/grid.html">Grid</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/sizing.html">Sizing</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/spacing.html">Spacing</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/stretched-link.html">Stretched link</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/typography.html">Typography</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/vertical-align.html">Vertical align</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/visibility.html">Visibility</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-plug"></span></span><span class="nav-link-text">Plugins</span></div>
                                </a>
                                <ul class="nav collapse" id="plugins" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="plugins/bootstrap-wizard.html">Bootstrap wizard</a></li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins-charts" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins-charts">Charts</a>
                                        <ul class="nav collapse" id="plugins-charts" data-parent="#plugins">
                                            <li class="nav-item"><a class="nav-link" href="plugins/charts/chart-js.html">Chart js</a></li>
                                            <li class="nav-item"><a class="nav-link" href="plugins/charts/echarts.html">Echarts</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/countdown.html">Countdown</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/data-table.html">Data table</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/date-picker.html">Date picker</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/draggable.html">Draggable</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/dropzone.html">Dropzone</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/emojionearea.html">Emojionearea</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/fancybox.html">Fancybox</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/fontawesome.html">Fontawesome</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/fullcalendar.html">Fullcalendar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/inline-player.html">Inline player</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/jquery-validation.html">Jquery validation</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/lightbox.html">Lightbox</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/lottie.html">Lottie</a></li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins-map" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins-map">Map</a>
                                        <ul class="nav collapse" id="plugins-map" data-parent="#plugins">
                                            <li class="nav-item"><a class="nav-link" href="plugins/map/google-map.html">Google map</a></li>
                                            <li class="nav-item"><a class="nav-link" href="plugins/map/leaflet-map.html">Leaflet map</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/toastr.html">Toastr</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/owl-carousel.html">Owl carousel</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/perfect-scrollbar.html">Perfect scrollbar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/progressbar.html">Progressbar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/raty.html">Raty</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/select2.html">Select2</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/tinymce.html">Tinymce</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/typed-text.html">Typed text</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="navbar-vertical-divider">
                            <hr class="navbar-vertical-hr my-2" />
                        </div>
                        <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#documentation" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="documentation">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-book"></span></span><span class="nav-link-text">Documentation</span></div>
                                </a>
                                <ul class="nav collapse" id="documentation" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="documentation/getting-started.html">Getting started</a></li>
                                    <li class="nav-item"><a class="nav-link" href="documentation/file-structure.html">File structure</a></li>
                                    <li class="nav-item"><a class="nav-link" href="documentation/customization.html">Customization</a></li>
                                    <li class="nav-item"><a class="nav-link" href="documentation/dark-mode.html">Dark mode</a></li>
                                    <li class="nav-item"><a class="nav-link" href="documentation/fluid-layout.html">Fluid layout</a></li>
                                    <li class="nav-item"><a class="nav-link" href="documentation/gulp.html">Gulp</a></li>
                                    <li class="nav-item"><a class="nav-link" href="documentation/RTL.html">RTL</a></li>
                                    <li class="nav-item"><a class="nav-link" href="documentation/plugins.html">Plugins</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="changelog.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-code-branch"></span></span><span class="nav-link-text"> Changelog</span><span class="badge badge-pill ml-2 badge-soft-primary">v2.8.1</span></div>
                                </a></li>
                        </ul>
                        <div class="settings px-3 px-xl-0">
                            <div class="navbar-vertical-divider px-0">
                                <hr class="navbar-vertical-hr my-3" />
                            </div><a class="btn btn-sm btn-block btn-purchase mb-3" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/"> Purchase</a>
                        </div>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg" style="display:none;">
                <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                <a class="navbar-brand mr-1 mr-sm-3" href="index.html">
                    <div class="d-flex align-items-center"><img class="mr-2" src="assets/img/illustrations/falcon.png" alt="" width="40" /><span class="text-sans-serif">falcon</span></div>
                </a>
                <div class="collapse navbar-collapse" id="navbarStandard">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownHome" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                            <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownHome">
                                <div class="bg-white rounded-soft py-2"><a class="dropdown-item" href="index.html">Dashboard</a><a class="dropdown-item" href="home/dashboard-alt.html">Dashboard alt</a><a class="dropdown-item" href="home/feed.html">Feed</a><a class="dropdown-item" href="home/landing.html">Landing</a></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownPages" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownPages">
                                <div class="card navbar-card-pages shadow-none">
                                    <div class="card-body scrollbar perfect-scrollbar max-h-dropdown"><img class="position-absolute b-0 r-0" src="assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                                        <div class="row">
                                            <div class="col-6 col-md-4">
                                                <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="pages/activity.html">Activity</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/associations.html">Associations</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/billing.html">Billing</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/customer-details.html">Customer details</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/event-detail.html">Event detail</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/event-create.html">Event create</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/events.html">Events</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/faq.html">Faq</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/invoice.html">Invoice</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/invite-people.html">Invite people</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/notifications.html">Notifications</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/people.html">People</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/pricing.html">Pricing</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/pricing-alt.html">Pricing alt</a></div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="pages/profile.html">Profile</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/settings.html">Settings</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/starter.html">Starter</a><a class="nav-link py-1 text-700 font-weight-medium" href="calendar.html">Calendar</a><a class="nav-link py-1 text-700 font-weight-medium" href="chat.html">Chat</a><a class="nav-link py-1 text-700 font-weight-medium" href="kanban.html">Kanban</a><a class="nav-link py-1 text-700 font-weight-medium" href="widgets.html">Widgets</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/errors/404.html">404</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/errors/500.html">500</a>
                                                    <div class="nav-link py-1 text-900 font-weight-bold mt-3">Emails</div><a class="nav-link py-1 text-700 font-weight-medium" href="email/inbox.html">Inbox</a><a class="nav-link py-1 text-700 font-weight-medium" href="email/email-detail.html">Email detail</a><a class="nav-link py-1 text-700 font-weight-medium" href="email/compose.html">Compose</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <div class="nav flex-column">
                                                    <div class="nav-link py-1 text-900 font-weight-bold">E-commerce</div><a class="nav-link py-1 text-700 font-weight-medium" href="e-commerce/product-list.html">Product list</a><a class="nav-link py-1 text-700 font-weight-medium" href="e-commerce/product-grid.html">Product grid</a><a class="nav-link py-1 text-700 font-weight-medium" href="e-commerce/product-details.html">Product details</a><a class="nav-link py-1 text-700 font-weight-medium" href="e-commerce/orders.html">Orders</a><a class="nav-link py-1 text-700 font-weight-medium" href="e-commerce/order-details.html">Order details</a><a class="nav-link py-1 text-700 font-weight-medium" href="e-commerce/customers.html">Customers</a><a class="nav-link py-1 text-700 font-weight-medium" href="e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 text-700 font-weight-medium" href="e-commerce/checkout.html">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownDocumentation" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Documentation</a>
                            <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownDocumentation">
                                <div class="bg-white rounded-soft py-2"><a class="dropdown-item" href="documentation/getting-started.html">Getting started</a><a class="dropdown-item" href="documentation/file-structure.html">File structure</a><a class="dropdown-item" href="documentation/customization.html">Customization</a><a class="dropdown-item" href="documentation/dark-mode.html">Dark mode</a><a class="dropdown-item" href="documentation/fluid-layout.html">Fluid layout</a><a class="dropdown-item" href="documentation/gulp.html">Gulp</a><a class="dropdown-item" href="documentation/RTL.html">RTL</a><a class="dropdown-item" href="documentation/plugins.html">Plugins</a></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownComponents" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Components</a>
                            <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownComponents">
                                <div class="card shadow-none navbar-card-components">
                                    <div class="card-body scrollbar perfect-scrollbar max-h-dropdown">
                                        <div class="row">
                                            <div class="col-6 col-xl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="components/accordion.html">Accordion</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/alerts.html">Alerts</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/avatar.html">Avatar</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/background.html">Background</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/badges.html">Badges</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/breadcrumb.html">Breadcrumb</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/bulk-select.html">Bulk select</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/buttons.html">Buttons</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/cards.html">Cards</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/carousel.html">Carousel</a></div>
                                            </div>
                                            <div class="col-6 col-xl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="components/collapse.html">Collapse</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/countup.html">Countup</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/fancyscroll.html">Fancyscroll</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/fancytab.html">Fancytab</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/forms.html">Forms</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/hoverbox.html">Hoverbox</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/list-group.html">List group</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/modals.html">Modals</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/media-object.html">Media object</a></div>
                                            </div>
                                            <div class="col-6 col-xl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="components/navs.html">Navs</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/navbar/default.html">Navbar default</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/navbar/vertical.html">Navbar vertical</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/navbar/top.html">Navbar top</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/navbar/combo.html">Navbar combo</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/page-headers.html">Page headers</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/pagination.html">Pagination</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/popovers.html">Popovers</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/progress.html">Progress</a></div>
                                            </div>
                                            <div class="col-6 col-xl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="components/search.html">Search<span class="badge badge-pill ml-2 fs--2 badge-soft-success">New</span></a><a class="nav-link py-1 text-700 font-weight-medium" href="components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/sidepanel.html">Sidepanel</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/spinners.html">Spinners</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/tables.html">Tables</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/tabs.html">Tabs</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/toasts.html">Toasts</a><a class="nav-link py-1 text-700 font-weight-medium" href="components/tooltips.html">Tooltips</a></div>
                                            </div>
                                        </div>
                                        <div class="nav-link py-1 text-900 font-weight-bold mt-3">Plugins</div>
                                        <div class="row">
                                            <div class="col-6 col-xl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/bootstrap-wizard.html">Bootstrap wizard</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/charts/chart-js.html">Chart js</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/charts/echarts.html">Echarts</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/countdown.html">Countdown</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/data-table.html">Data table</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/date-picker.html">Date picker</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/draggable.html">Draggable</a></div>
                                            </div>
                                            <div class="col-6 col-xl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/dropzone.html">Dropzone</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/emojionearea.html">Emojionearea</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/fancybox.html">Fancybox</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/fontawesome.html">Fontawesome</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/fullcalendar.html">Fullcalendar</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/inline-player.html">Inline player</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/jquery-validation.html">Jquery validation</a></div>
                                            </div>
                                            <div class="col-6 col-xl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/lightbox.html">Lightbox</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/lottie.html">Lottie</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/map/google-map.html">Google map</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/map/leaflet-map.html">Leaflet map</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/toastr.html">Toastr</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/owl-carousel.html">Owl carousel</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/perfect-scrollbar.html">Perfect scrollbar</a></div>
                                            </div>
                                            <div class="col-6 col-xl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/progressbar.html">Progressbar</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/raty.html">Raty</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/select2.html">Select2</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/tinymce.html">Tinymce</a><a class="nav-link py-1 text-700 font-weight-medium" href="plugins/typed-text.html">Typed text</a></div>
                                            </div>
                                        </div>
                                        <div class="nav-link py-1 text-900 font-weight-bold mt-3">Utilities</div>
                                        <div class="row">
                                            <div class="col-6 col-xl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="utilities/borders.html">Borders</a><a class="nav-link py-1 text-700 font-weight-medium" href="utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 text-700 font-weight-medium" href="utilities/close-icon.html">Close icon</a><a class="nav-link py-1 text-700 font-weight-medium" href="utilities/colors.html">Colors</a></div>
                                            </div>
                                            <div class="col-6 col-xl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="utilities/display.html">Display</a><a class="nav-link py-1 text-700 font-weight-medium" href="utilities/embed.html">Embed</a><a class="nav-link py-1 text-700 font-weight-medium" href="utilities/figures.html">Figures</a><a class="nav-link py-1 text-700 font-weight-medium" href="utilities/flex.html">Flex</a></div>
                                            </div>
                                            <div class="col-6 col-xl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="utilities/grid.html">Grid</a><a class="nav-link py-1 text-700 font-weight-medium" href="utilities/sizing.html">Sizing</a><a class="nav-link py-1 text-700 font-weight-medium" href="utilities/spacing.html">Spacing</a><a class="nav-link py-1 text-700 font-weight-medium" href="utilities/stretched-link.html">Stretched link</a></div>
                                            </div>
                                            <div class="col-6 col-xl-3">
                                                <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="utilities/typography.html">Typography</a><a class="nav-link py-1 text-700 font-weight-medium" href="utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 text-700 font-weight-medium" href="utilities/visibility.html">Visibility</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownAuthentication" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Authentication</a>
                            <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownAuthentication">
                                <div class="card shadow-none navbar-card-auth">
                                    <div class="card-body scrollbar perfect-scrollbar max-h-dropdown"><img class="position-absolute b-0 r-0" src="assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                                        <div class="row">
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav-link py-1 text-900 font-weight-bold">Basic</div>
                                                <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/basic/login.html">Login</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/basic/logout.html">Logout</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/basic/register.html">Register</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/basic/forgot-password.html">Forgot password</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/basic/reset-password.html">Reset password</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/basic/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/basic/lock-screen.html">Lock screen</a></div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <div class="nav-link py-1 text-900 font-weight-bold">Split</div><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/split/login.html">Login</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/split/logout.html">Logout</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/split/register.html">Register</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/split/lock-screen.html">Lock screen</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <div class="nav-link py-1 text-900 font-weight-bold mt-3 mt-xxl-0">Card</div><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/card/login.html">Login</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/card/logout.html">Logout</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/card/register.html">Register</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/card/lock-screen.html">Lock screen</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-xxl-3">
                                                <div class="nav flex-column">
                                                    <div class="nav-link py-1 text-900 font-weight-bold mt-3 mt-xxl-0">Special</div><a class="nav-link py-1 text-700 font-weight-medium" href="authentication/wizard.html">Wizard</a><a class="nav-link py-1" href="#!" data-toggle="modal" data-target="#authentication-modal">In Modal</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link px-3 py-0" href="https://prium.github.io/falcon/v3.0.0-beta5/" target="_blank"><img src="assets/img/logos/bootstrap-5.png" alt="" height="35" /></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link settings-popover" href="#settings-modal" data-toggle="modal"><span class="ripple"></span><span class="fa-spin position-absolute a-0 d-flex flex-center"><span class="icon-spin position-absolute a-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                                    </svg></span></span></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block ml-1">
                        <a class="nav-link px-0" href="changelog.html" data-toggle="tooltip" data-placement="bottom" title="Changelog"><span class="fas fa-code-branch fs-4" data-fa-transform="shrink-8"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart fs-4" data-fa-transform="shrink-7"></span><span class="notification-indicator-number">1</span></a>
                    </li>
                    <li class="nav-item dropdown dropdown-on-hover">
                        <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                            <div class="card card-notification shadow-none" style="max-width: 20rem">
                                <div class="card-header">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <h6 class="card-header-title mb-0">Notifications</h6>
                                        </div>
                                        <div class="col-auto"><a class="card-link font-weight-normal" href="#">Mark all as read</a></div>
                                    </div>
                                </div>
                                <div class="list-group list-group-flush font-weight-normal fs--1">
                                    <div class="list-group-title border-bottom">NEW</div>
                                    <div class="list-group-item">
                                        <a class="notification notification-flush bg-200" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-2xl mr-3">
                                                    <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="" />
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                                                <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">💬</span>Just now</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-group-item">
                                        <a class="notification notification-flush bg-200" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-2xl mr-3">
                                                    <div class="avatar-name rounded-circle"><span>AB</span></div>
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                                                <span class="notification-time"><span class="mr-1 fab fa-gratipay text-danger"></span>9hr</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-group-title">EARLIER</div>
                                    <div class="list-group-item">
                                        <a class="notification notification-flush" href="#!">
                                            <div class="notification-avatar">
                                                <div class="avatar avatar-2xl mr-3">
                                                    <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="notification-body">
                                                <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                                                <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">🌤️</span>1d</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-footer text-center border-top"><a class="card-link d-block" href="pages/notifications.html">View all</a></div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                            <div class="bg-white rounded-soft py-2">
                                <a class="dropdown-item font-weight-bold text-warning" href="#!"><span class="fas fa-crown mr-1"></span><span>Go Pro</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#!">Set status</a>
                                <a class="dropdown-item" href="pages/profile.html">Profile &amp; account</a>
                                <a class="dropdown-item" href="#!">Feedback</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages/settings.html">Settings</a>
                                <a class="dropdown-item" href="authentication/basic/logout.html">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="content">
                <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand" style="display:none;">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    <a class="navbar-brand mr-1 mr-sm-3" href="index.html">
                        <div class="d-flex align-items-center"><img class="mr-2" src="assets/img/illustrations/falcon.png" alt="" width="40" /><span class="text-sans-serif">falcon</span></div>
                    </a>
                    <ul class="navbar-nav align-items-center d-none d-lg-block">
                        <li class="nav-item">
                            <div class="search-box">
                                <form class="position-relative" data-toggle="search" data-display="static">
                                    <input class="form-control search-input" type="search" placeholder="Search..." aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>
                                </form>
                                <button class="close" type="button" data-dismiss="search"><span class="fas fa-times"></span></button>
                                <div class="dropdown-menu">
                                    <div class="scrollbar perfect-scrollbar py-3" style="height: 24rem;">
                                        <h6 class="dropdown-header px-card pt-0 pb-2">Recently Browsed</h6>
                                        <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="pages/events.html">
                                            <div class="d-flex align-items-center">
                                                <span class="fas fa-circle mr-2 text-300 fs--2"></span>
                                                <div class="font-weight-normal">Pages <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Events</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="e-commerce/customers.html">
                                            <div class="d-flex align-items-center">
                                                <span class="fas fa-circle mr-2 text-300 fs--2"></span>
                                                <div class="font-weight-normal">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Customers</div>
                                            </div>
                                        </a>
                                        <hr class="border-200" />
                                        <h6 class="dropdown-header px-card pt-0 pb-2">Suggested Filter</h6>
                                        <a class="dropdown-item px-card py-1 fs-0" href="e-commerce/customers.html">
                                            <div class="d-flex align-items-center"><span class="badge font-weight-medium text-decoration-none mr-2 badge-soft-warning">customers:</span>
                                                <div class="flex-1 fs--1">All customers list</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-1 fs-0" href="pages/events.html">
                                            <div class="d-flex align-items-center"><span class="badge font-weight-medium text-decoration-none mr-2 badge-soft-success">events:</span>
                                                <div class="flex-1 fs--1">Latest events in current month</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-1 fs-0" href="e-commerce/product-grid.html">
                                            <div class="d-flex align-items-center"><span class="badge font-weight-medium text-decoration-none mr-2 badge-soft-info">products:</span>
                                                <div class="flex-1 fs--1">Most popular products</div>
                                            </div>
                                        </a>
                                        <hr class="border-200" />
                                        <h6 class="dropdown-header px-card pt-0 pb-2">Files</h6>
                                        <a class="dropdown-item px-card py-2" href="#!">
                                            <div class="d-flex align-items-center">
                                                <div class="file-thumbnail mr-2"><img class="border h-100 w-100 fit-cover rounded-lg" src="assets/img/products/3-thumb.png" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0">iPhone</h6>
                                                    <p class="fs--2 mb-0"><span class="font-weight-semi-bold">Antony</span><span class="font-weight-medium text-600 ml-2">27 Sep at 10:30 AM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-2" href="#!">
                                            <div class="d-flex align-items-center">
                                                <div class="file-thumbnail mr-2"><img class="img-fluid" src="assets/img/icons/zip.png" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0">Falcon v1.8.2</h6>
                                                    <p class="fs--2 mb-0"><span class="font-weight-semi-bold">John</span><span class="font-weight-medium text-600 ml-2">30 Sep at 12:30 PM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="border-200" />
                                        <h6 class="dropdown-header px-card pt-0 pb-2">Members</h6>
                                        <a class="dropdown-item px-card py-2" href="pages/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l status-online mr-2">
                                                    <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0">Anna Karinina</h6>
                                                    <p class="fs--2 mb-0">Technext Limited</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-2" href="pages/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l mr-2">
                                                    <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0">Antony Hopkins</h6>
                                                    <p class="fs--2 mb-0">Brain Trust</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-2" href="pages/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l mr-2">
                                                    <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0">Emma Watson</h6>
                                                    <p class="fs--2 mb-0">Google</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link px-3 py-0" href="https://prium.github.io/falcon/v3.0.0-beta5/" target="_blank"><img src="assets/img/logos/bootstrap-5.png" alt="" height="35" /></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link settings-popover" href="#settings-modal" data-toggle="modal"><span class="ripple"></span><span class="fa-spin position-absolute a-0 d-flex flex-center"><span class="icon-spin position-absolute a-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                                        </svg></span></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart fs-4" data-fa-transform="shrink-7"></span><span class="notification-indicator-number">1</span></a>
                        </li>
                        <li class="nav-item dropdown dropdown-on-hover">
                            <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                                <div class="card card-notification shadow-none" style="max-width: 20rem">
                                    <div class="card-header">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <h6 class="card-header-title mb-0">Notifications</h6>
                                            </div>
                                            <div class="col-auto"><a class="card-link font-weight-normal" href="#">Mark all as read</a></div>
                                        </div>
                                    </div>
                                    <div class="list-group list-group-flush font-weight-normal fs--1">
                                        <div class="list-group-title border-bottom">NEW</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush bg-200" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl mr-3">
                                                        <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                                                    <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">💬</span>Just now</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush bg-200" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl mr-3">
                                                        <div class="avatar-name rounded-circle"><span>AB</span></div>
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                                                    <span class="notification-time"><span class="mr-1 fab fa-gratipay text-danger"></span>9hr</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-title">EARLIER</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl mr-3">
                                                        <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                                                    <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">🌤️</span>1d</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="pages/notifications.html">View all</a></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                                <div class="bg-white rounded-soft py-2">
                                    <a class="dropdown-item font-weight-bold text-warning" href="#!"><span class="fas fa-crown mr-1"></span><span>Go Pro</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Set status</a>
                                    <a class="dropdown-item" href="pages/profile.html">Profile &amp; account</a>
                                    <a class="dropdown-item" href="#!">Feedback</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="pages/settings.html">Settings</a>
                                    <a class="dropdown-item" href="authentication/basic/logout.html">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg navbar-top-combo" data-move-target="#navbarVerticalNav" style="display:none;">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    <a class="navbar-brand mr-1 mr-sm-3" href="index.html">
                        <div class="d-flex align-items-center"><img class="mr-2" src="assets/img/illustrations/falcon.png" alt="" width="40" /><span class="text-sans-serif">falcon</span></div>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarStandard">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownHome" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownHome">
                                    <div class="bg-white rounded-soft py-2"><a class="dropdown-item" href="index.html">Dashboard</a><a class="dropdown-item" href="home/dashboard-alt.html">Dashboard alt</a><a class="dropdown-item" href="home/feed.html">Feed</a><a class="dropdown-item" href="home/landing.html">Landing</a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownPages" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownPages">
                                    <div class="card navbar-card-pages shadow-none">
                                        <div class="card-body scrollbar perfect-scrollbar max-h-dropdown"><img class="position-absolute b-0 r-0" src="assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                                            <div class="row">
                                                <div class="col-6 col-md-4">
                                                    <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="pages/activity.html">Activity</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/associations.html">Associations</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/billing.html">Billing</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/customer-details.html">Customer details</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/event-detail.html">Event detail</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/event-create.html">Event create</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/events.html">Events</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/faq.html">Faq</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/invoice.html">Invoice</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/invite-people.html">Invite people</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/notifications.html">Notifications</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/people.html">People</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/pricing.html">Pricing</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/pricing-alt.html">Pricing alt</a></div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="nav flex-column"><a class="nav-link py-1 text-700 font-weight-medium" href="pages/profile.html">Profile</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/settings.html">Settings</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/starter.html">Starter</a><a class="nav-link py-1 text-700 font-weight-medium" href="calendar.html">Calendar</a><a class="nav-link py-1 text-700 font-weight-medium" href="chat.html">Chat</a><a class="nav-link py-1 text-700 font-weight-medium" href="kanban.html">Kanban</a><a class="nav-link py-1 text-700 font-weight-medium" href="widgets.html">Widgets</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/errors/404.html">404</a><a class="nav-link py-1 text-700 font-weight-medium" href="pages/errors/500.html">500</a>
                                                        <div class="nav-link py-1 text-900 font-weight-bold mt-3">Emails</div><a class="nav-link py-1 text-700 font-weight-medium" href="email/inbox.html">Inbox</a><a class="nav-link py-1 text-700 font-weight-medium" href="email/email-detail.html">Email detail</a><a class="nav-link py-1 text-700 font-weight-medium" href="email/compose.html">Compose</a>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="nav flex-column">
                                                        <div class="nav-link py-1 text-900 font-weight-bold">E-commerce</div><a class="nav-link py-1 text-700 font-weight-medium" href="e-commerce/product-list.html">Product list</a><a class="nav-link py-1 text-700 font-weight-medium" href="e-commerce/product-grid.html">Product grid</a><a class="nav-link py-1 text-700 font-weight-medium" href="e-commerce/product-details.html">Product details</a><a class="nav-link py-1 text-700 font-weight-medium" href="e-commerce/orders.html">Orders</a><a class="nav-link py-1 text-700 font-weight-medium" href="e-commerce/order-details.html">Order details</a><a class="nav-link py-1 text-700 font-weight-medium" href="e-commerce/customers.html">Customers</a><a class="nav-link py-1 text-700 font-weight-medium" href="e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 text-700 font-weight-medium" href="e-commerce/checkout.html">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link dropdown-toggle" id="navbarDropdownDocumentation" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Documentation</a>
                                <div class="dropdown-menu dropdown-menu-card" aria-labelledby="navbarDropdownDocumentation">
                                    <div class="bg-white rounded-soft py-2"><a class="dropdown-item" href="documentation/getting-started.html">Getting started</a><a class="dropdown-item" href="documentation/file-structure.html">File structure</a><a class="dropdown-item" href="documentation/customization.html">Customization</a><a class="dropdown-item" href="documentation/dark-mode.html">Dark mode</a><a class="dropdown-item" href="documentation/fluid-layout.html">Fluid layout</a><a class="dropdown-item" href="documentation/gulp.html">Gulp</a><a class="dropdown-item" href="documentation/RTL.html">RTL</a><a class="dropdown-item" href="documentation/plugins.html">Plugins</a></div>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="widgets.html">Widgets</a></li>
                        </ul>
                    </div>
                    <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link px-3 py-0" href="https://prium.github.io/falcon/v3.0.0-beta5/" target="_blank"><img src="assets/img/logos/bootstrap-5.png" alt="" height="35" /></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link settings-popover" href="#settings-modal" data-toggle="modal"><span class="ripple"></span><span class="fa-spin position-absolute a-0 d-flex flex-center"><span class="icon-spin position-absolute a-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                                        </svg></span></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart fs-4" data-fa-transform="shrink-7"></span><span class="notification-indicator-number">1</span></a>
                        </li>
                        <li class="nav-item dropdown dropdown-on-hover">
                            <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                                <div class="card card-notification shadow-none" style="max-width: 20rem">
                                    <div class="card-header">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <h6 class="card-header-title mb-0">Notifications</h6>
                                            </div>
                                            <div class="col-auto"><a class="card-link font-weight-normal" href="#">Mark all as read</a></div>
                                        </div>
                                    </div>
                                    <div class="list-group list-group-flush font-weight-normal fs--1">
                                        <div class="list-group-title border-bottom">NEW</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush bg-200" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl mr-3">
                                                        <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                                                    <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">💬</span>Just now</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush bg-200" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl mr-3">
                                                        <div class="avatar-name rounded-circle"><span>AB</span></div>
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                                                    <span class="notification-time"><span class="mr-1 fab fa-gratipay text-danger"></span>9hr</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-title">EARLIER</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl mr-3">
                                                        <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                                                    <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">🌤️</span>1d</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="pages/notifications.html">View all</a></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                                <div class="bg-white rounded-soft py-2">
                                    <a class="dropdown-item font-weight-bold text-warning" href="#!"><span class="fas fa-crown mr-1"></span><span>Go Pro</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Set status</a>
                                    <a class="dropdown-item" href="pages/profile.html">Profile &amp; account</a>
                                    <a class="dropdown-item" href="#!">Feedback</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="pages/settings.html">Settings</a>
                                    <a class="dropdown-item" href="authentication/basic/logout.html">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <script>
                    var navbarPosition = localStorage.getItem('navbarPosition');
                    var navbarVertical = document.querySelector('.navbar-vertical');
                    var navbarTopVertical = document.querySelector('.content .navbar-top');
                    var navbarTop = document.querySelector('[data-layout] .navbar-top');
                    var navbarTopCombo = document.querySelector('.content .navbar-top-combo');

                    if (navbarPosition === 'top') {
                        navbarTop.removeAttribute('style');
                        navbarTopVertical.parentNode.removeChild(navbarTopVertical);
                        navbarVertical.parentNode.removeChild(navbarVertical);
                        navbarTopCombo.parentNode.removeChild(navbarTopCombo);
                    } else if (navbarPosition === 'combo') {
                        navbarVertical.removeAttribute('style');
                        navbarTopCombo.removeAttribute('style');
                        navbarTop.parentNode.removeChild(navbarTop);
                        navbarTopVertical.parentNode.removeChild(navbarTopVertical);
                    } else {
                        navbarVertical.removeAttribute('style');
                        navbarTopVertical.removeAttribute('style');
                        navbarTop.parentNode.removeChild(navbarTop);
                        navbarTopCombo.parentNode.removeChild(navbarTopCombo);
                    }
                </script>
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