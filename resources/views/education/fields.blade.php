<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Institute Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('institute_id', 'Institute Id:') !!}
    {!! Form::number('institute_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Education Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('education_level', 'Education Level:') !!}
    {!! Form::text('education_level', null, ['class' => 'form-control']) !!}
</div>

<!-- Education Department Field -->
<div class="form-group col-sm-6">
    {!! Form::label('education_department', 'Education Department:') !!}
    {!! Form::text('education_department', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_date', 'Start Date:') !!}
    {!! Form::date('start_date', null, ['class' => 'form-control','id'=>'start_date']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#start_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_date', 'End Date:') !!}
    {!! Form::date('end_date', null, ['class' => 'form-control','id'=>'end_date']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#end_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Continuing Field -->
<div class="form-group col-sm-6">
    {!! Form::label('continuing', 'Continuing:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('continuing', 0) !!}
        {!! Form::checkbox('continuing', '1', null) !!}
    </label>
</div>


<!-- Cgpa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cgpa', 'Cgpa:') !!}
    {!! Form::number('cgpa', null, ['class' => 'form-control']) !!}
</div>

<!-- Cgpa Out Of Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cgpa_out_of', 'Cgpa Out Of:') !!}
    {!! Form::number('cgpa_out_of', null, ['class' => 'form-control']) !!}
</div>

<!-- Current Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('current_status', 'Current Status:') !!}
    {!! Form::text('current_status', null, ['class' => 'form-control']) !!}
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
    <a href="{{ route('education.index') }}" class="btn btn-default">Cancel</a>
</div>
