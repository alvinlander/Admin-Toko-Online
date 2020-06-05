@extends('Layouts.index')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{route('products.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">name Barang</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror"/>
                    @error('name')
                        <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="type" class="form-control-label">Type Barang</label>
                    <input type="text" name="type" value="{{old('type')}}" class="form-control @error('type') is-invalid @enderror"/>
                    @error('type')
                        <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description" class="form-control-label">description Barang</label>
                    <textarea name="description" class="ckeditor form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
                    @error('description')
                        <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price" class="form-control-label">Price Barang</label>
                    <input type="number" name="price" value="{{old('price')}}" class="form-control @error('price') is-invalid @enderror"/>
                    @error('price')
                        <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="qty" class="form-control-label">Qty Barang</label>
                    <input type="number" name="qty" value="{{old('qty')}}" class="form-control @error('qty') is-invalid @enderror"/>
                    @error('qty')
                        <div class="text-muted">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type='submit'>Tambah Barang</button>
                </div>
            </form>
        </div>
    </div>
@endsection