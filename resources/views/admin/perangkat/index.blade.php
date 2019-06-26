@extends('admin.layout.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Perangkat</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="pb-4">
                            <a href="{{ route('perangkat.create') }}" class="btn btn-info">Add Perangkat</a>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>All Data Perangkat</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Nama Perangkat</th>
                                                <th>Foto Perangkat</th>
                                                <th>Jabatan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($perangkats as $perangkat)
                                            <tr>
                                                <td class="text-center">{{ $no }}</td>
                                                <td>{{ $perangkat->name }}</td>
                                                <td><img class="img-thumbnail" style="width: 40px;" src="{{ asset('admin/img/'.$perangkat->img_thumb) }}" /></td>
                                                <td>
                                                    @if (ucwords($perangkat->status_kepala) == 1)
                                                        <span class="badge badge-primary">{{ $perangkat->jabatan }}</span>
                                                    @else 
                                                        <span class="badge badge-secondary">{{ $perangkat->jabatan }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div style="display: flex;">
                                                        <a href="{{ route('perangkat.edit', $perangkat->id) }}" class="btn btn-secondary mr-2">Edit</a>
                                                        <form method="post" action="{{ route('perangkat.destroy', $perangkat->id) }}">
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