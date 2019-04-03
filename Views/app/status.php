<?php $path = './Publics/img/member/avatar/'; 
  if(file_exists($path.$_SESSION['account']['username'].'.png')){
    $path = URL_Public.'/img/member/avatar/'.$_SESSION['account']['username'].'.png';
  }else{
    $path = URL_Public.'/img/member/avatar/default.png';
}?>


<main>
  <div class="container">
    <header class="card-panel" style="padding:2em;margin-top:2em;">
      <header class="center-align">
        <div class="row">
          <div class="col s12 m3">
            <div id="nav_avatar" style="background: url('<?=$path?>') center center / cover;width:12em;height:12em;display:inline-block;border:white solid 0.02em;border-radius:50%;"></div>
          </div>
          <div class="col s12 m6">
            <h5>
              <small>หอการค้าไทย</small><br>
              THE THAI CHAMBER OF COMMERCE
              <hr>
              <small>สภาหอการค้าแห่งประเทศไทย</small><br>
              BOARD OF TRADE OF THAILAND
            </h5>
          </div>
          <div class="col s12 m3">
              <img style="width:20%; height:20%; max-height:5em; max-width: 5em;" src="<?=URL_Public?>/img/logo/elogo.png"></img>
              <img style="width:49%; height:49%; max-height:5em; max-width: 12em;" src="<?=URL_Public?>/img/logo/logo.jpg"></img>
          </div>
        </div>
      </header> 
      <h1 class="center-align">
        <div class="row">
          <div class="col s12">
            <h3 class="light-blue-text text-darken-2"><?=$_SESSION['account']['title'].$_SESSION['account']['name']?> <?=$_SESSION['account']['surname']?><br>
              <small class="light-blue-text text-darken-6 flow-text">หอการค้าจังหวัดระยอง</small>
            </h3>
          </div>
        </div>
      </h1>
      <div class="center-align">
          <?php if($_SESSION['account']['permission'] < 8){?>
            <span class="white-text amber" style="padding:0.5em;border-radius:1em;">สมาชิกกลุ่มนักธุรกิจรุ่นใหม่</span>
          <?php }else{?>
            <span class="white-text red" style="padding:0.5em;border-radius:1em;">กรรมการกลุ่มนักธุรกิจรุ่นใหม่</span>
          <?php }?>
      </div>
      <?php if($_SESSION['account']['permission'] < 8){?>
      <h5 class="center-align">
        <?php if($_SESSION['account']['end_date'] != ''){?>
          <small>วันหมดอายุสมาชิก</small><br/>
          <span class="light-blue-text text-darken-4"><?=$_SESSION['account']['end_date']?></span>
        <?php }else{?>
          <span class="green-text text-darken-1">ยังไม่ได้รับการยืนยันสมาชิก / หมดอายุสมาชิก</span>
        <?php }?>
      </h5>
      <?php }?>
    </header>
    </div>
</main>