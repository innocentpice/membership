<main>
  <div class="container" style="padding:0em 1em;margin-top:2em;">
    <div class="row">
      <div class="col s12">
        <form id="frm_addbusiness" method="post" enctype="multipart/form-data">
          <div class="row">
          <div class="col s12 card-panel" style="padding:2em;">
            <h4>เพิ่มธุรกิจ</h4>
            <div class="divider black"></div>
            <div class="row">
              <div class="input-field col s12">
                <lable>| ข้อมูลธุรกิจ :- </lable>
              </div>
              <div class="input-field col s12">
                <input id="b_name" type="text" class="validate" data-length="50" name="name">
                <label for="b_name">ชื่อธุรกิจ</label>
              </div>
              <div class="input-field col s12">
                <input id="b_detail" type="text" class="validate" data-length="100" name="detail">
                <label for="b_detail">รายละเอียดธุรกิจ</label>
              </div>
              <div class="input-field col s12">
                <select name="type21">
                  <option value="" disabled selected>เลือกประเภทกิจการ (21 หมวด)</option>
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
                  <option value="" disabled selected>เลือกประเภทกิจการ (23 หมวด)</option>
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
              <div class="input-field col s12">
                <lable>| ข้อมูลการติดต่อ :- </lable>
              </div>
              <div class="input-field col s12">
                <input id="b_address" type="text" class="validate" data-length="100" name="address">
                <label for="b_address">ที่อยู่สำนักงาน</label>
              </div>
              <div class="input-field col s12">
                <input id="b_tel" type="text" class="validate" data-length="10" name="tel">
                <label for="b_tel">โทรศัพท์</label>
              </div>
              <div class="input-field col s12">
                <input id="b_fax" type="text" class="validate" data-length="10" name="fax">
                <label for="b_fax">แฟกซ์</label>
              </div>
              <div class="input-field col s12">
                <input id="b_website" type="text" class="validate" data-length="100" name="website">
                <label for="b_website">เว็บไซต์</label>
              </div>
              <div class="input-field col s12 center-align">
                <div class="col s12 m8 center-align">
                  <input id="address" type="text" class="col s12" placeholder="ค้นหาจังหวัด">
                </div>
                <div class="col s12 m4 center-align">
                  <input id="submit" type="button" class="btn waves-effect waves-light darken-1 col s5" value="ค้นหา">
                  <button id="Map_con" class="btn waves-effect waves-light darken-1 col s6 offset-s1">เพิ่มหมุด</button>
                </div>
              </div>
              <div class="input-field col s12">
                <div id="map" style="height: 500px;width: 100%;"></div>
                <input id="MapAddress_lat" type="hidden" name="map_lat">
                <input id="MapAddress_lng" type="hidden" name="map_lng">
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 center-align">
                <button type="submit" name="addbusiness" value="submit" id="btn-done" class="btn btn-block waves-effect waves-light btn-large lime darken-1">
                  เพิ่มธุรกิจ
                </button>
              </div>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</main>