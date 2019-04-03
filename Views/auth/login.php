<div class="container" style="padding:0em 1em;margin:4em auto;">
    <div class="row">
      <div class="col s12 m8 offset-m2 card-panel" style="padding:3em;">
        <header class="center-align">
          <img style="width:20%; height:20%;" src="<?=URL_Public?>/img/logo/elogo.png"></img>
          <img style="width:49%; height:49%;" src="<?=URL_Public?>/img/logo/logo.jpg"></img>
          <h5>
            The Rayong Chamber of Commerce
          </h5>
          <h6 class="line-on-side"><span>เข้าสู่ระบบ</span></h6>
        </header>
        <div class="row">
          <div class="col s12">
            <form method="post">
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">person</i>
                  <input id="username" type="text" class="validate" name="username">
                  <label for="username">ชื่อผู้ใช้งาน</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">vpn_key</i>
                  <input id="password" type="password" class="validate" name="password">
                  <label for="password">รหัสผ่าน</label>
                </div>
                <div class="input-field col s12 center-align">
                  <button type="submit" class="btn waves-effect waves-light btn-large btn-block blue">
                    <i class="material-icons left">lock_outline</i>เข้าสู่ระบบ
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <h6 class="line-on-side"><span>ยังไม่เป็นสมาชิก ?</span></h6>
        <div class="row">
          <div class="input-field col s12 center-align">
            <a href="<?=URL_Path?>/register" class="btn waves-effect waves-light btn-large btn-block lime darken-1">
              <i class="material-icons left">create</i>ลงทะเบียนสมาชิก
            </a>
          </div>
        </div>
      </div>
    </div>
</div>

<?php if(isset($this->msgLogin)){
  echo '<script>';
  echo 'window.msgchangepass = \'ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง\';';
  echo '</script>';
}?>