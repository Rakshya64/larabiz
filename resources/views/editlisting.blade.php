@extends('layouts.app')
    @section('content')
          <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing   <a href="/dashboard" class="pull-right btn btn-default btn-xs">Go Back</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST']) !!}
                        {{ Form::bsText ('name',$listing->name,['placeholder' => 'Company Name'])}}
                        {{ Form::bsText ('website',$listing->website,['placeholder' => 'Company website'])}}
                        {{ Form::bsText ('email',$listing->email,['placeholder' => 'Company Email'])}}
                        {{ Form::bsText ('phone',$listing->phone,['placeholder' => 'Company phone'])}}
                        {{ Form::bsText ('address',$listing->address,['placeholder' => 'Business Address'])}}
                        {{ Form::bsTextArea ('bio',$listing->bio,['placeholder' => 'About this Business'])}}
                        {{Form::hidden('_method','PUT')}}
                       
                        {{ Form::bsSubmit ('submit')}}



                    {!! Form::close()!!}



                   
                </div>
            </div>
        </div>
    </div>
        
    @endsection