@extends('admin.layout.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Add Perangkat</h1>
            </div>
            <div class="section-body">
                <form action="{{ route('perangkat.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Please edit data in below</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nama Perangkat</label>
                                        <input type="text" name="name" class="form-control" placeholder="Nama Perangkat">
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Perangkat</label>
                                        <input type="file" name="img_thumb" class="form-control" placeholder="Foto Perangkat">
                                    </div>
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Apakah kepala desa?</label>
                                        <div class="selectgroup w-100">
                                            <select name="status_kepala" class="form-control">
                                                <option value="1">Ya</option>
                                                <option value="0">Tidak</option>
                                            </select>
                                        </div>
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