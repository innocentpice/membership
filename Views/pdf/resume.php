<?php $item = $this->memberitem;$bitem = $this->businessitem;?>

<div class="container">
    <div class="row">
        <div class="col-xs-5 text-center">
            <img src="<?=URL_Public?>/img/member/avatar/<?=$item['username']?>.png" style="width:200px;height:200px;">
        </div>
        <div class="col-xs-7">
            <h1 style="font-size: 2.2rem !important;font-weight: bold !important;">
                <?=$item['title'].$item['name'].' '.$item['surname']?>
                <p style="font-size: 1.2rem !important;">
                    <?php if($item['permission'] >= 8){?>
                    สมาชิกหอการค้า
                    <?php }else{?>
                    สมาชิกหอการค้า
                    <?php }?>
                </p>
                <hr>
            </h1>
        </div>
    </div>
    <div class="row" style="margin-top:2em !important;">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title" style="padding: 4px 8px !important;font-size: 1.2rem !important;font-weight: bold !important;color: #777 !important;">ข้อมูลสมาชิก</h3>
          </div>
          <div class="panel-body" style="padding: 4px 8px !important;">
            <div class="row">
                <div class="col-xs-3" style="font-weight: bold !important;">
                    ชื่อ - สกุล
                </div>
                <div class="col-xs-9">
                    <?=$item['title'].$item['name'].' '.$item['surname']?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3" style="font-weight: bold !important;">
                    ชื่อเล่น
                </div>
                <div class="col-xs-9">
                    <?=$item['nickname']?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3" style="font-weight: bold !important;">
                    วัน/เดือน/ปีเกิด
                </div>
                <div class="col-xs-9">
                    <?=date('d M Y',strtotime($item['birthday']))?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3" style="font-weight: bold !important;">
                    มือถือ
                </div>
                <div class="col-xs-9">
                    <?=$item['tel']?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3" style="font-weight: bold !important;">
                    Email
                </div>
                <div class="col-xs-9">
                    <?=$item['email']?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3" style="font-weight: bold !important;">
                    Facebook
                </div>
                <div class="col-xs-9">
                    <?=$item['facebook']?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3" style="font-weight: bold !important;">
                    Line ID
                </div>
                <div class="col-xs-9">
                    <?=$item['line']?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3" style="font-weight: bold !important;">
                    สถานะสมาชิกหอการค้า
                </div>
                <div class="col-xs-9">
                    <?=(isset($item['yecmember']) && $item['yecmember'] != '')?'สมาชิกเลขที่ '.$item['yecmember']:'ไม่ได้เป็นสมาชิก';?>
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row" style="margin-top:1em !important;">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title" style="padding: 4px 8px !important;font-size: 1.2rem !important;font-weight: bold !important;color: #777 !important;">ข้อมูลกิจการ</h3>
          </div>
          <div class="panel-body" style="padding: 4px 8px !important;">
            <?php if(isset($bitem[0])){?>
            <div class="row">
                <div class="col-xs-3" style="font-weight: bold !important;">
                    ชื่อกิจการ
                </div>
                <div class="col-xs-9">
                    <?=$bitem['name']?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3" style="font-weight: bold !important;">
                    รายละเอียด
                </div>
                <div class="col-xs-9">
                    <?=$bitem['detail']?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3" style="font-weight: bold !important;">
                    ประเภทกิจการ TSIC (21 หมวด)
                </div>
                <div class="col-xs-9">
                    <?=$bitem['type21']?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3" style="font-weight: bold !important;">
                    ประเภทกิจการ TSIC (23 หมวด)
                </div>
                <div class="col-xs-9">
                    <?=$bitem['type23']?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3" style="font-weight: bold !important;">
                    ที่อยู่สำนักงาน
                </div>
                <div class="col-xs-9">
                    <?=$bitem['address']?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3" style="font-weight: bold !important;">
                    ติดต่อ
                </div>
                <div class="col-xs-9">
                    <?php if(isset($bitem['address'])){?>
                    โทรศัพท์ : <?=$bitem['tel']?>
                    <?php }if(isset($bitem['fax'])){?>
                    <?php if(isset($bitem['address'])){?>,<?php }?>&nbsp;แฟกซ์ :  <?=$bitem['tel']?>
                    <?php }?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3" style="font-weight: bold !important;">
                    เว็บไซต์
                </div>
                <div class="col-xs-9">
                    <?=$bitem['website']?>
                </div>
            </div>
            <?php }else{?>
            <div class="row">
                <div class="col-xs-12 text-center" style="font-size: 2rem !important;font-weight: bold !important;">
                    ยังไม่มีกิจการในระบบ
                </div>
            </div>
            <?php }?>
          </div>
        </div>
    </div>
</div>