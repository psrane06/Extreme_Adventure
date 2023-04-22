<x-layout>
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="row">
                <div class="col-12">
                    <x-card>
                        <div class="row">
                            <div class="col-10">
                                <x-dropdown title="Revenue for December">
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">November</a></li>
                                        <li><a class="dropdown-item" href="#">October</a></li>
                                        <li><a class="dropdown-item" href="#">September</a></li>
                                    </ul>
                                </x-dropdown>
                            </div>
                            <div class="col text-end d-inline">
                                <i class="bi bi-arrow-right-short align-middle fs-6"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <i class="bi bi-cash-coin fs-4"></i><span
                                    class="fs-2 p-2">{{ number_format($data['earning']) }}</span>AED
                                <p class="fw-bolder ms-4 text-opacity-50 text-secondary text-uppercase">Total
                                    this month
                                </p>
                            </div>
                            <div class="col">
                                <i class="bi bi-cash-stack fs-4"></i><span
                                    class="fs-2 p-2">{{ number_format($data['switch_earning']) }}</span>AED
                                <p class="fw-bolder ms-4 text-opacity-50 text-secondary text-uppercase">From
                                    switch+
                                    members</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <i class="bi bi-joystick fs-4"></i><span
                                    class="fs-2 p-2">{{ number_format($data['conversion_bookings']) }}</span>
                                <p class="fw-bolder ms-4 text-opacity-50 text-secondary text-uppercase">bookings
                                    this
                                    month</p>
                            </div>
                            <div class="col">
                                <i class="bi bi-eye icon-circle border border-dark fs-5"></i>
                                <span class="fs-2 p-2">{{ number_format($data['conversion_views']) }}</span>
                                <p class="fw-bolder ms-4 text-opacity-50 text-secondary text-uppercase">views
                                    this month
                                </p>
                            </div>
                        </div>
                    </x-card>
                </div>
                <div class="col-12">
                    <x-card>
                        <div class="row">
                            <div class="col-10 card-title">
                                {{ 'Top performers' }}
                            </div>
                            <div class="col text-end d-inline">
                                <i class="bi bi-arrow-right-short align-middle fs-6"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex p-0">
                                <img class="rounded w-100 align-self-center"
                                    src="{{ asset('images/dashboard/dune_buggy.png') }}" alt="">
                            </div>
                            <div class="col-4 top-performers">
                                <span class="sport-name">{{ 'Dune Buggy Extreme' }}</span> {{-- sportname --}}
                                <span class="location">{{ 'Dubai Marina' }}</span> {{-- location --}}
                                <span class="earning">{{ '790' }} AED</span> {{-- earning --}}
                            </div>
                            <div class="col py-2">
                                <i class="bi bi-calendar2-check align-middle fs-6"></i>
                                <span class="fs-4 p-2">{{ '52' }} </span> {{-- Number of tickets --}}
                                <p class="fw-bolder ms-3 text-opacity-50 text-secondary text-uppercase">BOOKINGS
                                </p>
                            </div>
                            <div class="col">
                                <i class="bi bi-cash-coin align-middle fs-6"></i>
                                <span class="fs-4 p-2">{{ '110' }}</span>AED {{-- Value of tickets --}}
                                <p class="fw-bolder ms-3 text-opacity-50 text-secondary">Avg. value of each
                                    booking</p>
                            </div>
                        </div>
                    </x-card>
                </div>
            </div>
        </div>
        {{-- right side col --}}
        <div class="col-lg-6 col-12">
            <div class="row">
                <div class="col-12">
                    <x-card>
                        <div class="row">
                            <div class="col-10 card-title">
                                {{ 'Switch credits' }}
                            </div>
                            <div class="col text-end d-inline">
                                <i class="bi bi-arrow-right-short align-middle fs-6"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <i class="bi bi-cash-coin fs-4"></i><span
                                    class="fs-2 p-2">{{ number_format($data['switch_credits']) }}</span>AED
                            </div>
                            <span class="col-7 fw-bolder">of switch credit is available this month for
                                activities like yours.</span>
                        </div>
                    </x-card>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <x-card>
                        <div class="row">
                            <div class="col-10">
                                <x-dropdown title="Conversion for December">
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">November</a></li>
                                        <li><a class="dropdown-item" href="#">October</a></li>
                                        <li><a class="dropdown-item" href="#">September</a></li>
                                    </ul>
                                </x-dropdown>
                            </div>
                            <div class="col text-end d-inline">
                                <i class="bi bi-arrow-right-short align-middle fs-6"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex p-0">
                                <img class="rounded w-100 align-self-center"
                                    src="{{ asset('images/dashboard/chart-placeholder.png') }}"
                                    alt="">
                            </div>
                            <div class="col">
                                <i class="bi bi-eye icon-circle fs-5"></i>
                                <span class="fs-4 p-2">{{ '90' }}</span> {{-- Views --}}
                                <p class="fw-bolder ms-4 text-opacity-50 text-secondary text-uppercase">Views
                                </p>
                                <i class="bi bi-calendar2-check fs-5"></i>
                                <span class="fs-4 p-2">{{ '18' }}</span> {{-- Bookings --}}
                                <p class="fw-bolder ms-4 text-opacity-50 text-secondary text-uppercase">
                                    Bookings</p>
                            </div>
                        </div>
                    </x-card>
                </div>
            </div>
        </div>
    </div>
</x-layout>
