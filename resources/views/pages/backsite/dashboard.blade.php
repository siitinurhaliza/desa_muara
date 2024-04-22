@extends('layaout.master')

@section('content')
<div class="container mb-3 mt-3">
    <div class="row">
        <div class="col-lg-10">
            <div class="main-content small-gutter" role="main">
                <div class="clearfix row bg-title page-title pb-5">
                    <div class="col-12 col-lg-3">
                        <h4 class="page-title">Selamat Datang!</h4>
                    </div>
                </div>
                <!-- data penduduk -->
                <div class="row tile-count bg-primary">
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 tile-stats-count shadow p-3 rounded">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-6">
                                <a href="{{ url('datapenduduk') }}"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                                <h5 class="text-muted text-uppercase text-gray"><a href="{{ url('datapenduduk') }}">Data Penduduk</a></h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6">
                                <h3 class="text-right counter m-t-15 text-info"><a href="{{ url('') }}">{{ $datapenduduk }}</a></h3>
                            </div>
                            <div class="col-12">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info w-{{ $datapenduduk }}" role="progressbar" aria-valuenow="{{ $datapenduduk }}" aria-valuemin="0" aria-valuemax="100"><a href="{{ url('datapenduduk') }}"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data kelahiran -->
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 tile-stats-count shadow p-3">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-6">
                                <a href="{{ url('datakelahiran') }}"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                                <h5 class="text-muted text-uppercase"><a href="{{ url('datakelahiran') }}">Data Kelahiran</a></h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6">
                                <h3 class="text-right counter m-t-15 text-info"><a href="{{ url('') }}">{{ $datakelahiran }}</a></h3>
                            </div>
                            <div class="col-12">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info w-{{ $datakelahiran }}" role="progressbar" aria-valuenow="{{ $datakelahiran }}" aria-valuemin="0" aria-valuemax="100"><a href="{{ url('datakelahiran') }}"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- data kematian -->
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 tile-stats-count shadow p-3">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-6">
                                <a href="{{ url('datakematian') }}"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                                <h5 class="text-muted text-uppercase"><a href="{{ url('datakematian') }}">Data kematian</a></h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6">
                                <h3 class="text-right counter m-t-15 text-info"><a href="{{ url('datakartukeluarga') }}">{{ $datakematian }}</a></h3>
                            </div>
                            <div class="col-12">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info w-{{ $datakematian }}" role="progressbar" aria-valuenow="{{ $datakematian }}" aria-valuemin="0" aria-valuemax="100"><a href="{{ url('datakematian') }}"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- data kartu keluarga -->
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 tile-stats-count shadow p-3">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-6">
                                <a href="{{ url('datakartukeluarga') }}"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                                <h5 class="text-muted text-uppercase"><a href="{{ url('datakartukeluarga') }}">Kartu Keluarga</a></h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6">
                                <h3 class="text-right counter m-t-15 text-info"><a href="{{ url('datakartukeluarga') }}">{{ $datakartukeluarga }}</a></h3>
                            </div>
                            <div class="col-12">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info w-{{ $datakartukeluarga }}" role="progressbar" aria-valuenow="{{ $datakartukeluarga }}" aria-valuemin="0" aria-valuemax="100"><a href="{{ url('datakartukeluarga') }}"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /top tiles -->
            </div>
        </div>
    </div>
</div>
@endsection
