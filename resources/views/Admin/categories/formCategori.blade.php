@extends('Admin.layout.index')
@section('title')
    Form Categories
@endsection
@section('content')
    <form>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Categori</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="basicInput">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="helpInputTop">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="Enter description">
                </div>

                <div class="form-group">
                    <label for="helperText">Sort number</label>
                    <input type="text" id="sort_number" class="form-control" placeholder="Sort number">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection

