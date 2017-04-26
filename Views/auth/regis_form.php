<header style="margin-top:3em;">
    <h1 class="text-center">Sign Up</h1><hr>
</header>
<div class="container" style="margin-top:2em;">
    <legend>Account Info :</legend>
    <div class="form-group row">
      <label for="frm_username" class="col-2 col-form-label">Username</label>
      <div class="col-10">
        <input class="form-control" type="text" id="frm_username" name="username" placeholder="Enter Username">
      </div>
    </div>
    <div class="form-group row">
      <label for="frm_password" class="col-2 col-form-label">Password</label>
      <div class="col-10">
        <input class="form-control" type="password" id="frm_password" name="password" placeholder="Enter Password">
      </div>
    </div>
    <div class="form-group row">
      <label for="frm_repassword" class="col-2 col-form-label">Re - Password</label>
      <div class="col-10">
        <input class="form-control" type="password" id="frm_repassword" name="repassword" placeholder="Enter Password again">
      </div>
    </div>
    <legend>Personal Info :</legend>
    <div class="form-group row">
      <label for="frm_name" class="col-2 col-form-label">Name</label>
      <div class="col-4">
        <input class="form-control" type="text" id="frm_name" name="name" placeholder="Enter Name">
      </div>
      <label for="frm_surname" class="col-1 col-form-label">Surname</label>
      <div class="col-5">
        <input class="form-control" type="text" id="frm_surname" name="surname" placeholder="Enter Surname">
      </div>
    </div>
    <div class="form-group row">
      <label for="frm_birthday" class="col-2 col-form-label">Birthday</label>
      <div class="col-4">
        <input class="form-control" type="date" id="frm_birthday" name="birthday">
      </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Sex</label>
        <div class="col-10">
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="sex" id="frm_sexM" value="1"> Men
              </label>
            </div>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="sex" id="frm_sexW" value="2"> Women
              </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Avatar Image</label>
        <div class="col-10">
          <img id="img_preview" data-src="holder.js/200x200" class="img-thumbnail rounded-circle" alt="200x200" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15baa2234af%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15baa2234af%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2275.5%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 200px;">
          <div class="clearfix"></div>
          <label class="custom-file" style="margin-top:1em;">
            <input type="file" id="frm_avatar">
          </label>
        </div>
    </div>
    <legend>Contact Info :</legend>
    <div class="form-group row">
      <label for="frm_address" class="col-2 col-form-label">Address</label>
      <div class="col-10">
        <input class="form-control" type="text" id="frm_address" name="address" placeholder="Enter Address">
      </div>
    </div>
    <div class="form-group row">
      <label for="frm_city" class="col-2 col-form-label">City</label>
      <div class="col-3">
        <input class="form-control" type="text" id="frm_city" name="city" placeholder="Enter City">
      </div>
      <label for="frm_province" class="col-1 col-form-label">Province</label>
      <div class="col-3">
        <input class="form-control" type="text" id="frm_province" name="province" placeholder="Enter province">
      </div>
      <label for="frm_zipcode" class="col-1 col-form-label">Zip Code</label>
      <div class="col-2">
        <input class="form-control" type="text" id="frm_zipcode" name="zipcode" placeholder="Enter Zip Code">
      </div>
    </div>
    <div class="form-group row">
      <label for="frm_tel" class="col-2 col-form-label">Telephone</label>
      <div class="col-10">
        <input class="form-control" type="tel" id="frm_tel" name="tel" placeholder="Enter Telephone Number">
      </div>
    </div>
    <div class="form-group row">
      <label for="frm_phone" class="col-2 col-form-label">Phone</label>
      <div class="col-10">
        <input class="form-control" type="tel" id="frm_phone" name="phone" placeholder="Enter Phone Number">
      </div>
    </div>
    <div class="form-group row">
      <label for="frm_email" class="col-2 col-form-label">Email</label>
      <div class="col-10">
        <input class="form-control" type="email" id="frm_email" name="email" placeholder="Enter Email">
      </div>
    </div>
    <div class="form-group row" style="margin-top:2em;">
        <div class="col-12 text-right">
            <button type="submit" class="btn btn-primary">Next Steps <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
        </div>
    </div>
</div>