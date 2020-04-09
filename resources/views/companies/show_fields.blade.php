<!-- Company Name Field -->
<div class="form-group">
    {!! Form::label('company_name', 'Company Name:') !!}
    <p>{{ $companies->company_name }}</p>
</div>

<!-- Company Location Field -->
<div class="form-group">
    {!! Form::label('company_location', 'Company Location:') !!}
    <p>{{ $companies->company_location }}</p>
</div>

<!-- Company Link Field -->
<div class="form-group">
    {!! Form::label('company_link', 'Company Link:') !!}
    <p>{{ $companies->company_link }}</p>
</div>

<!-- Created By Field -->
<div class="form-group">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{{ $companies->created_by }}</p>
</div>

<!-- Updated By Field -->
<div class="form-group">
    {!! Form::label('updated_by', 'Updated By:') !!}
    <p>{{ $companies->updated_by }}</p>
</div>

