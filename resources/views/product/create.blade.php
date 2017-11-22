@extends('layouts.master')

@section('content')
    <div class="container">

    <div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>create New Product</h3>

            </div>
            <div class="panel-body">
                <form action="{{route('product.store')}}" method="post">
                Name
                    {{csrf_field()}}
                    <input type="text" name="name"  placeholder="product name" class="form-control">
                     Description
                </br></br><textarea name="description" id="" cols="30" rows="10"></textarea>
                </br> </br>Price
                    <input type="number" name="price"  placeholder="product price" class="form-control">
                    Category
                    <select name="category">
                        @foreach($categories as $category)
                            <option value="{!! $category->id !!}" id="">{!! $category->name !!}</option>
                        @endforeach
                    </select>
                </br>
                    <input type="submit" class="btn btn-success">


                </form>

            </div>

        </div>
    </div>
</div>
        <div class="container">

@endsection
