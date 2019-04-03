$(document).ready(() => {
  (function(){
    
    var readURL = function(input){
    
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img-preview').attr('src', e.target.result);
                $('#photo_submit').removeClass('disabled');
            };
            reader.readAsDataURL(input.files[0]);
        }
    };
    
    $('#btn_imgUpload').click(()=>{
      $('#photo_upload').click();
    });
    
    $('#photo_upload').change(function(e){
        readURL(this);
    });
    
    (function(){
      new Image().src = $('#user_avatar img').attr('src');
      $('#user_avatar').css({'background' : ()=>{
        return "url('"+$('#user_avatar img').attr('src')+"')";
      }, 
        'background-position' : 'center', 
        'background-size' : 'cover'
      });
    }());
    
    var applyNavSize = (function(){
      var update = ()=>{
        $('li#btn-na-tog, li#btn-na-tog a').css({
          "height": $('#navApp').height(), 
          "line-height": $('#navApp').height()+'px'
        });
      };
      return {
        update : update
      }
    }());
    
    applyNavSize.update();
    $(window).resize(()=>{
      applyNavSize.update();
    });
  
  $('#agree').change((e)=>{
    if($('#agree').is(":checked")){
      $('#btn-done').removeClass('disabled');
    }else{
      $('#btn-done').addClass('disabled');
    }
  });
  
  $('.modal').modal();
  window.noyecs = true;
  
  $('#modalnoyec').modal({
    complete: (e)=>{
      if(window.noyecs != false){
        if($('input#noyec').val() == ''){
          $('#modalnoyec').modal('open');
          $('input#noyec').focus();
        }else{
          $('#snoyec').html('(หมายเลข ' + $('input#noyec').val() + ')');
        }
      }else{
        $('#snoyec').html('');
        $('input#noyec').val('');
        $('#offmodalyec').click();
        window.noyecs = true;
      }
    }
  });
  /*
  $('#offmodalyec').click(()=>{
    $('#snoyec').html('');
    $('input#noyec').val('');
  });
  */
  
  /*
  $('#gomodalyec').click((e)=>{
    $('#modalnoyec').modal('open');
    $('input#noyec').val('');
    $('input#noyec').focus();
  });
  */
  $('.fixed-action-btn').openFAB();
  $('.fixed-action-btn').closeFAB();
  $('#sNavShow').sideNav();
  $('.sNavClose').click(() => {
    $().sideNav('hide');
  });
  $('select').material_select();
  
  $('.datepicker').pickadate({
    formatSubmit: 'yyyy-mm-dd',
    today: false,
    clear: false,
    selectMonths: true,
    selectYears: 100
  });
  
  $('#frm_search').submit((e)=>{
    var url = window.URL_Path + '/search/keyword/' + $('input#autocomplete-input').val();
    window.location = url;
    e.preventDefault();
  });
  
  $('input#autocomplete-input').keypress((e)=>{
    var url = window.URL_Path + '/api/searchUser/' + e.target.value;
    $.ajax({
      dataType: "json",
      url: url,
      beforeSend: ()=>{
          window.userProcess = 1;
      },
      success: (res)=>{
        var data = {};
        var dataID = {};
        var dataType = {};
        $(res).each((index, item)=>{
          data[item.name + ' ' + item.surname] = window.URL_Path+'/Publics/img/member/avatar/'+item.username+'.png';
          data[item.username] = window.URL_Path+'/Publics/img/member/avatar/'+item.username+'.png';
          data[item.nickname] = window.URL_Path+'/Publics/img/member/avatar/'+item.username+'.png';
          dataID[item.name + ' ' + item.surname] = item.id;
          dataID[item.username] = item.id;
          dataID[item.nickname] = item.id;
          dataType[item.name + ' ' + item.surname] = 'P';
          dataType[item.username] = 'P';
          dataType[item.nickname] = 'P';
        });
        
        $('input#autocomplete-input').autocomplete({
          data: data,
          limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
          onAutocomplete: function(val) {
            // Callback function when value is autcompleted.
            if(dataID[val] != undefined){
              var path;
              if(dataType[val] == 'P'){
                path = '/members/view/';
              }else{
                path = '/business/view/';
              }
              window.location = window.URL_Path + path + dataID[val];
            }
          },
          minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
        });
        
      }
    });
    
    url = window.URL_Path + '/api/searchBusiness/' + e.target.value;
    $.ajax({
      dataType: "json",
      url: url,
      beforeSend: ()=>{
          window.userProcess = 1;
      },
      success: (res)=>{
        var data = {};
        var dataID = {};
        var dataType = {};
        $(res).each((index, item)=>{
          data['B: '+ item.name] = '';
          dataID['B: '+ item.name] = item.id;
          dataType['B: '+ item.name] = 'B';
        });
        
        $('input#autocomplete-input').autocomplete({
          data: data,
          limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
          onAutocomplete: function(val) {
            // Callback function when value is autcompleted.
            if(dataID[val] != undefined){
              var path;
              if(dataType[val] == 'P'){
                path = '/members/view/';
              }else{
                path = '/business/view/';
              }
              window.location = window.URL_Path + path + dataID[val];
            }
          },
          minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
        });
        
      }
    });
  });
  
  if(window.msgchangepass != undefined){
    Materialize.toast(window.msgchangepass, 4000);
  }
  
  }());
});