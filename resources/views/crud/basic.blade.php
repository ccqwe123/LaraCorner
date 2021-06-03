@extends('layouts.template')


@section('content')
<div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Basic <small>CRUD</small></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Success!</h5>
                {{session('success')}}
              </div>
            @endif
            @if(session('danger'))
                <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Warning!</h5>
                {{session('danger')}}
              </div>
            @endif
            <div class="card card-primary card-outline">
              <div class="card-body">
              	<a href="{{ route('crud.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Create</a>
                <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($basics as $x)
                    <tr>
                      <td>{{ $x->name }}</td>
                      <td>{{ $x->address }}</td>
                      @if($x->status == 'Approved')
                      <td><span class="badge badge-success">Approved</span></td>
                      @elseif($x->status == 'Pending')
                      <td><span class="badge badge-warning">Pending</span></td>
                      @else
                      <td><span class="badge badge-danger">Denied</span></td>
                      @endif
                      <td>
                        <div class="d-flex flex-row">
                          <a href="{{ route('crud.edit',$x->id) }}" class="btn btn-primary btn-flat"><i class="fas fa-pencil-alt"></i></a>
                          <form action="{{ route('crud.destroy', $x->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger btn-flat" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                          </form>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="pagination d-flex justify-content-center mt-4">
                  {{ $basics->links() }}
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection