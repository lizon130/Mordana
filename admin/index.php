<?php 
require_once "inc/header.php"
?>
        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-end">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"
                                aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="flatpickr-wrapper ml-3">
                    <div id="recent_orders_date"
                            data-toggle="flatpickr"
                            data-flatpickr-wrap="true"
                            data-flatpickr-mode="range"
                            data-flatpickr-alt-format="d/m/Y"
                            data-flatpickr-date-format="d/m/Y">
                        <a href="javascript:void(0)"
                            class="link-date"
                            data-toggle>13/03/2018 to 20/03/2018</a>
                        <input class="flatpickr-hidden-input"
                                type="hidden"
                                value="13/03/2018 to 20/03/2018"
                                data-input>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid page__container">

            

            <div class="row">
                <div class="col-md-3">
                    <div class="card card-social card-facebook">
                        <div class="card-body">
                            <a href="#">
                                <svg viewBox="0 0 16 16"
                                        width="30%"
                                        style="fill: currentColor;"
                                        xmlns="http://www.w3.org/2000/svg"
                                        clip-rule="evenodd"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="1.414">
                                    <path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" />
                                </svg>
                                <span class="mt-1 d-block">
                                    45k
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-social card-twitter">
                        <div class="card-body">
                            <a href="#">
                                <svg viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="30%"
                                        style="fill: currentColor;"
                                        clip-rule="evenodd"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="1.414">
                                    <path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" />
                                </svg>
                                <span class="mt-1 d-block">
                                    10k
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-social card-instagram">
                        <div class="card-body">
                            <a href="#">
                                <svg viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="30%"
                                        style="fill: currentColor;"
                                        clip-rule="evenodd"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="1.414">
                                    <path d="M8 0C5.827 0 5.555.01 4.702.048 3.85.088 3.27.222 2.76.42c-.526.204-.973.478-1.417.923-.445.444-.72.89-.923 1.417-.198.51-.333 1.09-.372 1.942C.008 5.555 0 5.827 0 8s.01 2.445.048 3.298c.04.852.174 1.433.372 1.942.204.526.478.973.923 1.417.444.445.89.72 1.417.923.51.198 1.09.333 1.942.372.853.04 1.125.048 3.298.048s2.445-.01 3.298-.048c.852-.04 1.433-.174 1.942-.372.526-.204.973-.478 1.417-.923.445-.444.72-.89.923-1.417.198-.51.333-1.09.372-1.942.04-.853.048-1.125.048-3.298s-.01-2.445-.048-3.298c-.04-.852-.174-1.433-.372-1.942-.204-.526-.478-.973-.923-1.417-.444-.445-.89-.72-1.417-.923-.51-.198-1.09-.333-1.942-.372C10.445.008 10.173 0 8 0zm0 1.44c2.136 0 2.39.01 3.233.048.78.036 1.203.166 1.485.276.374.145.64.318.92.598.28.28.453.546.598.92.11.282.24.705.276 1.485.038.844.047 1.097.047 3.233s-.01 2.39-.05 3.233c-.04.78-.17 1.203-.28 1.485-.15.374-.32.64-.6.92-.28.28-.55.453-.92.598-.28.11-.71.24-1.49.276-.85.038-1.1.047-3.24.047s-2.39-.01-3.24-.05c-.78-.04-1.21-.17-1.49-.28-.38-.15-.64-.32-.92-.6-.28-.28-.46-.55-.6-.92-.11-.28-.24-.71-.28-1.49-.03-.84-.04-1.1-.04-3.23s.01-2.39.04-3.24c.04-.78.17-1.21.28-1.49.14-.38.32-.64.6-.92.28-.28.54-.46.92-.6.28-.11.7-.24 1.48-.28.85-.03 1.1-.04 3.24-.04zm0 2.452c-2.27 0-4.108 1.84-4.108 4.108 0 2.27 1.84 4.108 4.108 4.108 2.27 0 4.108-1.84 4.108-4.108 0-2.27-1.84-4.108-4.108-4.108zm0 6.775c-1.473 0-2.667-1.194-2.667-2.667 0-1.473 1.194-2.667 2.667-2.667 1.473 0 2.667 1.194 2.667 2.667 0 1.473-1.194 2.667-2.667 2.667zm5.23-6.937c0 .53-.43.96-.96.96s-.96-.43-.96-.96.43-.96.96-.96.96.43.96.96z" />
                                </svg>
                                <span class="mt-1 d-block">
                                    19,5k
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-social card-dribbble">
                        <div class="card-body">
                            <a href="#">
                                <svg viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="30%"
                                        style="fill:currentColor;"
                                        clip-rule="evenodd"
                                        stroke-linejoin="round"
                                        stroke-miterlimit="1.414">
                                    <path d="M8 16c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm6.747-6.905c-.234-.074-2.115-.635-4.257-.292.894 2.456 1.258 4.456 1.328 4.872 1.533-1.037 2.624-2.68 2.93-4.58zM10.67 14.3c-.102-.6-.5-2.688-1.46-5.18l-.044.014C5.312 10.477 3.93 13.15 3.806 13.4c1.158.905 2.614 1.444 4.194 1.444.947 0 1.85-.194 2.67-.543zm-7.747-1.72c.155-.266 2.03-3.37 5.555-4.51.09-.03.18-.056.27-.08-.173-.39-.36-.778-.555-1.16-3.413 1.02-6.723.977-7.023.97l-.003.208c0 1.755.665 3.358 1.756 4.57zM1.31 6.61c.307.005 3.122.017 6.318-.832-1.132-2.012-2.353-3.705-2.533-3.952-1.912.902-3.34 2.664-3.784 4.785zM6.4 1.368c.188.253 1.43 1.943 2.548 4 2.43-.91 3.46-2.293 3.582-2.468C11.323 1.827 9.736 1.176 8 1.176c-.55 0-1.087.066-1.6.19zm6.89 2.322c-.145.194-1.29 1.662-3.816 2.694.16.325.31.656.453.99.05.117.1.235.147.352 2.274-.286 4.533.172 4.758.22-.015-1.613-.59-3.094-1.543-4.257z" />
                                </svg>
                                <span class="mt-1 d-block">
                                    21,3k
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-white d-flex align-items-center justify-content-between">
                    <h4 class="card-header__title mb-0">Latest Blog Posts</h4>
                    <div class="dropdown">
                        <a class="dropdown-toggle text-muted"
                            data-caret="false"
                            href="#"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"><i class="material-icons icon-16pt">settings</i></a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item d-flex align-items-center"
                                href="#">
                                <i class="material-icons icon-16pt mr-2">settings</i>
                                <span>Blog settings</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center"
                                href="#">
                                <i class="material-icons icon-16pt mr-2">list</i>
                                <span>List view</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center"
                                href="#">
                                <i class="material-icons icon-16pt mr-2">grid_on</i>
                                <span>Grid view</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body py-2">
                    <div class="row">

                        <div class="col-lg-6 py-2">
                            <div class="d-flex flex-column flex-xl-row align-items-center text-center text-xl-left align-items-xl-start">
                                <a href=""><img class="img-fluid img-lg-150 img-xl-200 rounded mr-xl-3 mb-3 mb-xl-0"
                                            src="assets/images/posts/fabian-irsara-92113.jpg"
                                            alt="Blog post image"></a>
                                <div class="flex">
                                    <h5 class="card-title mb-1"><a href=""
                                            class="headings-color">Mobile UI</a></h5>
                                    <p class="text-muted mb-2">
                                        <small class="mr-1"><a href=""
                                                class="text-muted">Steven Doe</a></small>
                                        <small>3 hrs ago</small>
                                    </p>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 py-2">
                            <div class="d-flex flex-column flex-xl-row align-items-center text-center text-xl-left align-items-xl-start">
                                <a href=""><img class="img-fluid img-lg-150 img-xl-200 rounded mr-xl-3 mb-3 mb-xl-0"
                                            src="assets/images/posts/luke-chesser-2347.jpg"
                                            alt="Blog post image"></a>
                                <div class="flex">
                                    <h5 class="card-title mb-1"><a href=""
                                            class="headings-color">DevOps Basics</a></h5>
                                    <p class="text-muted mb-2">
                                        <small class="mr-1"><a href=""
                                                class="text-muted">Kevin Short</a></small>
                                        <small>15 hrs ago</small>
                                    </p>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 py-2">
                            <div class="d-flex flex-column flex-xl-row align-items-center text-center text-xl-left align-items-xl-start">
                                <a href=""><img class="img-fluid img-lg-150 img-xl-200 rounded mr-xl-3 mb-3 mb-xl-0"
                                            src="assets/images/posts/thought-catalog-214785.jpg"
                                            alt="Blog post image"></a>
                                <div class="flex">
                                    <h5 class="card-title mb-1"><a href=""
                                            class="headings-color">New VueJS Launch</a></h5>
                                    <p class="text-muted mb-2">
                                        <small class="mr-1"><a href=""
                                                class="text-muted">Andrew Robles</a></small>
                                        <small>22 hrs ago</small>
                                    </p>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 py-2">
                            <div class="d-flex flex-column flex-xl-row align-items-center text-center text-xl-left align-items-xl-start">
                                <a href=""><img class="img-fluid img-lg-150 img-xl-200 rounded mr-xl-3 mb-3 mb-xl-0"
                                            src="assets/images/posts/linkedin-sales-navigator-402873.jpg"
                                            alt="Blog post image"></a>
                                <div class="flex">
                                    <h5 class="card-title mb-1"><a href=""
                                            class="headings-color">E-Commerce Analytics</a></h5>
                                    <p class="text-muted mb-2">
                                        <small class="mr-1"><a href=""
                                                class="text-muted">Tara Smith</a></small>
                                        <small>1 day ago</small>
                                    </p>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
<?php 
require_once "inc/footer.php"
?>
