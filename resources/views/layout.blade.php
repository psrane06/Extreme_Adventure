<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <title>Extreme Adventure</title>

</head>

<body>
    <main class="main-container p-4 mx-5">
        <div class="m-0 my-5">
            <h2>Karma Yoga, you have <span class="text-primary fw-bold"> {{ '3 activities' }} </span> live on Switch.
            </h2>
            <h2>You've had <span class="text-primary fw-bold">{{ '6,524 people' }}</span> look at your activities this
                month.</h2>
            <h2>You managed to turn that into <span class="text-primary fw-bold">{{ '52 bookings' }}</span>.</h2>
        </div>
        <div class="row flex">
            <div class="col card bg-opacity-10 bg-info m-2 border-0">
                <div class="card-body flex">
                    <div class="row">
                        <div class="col-10">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle bg-none border-0 p-0 card-title" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Revenue from December
                                    <span class="caret-down">
                                        <i class="bi bi-chevron-down ms-2"></i>
                                    </span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col text-end d-inline">
                            <i class="bi bi-arrow-right-short align-middle fs-6"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <i class="bi bi-bullseye fs-4"></i><span class="fs-2 p-2">6,800</span>AED
                            <p class="fw-bolder ms-4 text-opacity-50 text-secondary text-uppercase">Total this month
                            </p>
                        </div>
                        <div class="col">
                            <i class="bi bi-bullseye fs-4"></i><span class="fs-2 p-2">4,100</span>AED
                            <p class="fw-bolder ms-4 text-opacity-50 text-secondary text-uppercase">From switch+
                                members</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <i class="bi bi-bullseye fs-4"></i><span class="fs-2 p-2">670</span>
                            <p class="fw-bolder ms-4 text-opacity-50 text-secondary text-uppercase">bookings this
                                month</p>
                        </div>
                        <div class="col">
                            <i class="bi bi-eye icon-circle border border-dark fs-5"></i><span
                                class="fs-2 p-2">2,390</span>
                            <p class="fw-bolder ms-4 text-opacity-50 text-secondary text-uppercase">views this month
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col card bg-opacity-10 bg-info m-2 border-0">
                <div class="card-body flex">
                    <div class="row">
                        <div class="col-10 card-title">
                            Switch credits
                        </div>
                        <div class="col text-end d-inline">
                            <i class="bi bi-arrow-right-short align-middle fs-4"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <i class="bi bi-bullseye fs-4"></i><span class="fs-2 p-2">70,540</span>AED
                        </div>
                        <span class="col-7 fw-bolder">of switch credit is available this month for
                            activities like yours.</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
