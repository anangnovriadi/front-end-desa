@extends('admin.layout.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Edit Content</h1>
            </div>
            <div class="section-body">
                <form action="{{ route('content.update', $contents->id) }}" method="post">
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
                                        <label>Header Top</label>
                                        <input type="text" name="header_top" class="form-control" placeholder="Header Top" value="{{ $contents->header_top }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Logo Kanan Atas</label>
                                        <input type="text" name="logo_kanan_atas" class="form-control" placeholder="Logo Kanan Atas" value="{{ $contents->logo_kanan_atas }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Bottom</label>
                                        <textarea type="text" name="alamat_bottom" class="form-control inputtags" placeholder="Alamat Bottom">{{ $contents->alamat_bottom }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Author</label>
                                        <input type="text" name="author" class="form-control inputtags" placeholder="Author" value="{{ $contents->author }}">
                                    </div>
                                    {{-- <div class="form-group">
                                        <label>Image Thumb</label>
                                        <input type="file" name="image_thumb" class="form-control" value="{{ $posts->image_thumb }}">
                                    </div> --}}
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