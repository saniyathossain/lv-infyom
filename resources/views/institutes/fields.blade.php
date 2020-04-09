<!-- Institute Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('institute_name', 'Institute Name:') !!}
    {!! Form::text('institute_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Institute Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('institute_location', 'Institute Location:') !!}
    {!! Form::text('institute_location', null, ['class' => 'form-control']) !!}
</div>

<!-- Institute Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('institute_link', 'Institute Link:') !!}
    {!! Form::text('institute_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Created By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_by', 'Created By:') !!}
    {!! Form::text('created_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_by', 'Updated By:') !!}
    {!! Form::text('updated_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('institutes.index') }}" class="btn btn-default">Cancel</a>
</div>
