@extends('layouts.main')

@section('content')

@section('title')
     Create
@endsection

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="{{ route('store')}}" method="POST">
                @csrf
             <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" class="@error('name') is-invalid @enderror">

                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control"  class="@error('email') is-invalid @enderror">

                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" id="phone" class="form-control" class="@error('phone') is-invalid @enderror">

                    @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success float-right">Create</button>
            </form>
        </div>    
    </div>
</div>

@endsection