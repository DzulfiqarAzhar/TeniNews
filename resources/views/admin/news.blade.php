@extends('admin.layout.template-main')
@section('title', '{{ $title }} Management')
@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="h2 font-weight-bold" style="padding-left: 0">News Management</div>
        </div>
        <div class="row">
            <button type="button" class="btn btn-outline-primary btn-sm col-lg-2 mt-3 px-0" onclick="window.location='{{ route('news.create') }}'">
                <svg class="icon mr-2">
                    <use xlink:href="{{ asset('storage/vendors/@coreui/icons/svg/free.svg#cil-plus') }}"></use>
                </svg>
                Add News
            </button>
        </div>
        <div class="row">
            <table id="NewsTbl" class="table table-hover table-dark mt-1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>File</th>
                        <th>Release Date</th>
                        <th>Created Date</th>
                        <th>Modified Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $editButton = "<button type='button' class='tabledit-edit-button btn btn-sm btn-light' style='float: none; margin: 5px;'><i class='fa-solid fa-pencil'></i></button>";
                        $deleteButton = "<button type='button' class='tabledit-delete-button btn btn-sm btn-light' style='float: none; margin: 5px;'><i class='fa-regular fa-trash-can text-danger'></i></button>";
                        $toolbar = "<div class='tabledit-toolbar btn-toolbar' style='text-align: left;'><div class='btn-group btn-group-sm' style='float: none;'>" . $editButton . $deleteButton ."</div></div></div>";
                    @endphp
                    @if ($news->isNotEmpty())
                        @foreach ($news as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->category->category_name }}</td>
                                <td>{{ $row->content_file }}</td>
                                <td>{{ $row->release_date }}</td>
                                <td>{{ $row->created_at }}</td>
                                <td>{{ $row->updated_at }}</td>
                                <td>@php echo $toolbar @endphp</td>
                            </tr>
                        @endforeach
                    @else
                    <tr>
                        <td colspan="9" class="text-center">No Data</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
