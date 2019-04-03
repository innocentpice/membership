 <main>
    <div style="padding:1.5em;">
      <h5 style="color:white;">รายชื่อสมาชิก</h5>
      <hr>
      <div class="card" style="padding:1.5em;">
        <h3>Filter :</h3>
        <div class="row">
        <form method="post" action="<?=URL_Path?>/admin/userlist">
        <div class="input-field col s12">
          <select name="type21">
            <?php if(isset($_POST['type21'])){?>
            <option value="<?=$_POST['type21']?>" disabled selected><?=$_POST['type21']?></option>
            <?php }else{?>
            <option value="" disabled selected>เลือกประเภทกิจการ (21 หมวด)</option>
            <?php }?>>
            <option value="เกษตรกรรม การป่าไม้ และการประมง">เกษตรกรรม การป่าไม้ และการประมง</option>
            <option value="การทำเหมืองแร่ และเหมืองหิน">การทำเหมืองแร่ และเหมืองหิน</option>
            <option value="การผลิต">การผลิต</option>
            <option value="ไฟฟ้า ก๊าซ ไอน้ำ และระบบการปรับอากาศ">ไฟฟ้า ก๊าซ ไอน้ำ และระบบการปรับอากาศ</option>
            <option value="การจัดการน้ำการจัดการน้ำเสียและของเสียรวมถึงกิจกรรมที่เกี่ยวข้อง">การจัดการน้ำการจัดการน้ำเสียและของเสียรวมถึงกิจกรรมที่เกี่ยวข้อง</option>
            <option value="การก่อสร้าง">การก่อสร้าง</option>
            <option value="การขายส่งและการขายปลีกการซ่อมยานยนต์และจักรยานยนต์">การขายส่งและการขายปลีกการซ่อมยานยนต์และจักรยานยนต์</option>
            <option value="การขนส่งและสถานที่เก็บสินค้า">การขนส่งและสถานที่เก็บสินค้า</option>
            <option value="ที่พักแรมและบริการด้านอาหาร">ที่พักแรมและบริการด้านอาหาร</option>
            <option value="ข้อมูลข่าวสารและการสื่อสาร">ข้อมูลข่าวสารและการสื่อสาร</option>
            <option value="กิจกรรมทางการเงินและประกันภัย">กิจกรรมทางการเงินและประกันภัย</option>
            <option value="กิจกรรมเกี่ยวกับอสังหาริมทรัพย์">กิจกรรมเกี่ยวกับอสังหาริมทรัพย์</option>
            <option value="กิจกรรมวิชาชีพวิทยาศาสตร์และกิจกรรมทางวิชาการ">กิจกรรมวิชาชีพวิทยาศาสตร์และกิจกรรมทางวิชาการ</option>
            <option value="กิจกรรมการบริหารและบริการสนับสนุน">กิจกรรมการบริหารและบริการสนับสนุน</option>
            <option value="การบริหารราชการ การป้องกันประเทศและการประกันสังคมภาคบังคับ">การบริหารราชการ การป้องกันประเทศและการประกันสังคมภาคบังคับ</option>
            <option value="การศึกษา">การศึกษา</option>
            <option value="กิจกรรมด้านสุขภาพและงานสังคมสงเคราะห์">กิจกรรมด้านสุขภาพและงานสังคมสงเคราะห์</option>
            <option value="ศิลปะความบันเทิงและนันทนาการ">ศิลปะความบันเทิงและนันทนาการ</option>
            <option value="กิจกรรมการบริการด้านอื่นๆ">กิจกรรมการบริการด้านอื่นๆ</option>
            <option value="กิจกรรมการจ้างงานในครัวเรือน กิจกรรมการผลิตสินค้าและบริการที่ทำขึ้นเองเพื่อใช้ในครัวเรือน">กิจกรรมการจ้างงานในครัวเรือน กิจกรรมการผลิตสินค้าและบริการที่ทำขึ้นเองเพื่อใช้ในครัวเรือน</option>
            <option value="กิจกรรมขององค์การระหว่างประเทศและภาคีสมาชิก">กิจกรรมขององค์การระหว่างประเทศและภาคีสมาชิก</option>
          </select>
          <label>ประเภทกิจการ TSIC (21 หมวด)</label>
      </div>
      <div class="input-field col s12">
          <select name="type23">
            <?php if(isset($_POST['type23'])){?>
            <option value="<?=$_POST['type23']?>" disabled selected><?=$_POST['type23']?></option>
            <?php }else{?>
            <option value="" disabled selected>เลือกประเภทกิจการ (23 หมวด)</option>
            <?php }?>
            
            <option value="AGRICULTURAL PRODUCTS & SUPPLIES; LIVESTOCK">AGRICULTURAL PRODUCTS & SUPPLIES; LIVESTOCK </option>
            <option value="AUTOMOTIVES, MOTORCYCLES, BICYCLES & PARTS">AUTOMOTIVES, MOTORCYCLES, BICYCLES & PARTS </option>
            <option value="CHEMICAL PRODUCTS; COSMETICS; DRUGS & PHARMACEUTICALS; INSECTICIDES & PESTICIDES; OILS & LUBRICANTS; MEDICAL SUPPLIES; INERALS; SOAPS & DETERGENTS">CHEMICAL PRODUCTS; COSMETICS; DRUGS & PHARMACEUTICALS; INSECTICIDES & PESTICIDES; OILS & LUBRICANTS; MEDICAL SUPPLIES; INERALS; SOAPS & DETERGENTS </option>
            <option value="COMPUTERS & ACCESSORIES">COMPUTERS & ACCESSORIES </option>
            <option value="CONSTRUCTION MATERIALS; PAINTS & VARNISHES; SANITARYWAR">CONSTRUCTION MATERIALS; PAINTS & VARNISHES; SANITARYWARE</option>
            <option value="DECORATIVE & GIFT ITEMS; HANDICRAFT">DECORATIVE & GIFT ITEMS; HANDICRAFTS</option>
            <option value="ELECTRIC & ELECTRONIC PRODUCTS">ELECTRIC & ELECTRONIC PRODUCTS </option>
            <option value="FLOWERS, FRESH & ARTIFICIAL; HORTICULTURAL SPECIALTIES">FLOWERS, FRESH & ARTIFICIAL; HORTICULTURAL SPECIALTIES </option>
            <option value="FOODSTUFF">FOODSTUFFS</option>
            <option value="FOOTWEAR">FOOTWEAR </option>
            <option value="FURNITURE & PARTS; TIMBER, LUMBER& FORESTRY ITEMS">FURNITURE & PARTS; TIMBER, LUMBER& FORESTRY ITEMS </option>
            <option value="GEMS & JEWELLERY; WATCHES">GEMS & JEWELLERY; WATCHES </option>
            <option value="HOUSEHOLD ITEMS & KITCHENWARE PRODUCTS">HOUSEHOLD ITEMS & KITCHENWARE PRODUCTS </option>
            <option value="LEATHER & LEATHER ITEMS">LEATHER & LEATHER ITEMS </option>
            <option value="MACHINERY, EQUIPMENT, HARDWARE & SUPPLIE">MACHINERY, EQUIPMENT, HARDWARE & SUPPLIES</option>
            <option value="PLASTICS & PLASTIC PRODUCTS">PLASTICS & PLASTIC PRODUCTS </option>
            <option value="RUBBER & RUBBER PRODUCTS">RUBBER & RUBBER PRODUCTS </option>
            <option value="SPORTING GOODS & TOY">SPORTING GOODS & TOYS</option>
            <option value="STATIONERY, OFFICE SUPPLIES & EQUIPMENT; PAPER& PULP ITEMS; PRINTIN">STATIONERY, OFFICE SUPPLIES & EQUIPMENT; PAPER& PULP ITEMS; PRINTING</option>
            <option value="TELECOMMUNICATIONS & SATELLITE EQUIPMENT">TELECOMMUNICATIONS & SATELLITE EQUIPMENT </option>
            <option value="TEXTILES & GARMENTS">TEXTILES & GARMENTS </option>
            <option value="TRADING FIRMS; GENERAL MERCHANDISE; AMMUNITION; MISCELLANEOU">TRADING FIRMS; GENERAL MERCHANDISE; AMMUNITION; MISCELLANEOUS</option>
            <option value="SERVICE COMPANIES & CONSULTANT">SERVICE COMPANIES & CONSULTANTS</option>
          </select>
          <label>ประเภทกิจการ TCC (23 หมวด)</label>
        </div>
        <button type="submit" name="sort" value="submit" id="btn-done" class="btn btn-block waves-effect waves-light btn-large lime darken-1">
          กรอง
        </button><br><br>
        <a href="<?=URL_Path?>/admin/userlist" class="btn btn-block waves-effect waves-light btn-large red darken-1">
          CLEAR
        </a>
        <div class="input-field col s12">
          <span>** ท่านสามารถค้นหาจากชื่อโดยการกด Ctrl + F </span>
        </div>
        </form>
      </div>
      </div>
      <!--<div class="input-field">-->
      <!--  <input type="text" id="userlist_search" class="autocomplete">-->
      <!--  <label for="userlist_search">Search</label>-->
      <!--</div>-->
      <ul id="userlist" class="collection" style="border:none;">
        <div id="userItem">
          <?php if(isset($_POST['sort'])){?>
          <?php if(isset($this->members[0])){?>
            <?php foreach ($this->members as $member) {?>
            
            <li id="user_12" class="collection-item avatar" style="margin:5px 0px;border-bottom: 1px solid #e0e0e0;">
              <img src="https://rayongchember-innocentpice.c9users.io/Publics/img/member/avatar/<?=$member['username']?>.png" alt="" class="circle">
              <span id="user_12_name" class="title truncate" style="color:#609;"><?=$member['title'].$member['name'].' '.$member['surname']?></span>
              <p class="truncate">
                <small style="color:#006621;">เบอร์โทรศัพท์ : <?=$member['tel']?></small>
              </p>
              <p class="truncate">
                <small class="time">วันหมดอายุ : <?=$member['end_date']?></small>
              </p>
              <div class="secondary-content">
                <a href="https://rayongchember-innocentpice.c9users.io/members/view/12" target="_blank">
                  <i class="material-icons">zoom_in</i></a>  
                  <div class="divider"></div>  
                  <a href="#command_menu" onclick="updateEdit('12');">
                  <i class="material-icons">edit</i>
                </a>
              </div>
            </li>
            
            <?php }?>
          <?php }else{ ?>
            <h4 class="card center-align grey-text text-darken-1" style="padding: 1.5em;">
              ไม่มีรายการที่ท่านเลือก
            </h4>
          <?php }}?>
        </div>
        <div id="userLoad" class="hidden">
          <li class="collection-item row">
            <div class="progress" style="width:50%;">
                <div class="indeterminate"></div>
            </div>
            <div class="progress" style="width:80%;">
                <div class="indeterminate"></div>
            </div>
            <div class="progress" style="width:20%;">
                <div class="indeterminate"></div>
            </div>
          </li>
        </div>
      </ul>
    </div>
  </main>
  <div id="command_menu" class="modal bottom-sheet">
    <div class="modal-content row" style="padding:1em;margin:0px;">
      <div class="col s12 m4 center-align">
        <p id="edit_title" class="truncate text-flow"></p>
      </div>
      <div class="col s12 m8 center-align">
        <?php if($_SESSION['account']['permission'] == 9){?>
        <button id="setAdmin_btn" class="waves-effect waves-light btn" style="margin:10px;"><i class="material-icons left">person_add</i>แต่งตั้งเป็นกรรมการ</button>
        <?php }?>
        <button id="setMemberID_btn" class="waves-effect waves-light btn" style="margin:10px;">กำหนดหมายเลขสมาชิกหอการค้า</button>        
        <button id="setMemberTime_btn" class="waves-effect waves-light btn" style="margin:10px;"><i class="material-icons left">alarm_add</i>ต่อเวลาสมาชิก</button>
        <button id="printPDF_btn" class="waves-effect waves-light btn" style="margin:10px;"><i class="material-icons left">picture_as_pdf</i>PDF</button>
        <button id="cancelMember_btn" class="waves-effect waves-light btn" style="margin:10px;"><i class="material-icons left">delete_forever</i>ยกเลิกสมาชิก</button> 
      </div>
    </div>
  </div>