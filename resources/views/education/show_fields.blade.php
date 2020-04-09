<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $education->user_id }}</p>
</div>

<!-- Institute Id Field -->
<div class="form-group">
    {!! Form::label('institute_id', 'Institute Id:') !!}
    <p>{{ $education->institute_id }}</p>
</div>

<!-- Education Level Field -->
<div class="form-group">
    {!! Form::label('education_level', 'Education Level:') !!}
    <p>{{ $education->education_level }}</p>
</div>

<!-- Education Department Field -->
<div class="form-group">
    {!! Form::label('education_department', 'Education Department:') !!}
    <p>{{ $education->education_department }}</p>
</div>

<!-- Start Date Field -->
<div class="form-group">
    {!! Form::label('start_date', 'Start Date:') !!}
    <p>{{ $education->start_date }}</p>
</div>

<!-- End Date Field -->
<div class="form-group">
    {!! Form::label('end_date', 'End Date:') !!}
    <p>{{ $education->end_date }}</p>
</div>

<!-- Continuing Field -->
<div class="form-group">
    {!! Form::label('continuing', 'Continuing:') !!}
    <p>{{ $education->continuing }}</p>
</div>

<!-- Cgpa Field -->
<div class="form-group">
    {!! Form::label('cgpa', 'Cgpa:') !!}
    <p>{{ $education->cgpa }}</p>
</div>

<!-- Cgpa Out Of Field -->
<div class="form-group">
    {!! Form::label('cgpa_out_of', 'Cgpa Out Of:') !!}
    <p>{{ $education->cgpa_out_of }}</p>
</div>

<!-- Current Status Field -->
<div class="form-group">
    {!! Form::label('current_status', 'Current Status:') !!}
    <p>{{ $education->current_status }}</p>
</div>

<!-- Created By Field -->
<div class="form-group">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{{ $education->created_by }}</p>
</div>

<!-- Updated By Field -->
<div class="form-group">
    {!! Form::label('updated_by', 'Updated By:') !!}
    <p>{{ $education->updated_by }}</p>
</div>

