<div class="navbar-fixed">
<nav>
  <div class="nav-wrapper blue darken-4">
    <span class="brand-logo center"><small>ลงทะเบียนสมาชิก</small></span>
    <ul class="left">
      <li><a href="<?=URL_Path?>"><small><i class="material-icons prefix">arrow_back</i></small></a></li>
    </ul>
  </div>
</nav>
</div>
<div class="container" style="padding:0em 1em;margin-top:2em;">
<div class="row">
  <div class="col s12 m8 offset-m2 card-panel" style="padding:3em;">
    <div class="row">
      <div class="col s12">
        <form id="frm_regis" method="post">
          <div class="row">
          <div class="col s12">
            <header class="center-align">
              <img style="width:15em;" src="<?=URL_Public?>/img/logo/logo.jpg"></img>
              <h5>
                <small>กลุ่มนักธุรกิจใหม่จังหวัดระยอง</small><br>
                The Rayong Chamber of Commerce
              </h5>
            </header>
            <div class="divider"></div>
            <div class="row">
              <div class="input-field col s12">
                <p>| ข้อมูลล๊อกอิน :- </p>
              </div>
              <div class="input-field col s12">
                <input id="username" type="text" class="validate" data-length="25" name="username">
                <label for="username">ชื่อผู้ใช้งาน</label>
              </div>
              <div class="input-field col s12">
                <input id="password" type="password" class="validate" data-length="25" name="password">
                <label for="password">รหัสผ่าน</label>
              </div>
              <div class="input-field col s12">
                <input id="confirm" type="password" class="validate" data-length="25" name="confirm">
                <label for="confirm">ยืนยันรหัสผ่าน</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <p>| ข้อมูลส่วนตัว :- </p>
              </div>
              <div class="input-field col s12 l2">
                <select name="title">
                  <option value="NULL" disabled selected>กรุณาเลือก</option>
                  <option value="นาย">นาย</option>
                  <option value="นาง">นาง</option>
                  <option value="นางสาว">นางสาว</option>
                </select>
                <label>คำนำหน้าชื่อ</label>
              </div>
              <div class="input-field col s12 l4">
                <input id="first_name" type="text" class="validate" data-length="30" name="name">
                <label for="first_name">ชื่อจริง</label>
              </div>
              <div class="input-field col s12 l4">
                <input id="last_name" type="text" class="validate" data-length="30" name="surname">
                <label for="last_name">นามสกุล</label>
              </div>
              <div class="input-field col s12 l2">
                <input id="nick_name" type="text" class="validate" data-length="10" name="nickname">
                <label for="nick_name">ชื่อเล่น</label>
              </div>
              <div class="input-field col s12">
                <label for="birthday">วัน/เดือน/ปีเกิด (ค.ศ.)</label>
                <input type="date" id="birthday" class="datepicker" name="birthday">
              </div>
              <div class="input-field col s12">
                <lable>| ข้อมูลติดต่อ :- </lable>
              </div>
              <div class="input-field col s12">
                <input id="address" type="text" class="validate" data-length="100" name="address">
                <label for="address">ที่อยู่</label>
              </div>
              <div class="input-field col s12">
                <input id="phone" type="tel" class="validate" data-length="10" name="tel">
                <label for="phone">มือถือ</label>
              </div>
              <div class="input-field col s12">
                <input id="email" type="email" class="validate" data-length="100" name="email">
                <label for="email">Email</label>
              </div>
              <div class="input-field col s12">
                <input id="facebook" type="text" class="validate" value="" data-length="100" name="facebook">
                <label for="facebook">Facebook</label>
              </div>
              <div class="input-field col s12">
                <input id="line" type="text" class="validate" data-length="30" name="line">
                <label for="line">Line ID</label>
              </div>
              <div class="input-field col s12">
                <lable>| สถานะสมาชิกหอการค้า :- </lable>
              </div>
              <div class="row">
                <div class="input-field col inline">
                  <input type="radio" id="check1" name="yecmem" value="yec"/>
                  <label for="check1" id="gomodalyec">เป็นสมาชิกหอการค้า <span id="snoyec"></span></label>
                </div>
                <div class="input-field col inline">
                  <input type="radio" id="check2" name="yecmem" value=""/>
                  <label for="check2" id="offmodalyec">ไม่เป็นสมาชิกหอการค้า</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="divider"></div>
              <div class="input-field col s12 center-align">
                <input type="checkbox" id="agree" name="agree" />
                <label for="agree">
                  <small class="blue-text text-darken-2">
                    ข้าพเจ้าขอรับร้องว่าหากคณะกรรมการพิจารณารับข้าพเจ้าเป็นสมาชิกแล้ว ข้าพเจ้ายินดีปฎิบัติตามระเบียบและข้อบังคับของกลุ่มนักธุรกิจรุ่นใหม่หอการค้าจังหวัดระยอง โดยเคร่งครัดทุกประการ
                  </small>
                </label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 center-align">
                <button type="submit" id="btn-done" class="disabled btn btn-block waves-effect waves-light btn-large lime darken-1">
                  ลงทะเบียน
                </button>
              </div>
            </div>
            <div id="modalnoyec" class="modal" style="z-index:999;">
              <div class="modal-content center-align">
                <div class="input-field col s12">
                  <input type="text" id="noyec" name="noyecmem" data-length="10"/>
                  <label for="noyec">หมายเลขสมาชิก</label>
                </div>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" onClick="window.noyecs = true;">ยืนยัน</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" onClick="window.noyecs = false;">ยกเลิก</a>
              </div>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>