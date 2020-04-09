<!-- Company Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_name', 'Company Name:') !!}
    {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_location', 'Company Location:') !!}
    {!! Form::text('company_location', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_link', 'Company Link:') !!}
    {!! Form::text('company_link', null, ['class' => 'form-control']) !!}
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
    <a href="{{ route('companies.index') }}" class="btn btn-default">Cancel</a>
</div>
