<main>
    
    <div class="container">
      <div class="card-panel light-blue accent-2 z-depth-3" style="background-image: url('<?=URL_Public?>/img/md_bg.jpg');background-size:cover;margin:0px;margin-top:3em;">
        <header style="padding: 1em; 0em;">
        <h1 class="center-align">
          <div id="user_avatar" href="#" class="z-depth-3">
            <img
            src="<?php $path = './Publics/img/member/avatar/'; 
                if(file_exists($path.$this->member['username'].'.png')){
                  echo URL_Public.'/img/member/avatar/'.$this->member['username'].'.png';
                }else{
                  echo URL_Public.'/img/member/avatar/default.png';
                }?>"
            alt="profile-img" style="display:none;">
          </div>
        </h1>
        <h5 class="white-text center-align">
          <span><?=$this->member['username']?></span>
          <br />
          <small></small>
        </h5>
        <div class="center-align">
          <?php if($this->member['permission'] < 8){?>
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
            <span class="light-blue-text text-darken-2"><?=$this->member['title'].$this->member['name']?> <?=$this->member['surname']?></span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text">ชื่อเล่น : </span>
            <span class="light-blue-text text-darken-2"><?=$this->member['nickname']?></span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text">วัน/เดือน/ปีเกิด : </span>
            <span class="light-blue-text text-darken-2"><?=date('d M Y',strtotime($this->member['birthday']))?></span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text">ที่อยู่ : </span>
            <span class="light-blue-text text-darken-2"><?=$this->member['address']?></span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text">มือถือ : </span>
            <span class="light-blue-text text-darken-2"><?=$this->member['tel']?></span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text">Email : </span>
            <span class="light-blue-text text-darken-2"><?=$this->member['email']?></span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text truncate">Facebook : 
              <a href="https://www.facebook.com/search/top/?q=<?=$this->member['facebook']?>"><span class="light-blue-text text-darken-2"><?=$this->member['facebook']?></span></a>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text">Line ID : </span>
            <span class="light-blue-text text-darken-2"><?=$this->member['line']?></span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text">สถานะสมาชิกหอการค้า : </span>
            <span class="light-blue-text text-darken-2">
              <?php if($this->member['yecmember'] == 'yec'){
                  echo 'รอการตรวจสอบสมาชิก';
                }else{
                  if(isset($this->member['yecmember']) && $this->member['yecmember'] != ''){ 
                    echo 'สมาชิกเลขที่ '.$this->member['yecmember'];
                  }else{
                    echo 'ไม่ได้เป็นสมาชิก';
                  }
              }?>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <span class="black-text">กิจการ : </span>
            <?php if(isset($this->businessList[0])){?>
              <?php $a=1;foreach($this->businessList as $item){if($a != 1){echo ',';}$a++;?>
                <a href="<?=URL_Path?>/business/view/<?=$item['id']?>"><?=$item['name']?></a>
              <?php }?>
            <?php }else{ ?>
              <span class="light-blue-text text-darken-2">ไม่มีกิจการในระบบ</span>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
</main>