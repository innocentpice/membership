<main>
  <div class="container" style="padding:0em 1em;margin-top:2em;">
    <div class="row">
      <div class="col s12">
        <form id="frm_editprofile" method="post">
          <div class="row">
          <div class="col s12 card-panel" style="padding:2em;">
            <h4>แก้ไขข้อมูล</h4>
            <div class="divider black"></div>
            <div class="row">
              <div class="input-field col s12">
                <lable>| ข้อมูลติดต่อ :- </lable>
              </div>
              <div class="input-field col s12">
                <input id="address" type="tel" class="validate" data-length="100" name="address" value="<?=$_SESSION['account']['address']?>">
                <label for="address">ที่อยู่</label>
              </div>
              <div class="input-field col s12">
                <input id="phone" type="tel" class="validate" data-length="10" name="tel" value="<?=$_SESSION['account']['tel']?>">
                <label for="phone">มือถือ</label>
              </div>
              <div class="input-field col s12">
                <input id="email" type="email" class="validate" data-length="100" name="email" value="<?=$_SESSION['account']['email']?>">
                <label for="email">Email</label>
              </div>
              <div class="input-field col s12">
                <input id="facebook" type="text" class="validate" value="<?=$_SESSION['account']['facebook']?>" data-length="100" name="facebook">
                <label for="facebook">Facebook</label>
              </div>
              <div class="input-field col s12">
                <input id="line" type="text" class="validate" data-length="30" name="line" value="<?=$_SESSION['account']['line']?>">
                <label for="line">Line ID</label>
              </div>
              <div class="input-field col s12">
                <lable>| สถานะสมาชิกหอการค้า :- </lable>
              </div>
              <div class="row">
                <div class="input-field col inline">
                  <input type="radio" id="check1" name="yecmem" <?php if($_SESSION['account']['yecmember'] != '' && $_SESSION['account']['yecmember'] != 'yec'){echo 'disabled ';} if(isset($_SESSION['account']['yecmember']) && $_SESSION['account']['yecmember'] != ''){ echo 'checked="true" value="'.$_SESSION['account']['yecmember'].'"';}else{echo 'value="yec"';}?> />
                  <label for="check1" id="gomodalyec">
                    เป็นสมาชิกหอการค้า
                    <span id="snoyec">
                      <?php /*if(isset($_SESSION['account']['yecmember']) && $_SESSION['account']['yecmember'] != ''){
                        echo '(';
                        echo 'หมายเลข '.$_SESSION['account']['yecmember'];
                        echo ')';
                      }*/?>
                    </span>
                  </label>
                </div>
                <div class="input-field col inline">
                  <input type="radio" id="check2" name="yecmem" value="" <?php if($_SESSION['account']['yecmember'] != '' && $_SESSION['account']['yecmember'] != 'yec'){echo 'disabled ';} if(empty($_SESSION['account']['yecmember'])){ echo 'checked="true"';}?> />
                  <label for="check2" id="offmodalyec">ไม่เป็นสมาชิกหอการค้า</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 center-align">
                <button type="submit" name="editinfo" value="submit" id="btn-done" class="btn btn-block waves-effect waves-light btn-large lime darken-1">
                  ยืนยันการเปลี่ยนแปลง
                </button>
              </div>
            </div>
            <div id="modalnoyec" class="modal" style="z-index:999;">
              <div class="modal-content center-align">
                <div class="input-field col s12">
                  <input type="text" id="noyec" name="noyecmem" data-length="10" value="<?=$_SESSION['account']['yecmember']?>"/>
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
</main>