@extends('admin.layout.admin')

@section('content')

    <h3>Add Offer</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'offer.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

            <div class="form-group">
                {{ Form::label('value', 'Value') }}
                {{ Form::text('value', null, array('class' => 'form-control','required'=>'','minlength'=>'1')) }}
            </div>

           

             {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
            {!! Form::close() !!}

        </div>
    </div>



@endsection