@extends('layouts.dashboard')

@section('content')
    <div class="data dashboard import">
        <div class="container-fluid ps-0">
            @include('layouts.partials.navImport')

            <div class="ito mb-3">

                <div class="d-flex gap-3 mb-3">

                    <div class="card col shadow-sm p-3">
                        <div class="card-body">
                            <h5 class="mb-3">Upload Excel</h5>
                            <form action="{{route('dataImport')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="file" required>
                                <input type="submit" class="btn btn-primary" value="Upload Excel"/>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
