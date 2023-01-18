@extends('admin.layout.template-main')
@section('title', '{{ $title }} Management')
@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="h2 font-weight-bold" style="padding-left: 0">Comments Management</div>
        </div>
        <div class="row">
            <table id="CommentsTbl" class="table table-hover table-dark mt-1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>News ID</th>
                        <th>Comment</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Modified Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $deleteButton = "<button type='button' class='tabledit-delete-button btn btn-sm btn-light' style='float: none; margin: 5px;'><i class='fa-regular fa-trash-can text-danger'></i></button>";
                        $toolbar = "<div class='tabledit-toolbar btn-toolbar' style='text-align: left;'><div class='btn-group btn-group-sm' style='float: none;'>" . $deleteButton ."</div></div></div>";
                    @endphp
                    @if ($comments->isNotEmpty())
                        @foreach ($comments as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->news_id }}</td>
                                <td>{{ $row->comment }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->locked }}</td>
                                <td>{{ $row->created_at }}</td>
                                <td>{{ $row->updated_at }}</td>
                                <td>@php echo $toolbar @endphp</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8" class="text-center">No Data</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
