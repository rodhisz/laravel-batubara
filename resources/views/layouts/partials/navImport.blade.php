<nav class="mb-5">
    <div class="d-flex justify-content-between align-items-center">
        <div class="left">
            <h1>Daily Import</h1>
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