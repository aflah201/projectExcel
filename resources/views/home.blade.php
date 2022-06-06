@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">
            
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <!-- Attendance Chart -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            Attendance
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="chart" style="height: 300px"></div>
                    </div>
                </div>
                <!-- /.card -->
            </section>
            <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

    <!-- Template Tinydash -->
    {{-- <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center mb-2">
                    <div class="col">
                        <h2 class="h5 page-title">Selamat Datang, {{ Auth::user()->name }} !</h2>
                    </div>
                    <div class="col-auto">
                        <form class="form-inline">
                            <div class="form-group d-none d-lg-inline">
                                <label for="reportrange" class="sr-only">Date Ranges</label>
                                <div id="reportrange" class="px-2 py-2 text-muted">
                                    <span class="small"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="text-muted">Ini adalah dashboard panel sistem absensi.</p>
                <div class="mb-2 align-items-center">
                    <div class="card shadow mb-4">
                        <div class="card-body" style="background-color: white">
                            <div id="chart" style="height: 380px"></div>
                        </div> <!-- .card-body -->
                    </div> <!-- .card -->
                </div>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> --}}
@endsection

@push('scripts')
    <script>
        const chart = new Chartisan({
            el: '#chart',
            url: "@chart('attendance_chart')",
            hooks: new ChartisanHooks()
                .colors(['#3490dc', '#e3342f', '#38c172'])
                .legend({
                    position: 'bottom'
                })
                .datasets(['bar', 'bar', {
                    type: 'line',
                    fill: false
                }])
                .tooltip()
        });
    </script>
@endpush
