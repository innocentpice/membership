<main>
    <div class="container" style="padding: 3em 1em;">
      <div class="row card-panel">
        <header class="center-align">
          <h6 class="line-on-side"><span><i class="material-icons left">lock</i>เปลี่ยนรหัสผ่าน</span></h6>
        </header>
        <form method="post">
        <div class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">vpn_key</i>
              <input id="username" type="password" class="validate" name="old_pass">
              <label for="username">รหัสผ่านเก่า</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">vpn_key</i>
              <input id="password" type="password" class="validate" name="new_pass">
              <label for="password">รหัสผ่านใหม่</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix">vpn_key</i>
              <input id="password" type="password" class="validate" name="new_confirm">
              <label for="password">ยืนยันรหัสผ่านใหม่</label>
            </div>
          </div>
        </div>
        <div class="input-field col s12 center-align">
          <button type="submit" class="btn waves-effect waves-light btn-large red">
            <i class="material-icons left">save</i>บันทึกรหัสผ่าน
          </button>
        </div>
        </form>
      </div>
    </div>
    <?php if(isset($this->msg)){
      echo '<script>';
      echo "window.msgchangepass = '".$this->msg."'";
      echo '</script>';
    }?>
  </main>