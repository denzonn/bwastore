@extends('layouts.dashboard')

@section('title')
  Store Dashboard Product Detail
@endsection

@section('content')
    <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
    <div class="dashboard-heading">
        <div class="dashboard-title">Shirup Marzan</div>
        <p class="dashboard-subtitle">Product Details</p>
    </div>
    <div class="dashboard-content">
        <div class="row">
        <div class="col-12">
            <form action="">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <div class="for-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" />
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" />
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category" class="form-control">
                        <option value="" disabled>
                            Select Category
                        </option>
                        </select>
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="editor"></textarea>
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                        <label>Thumbnails</label>
                        <input type="file" class="form-control" />
                        <p class="text-muted">
                        Kamu dapat memilih lebih dari satu file
                        </p>
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                    <button
                        type="submit"
                        class="btn btn-success btn-block"
                    >
                        Save Now
                    </button>
                    </div>
                </div>
                </div>
            </div>
            </form>
        </div>
        </div>

        <div class="row mt-3">
        <div class="col-12">
            <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-md-4">
                    <div class="gallery-container">
                    <img
                        src="/images/product-card1.png"
                        alt=""
                        class="w-100"
                    />
                    <a href="#" class="delete-gallery">
                        <img src="/images/icon-remove.svg" alt="" />
                    </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="gallery-container">
                    <img
                        src="/images/product-card2.png"
                        alt=""
                        class="w-100"
                    />
                    <a href="#" class="delete-gallery">
                        <img src="/images/icon-remove.svg" alt="" />
                    </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="gallery-container">
                    <img
                        src="/images/product-card3.png"
                        alt=""
                        class="w-100"
                    />
                    <a href="#" class="delete-gallery">
                        <img src="/images/icon-remove.svg" alt="" />
                    </a>
                    </div>
                </div>

                <div class="col-12">
                    <input
                    type="file"
                    name=""
                    id="file"
                    style="display: none"
                    multiple
                    />
                    <button
                    class="btn btn-secondary btn-block mt-3"
                    onclick="thiFileUpload()"
                    >
                    Add Photo
                    </button>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script>
    function thiFileUpload() {
        document.getElementById("file").click();
    }
    </script>
    <script>
    CKEDITOR.replace("editor");
    </script>
@endpush


