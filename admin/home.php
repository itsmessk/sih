<h1 class="dark">Welcome to
    <?php echo $_settings->info('name') ?>
</h1>

<hr>
<style>
    .direct-chat-messages {
        transform: translate(0, 0);
        height: 280px;
        overflow: auto;
        padding: 10px;
    }

    .small-box .small-box-icon {
        position: absolute;
        top: 15px;
        right: 15px;
        z-index: 0;
        height: 70px;
        font-size: 70px;
        color: rgba(0, 0, 0, 0.15);
        transition: transform 0.3s linear;
        font-size: calc(1.285rem + 0.42vw);
    }

    .card-body {
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    /* Custom styles for .d-flex */
    .d-flex {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

    /* Custom styles for .justify-content-between */
    .justify-content-between {
        justify-content: space-between;
    }

    /* Custom styles for .align-items-center */
    .align-items-center {
        align-items: center;
    }

    /* Custom styles for .border-bottom */
    .border-bottom {
        border-bottom: 1px solid #ddd;
    }

    /* Custom styles for .mb-3 */
    .mb-3 {
        margin-bottom: 3rem;
    }
</style>
<main class="app-main"><!--begin::App Content Header-->

    <div class="app-content"><!--begin::Container-->
        <div class="container-fluid"><!-- Info boxes -->
            <div class="row"><!--begin::Col-->
                <div class="col-lg-3 col-6"><!--begin::Small Box Widget 1-->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>150</h3>
                            <p>Active Procurements</p>
                        </div><svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z">
                            </path>
                        </svg><a href="#"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i></a>
                    </div><!--end::Small Box Widget 1-->
                </div><!--end::Col-->
                <div class="col-lg-3 col-6"><!--begin::Small Box Widget 2-->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>88<sup class="fs-5">%</sup></h3>
                            <p>MSE Procurement Rate</p>
                        </div><svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z">
                            </path>
                        </svg><a href="#"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i></a>
                    </div><!--end::Small Box Widget 2-->
                </div><!--end::Col-->
                <div class="col-lg-3 col-6"><!--begin::Small Box Widget 3-->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>
                            <p>Vendor Registrations</p>
                        </div><svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                            </path>
                        </svg><a href="#"
                            class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i></a>
                    </div><!--end::Small Box Widget 3-->
                </div><!--end::Col-->
                <div class="col-lg-3 col-6"><!--begin::Small Box Widget 4-->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Pending Procurements</p>
                        </div><svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z">
                            </path>
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z">
                            </path>
                        </svg><a href="#"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i></a>
                    </div><!--end::Small Box Widget 4-->
                </div><!--end::Col-->
            </div><!--end::Row--><!--begin::Row-->


            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">Monthly Recap Report</h5>
                            <div class="card-tools"><button type="button" class="btn btn-tool"
                                    data-lte-toggle="card-collapse"><i data-lte-icon="expand"
                                        class="bi bi-plus-lg"></i><i data-lte-icon="collapse"
                                        class="bi bi-dash-lg"></i></button>
                                <div class="btn-group"><button type="button" class="btn btn-tool dropdown-toggle"
                                        data-bs-toggle="dropdown"><i class="bi bi-wrench"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" role="menu"><a href="#"
                                            class="dropdown-item">Action</a><a href="#" class="dropdown-item">Another
                                            action</a><a href="#" class="dropdown-item">
                                            Something else here
                                        </a><a class="dropdown-divider"></a><a href="#" class="dropdown-item">Separated
                                            link</a></div>
                                </div><button type="button" class="btn btn-tool" data-lte-toggle="card-remove"><i
                                        class="bi bi-x-lg"></i></button>
                            </div>
                        </div><!-- /.card-header -->

                        <div class="card-body"><!--begin::Row-->
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="center"><strong>Procurement: 1 May, 2023 - 30 Oct, 2023</strong></p>
                                    <div id="sales-chart"></div>
                                </div><!-- /.col -->
                                <div class="col-md-4">
                                    <p class="center"><strong>Goal Completion</strong></p>
                                    <div class="progress-group">
                                        Procurements Done:
                                        <span class="float-end"><b>160</b>/200</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-primary" style="width: 80%"></div>
                                        </div>
                                    </div><!-- /.progress-group -->
                                    <div class="progress-group">
                                        Payments Made:
                                        <span class="float-end"><b>310</b>/400</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-danger" style="width: 75%"></div>
                                        </div>
                                    </div><!-- /.progress-group -->
                                    <div class="progress-group"><span class="progress-text">Vendors
                                            Registered:</span><span class="float-end"><b>180</b>/300</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" style="width: 60%"></div>
                                        </div>
                                    </div><!-- /.progress-group -->
                                    <div class="progress-group">
                                        MSE Procurements:
                                        <span class="float-end"><b>250</b>/500</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-warning" style="width: 50%"></div>
                                        </div>
                                    </div><!-- /.progress-group -->
                                </div><!-- /.col -->
                            </div><!--end::Row-->
                        </div><!-- ./card-body -->
                        <div class="card-footer"><!--begin::Row-->
                            <div class="row">
                                <div class="col-md-4 col-6">
                                    <div class="center border-end"><span class="text-success"><i
                                                class="bi bi-caret-up-fill"></i> 17%
                                        </span>
                                        <h5 class="fw-bold mb-0">₹35,210,989.43</h5><span class="uppercase">TOTAL
                                            PROCUREMENTS</span>
                                    </div>
                                </div><!-- /.col -->
                                <div class="col-md-4 col-6">
                                    <!-- <div class="center border-end"><span class="text-info"><i
                                                class="bi bi-caret-left-fill"></i> 4%
                                        </span> -->
                                    <div class="center"><span class="text-danger"><i class="bi bi-caret-down-fill"></i>
                                            8%
                                        </span>
                                        <h5 class="fw-bold mb-0">₹29,390,434.90</h5><span class="uppercase">TOTAL
                                            PAYMENTS</span>
                                    </div>
                                </div><!-- /.col -->
                                <!-- <div class="col-md-3 col-6">
                                    <div class="center border-end"><span class="text-success"><i
                                                class="bi bi-caret-up-fill"></i> 20%
                                        </span>
                                        <h5 class="fw-bold mb-0">₹24,813,888.53</h5><span class="uppercase">TOTAL
                                            BUDGET</span>
                                    </div>
                                </div> --><!-- /.col -->
                                <div class="col-md-4 col-6">
                                    <div class="center border-end"><span class="text-info"><i
                                                class="bi bi-caret-left-fill"></i> 0%
                                        </span>
                                        <h5 class="fw-bold mb-0">900</h5><span class="uppercase">GOAL
                                            COMPLETIONS</span>
                                    </div>
                                </div>
                            </div><!--end::Row-->
                        </div><!-- /.card-footer -->
                    </div><!-- /.card -->
                </div><!-- /.col -->
            </div><!--end::Row--><!--begin::Row-->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Vendor Registrations</h3><a href="javascript:void(0);"
                                    class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View
                                    Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column"><span class="fw-bold fs-5">85</span><span>Vendors
                                        Registered<br> Over
                                        Time</span></p>
                                <p class="ms-auto d-flex flex-column end"><span class="text-success"><i
                                            class="bi bi-arrow-up"></i> 12.5%
                                    </span><span class="secondary">Since last week</span></p>
                            </div><!-- /.d-flex -->
                            <div class="position-relative mb-4">
                                <div id="visitors-chart"></div>
                            </div>
                            <div class="d-flex flex-row justify-content-end"><span class="me-2"><i
                                        class="bi bi-square-fill text-primary"></i> This Week
                                </span><span><i class="bi bi-square-fill text-secondary"></i> Last Week
                                </span></div>
                        </div>
                    </div><!-- /.card -->
                    <div class="card mb-4">
                        <div class="card-header border-0">
                            <h3 class="card-title">Recent Procurements</h3>
                            <div class="card-tools"><a href="#" class="btn btn-tool btn-sm"><i
                                        class="bi bi-download"></i></a><a href="#" class="btn btn-tool btn-sm"><i
                                        class="bi bi-list"></i></a></div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped align-middle">
                                <thead>
                                    <tr>
                                        <th>Product/ Services</th>
                                        <th>Price</th>
                                        <th>Supplier</th>
                                        <!-- <th>More</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><!-- <img src="../dist/assets/img/default-150x150.png" alt="Product 1"
                                                class="rounded-circle img-size-32 me-2"> -->
                                            Coolers for 53 MVA
                                            Generator Transformer
                                        </td>
                                        <td>₹130000 INR</td>
                                        <td><!-- <small class="text-success me-1"><i class="bi bi-arrow-up"></i> -->
                                            <!-- 12% -->
                                            </small>
                                            Shri Hardwares
                                        </td>
                                        <!-- <td><a href="#" class="secondary"><i class="bi bi-search"></i></a></td> -->
                                    </tr>
                                    <tr>
                                        <td><!-- <img src="../dist/assets/img/default-150x150.png" alt="Product 1"
                                                class="rounded-circle img-size-32 me-2"> -->
                                            Automatic Weather Stations
                                        </td>
                                        <td>₹1500000 INR</td>
                                        <td><!-- <small class="text-success me-1"><i class="bi bi-arrow-up"></i> -->
                                            <!-- 12% -->
                                            </small>
                                            Smith Innovations
                                        </td>
                                        <!-- <td><a href="#" class="secondary"><i class="bi bi-search"></i></a></td> -->
                                    </tr>
                                    <tr>
                                        <td><!-- <img src="../dist/assets/img/default-150x150.png" alt="Product 1"
                                                class="rounded-circle img-size-32 me-2"> -->
                                            Spares for UAB/SSB
                                        </td>
                                        <td>₹190000 INR</td>
                                        <td><!-- <small class="text-success me-1"><i class="bi bi-arrow-up"></i> -->
                                            <!-- 12% -->
                                            </small>
                                            Pooja Agencies
                                        </td>
                                        <!-- <td><a href="#" class="secondary"><i class="bi bi-search"></i></a></td> -->
                                    </tr>
                                    <tr>
                                        <td><!-- <img src="../dist/assets/img/default-150x150.png" alt="Product 1"
                                                class="rounded-circle img-size-32 me-2"> -->
                                            Flow Meters for Cooling
                                            water system
                                            <span class="badge bg-danger">NEW</span>
                                        </td>
                                        <td>₹1200000 INR</td>
                                        <td><!-- <small class="text-success me-1"><i class="bi bi-arrow-up"></i> -->
                                            <!-- 12% -->
                                            </small>
                                            Shri Hardwares
                                        </td>
                                        <!-- <td><a href="#" class="secondary"><i class="bi bi-search"></i></a></td> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- /.card -->
                </div><!-- /.col-md-6 -->
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Procurements</h3><a href="javascript:void(0);"
                                    class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View
                                    Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column"><span
                                        class="fw-bold fs-5">₹55,210,989.43</span><span>Procurements
                                        Over Time</span></p>
                                <p class="ms-auto d-flex flex-column end"><span class="text-success"><i
                                            class="bi bi-arrow-up"></i> 33.1%
                                    </span><span class="text-secondary">Since Past Year</span></p>
                            </div><!-- /.d-flex -->
                            <div class="position-relative mb-4">
                                <div id="sales"></div>
                            </div>
                            <div class="d-flex flex-row justify-content-end"><span class="me-2"><i
                                        class="bi bi-square-fill text-primary"></i> This year
                                </span><span><i class="bi bi-square-fill text-secondary"></i> Last year
                                </span></div>
                        </div>
                    </div><!-- /.card -->
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Portal Overview</h3>
                            <div class="card-tools"><a href="#" class="btn btn-sm btn-tool"><i
                                        class="bi bi-download"></i></a><a href="#" class="btn btn-sm btn-tool"><i
                                        class="bi bi-list"></i></a></div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                <p class="success fs-2"><svg height="32" fill="none" stroke="currentColor"
                                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3">
                                        </path>
                                    </svg></p>
                                <p class="d-flex flex-column end"><span class="fw-bold"><i
                                            class="bi bi-graph-up-arrow text-success"></i> 12%
                                    </span><span class="secondary">PAYMENT RATE</span></p>
                            </div><!-- /.d-flex -->
                            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                <p class="info fs-2"><svg height="32" fill="none" stroke="currentColor"
                                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z">
                                        </path>
                                    </svg></p>
                                <p class="d-flex flex-column end"><span class="fw-bold"><i
                                            class="bi bi-graph-up-arrow text-info"></i> 0.8%
                                    </span><span class="secondary">PROCUREMENT GROWTH</span></p>
                            </div><!-- /.d-flex -->
                            <div class="d-flex justify-content-between align-items-center mb-0">
                                <p class="danger fs-2"><svg height="32" fill="none" stroke="currentColor"
                                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z">
                                        </path>
                                    </svg></p>
                                <p class="d-flex flex-column end"><span class="fw-bold"><i
                                            class="bi bi-graph-down-arrow text-danger"></i>
                                        1%
                                    </span><span class="secondary">VENDOR REGISTRATION RATE</span></p>
                            </div><!-- /.d-flex -->
                        </div>
                    </div>
                </div><!-- /.col-md-6 -->
            </div>

            
            <div class="row"><!-- Start col -->
                <div class="col-md-8"><!--begin::Row-->
                    <div class="row g-4 mb-2">
                        <div class="col-md-6"><!-- DIRECT CHAT -->
                            <div class="card direct-chat direct-chat-warning">
                                <div class="card-header">
                                    <h3 class="card-title">Direct Chat</h3>
                                    <div class="card-tools"><span title="3 New Messages" class="badge bg-warning">
                                            3
                                        </span><button type="button" class="btn btn-tool"
                                            data-lte-toggle="card-collapse"><i data-lte-icon="expand"
                                                class="bi bi-plus-lg"></i><i data-lte-icon="collapse"
                                                class="bi bi-dash-lg"></i></button><button type="button"
                                            class="btn btn-tool" title="Contacts" data-lte-toggle="chat-pane"><i
                                                class="bi bi-chat-fill"></i></button><button type="button"
                                            class="btn btn-tool" data-lte-toggle="card-remove"><i
                                                class="bi bi-x-lg"></i></button></div>
                                </div><!-- /.card-header -->
                                <div class="card-body"><!-- Conversations are loaded here -->
                                    <div class="direct-chat-messages"><!-- Message. Default to the start -->
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-infos clearfix"><span
                                                    class="direct-chat-name float-start">
                                                    Assaam Hydro Equipments
                                                </span><span class="direct-chat-timestamp float-end">
                                                    23 Sep 2:00 pm
                                                </span></div><!-- /.direct-chat-infos --><img class="direct-chat-img"
                                                src="../uploads/avatar3.png"
                                                alt="message user image"><!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                            Hello, I'm reaching out to inquire about the payment status for the recent procurement we delivered to your company.
                                            </div><!-- /.direct-chat-text -->
                                        </div><!-- /.direct-chat-msg --><!-- Message to the end -->
                                        <div class="direct-chat-msg end">
                                            <div class="direct-chat-infos clearfix"><span
                                                    class="direct-chat-name float-end">
                                                    Vendor Manager
                                                </span><span class="direct-chat-timestamp float-start">
                                                    23 Sep 2:05 pm
                                                </span></div><!-- /.direct-chat-infos --><img class="direct-chat-img"
                                                src="../uploads/manager.jpg"
                                                alt="message user image"><!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                            Hello! I appreciate your inquiry. Please Wait I'll check.
                                            Certainly,your reference number for this procurement is PO-1264534.? 
                                            </div><!-- /.direct-chat-text -->
                                        </div><!-- /.direct-chat-msg --><!-- Message. Default to the start -->
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-infos clearfix"><span
                                                    class="direct-chat-name float-start">
                                                    Assaam Hydro Equipments
                                                </span><span class="direct-chat-timestamp float-end">
                                                    23 Sep 5:37 pm
                                                </span></div><!-- /.direct-chat-infos --><img class="direct-chat-img"
                                                src="../uploads/avatar3.png"
                                                alt="message user image"><!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                            Yeah thats what I am reaching out for.
                                            </div><!-- /.direct-chat-text -->
                                        </div><!-- /.direct-chat-msg --><!-- Message to the end -->
                                        <div class="direct-chat-msg end">
                                            <div class="direct-chat-infos clearfix"><span
                                                    class="direct-chat-name float-end">
                                                    Vendor Manager
                                                </span><span class="direct-chat-timestamp float-start">
                                                    23 Sep 6:10 pm
                                                </span></div><!-- /.direct-chat-infos --><img class="direct-chat-img"
                                                src="../uploads/manager.jpg"
                                                alt="message user image"><!-- /.direct-chat-img -->
                                            <div class="direct-chat-text"> That's great to hear. I appreciate your prompt response. Is there a way to track the payment once it's been processed?</div>
                                            <!-- /.direct-chat-text -->
                                        </div><!-- /.direct-chat-msg -->
                                    </div><!-- /.direct-chat-messages--><!-- Contacts are loaded here -->
                                    <div class="direct-chat-contacts">
                                        <ul class="contacts-list">
                                            <li><a href="#"><img class="contacts-list-img"
                                                        src="../dist/assets/img/user1-128x128.jpg" alt="User Avatar">
                                                    <div class="contacts-list-info"><span class="contacts-list-name">
                                                            Count Dracula
                                                            <small class="contacts-list-date float-end">
                                                                2/28/2023
                                                            </small></span><span class="contacts-list-msg">
                                                            How have you been? I was...
                                                        </span></div><!-- /.contacts-list-info -->
                                                </a></li><!-- End Contact Item -->
                                            <li><a href="#"><img class="contacts-list-img"
                                                        src="../dist/assets/img/user7-128x128.jpg" alt="User Avatar">
                                                    <div class="contacts-list-info"><span class="contacts-list-name">
                                                            Sarah Doe
                                                            <small class="contacts-list-date float-end">
                                                                2/23/2023
                                                            </small></span><span class="contacts-list-msg">
                                                            I will be waiting for...
                                                        </span></div><!-- /.contacts-list-info -->
                                                </a></li><!-- End Contact Item -->
                                            <li><a href="#"><img class="contacts-list-img"
                                                        src="../dist/assets/img/user3-128x128.jpg" alt="User Avatar">
                                                    <div class="contacts-list-info"><span class="contacts-list-name">
                                                            Nadia Jolie
                                                            <small class="contacts-list-date float-end">
                                                                2/20/2023
                                                            </small></span><span class="contacts-list-msg">
                                                            I'll call you back at...
                                                        </span></div><!-- /.contacts-list-info -->
                                                </a></li><!-- End Contact Item -->
                                            <li><a href="#"><img class="contacts-list-img"
                                                        src="../dist/assets/img/user5-128x128.jpg" alt="User Avatar">
                                                    <div class="contacts-list-info"><span class="contacts-list-name">
                                                            Nora S. Vans
                                                            <small class="contacts-list-date float-end">
                                                                2/10/2023
                                                            </small></span><span class="contacts-list-msg">
                                                            Where is your new...
                                                        </span></div><!-- /.contacts-list-info -->
                                                </a></li><!-- End Contact Item -->
                                            <li><a href="#"><img class="contacts-list-img"
                                                        src="../dist/assets/img/user6-128x128.jpg" alt="User Avatar">
                                                    <div class="contacts-list-info"><span class="contacts-list-name">
                                                            John K.
                                                            <small class="contacts-list-date float-end">
                                                                1/27/2023
                                                            </small></span><span class="contacts-list-msg">
                                                            Can I take a look at...
                                                        </span></div><!-- /.contacts-list-info -->
                                                </a></li><!-- End Contact Item -->
                                            <li><a href="#"><img class="contacts-list-img"
                                                        src="../dist/assets/img/user8-128x128.jpg" alt="User Avatar">
                                                    <div class="contacts-list-info"><span class="contacts-list-name">
                                                            Kenneth M.
                                                            <small class="contacts-list-date float-end">
                                                                1/4/2023
                                                            </small></span><span class="contacts-list-msg">
                                                            Never mind I found...
                                                        </span></div><!-- /.contacts-list-info -->
                                                </a></li><!-- End Contact Item -->
                                        </ul><!-- /.contacts-list -->
                                    </div><!-- /.direct-chat-pane -->
                                </div><!-- /.card-body -->
                                <div class="card-footer">
                                    <form action="#" method="post">
                                        <div class="input-group"><input type="text" name="message"
                                                placeholder="Type Message ..." class="form-control"><span
                                                class="input-group-append"><button type="button"
                                                    class="btn btn-warning">
                                                    Send
                                                </button></span></div>
                                    </form>
                                </div><!-- /.card-footer-->
                            </div><!-- /.direct-chat -->
                        </div><!-- /.col -->
                        <div class="col-md-6"><!-- USERS LIST -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Latest Vendors</h3>
                                    <div class="card-tools"><span class="badge bg-danger">
                                            8 New Vendors
                                        </span><button type="button" class="btn btn-tool"
                                            data-lte-toggle="card-collapse"><i data-lte-icon="expand"
                                                class="bi bi-plus-lg"></i><i data-lte-icon="collapse"
                                                class="bi bi-dash-lg"></i></button><button type="button"
                                            class="btn btn-tool" data-lte-toggle="card-remove"><i
                                                class="bi bi-x-lg"></i></button></div>
                                </div><!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="row center m-1">
                                        <div class="col-3 p-2"><img class="img-fluid rounded-circle"
                                                src="../uploads/avatar1.png" alt="User Image"><a
                                                class="btn fw-bold fs-7 secondary truncate w-100 p-0" href="#">
                                                Northeast Power Solutions Pvt. Ltd.
                                            </a>
                                            <!-- <div class="fs-8">Today</div> -->
                                        </div>
                                        <div class="col-3 p-2"><img class="img-fluid rounded-circle"
                                                src="../uploads/avatar2.png" alt="User Image"><a
                                                class="btn fw-bold fs-7 secondary truncate w-100 p-0" href="#">
                                                Assam Hydro Equipments Pvt. Ltd.
                                            </a>
                                            <!-- <div class="fs-8">Yesterday</div> -->
                                        </div>
                                        <div class="col-3 p-2"><img class="img-fluid rounded-circle"
                                                src="../uploads/avatar1.png" alt="User Image"><a
                                                class="btn fw-bold fs-7 secondary truncate w-100 p-0" href="#">
                                                Sikkim Power Solutions Pvt. Ltd.
                                            </a>
                                            <!--                                             <div class="fs-8">12 Jan</div> -->
                                        </div>
                                        <div class="col-3 p-2"><img class="img-fluid rounded-circle"
                                                src="../uploads/avatar2.png" alt="User Image"><a
                                                class="btn fw-bold fs-7 secondary truncate w-100 p-0" href="#">
                                                Brahmaputra Electricals and Services
                                            </a>
                                            <!-- <div class="fs-8">12 Jan</div> -->
                                        </div>
                                        <div class="col-3 p-2"><img class="img-fluid rounded-circle"
                                                src="../uploads/avatar1.png" alt="User Image"><a
                                                class="btn fw-bold fs-7 secondary truncate w-100 p-0" href="#">
                                                Tripura Energy Equipment Suppliers
                                            </a>
                                            <!-- <div class="fs-8">13 Jan</div> -->
                                        </div>
                                        <div class="col-3 p-2"><img class="img-fluid rounded-circle"
                                                src="../uploads/avatar2.png" alt="User Image"><a
                                                class="btn fw-bold fs-7 secondary truncate w-100 p-0" href="#">
                                                Meghalaya Power Innovations Ltd.
                                            </a>
                                            <!-- <div class="fs-8">14 Jan</div> -->
                                        </div>
                                        <div class="col-3 p-2"><img class="img-fluid rounded-circle"
                                                src="../uploads/avatar1.png" alt="User Image"><a
                                                class="btn fw-bold fs-7 secondary truncate w-100 p-0" href="#">
                                                Himalayan Energy Technologies Ltd.
                                            </a>
                                            <!-- <div class="fs-8">15 Jan</div> -->
                                        </div>
                                        <div class="col-3 p-2"><img class="img-fluid rounded-circle"
                                                src="../uploads/avatar2.png" alt="User Image"><a
                                                class="btn fw-bold fs-7 secondary truncate w-100 p-0" href="#">
                                                Arunachal Renewable Energy Corporation
                                            </a>
                                            <!-- <div class="fs-8">15 Jan</div> -->
                                        </div>
                                    </div><!-- /.users-list -->
                                </div><!-- /.card-body -->
                                <div class="card-footer center"><a href="javascript:"
                                        class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View
                                        All Vendors</a></div><!-- /.card-footer -->
                            </div><!-- /.card -->
                        </div><!-- /.col -->
                    </div><!--end::Row--><!--begin::Latest Order Widget-->
                    <!-- <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Latest Orders</h3>
                            <div class="card-tools"><button type="button" class="btn btn-tool"
                                    data-lte-toggle="card-collapse"><i data-lte-icon="expand"
                                        class="bi bi-plus-lg"></i><i data-lte-icon="collapse"
                                        class="bi bi-dash-lg"></i></button><button type="button" class="btn btn-tool"
                                    data-lte-toggle="card-remove"><i class="bi bi-x-lg"></i></button></div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Item</th>
                                            <th>Status</th>
                                            <th>Popularity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html"
                                                    class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR9842</a>
                                            </td>
                                            <td>Call of Duty IV</td>
                                            <td><span class="badge bg-success">
                                                    Shipped
                                                </span></td>
                                            <td>
                                                <div id="table-sparkline-1"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html"
                                                    class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR1848</a>
                                            </td>
                                            <td>Samsung Smart TV</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td>
                                                <div id="table-sparkline-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html"
                                                    class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR7429</a>
                                            </td>
                                            <td>iPhone 6 Plus</td>
                                            <td><span class="badge bg-danger">
                                                    Delivered
                                                </span></td>
                                            <td>
                                                <div id="table-sparkline-3"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html"
                                                    class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR7429</a>
                                            </td>
                                            <td>Samsung Smart TV</td>
                                            <td><span class="badge bg-info">Processing</span></td>
                                            <td>
                                                <div id="table-sparkline-4"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html"
                                                    class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR1848</a>
                                            </td>
                                            <td>Samsung Smart TV</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td>
                                                <div id="table-sparkline-5"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html"
                                                    class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR7429</a>
                                            </td>
                                            <td>iPhone 6 Plus</td>
                                            <td><span class="badge bg-danger">
                                                    Delivered
                                                </span></td>
                                            <td>
                                                <div id="table-sparkline-6"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html"
                                                    class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR9842</a>
                                            </td>
                                            <td>Call of Duty IV</td>
                                            <td><span class="badge bg-success">Shipped</span></td>
                                            <td>
                                                <div id="table-sparkline-7"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>--><!-- /.card-body -->
                    <!-- <div class="card-footer clearfix"><a href="javascript:void(0)"
                                class="btn btn-sm btn-primary float-start">
                                Place New Order
                            </a><a href="javascript:void(0)" class="btn btn-sm btn-secondary float-end">
                                View All Orders
                            </a></div> --><!-- /.card-footer -->

                </div><!-- /.card -->
                <div class="col-md-4"><!-- Info Boxes Style 2 -->
                    <div class="info-box mb-3 bg-warning"><span class="info-box-icon"><i
                                class="bi bi-tag-fill"></i></span>
                        <div class="info-box-content"><span class="info-box-text">Total Procurement</span><span
                                class="info-box-number">52,000</span></div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                    <div class="info-box mb-3 bg-success"><span class="info-box-icon"><i
                                class="bi bi-heart-fill"></i></span>
                        <div class="info-box-content"><span class="info-box-text">Total Vendors</span><span
                                class="info-box-number">2,050</span></div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                    <div class="info-box mb-3 bg-danger"><span class="info-box-icon"><i
                                class="bi bi-cloud-download"></i></span>
                        <div class="info-box-content"><span class="info-box-text">Vendor Adoption</span><span
                                class="info-box-number">49%</span></div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                    <div class="info-box mb-3 bg-info"><span class="info-box-icon"><i
                                class="bi bi-chat-fill"></i></span>
                        <div class="info-box-content"><span class="info-box-text">Messages From Vendors</span><span
                                class="info-box-number">16</span></div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                </div><!-- /.col -->




                <!-- <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Recently Added Products</h3>
                            <div class="card-tools"><button type="button" class="btn btn-tool"
                                    data-lte-toggle="card-collapse"><i data-lte-icon="expand"
                                        class="bi bi-plus-lg"></i><i data-lte-icon="collapse"
                                        class="bi bi-dash-lg"></i></button><button type="button" class="btn btn-tool"
                                    data-lte-toggle="card-remove"><i class="bi bi-x-lg"></i></button></div>
                        </div>
                        <div class="card-body p-0">
                            <div class="px-2">
                                <div class="d-flex border-top py-2 px-1">
                                    <div class="col-2"><img src="../dist/assets/img/default-150x150.png"
                                            alt="Product Image" class="img-size-50"></div>
                                    <div class="col-10"><a href="javascript:void(0)" class="fw-bold">
                                            Samsung TV
                                            <span class="badge bg-warning float-end">
                                                $1800
                                            </span></a>
                                        <div class="truncate">
                                            Samsung 32" 1080p 60Hz LED Smart HDTV.
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex border-top py-2 px-1">
                                    <div class="col-2"><img src="../dist/assets/img/default-150x150.png"
                                            alt="Product Image" class="img-size-50"></div>
                                    <div class="col-10"><a href="javascript:void(0)" class="fw-bold">
                                            Bicycle
                                            <span class="badge bg-info float-end">
                                                $700
                                            </span></a>
                                        <div class="truncate">
                                            26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex border-top py-2 px-1">
                                    <div class="col-2"><img src="../dist/assets/img/default-150x150.png"
                                            alt="Product Image" class="img-size-50"></div>
                                    <div class="col-10"><a href="javascript:void(0)" class="fw-bold">
                                            Xbox One
                                            <span class="badge bg-danger float-end">
                                                $350
                                            </span></a>
                                        <div class="truncate">
                                            Xbox One Console Bundle with Halo Master Chief
                                            Collection.
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex border-top py-2 px-1">
                                    <div class="col-2"><img src="../dist/assets/img/default-150x150.png"
                                            alt="Product Image" class="img-size-50"></div>
                                    <div class="col-10"><a href="javascript:void(0)" class="fw-bold">
                                            PlayStation 4
                                            <span class="badge bg-success float-end">
                                                $399
                                            </span></a>
                                        <div class="truncate">
                                            PlayStation 4 500GB Console (PS4)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --><!-- /.card-body -->
                <!-- <div class="card-footer center"><a href="javascript:void(0)" class="uppercase">
                                View All Products
                            </a></div> --><!-- /.card-footer -->
            </div><!-- /.card -->
        </div><!-- /.col -->
        <div class="col-lg-4">
                
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Procurement KPIs</h3>
                            <div class="card-tools"><button type="button" class="btn btn-tool"
                                    data-lte-toggle="card-collapse"><i data-lte-icon="expand"
                                        class="bi bi-plus-lg"></i><i data-lte-icon="collapse"
                                        class="bi bi-dash-lg"></i></button><button type="button" class="btn btn-tool"
                                    data-lte-toggle="card-remove"><i class="bi bi-x-lg"></i></button>
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body"><!--begin::Row-->
                            <div class="row">
                                <div class="col-12">
                                    <div id="pie-chart"></div>
                                </div><!-- /.col -->
                            </div><!--end::Row-->
                        </div><!-- /.card-body -->
                        <div class="card-footer p-0">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item"><a href="#" class="nav-link">
                                        Procurement Cycle Time
                                        <span class="float-end text-danger"><i class="bi bi-arrow-down fs-7"></i>
                                            12%
                                        </span></a></li>
                                <li class="nav-item"><a href="#" class="nav-link">
                                        MSE Procurement Rate
                                        <span class="float-end text-success"><i class="bi bi-arrow-up fs-7"></i> 40%
                                        </span></a></li>
                                <li class="nav-item"><a href="#" class="nav-link">
                                        Procurement Cost Savings
                                        <span class="float-end text-info"><i class="bi bi-arrow-left fs-7"></i> 15%
                                        </span></a></li>
                                <li class="nav-item"><a href="#" class="nav-link">
                                        Procurement Compliance Rate
                                        <span class="float-end text-danger"><i class="bi bi-arrow-down fs-7"></i>
                                            12%
                                        </span></a></li>
                                <li class="nav-item"><a href="#" class="nav-link">
                                        Supplier Performance Rating
                                        <span class="float-end text-success"><i class="bi bi-arrow-up fs-7"></i>
                                            12%
                                        </span></a></li>
                                <li class="nav-item"><a href="#" class="nav-link">
                                        Procurement Cycle Time
                                        <span class="float-end text-success"><i class="bi bi-arrow-up fs-7"></i>
                                            12%
                                        </span></a></li>
                            </ul>
                        </div><!-- /.footer -->
                    </div><!-- /.card --><!-- PRODUCT LIST -->
                </div>
            </div>

    </div><!--end::Row-->

    </div><!--end::Container-->
    </div><!--end::App Content-->
</main><!--end::App Main--><!--begin::Footer-->
<script>
    const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
    const Default = {
        scrollbarTheme: "os-theme-light",
        scrollbarAutoHide: "leave",
        scrollbarClickScroll: true,
    };
    document.addEventListener("DOMContentLoaded", function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (
            sidebarWrapper &&
            typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
        ) {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: Default.scrollbarTheme,
                    autoHide: Default.scrollbarAutoHide,
                    clickScroll: Default.scrollbarClickScroll,
                },
            });
        }
    });
