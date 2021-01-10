<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add Sector</h1>
    <form action="{{ route('sector.store') }} " method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Sector Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sector" placeholder="Enter email">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <ul>
          @foreach($all as $key => $al)
          <li>Sector Name:   {{ $al->name }}
                         @foreach ( $al->category as $cat )
                         <li>=============>>Category {{ $cat->id }}======={{ $cat->name}}
@foreach ( $cat->subcategories as $subcategory )
<li>===========================SubCategory  {{ $subcategory->id }} ===================={{ $subcategory->name }}       </li>
@endforeach

                    </li>
                             @endforeach

            </li>
          @endforeach
      </ul>

      <hr>
      <h1>Add Product Categories</h1>
      <form action=" {{ route('procat.store') }}" method="post">
          @csrf
          <div class="form-group">

            <select name="sector">
                @foreach($all as $al)
                <option value="{{ $al->id }}"> {{ $al->name }} </option>
                @endforeach
              </select>

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Category Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="productcat" placeholder="Enter email">

          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <ul>
            @foreach($procats as $key => $procat)
            <li>{{ $procat->name }} =========== {{ $procat->sectorcat->name }}</li>
            @endforeach

        </ul>

        <hr>
        <h1>Add Sub Categories</h1>
        <form action=" {{ route('prosubcat.store') }}" method="post">
            @csrf
            <div class="form-group">

              <select name="category">
                  @foreach($procats as $procat)
                  <option value="{{ $procat->id }}"> {{ $procat->name }} </option>
                  @endforeach
                </select>

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Category Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter email">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <ul>
              @foreach($subcats as $key => $subcat)
              <li>{{ $subcat->name }} =========== {{ $subcat->categories->name }}</li>
              @endforeach

          </ul>

          <hr>
          <h1>Add Products</h1>
          <form action="{{route('product.store')}}" method="post">
              @csrf
              <div class="form-group">

                <select name="seller">
                    @foreach($sellers as $seller)
                    <option value="{{ $seller->id }}"> {{ $seller->name }} </option>
                    @endforeach
                  </select>
                  <select name="category">
                    @foreach($procats as $procat)
                    <option value="{{ $procat->id }}"> {{ $procat->name }} </option>
                    @endforeach
                  </select>
                  <select name="subcategory">
                    @foreach($subcats as $subcat)
                    <option value="{{ $subcat->id }}"> {{ $subcat->name }} </option>
                    @endforeach
                  </select>

              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="productname" placeholder="Enter email">

              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <ul>
                @foreach($products as $key => $product)
                <li>{{ $product->name }} =========== {{ $product->subcategories->name }}==========={{ $product->seller->sector->name }}=========== {{ $product->seller->company_name }}</li>
                @endforeach

            </ul>
            *******Sub Category $ Company******
            @foreach($subcats as $key => $subcat)
           <li>{{ $subcat->name }}</li>
                      {{-- @foreach($subcat->seller as $noman)
                    <li>{{ $noman->company_name }}</li>
                       @endforeach --}}
            @endforeach

</body>
</html>
