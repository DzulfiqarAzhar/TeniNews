@extends('admin.layout.template-main')

@section('content')
<div class="row my-2">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New Post</h2>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="row">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Whoops!</strong> There were some problems with your input.<br /><br />
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

<form action="{{ route('category.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category Name:</strong>
                <input type="text" name="categoryName" class="form-control" placeholder="Input Category Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mb-3 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-outline-danger" onclick="window.location='{{ route('category.index') }}'">Cancel</button>
        </div>
    </div>

</form>
@endsection

