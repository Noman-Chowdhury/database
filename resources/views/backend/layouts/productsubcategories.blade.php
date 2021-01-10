@extends('mainfile')

@section('content')

    <button type="button" class="btn btn-primary" style="margin: 10px" data-toggle="modal" data-target="#exampleModal">Add Product Sub-Category</button>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product Sub-Category Name</th>
        <th scope="col">Product Category</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach($subcats as $key => $subcat)


      <tr>
        <th scope="row">{{ $key+1 }}</th>
        <td> {{ $subcat->name }} </td>
        <td> {{ $subcat->categories->name }} </td>
        <td>
            <button>Edit</button>
            <button>Delete</button>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>






  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=" {{ route('prosubcat.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Select Product Parent Category</label><br>
              <select name="category">

                  @foreach($procats as $procat)
                  <option value="{{ $procat->id }}"> {{ $procat->name }} </option>
                  @endforeach
                </select>

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Sub-Category Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter email">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>

    </div>
  </div>
</div>

@endsection
