$(document).ready(() => {
  
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
        $('#offmodalyec').click();
        window.noyecs = true;
      }
    }
  });
  $('#offmodalyec').click(()=>{
    $('#snoyec').html('');
  });
  
  $('input#facebook').keyup((e)=>{
    if($('#facebook').val().length <= 17){
      $('#facebook').val('www.facebook.com/');
      e.preventDefault();
    }
  });
  
  $('#gomodalyec').click((e)=>{
    $('#modalnoyec').modal('open');
    $('input#noyec').val('');
    $('input#noyec').focus();
  });
  
  $('.fixed-action-btn').openFAB();
  $('.fixed-action-btn').closeFAB();
  $('#sNavShow').sideNav();
  $('.sNavClose').click(() => {
    $().sideNav('hide');
  });
  $('select').material_select();
  $('.datepicker').pickadate({
    today: false,
    clear: false,
    selectMonths: true,
    selectYears: 100
  });
  
  $('input#autocomplete-input').autocomplete({
    data: {
      "Apple": null,
      "Microsoft": null,
      "Google": 'http://placehold.it/250x250'
    },
    limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
    onAutocomplete: function(val) {
      // Callback function when value is autcompleted.
    },
    minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
  });
});

      
