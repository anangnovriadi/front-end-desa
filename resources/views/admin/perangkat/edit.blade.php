@extends('admin.layout.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Edit Perangkat</h1>
            </div>
            <div class="section-body">
                <form action="{{ route('perangkat.update', $perangkats->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Please edit data in below</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nama Perangkat</label>
                                        <input type="text" name="name" class="form-control" placeholder="Nama Perangkat" value="{{ $perangkats->name }}">
                                    </div>
                                    <img class="img-thumbnail" src="{{ asset('admin/img/'.$perangkats->img_thumb) }}" />
                                    <div class="form-group">
                                        <label>Foto Perangkat</label>
                                        <input type="file" name="img_thumb" class="form-control" placeholder="Foto Perangkat">
                                    </div>
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="{{ $perangkats->jabatan }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Apakah kepala desa?</label>
                                        <select name="status_kepala" class="form-control">
                                            @if ($perangkats->status_kepala == 1)
                                                <option selected value="1">Ya</option>
                                                <option value="0">Tidak</option>
                                            @else  
                                                <option value="1">Ya</option>
                                                <option selected value="0">Tidak</option>
                                            @endif
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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