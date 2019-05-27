@extends('admin.layout.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Content</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Data Content</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Header Top</th>
                                                <th>Logo Kanan Atas</th>
                                                <th>Alamat Bottom</th>
                                                <th>Author</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($contents as $content)
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $content->header_top }}</td>
                                                <td>{{ $content->logo_kanan_atas }}</td>
                                                <td>{{ $content->alamat_bottom }}</td>
                                                <td>{{ $content->author }}</td>
                                                <td>
                                                    <div style="display: flex;">
                                                        <a href="{{ route('content.edit', $content->id) }}" class="btn btn-secondary mr-2">Edit</a>
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