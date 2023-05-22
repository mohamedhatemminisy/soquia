@extends('layouts.admin')
@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">{{trans('admin.donations')}} </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{trans('admin.home')}}</a>
                            </li>
                            <li class="breadcrumb-item active">{{trans('admin.donations')}}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- DOM - jQuery events table -->
            <section id="dom">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> {{trans('admin.donations')}} </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="col form-group">
                                        <label>@lang('admin.name') </label>
                                        <p class="alert  ">
                                            {{ $donation->name  }}
                                        </p>
                                    </div><hr>
                                    <div class="col form-group">
                                        <label>@lang('admin.collection_date') </label>
                                        <p class="alert  ">
                                            {{ $donation->collection_date  }}
                                        </p>
                                    </div><hr>
                                    <div class="col form-group">
                                        <label>@lang('admin.start_date') </label>
                                        <p class="alert  ">
                                            {{ $donation->start_date  }}
                                        </p>
                                    </div><hr>
                                    <div class="col form-group">
                                        <label>@lang('admin.end_date') </label>
                                        <p class="alert  ">
                                            {{ $donation->end_date  }}
                                        </p>
                                    </div><hr>
                                    <div class="col form-group">
                                        <label>@lang('admin.price') </label>
                                        <p class="alert  ">
                                            {{ $donation->price  }}
                                        </p>
                                    </div><hr>
                                    <div class="col form-group">
                                        <label>@lang('admin.address') </label>
                                        <p class="alert  ">
                                            {{ $donation->address  }}
                                        </p>
                                    </div><hr>
                                    <div class="col form-group">
                                        <label>@lang('admin.added_by') </label>
                                        <p class="alert  ">
                                            {{ $donation->user->name  }}
                                        </p>
                                    </div><hr>
                                    <div class="col form-group">
                                        <label>@lang('admin.donator') </label>
                                        <p class="alert  ">
                                            {{ $donation->donator->name  }}
                                        </p>
                                    </div><hr>
                                    <div class="col form-group">
                                        <label>@lang('admin.party') </label>
                                        <p class="alert  ">
                                            {{ $donation->party->name  }}
                                        </p>
                                    </div><hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@stop