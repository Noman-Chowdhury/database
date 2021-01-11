<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>


{{-- //Login --}}

@if (session('message'))
<div class="alert alert-danger">
    {{ session('message') }}
</div>
@endif
<div class="float-left">
<form class="form-horizontal" action="#" method="get">

  <fieldset>
    <div id="legend">
      <legend class="">Login</legend>
    </div>

      <div class="control-group">
        <!-- E-mail -->
        <label class="control-label" for="company_name">Email</label>
        <div class="controls">
          <input type="email" id="company_name" name="email" placeholder="" class="input-xlarge">
          <p class="help-block"></p>
        </div>
        <div class="control-group">

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
        <a class="btn btn-success" href="{{ route('seller.dash') }}">Login</a>
        <a class="btn btn-success" href="{{ route('registration') }}">Register</a>

      </div>
    </div>
  </fieldset>
</form>
</div>
