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
                <lable>| รูปธุรกิจของคุณ :- </lable>
              </div>
              
              <div class="input-field col s12">
                <?php
                  for($i=1;$i<=4;$i++){
                ?>
                  <div class="col s12 m6 l3">
                    <?php $path = './Publics/img/business/' ;$url='';if(file_exists($path.$this->b_id.'_'.$i.'.png')){
                      $url = URL_Public .'/img/business/'.$this->b_id.'_'.$i.'.png';
                    }?>
                    <input id="img<?=$i?>" type="file" class="dropify" data-allowed-file-extensions="jpg png" name="img1" data-default-file="<?=@$url?>"/>
                  </div>
                <?php }?>
              </div>
              
              <input id="b_id" type="hidden" value="<?=$this->b_id?>" name="b_id">
            </div>
            <div class="divider"></div>
            <div class="row">
              <div class="input-field col s12 center-align">
                <a href="<?=URL_Path?>/business" id="btn-done" class="btn btn-block waves-effect waves-light btn-large lime darken-1">
                  ย้อนกลับ
                </a>
              </div>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</main>