</script><!--end::OverlayScrollbars Configure--><!-- OPTIONAL SCRIPTS --><!-- apexcharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
    integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script>
<script>
    // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
    // IT'S ALL JUST JUNK FOR DEMO
    // ++++++++++++++++++++++++++++++++++++++++++

    /* apexcharts
     * -------
     * Here we will create a few charts using apexcharts
     */

    //-----------------------
    // - MONTHLY SALES CHART -
    //-----------------------

    const sales_chart_options = {
        series: [{
            name: "Digital Goods",
            data: [28, 48, 40, 19, 86, 27, 90],
        },
        {
            name: "Electronics",
            data: [65, 59, 80, 81, 56, 55, 40],
        },
        ],
        chart: {
            height: 180,
            type: "area",
            toolbar: {
                show: false,
            },
        },
        legend: {
            show: false,
        },
        colors: ["#0d6efd", "#20c997"],
        dataLabels: {
            enabled: false,
        },
        stroke: {
            curve: "smooth",
        },
        xaxis: {
            type: "datetime",
            categories: [
                "2023-05-01",
                "2023-06-01",
                "2023-07-01",
                "2023-08-01",
                "2023-09-01",
                "2023-10-01",
                "2023-11-01",
            ],
        },
        tooltip: {
            x: {
                format: "MMMM yyyy",
            },
        },
    };

    const sales_chart = new ApexCharts(
        document.querySelector("#sales-chart"),
        sales_chart_options,
    );
    sales_chart.render();

    //---------------------------
    // - END MONTHLY SALES CHART -
    //---------------------------

    function createSparklineChart(selector, data) {
        const options = {
            series: [{
                data
            }],
            chart: {
                type: "line",
                width: 150,
                height: 30,
                sparkline: {
                    enabled: true,
                },
            },
            colors: ["green"],
            stroke: {
                width: 2,
            },
            tooltip: {
                fixed: {
                    enabled: false,
                },
                x: {
                    show: false,
                },
                y: {
                    title: {
                        formatter: function (seriesName) {
                            return "";
                        },
                    },
                },
                marker: {
                    show: false,
                },
            },
        };

        const chart = new ApexCharts(document.querySelector(selector), options);
        chart.render();
    }

    const table_sparkline_1_data = [
        25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54,
    ];
    const table_sparkline_2_data = [
        12, 56, 21, 39, 73, 45, 64, 52, 36, 59, 44,
    ];
    const table_sparkline_3_data = [
        15, 46, 21, 59, 33, 15, 34, 42, 56, 19, 64,
    ];
    const table_sparkline_4_data = [
        30, 56, 31, 69, 43, 35, 24, 32, 46, 29, 64,
    ];
    const table_sparkline_5_data = [
        20, 76, 51, 79, 53, 35, 54, 22, 36, 49, 64,
    ];
    const table_sparkline_6_data = [
        5, 36, 11, 69, 23, 15, 14, 42, 26, 19, 44,
    ];
    const table_sparkline_7_data = [
        12, 56, 21, 39, 73, 45, 64, 52, 36, 59, 74,
    ];

    createSparklineChart("#table-sparkline-1", table_sparkline_1_data);
    createSparklineChart("#table-sparkline-2", table_sparkline_2_data);
    createSparklineChart("#table-sparkline-3", table_sparkline_3_data);
    createSparklineChart("#table-sparkline-4", table_sparkline_4_data);
    createSparklineChart("#table-sparkline-5", table_sparkline_5_data);
    createSparklineChart("#table-sparkline-6", table_sparkline_6_data);
    createSparklineChart("#table-sparkline-7", table_sparkline_7_data);

    //-------------
    // - PIE CHART -
    //-------------

    const pie_chart_options = {
        series: [700, 500, 400, 600, 300, 100],
        chart: {
            type: "donut",
        },
        labels: ["NMHEP", "RHPS", "TATO HEP", "TGBPS", "TrHEP", "Wah Umiam"],
        dataLabels: {
            enabled: false,
        },
        colors: [
            "#0d6efd",
            "#20c997",
            "#ffc107",
            "#d63384",
            "#6f42c1",
            "#adb5bd",
        ],
    };

    const pie_chart = new ApexCharts(
        document.querySelector("#pie-chart"),
        pie_chart_options,
    );
    pie_chart.render();

    //-----------------
    // - END PIE CHART -
    //-----------------
