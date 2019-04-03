<main>
    
    <div class="container">
      <div class="card-panel light-blue accent-2 z-depth-3" style="background-image: url('<?=URL_Public?>/img/md_bg.jpg');background-size:cover;margin:0px;margin-top:3em;">
        <header style="padding: 1em; 0em;">
        <h1 class="center-align">
          <div id="user_avatar" href="#" class="z-depth-3">
            <img
            src="<?php $path = './Publics/img/member/avatar/'; 
                if(file_exists($path.$_SESSION['account']['username'].'.png')){
                  echo URL_Public.'/img/member/avatar/'.$_SESSION['account']['username'].'.png';
                }else{
                  echo URL_Public.'/img/member/avatar/default.png';
                }?>"
            alt="profile-img" style="display:none;">
            <br>
            <a id="btn_avatar" href="#avatar_upload">
              <i class="material-icons">photo_camera</i>
            </a>
          </div>
        </h1>
        <h5 class="white-text center-align">
          <span><?=$_SESSION['account']['username']?></span>
          <br />
          <small></small>
        </h5>
        <div class="center-align">
          <?php if($_SESSION['account']['permission'] < 8){?>
            <small class="white-text amber" style="padding:0.5em;border-radius:1em;">สมาชิกกลุ่มนักธุรกิจรุ่นใหม่</small>
          <?php }else{?>
            <small class="white-text red" style="padding:0.5em;border-radius:1em;">กรรมการกลุ่มนักธุรกิจรุ่นใหม่</small>
          <?php }?>
        </div>
      </header>
      </div>
    
      <div class="card-panel z-depth-3" style="margin:0px;margin-bottom:3em;">
        <div class="row">
          <h5 class="left">
            <i class="material-icons left">face</i>
            ข้อมูลสมาชิก
          </h5>
        </div>
        <div class="row">
          <div class="divider"></div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text">ชื่อ - สกุล : </span>
            <span class="light-blue-text text-darken-2"><?=$_SESSION['account']['title'].$_SESSION['account']['name']?> <?=$_SESSION['account']['surname']?></span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text">ชื่อเล่น : </span>
            <span class="light-blue-text text-darken-2"><?=$_SESSION['account']['nickname']?></span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text">วัน/เดือน/ปีเกิด : </span>
            <span class="light-blue-text text-darken-2"><?=date('d M Y',strtotime($_SESSION['account']['birthday']))?></span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text">มือถือ : </span>
            <span class="light-blue-text text-darken-2"><?=$_SESSION['account']['tel']?></span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text">ที่อยู่ : </span>
            <span class="light-blue-text text-darken-2"><?=$_SESSION['account']['address']?></span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text">Email : </span>
            <span class="light-blue-text text-darken-2"><?=$_SESSION['account']['email']?></span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text truncate">Facebook : 
              <a href="https://www.facebook.com/search/top/?q=<?=$_SESSION['account']['facebook']?>" target="_blank" style="display:inline;"><span class="light-blue-text text-darken-2"><?=$_SESSION['account']['facebook']?></span></a>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text">Line ID : </span>
            <span class="light-blue-text text-darken-2"><?=$_SESSION['account']['line']?></span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text">สถานะสมาชิกหอการค้า : </span>
            <span class="light-blue-text text-darken-2">
              <?php if($_SESSION['account']['yecmember'] == 'yec'){
                  echo 'รอการตรวจสอบสมาชิก';
                }else{
                  if(isset($_SESSION['account']['yecmember']) && $_SESSION['account']['yecmember'] != ''){ 
                    echo 'สมาชิกเลขที่ '.$_SESSION['account']['yecmember'];
                  }else{
                    echo 'ไม่ได้เป็นสมาชิก';
                  }
              }?>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="divider"></div>
        </div>
        <div class="row">
          <div class="col s12 center-align">
            <a href="<?=URL_Path?>/editinfo" class="waves-effect waves-light btn green accent-4" style="font-size:1.2rem;"><i class="material-icons left">build</i>แก้ไขข้อมูล</a>
          </div>
        </div>
      </div>
    </div>
    
    <div id="avatar_upload" class="modal modal-fixed-footer active">
      <div class="modal-content">
        <div class="row">
          <div class="col s12">
            <h1 class="center-align">
              <button id="btn_imgUpload" class="waves-effect waves-light btn-large">
                เลือกรูปภาพ
              </button>
              
              <hr>
              <img id="img-preview" src="" style="width:200px;height:200px;"/>
            </h1>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="margin-left: 5px;">ยกเลิก</a>
        <form id="frm_avatar" method="post" action="<?=URL_Path?>/avatar" enctype="multipart/form-data">
          <input id="photo_upload" type="file" accept="image/*" name="avatar" style="display:none;"/>
          <button id="photo_submit" type="submit" class="waves-effect waves-light btn disabled">
            ขั้นตอนต่อไป
          </button>
        </form>
      </div>
    </div>
    
</main>