<!-- Institute Name Field -->
<div class="form-group">
    {!! Form::label('institute_name', 'Institute Name:') !!}
    <p>{{ $institutes->institute_name }}</p>
</div>

<!-- Institute Location Field -->
<div class="form-group">
    {!! Form::label('institute_location', 'Institute Location:') !!}
    <p>{{ $institutes->institute_location }}</p>
</div>

<!-- Institute Link Field -->
<div class="form-group">
    {!! Form::label('institute_link', 'Institute Link:') !!}
    <p>{{ $institutes->institute_link }}</p>
</div>

<!-- Created By Field -->
<div class="form-group">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{{ $institutes->created_by }}</p>
</div>

<!-- Updated By Field -->
<div class="form-group">
    {!! Form::label('updated_by', 'Updated By:') !!}
    <p>{{ $institutes->updated_by }}</p>
</div>

