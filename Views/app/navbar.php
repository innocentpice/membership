
<?php $path = './Publics/img/member/avatar/'; 
  if(file_exists($path.$_SESSION['account']['username'].'.png')){
    $path = URL_Public.'/img/member/avatar/'.$_SESSION['account']['username'].'.png';
  }else{
    $path = URL_Public.'/img/member/avatar/default.png';
}?>


<ul id="slideNav" class="side-nav fixed z-depth-1">
  <li id="btn-na-tog" class="hide-on-large-only waves-effect" style="width:100%;height:56px;line-height:56px;"><a href="javascript:void();" style="height:56px;line-height:56px;" data-activates="slideNav" class="sNavClose"><i class="material-icons" style="height:56px;line-height:56px;">menu</i>MENU</a></li>
  <li class="hide-on-med-and-down" style="margin-top:64px;display:hidden;"></li>
  <li>
    <div class="userView">
      <div class="background light-blue accent-2" style="background-image: url('<?=URL_Public?>/img/md_navbg.jpg');background-size:cover;"></div>
      <div class="row">
        <div class="col s12 center-align">
          <div id="nav_avatar" style="background: url('<?=$path?>') center center / cover;width:100px;height:100px;display:inline-block;border:white solid 0.02em;border-radius:50%;"></div>
          <span class="white-text name" style="font-size:1.3rem;padding:0px;margin:0px;"><?=$_SESSION['account']['username']?></span>
          <?php if($_SESSION['account']['permission'] < 8){?>
            <small class="white-text amber" style="padding:0.5em;border-radius:1em;">สมาชิกกลุ่มนักธุรกิจรุ่นใหม่</small>
          <?php }else{?>
            <small class="white-text red" style="padding:0.5em;border-radius:1em;">กรรมการกลุ่มนักธุรกิจรุ่นใหม่</small>
          <?php }?>
        </div>
      </div>
    </div>
  </li>
  <?php if($_SESSION['account']['permission'] >= 8){?>
  <li><a class="waves-effect" href="<?=URL_Path?>/admin/userlist"><i class="material-icons">group</i>ระบบสมาชิก</a></li>
  <?php if($_SESSION['account']['permission'] == 9){?>
  <li><a class="waves-effect" href="<?=URL_Path?>/admin/stafflist"><i class="material-icons">person</i>ระบบกรรมการ</a></li>
  <?php }?>
  <li>
    <div class="divider"></div>
  </li>
  <?php }?>
  <li><a class="waves-effect" href="<?=URL_Path?>"><i class="material-icons">face</i>ข้อมูลส่วนตัว</a></li>
  <li><a class="waves-effect" href="<?=URL_Path?>/business"><i class="material-icons">work</i>กิจการของฉัน</a></li>
  <li><a class="waves-effect" href="<?=URL_Path?>/status"><i class="material-icons">verified_user</i>สถานะสมาชิก</a></li>
  <li>
    <div class="divider"></div>
  </li>
  <li><a class="waves-effect" href="<?=URL_Path?>/changepass"><i class="material-icons">lock_outline</i>เปลี่ยนรหัสผ่าน</a></li>
  <li><a class="waves-effect" href="<?=URL_Path?>/logout"><i class="fa fa-sign-out" aria-hidden="true" style="font-size:1.6rem;padding-left:4px;"></i>ออกจากระบบ</a></li>
</ul>

<div id="navApp" class="navbar-fixed z-depth-1">
<nav>
  <div class="nav-wrapper white black-text">
    <div class="row">
      <a href="#" id="sNavShow" data-activates="slideNav" class="button-collapse col"><i class="material-icons black-text">menu</i></a>
      <a href="#" class="brand-logo hide-on-med-and-down" style="margin-left:3em;margin-top:3px;">
        <img style="width:20%; height:20%; max-height:2em; max-width: 2em;" src="<?=URL_Public?>/img/logo/elogo.png"></img>
        <img style="width:49%; height:49%; max-height:5em; max-width: 5em;" src="<?=URL_Public?>/img/logo/logo.jpg"></img>
      </a>
      <?php if($_SESSION['account']['end_date'] != '' || $_SESSION['account']['permission'] >= 8){?>
      <form id="frm_search" method="post">
      <div class="col s8 m4 l2 right">
        <div class="input-field">
          <i class="material-icons prefix">search</i>
            <input type="text" id="autocomplete-input" class="autocomplete" value="<?=$this->searchKeyword?>" autocomplete="off">
          <label for="autocomplete-input">Search</label>
        </div>
      </div>
      </form>
      <?php }?>
    </div>
  </div>
</nav>
</div>
