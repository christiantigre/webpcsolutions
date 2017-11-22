@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            @include('flash::message')
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Template</div>
                    <div class="panel-body">
                        <a href="{{ url('admin/template/create') }}" class="btn btn-success btn-sm" title="Add New template">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('admin/template') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Titletemplate</th><th>Sectioncolor</th><th>Colorfirt</th><th>Colorsecond</th><th>Colorthird</th><th>Colorfondo</th><th>Colortext1</th><th>Colortext2</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($template as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->titletemplate }}</td><td>{{ $item->sectioncolor }}</td><td>{{ $item->colorfirt }}</td><td>{{ $item->colorsecond }}</td><td>{{ $item->colorthird }}</td><td>{{ $item->colorfondo }}</td><td>{{ $item->colortext1 }}</td><td>{{ $item->colortext2 }}</td>
                                        <td>
                                            <a href="{{ url('admin/template/' . $item->id) }}" title="View template"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('admin/template/' . $item->id . '/edit') }}" title="Edit template"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('admin/template' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-xs" title="Delete template" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $template->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
