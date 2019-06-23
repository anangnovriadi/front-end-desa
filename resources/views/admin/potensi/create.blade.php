@extends('admin.layout.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Potensi Desa</h1>
            </div>
            <div class="section-body">
                <form action="{{ route('potensi.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Please insert data in below</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Info</label>
                                    <input type="text" name="info" class="form-control" placeholder="Info" required>
                                </div>
                                <div class="form-group">
                                    <label>Image Thumb</label>
                                    <input type="file" name="img_thumb" class="form-control" required>
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