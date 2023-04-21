<x-layout>
<div class="row flex-column flex-sm-row">
        <x-card>
                <div class="row">
                    <div class="col-10">
                        <x-dropdown title="Revenue from December">
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
                        <i class="bi bi-cash-coin fs-4"></i><span class="fs-2 p-2">{{ $data['earning'] }}</span>AED
                        <p class="fw-bolder ms-4 text-opacity-50 text-secondary text-uppercase">Total this month
                        </p>
                    </div>
                    <div class="col">
                        <i class="bi bi-cash-stack fs-4"></i><span
                            class="fs-2 p-2">{{ $data['switch_earning'] }}</span>AED
                        <p class="fw-bolder ms-4 text-opacity-50 text-secondary text-uppercase">From switch+
                            members</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <i class="bi bi-joystick fs-4"></i><span class="fs-2 p-2">{{ $data['bookings'] }}</span>
                        <p class="fw-bolder ms-4 text-opacity-50 text-secondary text-uppercase">bookings this
                            month</p>
                    </div>
                    <div class="col">
                        <i class="bi bi-eye icon-circle border border-dark fs-5"></i><span
                            class="fs-2 p-2">{{ $data['views'] }}</span>
                        <p class="fw-bolder ms-4 text-opacity-50 text-secondary text-uppercase">views this month
                        </p>
                    </div>
                </div>
        </x-card>
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
                        <i class="bi bi-cash-coin fs-4"></i><span class="fs-2 p-2">{{ $data['switch_credits'] }}</span>AED
                    </div>
                    <span class="col-7 fw-bolder">of switch credit is available this month for
                        activities like yours.</span>
                </div>
        </x-card>
</div>
</x-layout>
