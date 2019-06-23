@extends('admin.layout.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Edit Potensi Desa</h1>
            </div>
            <div class="section-body">
                <form action="{{ route('potensi.update', $potensi->id) }}" method="post" enctype="multipart/form-data">
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
                                    <label>Name</label>
                                    <input type="text" value="{{ $potensi->name }}" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Info</label>
                                    <input type="text" value="{{ $potensi->info }}" name="info" class="form-control" placeholder="Info" required>
                                </div>
                                <img class="img-thumbnail" src="{{ asset('admin/'.$potensi->img_thumb) }}" />
                                <div class="form-group">
                                    <label>Image Thumb</label>
                                    <input type="file" name="img_thumb" class="form-control">
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