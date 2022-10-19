@extends('layouts.dashboard')

@section('title')
  Store Dashboard Product Create
@endsection

@section('content')
    <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
    <div class="dashboard-heading">
        <div class="dashboard-title">Create New Product</div>
        <p class="dashboard-subtitle">Create your own product</p>
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
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col mt-4 mb-4">
                <button
                    type="submit"
                    class="btn btn-success btn-block px-5"
                >
                    Save Now
                </button>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace("editor");
    </script>
@endpush


