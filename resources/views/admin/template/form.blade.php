<div class="form-group {{ $errors->has('titletemplate') ? 'has-error' : ''}}">
    <label for="titletemplate" class="col-md-4 control-label">{{ 'Titletemplate' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="titletemplate" type="text" id="titletemplate" value="{{ $template->titletemplate or ''}}" >
        {!! $errors->first('titletemplate', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sectioncolor') ? 'has-error' : ''}}">
    <label for="sectioncolor" class="col-md-4 control-label">{{ 'Sectioncolor' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="sectioncolor" type="text" id="sectioncolor" value="{{ $template->sectioncolor or ''}}" >
        {!! $errors->first('sectioncolor', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('colorfirt') ? 'has-error' : ''}}">
    <label for="colorfirt" class="col-md-4 control-label">{{ 'Colorfirt' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="colorfirt" type="text" id="colorfirt" value="{{ $template->colorfirt or ''}}" >
        {!! $errors->first('colorfirt', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('colorsecond') ? 'has-error' : ''}}">
    <label for="colorsecond" class="col-md-4 control-label">{{ 'Colorsecond' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="colorsecond" type="text" id="colorsecond" value="{{ $template->colorsecond or ''}}" >
        {!! $errors->first('colorsecond', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('colorthird') ? 'has-error' : ''}}">
    <label for="colorthird" class="col-md-4 control-label">{{ 'Colorthird' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="colorthird" type="text" id="colorthird" value="{{ $template->colorthird or ''}}" >
        {!! $errors->first('colorthird', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('colorfondo') ? 'has-error' : ''}}">
    <label for="colorfondo" class="col-md-4 control-label">{{ 'Colorfondo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="colorfondo" type="text" id="colorfondo" value="{{ $template->colorfondo or ''}}" >
        {!! $errors->first('colorfondo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('colortext1') ? 'has-error' : ''}}">
    <label for="colortext1" class="col-md-4 control-label">{{ 'Colortext1' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="colortext1" type="text" id="colortext1" value="{{ $template->colortext1 or ''}}" >
        {!! $errors->first('colortext1', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('colortext2') ? 'has-error' : ''}}">
    <label for="colortext2" class="col-md-4 control-label">{{ 'Colortext2' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="colortext2" type="text" id="colortext2" value="{{ $template->colortext2 or ''}}" >
        {!! $errors->first('colortext2', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('colortext3') ? 'has-error' : ''}}">
    <label for="colortext3" class="col-md-4 control-label">{{ 'Colortext3' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="colortext3" type="text" id="colortext3" value="{{ $template->colortext3 or ''}}" >
        {!! $errors->first('colortext3', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('activo') ? 'has-error' : ''}}">
    {!! Form::label('activo', 'Activo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('activo', '1', true) !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('activo', '0') !!} No</label>
</div>
        {!! $errors->first('activo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
