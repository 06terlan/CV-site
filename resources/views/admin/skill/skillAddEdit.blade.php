@extends('admin.masterpage')

@section('content')
    @include('admin.error')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Skill</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form autocomplete="off" class="form-horizontal form-label-left" novalidate=""  method="post" action="{{ url('admin/skills/addEdit/'.$id) }}">
                        <input type="hidden" name="id" value="{{ $id }}" /> 
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Skill
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input required="" name="skill" data-validate-length-range="1,100" type="text" class="form-control" placeholder="Skill" value="{{ $Skill['skill'] }}">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Percent
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input required="" name="percent" data-validate-minmax="1,100" type="number" class="form-control" placeholder="Percent" value="{{ $Skill['percent'] }}">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Type
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="type" required="">
                                  <option value="skill" {{ $Skill['type'] == 'skill' ? 'selected' : '' }}> Skill </option>
                                  <option value="general_skill" {{ $Skill['type'] == 'general_skill' ? 'selected' : '' }}> General Skill </option>
                                </select>
                            </div>
                        </div>
                    </div>
                        <div class="ln_solid"></div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <div class="col-md-9 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">Save</button>
                                <a class="btn btn-default" href="{{ url('admin/skills/') }}" type="reset">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    {{--  bootstrap-wysiwyg --}}
    {!! Html::style('admin/assets/vendors/summernote/dist/summernote.css') !!}
@endsection

@section('scripts')
    {!! Html::script('admin/assets/vendors/validator/validator.js') !!}
    
    {{--  bootstrap-wysiwyg --}}
    {!! Html::script('admin/assets/vendors/summernote/dist/summernote.js') !!}

   <script type="text/javascript">
       $('#descr').summernote({height: 300});
   </script>
@endsection