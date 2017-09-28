@extends('admin.masterpage')

@section('content')
    @include('admin.error')
    <a href="{{ url('admin/skills/addEdit/0') }}" class="btn btn-round btn-success btn_add_standart"><i class="fa fa-plus"></i> Add</a>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Profile</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Skill</th>
                                <th>Percent</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skills as $skill )
                                <tr>
                                    <td>{{ $skills->perPage() * ($skills->currentPage() - 1) + $loop->iteration }}</td>
                                    <td>{{ $skill->skill }}</td>
                                    <td>{{ $skill->percent }}</td>
                                    <td>{{ App\Library\Date::d($skill->created_at,'d-m-Y H:i') }}</td>
                                    <th>
                                        <a href="{{ url('admin/skills/addEdit/' . $skill->id ) }}" data-toggle="tooltip" data-original-title="Edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                        <a href="{{ url('admin/skills/delete/' . $skill->id ) }}" data-toggle="tooltip" data-original-title="Delete" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            {{ $skills->links('admin.pagination', ['paginator' => $skills]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection