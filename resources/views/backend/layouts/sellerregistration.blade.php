<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>


@if(Session::has('message'))
<div class="alert alert-success">

{{ Session::get('message') }}
</div>

@endif

{{-- Registration --}}
<div>
<form class="form-horizontal" action="{{ route('seller.store') }}" method="POST">
    @csrf
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <!-- sellersname -->
      <label class="control-label"  for="name">Name</label>
      <div class="controls">
        <input type="text" id="username" name="name" placeholder="" class="input-xlarge">
        <p class="help-block"></p>
      </div>
    </div>

    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="company_name">Company Name</label>
      <div class="controls">
        <input type="text" id="company_name" name="company_name" placeholder="" class="input-xlarge">
        <p class="help-block"></p>
      </div>
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">Select Sector Type : </label>
      <div class="controls">
      <select  name="sector_id">
          @foreach($sectors as $key => $sector)
          <option value="{{ $sector->id }}">{{ $sector->name }}</option>
          @endforeach

      </select>
    </div>
      </div>


      <div class="control-group">
        <!-- E-mail -->
        <label class="control-label" for="company_name">Email</label>
        <div class="controls">
          <input type="email" id="company_name" name="email" placeholder="" class="input-xlarge">
          <p class="help-block"></p>
        </div>
        <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="company_name">Phone</label>
            <div class="controls">
              <input type="text" id="company_name" name="phone" placeholder="" class="input-xlarge">
              <p class="help-block"></p>
            </div>
            <div class="control-group">
                <!-- E-mail -->
                <label class="control-label" for="company_name">Password</label>
                <div class="controls">
                  <input type="password" id="company_name" name="password" placeholder="" class="input-xlarge">
                  <p class="help-block"></p>
                </div>
            </div>
        </div>
      </div>


    <div class="control-group">
      <!-- Button -->
      <div class="controls">

        <a class="btn btn-success" href="{{ route('registration') }}">Register</a>

      </div>
    </div>
  </fieldset>
</form>
<a class="btn btn-Primary" href="{{ route('seller.login') }}">Login</a>
</div>






