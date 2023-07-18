@extends('admin.layouts.layout') 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Content......</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center;vertical-align: middle;">#</th>
                            <th scope="col" style="text-align: center;vertical-align: middle;">Name</th>
                            <th scope="col" style="text-align: center;vertical-align: middle;">Slug</th>
                            <th scope="col" style="text-align: center;vertical-align: middle;">Parent</th>
                            <th scope="col" style="text-align: center;vertical-align: middle;">Status</th>
                            <th scope="col" style="text-align: center;vertical-align: middle;">Create At</th>
                            <th scope="col" style="text-align: center;vertical-align: middle;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @php dd($categories) @endphp --}}
                        @foreach ($categories as $key => $category)
                        <tr>
                            <td scope="row" style="text-align: center;vertical-align: middle;">{{ $key }}</td>
                            <td style="text-align: center;vertical-align: middle;">{{ $category->name }}</td>
                            <td style="text-align: center;vertical-align: middle;">{{ $category->slug }}</td>
                            <td style="text-align: center;vertical-align: middle;">{{ $category->parent_id }}</td>
                            <td style="text-align: center;vertical-align: middle;">
                                @if($category->is_active)
                                    <p>icon</p>
                                @else 
                                    <p>icon</p>
                                @endif
                            </td>

                            <td style="text-align: center;vertical-align: middle;">{{ $category->created_at->format('d/m/Y h:i:s') }}</td>
                            <td style="text-align: center;vertical-align: middle;"><a href="" class="btn btn-primary"></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
              {{$pag->links()}}
            </div>
        </div>
    </div>
</div>
@endsection