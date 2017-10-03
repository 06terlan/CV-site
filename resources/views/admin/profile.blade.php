@extends('admin.masterpage')

@section('content')
    @include('admin.error')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Profile</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form class="form-horizontal form-label-left" novalidate=""  method="post" action="{{ url('admin/profile/1') }}" enctype="multipart/form-data">
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image</label>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="thumbnail" style="height: 150px;width: 150px;">
                                    <div class="image view view-first" style="height: 100%;">
                                        <img style="width: 140px;height: 140px;display: block;" src="{{ url(Auth::user()->photo()) }}" alt="profil photo">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="padding-top: 130px;">
                                <input type="file" name="image" accept="image/png, image/jpeg">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input required="" name="name" data-validate-length-range="5,20" type="text" class="form-control has-feedback-left" placeholder="Name" value="{{ Auth::user()->firstname }}">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Surname
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="surname" data-validate-length-range="5,20" type="text" class="form-control has-feedback-left" placeholder="Surname" value="{{ Auth::user()->surname }}">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Login
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input disabled type="text" value="{{ Auth::user()->login }}" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input required="" name="email" type="email" class="form-control has-feedback-left" value="{{ Auth::user()->email }}" placeholder="Email">
                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Birthday</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input required="" name="birthday" type="birthday" class="form-control has-feedback-left datepicker" value="{{ Auth::user()->birthday==''?'': \App\Library\Date::d(Auth::user()->birthday,'d-m-Y') }}" placeholder="Birthday">
                                <span class="fa fa-birthday-cake form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Address
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="address" type="text" class="form-control has-feedback-left" placeholder="Address" value="{{ Auth::user()->address }}">
                                <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="phone" data-inputmask="'mask' : '(999) 999-9999'" type="text" class="form-control has-feedback-left" placeholder="Phone" value="{{ Auth::user()->phone }}">
                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Job
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="job" type="text" class="form-control has-feedback-left" placeholder="Job" value="{{ Auth::user()->job }}">
                                <span class="fa fa-tag form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Password</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form class="form-horizontal form-label-left" novalidate="" method="post" action="{{ url('admin/profile/2') }}">
                        <div class="item form-group">
                            <label for="old_password" class="control-label col-md-3">Old Password <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input required="" id="old_password" type="password" name="old_password" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="password" class="control-label col-md-3">Password <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input required="" id="password" type="password" name="password" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="re_password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input required="" id="re_password" type="password" name="re_password" data-validate-linked="password" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <!-- bootstrap-datetimepicker -->
    {!! Html::style('admin/assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') !!}

@endsection

@section('scripts')
    {!! Html::script('admin/assets/vendors/validator/validator.js') !!}
    {!! Html::script('admin/assets/vendors/moment/min/moment.min.js') !!}
    <!-- bootstrap-datetimepicker -->    
    {!! Html::script('admin/assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') !!}
    <!-- jquery.inputmask -->
    {!! Html::script('admin/assets/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js') !!}

    <script type="text/javascript">
        $('.datepicker').datetimepicker({
            format: 'DD-MM-YYYY'
        });
    </script>
@endsection