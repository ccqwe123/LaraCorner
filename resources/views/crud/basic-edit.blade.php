@extends('layouts.template')


@section('content')
<div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Edit <small>Basic</small></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col d-flex justify-content-center">
            <div class="card card-primary card-outline"  style="width: 550px;">
            	<form action="{{ route('crud.update',$basic->id) }}" method="POST">
                 {{ csrf_field() }}
                 {{ method_field('PATCH') }}
	              <div class="card-body">
	              	<div class="row">
	              		<div class="col-lg-12">
	              			<label>Name</label>
	              			<input type="text" name="name" class="form-control" value="{{ $basic->name }}">
		              		@if($errors->has('name'))
							    <div class="error text-red font-weight-bold">{{ $errors->first('name') }}</div>
							@endif
	              		</div>
	              	</div>
	              	<div class="row">
	              		<div class="col-md-12 mt-3">
	              			<label>Address</label>
	              			<input type="text" name="address" class="form-control" value="{{ $basic->address }}">
	              			@if($errors->has('address'))
							    <div class="error text-red font-weight-bold">{{ $errors->first('address') }}</div>
							@endif
	              		</div>
	              	</div>
	              	<div class="row">
	              		<div class="col-md-12 mt-3">
	              			<label>Status</label>
	              			<select class="form-control" name="status">
	              				<option disabled selected>Select</option>
	              				<option value="Approved" @if($basic->status == 'Approved') selected @endif>Approved</option>
	              				<option value="Pending" @if($basic->status == 'Pending') selected @endif>Pending</option>
	              				<option value="Denied" @if($basic->status == 'Denied') selected @endif>Denied</option>
	              			</select>
	              			@if($errors->has('status'))
							    <div class="error text-red font-weight-bold">{{ $errors->first('status') }}</div>
							@endif
	              		</div>
	              	</div>
	              	<div class="row">
	              		<div class="col-12 mt-3">
	              			<button class="btn btn-success" type="submit">Submit</button>
	              			<a href="{{ route('crud.index') }}" class="btn btn-danger">Cancel</a>
	              		</div>
	              	</div>
	              </div>
	            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection