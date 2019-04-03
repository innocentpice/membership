<main>
  
  <div class="container" style="padding: 2em 1em;">
    <?php if(isset($this->businessList[0])){?>
      <?php foreach($this->businessList as $item){?>
    
      <div id="business_<?=$item['id']?>" class="row">
        <div class="card-panel">
          <div class="row">
            <h5>
                <i class="material-icons left">work</i>
                <span class="flow-text truncate">
                    <?=$item['name']?>
                    <br/>
                    <small>โดย <a href="#"><?=$item['username']?></a></small>
                </span>
            </h5>
          </div>
          <div class="row">
            <div class="divider"></div>
          </div>
          <div class="row z-depth-2">
              <?php $check = 0;$imageSlide = '';for($i=1;$i<=4;$i++){
                    $path = './Publics/img/business/' ;if(file_exists($path.$item['id'].'_'.$i.'.png')){
                    $url = URL_Public .'/img/business/'.$item['id'].'_'.$i.'.png';$check++;
                    $imageSlide .= '<a class="carousel-item" href="javascript:void();"><img class="responsive-img" src="'.$url.'"></a>';
              }}?>
              <?php if($imageSlide != ''){?>
              <div class="carousel carousel-slider" data-indicators="true">
                <?=$imageSlide?>
              </div>
              <?php }?>
          </div>
          <div class="row">
            <div class="col s12">
              <span class="black-text">รายละเอียด : </span>
              <span class="light-blue-text text-darken-2"><?=$item['detail']?></span>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <span class="black-text">ประเภทกิจการ TSIC (21 หมวด) : </span>
              <span class="light-blue-text text-darken-2"><?=$item['type21']?></span>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <span class="black-text">ประเภทกิจการ TSIC (23 หมวด) : </span>
              <span class="light-blue-text text-darken-2"><?=$item['type23']?></span>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <span class="black-text">ที่อยู่สำนักงาน : </span>
              <span class="light-blue-text text-darken-2"><?=$item['address']?></span>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <span class="black-text">โทรศัพท์ : </span>
              <span class="light-blue-text text-darken-2"><?=$item['tel']?></span>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <span class="black-text">แฟกซ์ : </span>
              <span class="light-blue-text text-darken-2"><?=$item['fax']?></span>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <span class="black-text">เว็บไซต์ : </span>
              <span class="light-blue-text text-darken-2"><a href="http://<?=$item['website']?>"><?=$item['website']?></a></span>
            </div>
          </div>
          <div class="row">
            <div class="divider"></div>
          </div>
          <div class="row">
            <div class="col s12 center-align">
              <?php if(isset($item['map_lng'])){?>
              <a href="http://maps.google.com/maps?q=loc:<?=$item['map_lat']?>,<?=$item['map_lng']?>" target="_blank" class="waves-effect waves-light btn green accent-4"><i class="material-icons left">map</i>ดูแผนที่</a>
              <?php }?>
              <a href="<?=URL_Path?>/business/editimg/<?=$item['id']?>" class="waves-effect waves-light btn green accent-4" style="font-size:1.2rem;margin:4px;"><i class="material-icons left">photo</i>เปลี่ยนรูปภาพ</a>
              <a href="<?=URL_Path?>/business/edit/<?=$item['id']?>" class="waves-effect waves-light btn green accent-4" style="font-size:1.2rem;margin:4px;"><i class="material-icons left">build</i>แก้ไขข้อมูล</a>
              <button class="waves-effect waves-light btn red accent-4 btn_del_business" bid="<?=$item['id']?>" style="font-size:1.2rem;margin:4px;"><i class="material-icons left">delete_forever</i>ยกเลิกกิจการ</button>
            </div>
          </div>
        </div>
      </div>
      
      <?php }?>
    <?php }else{ ?>
    
    <div class="row">
      <div class="col s12">
        <h4 class="center-align grey-text text-darken-1">
          คุณยังไม่มีกิจการใดเลย
          <br>
          <small class="grey-text text-darken-0">มาเพิ่มกิจการของคุณกัน</small>
        </h4>
      </div>
    </div>
    
    <?php }?>
    
    <div class="row">
      <div class="divider"></div>
    </div>
    <div class="row center-align">
        <a href="<?=URL_Path?>/business/add" class="waves-effect waves-light btn blue btn-large">
          <i class="material-icons left">add_circle_outline</i>
          <span style="font-size:1.5rem;">เพิ่มกิจการของคุณ</span>
        </a>
    </div>
  </div>
</main>