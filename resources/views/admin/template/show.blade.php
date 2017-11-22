@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">template {{ $template->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/template') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('admin/template/' . $template->id . '/edit') }}" title="Edit template"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/template' . '/' . $template->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete template" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $template->id }}</td>
                                    </tr>
                                    <tr><th> Titletemplate </th><td> {{ $template->titletemplate }} </td></tr><tr><th> Sectioncolor </th><td> {{ $template->sectioncolor }} </td></tr><tr><th> Colorfirt </th><td> {{ $template->colorfirt }} </td></tr><tr><th> Colorsecond </th><td> {{ $template->colorsecond }} </td></tr><tr><th> Colorthird </th><td> {{ $template->colorthird }} </td></tr><tr><th> Colorfondo </th><td> {{ $template->colorfondo }} </td></tr><tr><th> Colortext1 </th><td> {{ $template->colortext1 }} </td></tr><tr><th> Colortext2 </th><td> {{ $template->colortext2 }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
