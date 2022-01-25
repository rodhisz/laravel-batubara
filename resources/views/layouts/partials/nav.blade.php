<nav class="mb-5">
    <div class="d-flex justify-content-between align-items-center">
        <div class="left">
            <h1>Weekly Report</h1>
            <h5>Supply Management</h5>
        </div>
        <div class="center">
            <p class="mb-0">Periodic review:</p>
            <div class="d-flex">
                <p class="start me-3">Start Date: <span>20 november 2021</span></p>
                <p class="end">End Date: <span>20 desember 2021</span></p>
            </div>
        </div>
        <div class="right">
            <div class="d-flex align-items-center">
                <div class="me-2">
                    <img src="{{url('img')}}/user.svg" width="45" alt="">
                </div>
                <div>
                    <h5 class="mb-0">{{ Auth::user()->name }}</h5>
                    <p class="mb-0">admin account</p>
                </div>
            </div>
        </div>
    </div>
</nav>
