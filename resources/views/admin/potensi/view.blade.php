@extends('admin.layout.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Potensi Desa</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="mb-4">
                            <a href="{{ route('potensi.create') }}" class="btn btn-primary">Create New Potensi</a>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>All Data Potensi Desa</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Info</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($potensis as $potensi)
                                            <tr>
                                                <td class="text-center">{{ $no }}</td>
                                                <td>{{ $potensi->name }}</td>
                                                <td><img class="img-thumbnail" style="width: 40px; height: 40px;" src="{{ asset('admin/'.$potensi->img_thumb) }}" /></td>
                                                <td>{{ $potensi->info }}</td>
                                                <td>
                                                    <div style="display: flex;">
                                                        <a href="{{ route('potensi.edit', $potensi->id) }}" class="btn btn-secondary mr-2">Edit</a>
                                                        <form class="" style="padding-left: 2px;" method="post" action="{{ route('potensi.destroy', $potensi->id) }}">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button type="submit" class="btn btn-danger">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @php $no++; @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection