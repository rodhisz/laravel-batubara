<nav class="mb-5">
    <div class="d-flex justify-content-between align-items-center">
        <div class="left">
            <h1>Daily Report</h1>
            <h5>Supply Management</h5>
        </div>
        <div class="center">
            <p class="mb-0">Periodic review:</p>
            <div class="d-flex">
                {{-- <p class="start">Date: <span>{{($date)}}</span></p> --}}
                {{-- <p class="end">End Date: <span>20 desember 2021</span></p> --}}
            </div>
        </div>

        <div class="form-group">
            <form action="/date" method="post">
                @csrf
                @method('POST')
            <input type='date' name='date' class="form-control" />
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
            <button type="submit">Go</button>
            </form>
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