</script><!--end::Script-->
<script>
    const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
    const Default = {
        scrollbarTheme: "os-theme-light",
        scrollbarAutoHide: "leave",
        scrollbarClickScroll: true,
    };
    document.addEventListener("DOMContentLoaded", function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (
            sidebarWrapper &&
            typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
        ) {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: Default.scrollbarTheme,
                    autoHide: Default.scrollbarAutoHide,
                    clickScroll: Default.scrollbarClickScroll,
                },
            });
        }
    });
</script><!--end::OverlayScrollbars Configure--><!-- OPTIONAL SCRIPTS --><!-- apexcharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
    integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script>
<script>
    // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
    // IT'S ALL JUST JUNK FOR DEMO
    // ++++++++++++++++++++++++++++++++++++++++++

    const visitors_chart_options = {
        series: [{
            name: "High - 2023",
            data: [100, 120, 170, 167, 180, 177, 160],
        },
        {
            name: "Low - 2023",
            data: [60, 80, 70, 67, 80, 77, 100],
        },
        ],
        chart: {
            height: 200,
            type: "line",
            toolbar: {
                show: false,
            },
        },
        colors: ["#0d6efd", "#adb5bd"],
        stroke: {
            curve: "smooth",
        },
        grid: {
            borderColor: "#e7e7e7",
            row: {
                colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
                opacity: 0.5,
            },
        },
        legend: {
            show: false,
        },
        markers: {
            size: 1,
        },
        xaxis: {
            categories: ["22th", "23th", "24th", "25th", "26th", "27th", "28th"],
        },
    };

    const visitors_chart = new ApexCharts(
        document.querySelector("#visitors-chart"),
        visitors_chart_options
    );
    visitors_chart.render();

    const sales_chart_option = {
        series: [{
            name: "Net Profit",
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
        },
        {
            name: "Revenue",
            data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
        },
        {
            name: "Free Cash Flow",
            data: [35, 41, 36, 26, 45, 48, 52, 53, 41],
        },
        ],
        chart: {
            type: "bar",
            height: 200,
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "55%",
                endingShape: "rounded",
            },
        },
        legend: {
            show: false,
        },
        colors: ["#0d6efd", "#20c997", "#ffc107"],
        dataLabels: {
            enabled: false,
        },
        stroke: {
            show: true,
            width: 2,
            colors: ["transparent"],
        },
        xaxis: {
            categories: [
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
            ],
        },
        fill: {
            opacity: 1,
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return "$ " + val + " thousands";
                },
            },
        },
    };

    const sales = new ApexCharts(
        document.querySelector("#sales"),
        sales_chart_option
    );
    sales.render();
</script><!--end::Script-->