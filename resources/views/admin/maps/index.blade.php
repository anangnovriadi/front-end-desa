@extends('admin.layout.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form and Data Maps</h1>
            </div>
            <div class="section-body">
                <form action="{{ route('map.update') }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Please insert data in below</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Embed URL</label>
                                        {{-- {{ dd($maps) }} --}}
                                        <input type="hidden" name="id" value="{{ $maps[0]->id }}" class="form-control" placeholder="ID">
                                        <input type="text" name="embed_url" class="form-control" value="{{ $maps[0]->embed_url }}" placeholder="Embed Url">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>All Data Maps</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table-1">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Embed URL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach ($maps as $map)
                                                <tr>
                                                    <td class="text-center">{{ $no }}</td>
                                                    <td>{{ $map->embed_url }}</td>
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
                </form>
            </div>
        </section>
    </div>
@endsection