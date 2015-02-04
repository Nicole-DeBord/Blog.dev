

<div class="form-group {{{ $errors->has('title') ? 'has-error' : '' }}}">
	{{ Form::label('title', 'Post Title') }}
	{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
	{{ $errors->first('title', '<p class="help-block">:message</p>') }}
</div>	

<div class="form-group {{{ $errors->has('body') ? 'has-error' : '' }}}">
	{{ Form::label('body', 'Post Entry') }}
	{{ Form::textarea('body', Input::old('body'), array('class' => 'form-control')) }}
	{{ $errors->first('body', '<p class="help-block">:message</p>') }}
</div>