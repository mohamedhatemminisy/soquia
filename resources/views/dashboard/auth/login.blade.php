@extends('layouts.login')

@section('content')

    <section class="flexbox-container">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 m-0">
                    <div class="card-header border-0">
                        <div class="card-title text-center">
                            <div class="p-1">
                                <img src="{{asset('assets/front/images/logo.png')}}" alt="LOGO"/>

                            </div>
                        </div>
                        <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                            <span>@lang('admin.admin_login')
                                 </span>
                        </h6>
                    </div>
                    @include('dashboard.includes.alerts.errors')
                @include('dashboard.includes.alerts.success')
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal form-simple" action="{{route('admin.post.login')}}" method="post"
                                  novalidate>
                                @csrf

                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                    <input type="text" name="phone" class="form-control form-control-lg input-lg"
                                           value="" id="phone" placeholder="@lang('admin.phone')">
                                    <div class="form-control-position">
                                        <i class="ft-user"></i>
                                    </div>

                                    @error('phone')
                                     <span class="text-danger">{{$message}}</span>
                                     @enderror
                                </fieldset>
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input type="password" name="password" class="form-control form-control-lg input-lg"
                                           id="user-password"
                                           placeholder="@lang('admin.password')">
                                    <div class="form-control-position">
                                        <i class="la la-key"></i>
                                    </div>

                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror

                                </fieldset>
             
                                <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i>
                                @lang('admin.login')
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @stop
