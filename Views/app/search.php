 <main>
    <div style="padding:1.5em;">
      <h5 style="color:#808080;">ผลการค้นหา</h5>
      <hr>
      <!--<div class="input-field">-->
      <!--  <input type="text" id="userlist_search" class="autocomplete">-->
      <!--  <label for="userlist_search">Search</label>-->
      <!--</div>-->
      <ul id="userlist" class="collection" style="border:none;">
        <?php if(isset($this->business[0]) || isset($this->member[0])){?>
        <?php foreach($this->business as $item){?>
        <li class="collection-item" style="margin:5px 0px;border-bottom: 1px solid #e0e0e0;">
          <p class="title truncate flow-text" style="margin:4px 0px;"><a href="<?=URL_Path?>/business/view/<?=$item['id']?>" style="color:#609;"><?=$item['name']?></a></p>
          <p class="truncate" style="margin:2px 0px;">
            <small>โดย <?=$item['username']?></small>
          </p>
          <p class="truncate" style="margin:2px 0px;">
            <small style="color:#006621;">
              รายละเอียด : 
              <?=$item['detail']?>&nbsp;&nbsp;
              ที่อยู่ : <?=$item['address']?>
            </small>
          </p>
        </li>
        <?php }?>
        <?php foreach($this->member as $item){?>
        <li class="collection-item" style="margin:5px 0px;border-bottom: 1px solid #e0e0e0;">
          <p class="title truncate flow-text" style="margin:4px 0px;">
            <a href="<?=URL_Path?>/members/view/<?=$item['id']?>" style="color:#609;">
              <?=$item['title'].$item['name']?> <?=$item['surname']?>
            </a>
          </p>
          <p class="truncate" style="margin:2px 0px;">
            <small style="color:#006621;">
              ชื่อเล่น :
              <?=$item['nickname']?>&nbsp;&nbsp;
              เกิดวันที่ :
              <?=date('d M Y',strtotime($item['birthday']))?>&nbsp;&nbsp;
              ติดต่อ :
              <?=$item['tel']?>&nbsp;&nbsp;
              Email :
              <?=$item['email']?>&nbsp;&nbsp;
            </small>
          </p>
        </li>
        <?php }}else{?>
        <h4 class="center-align">ไม่พบผลลัพธ์จากการค้นหาของคุณ <?=$this->searchKeyword?></h4>
        <?php }?>
      </ul>
    </div>
  </main>