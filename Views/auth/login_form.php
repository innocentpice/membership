<header style="margin-top:8em;">
    <h1 class="text-center">Sign In.</h1>
</header>
<div class="container">
  <form>
    <div class="form-group row" style="margin-top:3em;">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Username</label>
      <div class="col-sm-10">
        <input type="email" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="enter username">
      </div>
    </div>
    <div class="form-group row" style="margin-top:3em;">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
      <div class="col-sm-10">
        <input type="email" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="enter password">
      </div>
    </div>
    <div class="form-group row" style="margin-top:2em;">
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary btn-lg">Sign in</button>
            <a href="<?=URL_Path?>" class="btn btn-secondary btn-lg">Cancel</a>
        </div>
    </div>
  </form>
</div>