function updateEdit(id){
    var html = $('#user_'+ id +'_name').html();
    $('#edit_title').html(html);
    window.userEditId = id;
}

$(document).ready(()=>{
    (function(){
        
        $('#setAdmin_btn').click((e)=>{
            if(confirm('ต้องการแต่งตั้งผูดูแล ?')){
                var id = window.userEditId;
                var url = window.URL_Path+'/api/setToAdmin/'+ id;
                $.ajax({
                  dataType: "text",
                  url: url,
                  success: (res)=>{
                      if(res == 'success'){
                          $("#user_"+id).remove();
                          $('#command_menu').modal('close');
                          Materialize.toast('ทำการแต่งทั้งเป็นผู้ดูแลระบบแล้ว', 3000);
                      }
                  }
                });
            }
        });
        
        $('#setMemberTime_btn').click((e)=>{
            var time = prompt("โปรดระบุจำนวน ( เดือน )", 12);
            
            if(time >= 1){
                var id = window.userEditId;
                var url = window.URL_Path+'/api/addMembertime/'+ id + '/' + time;
                $.ajax({
                  dataType: "text",
                  url: url,
                  success: (res)=>{
                      if(res != ''){
                          $("#user_"+id+" .time").html('วันหมดอายุ : '+res);
                          $('#command_menu').modal('close');
                          Materialize.toast('ระบบทำการเพิ่มเวลาสมาชิกเรียบร้อย', 3000);
                          
                      }
                  }
                });
            }
        });
        
        $('#printPDF_btn').click((e)=>{
            var id = window.userEditId;
            var url = window.URL_Path+'/pdfs/resume/'+ id;
            window.open(url,"_blank");
        });
        
       $('#setMemberID_btn').click((e)=>{
            var id = window.userEditId;
            var MemID = prompt("Please enter your YECID");
            if (MemID != null) {
                var url = window.URL_Path+'/api/SetYecID/'+ id + '/' + MemID ;
                $.ajax({
                    dataType: "text",
                    url: url,
                    success: (res)=>{
                        if(res == 'success'){
                            $('#command_menu').modal('close');
                            Materialize.toast('กำหนดหมายเลขสมาชิกเรียบร้อย', 3000);
                        }
                    }
                });
            }
        });
        
        $('#cancelMember_btn').click((e)=>{
            if(confirm('ต้องการยกเลิกสมาชิกท่านนี้ ?')){
                var id = window.userEditId;
                var url = window.URL_Path+'/api/cancelMember/'+ id;
                $.ajax({
                  dataType: "text",
                  url: url,
                  success: (res)=>{
                      if(res == 'success'){
                          $("#user_"+id).remove();
                          $('#command_menu').modal('close');
                          Materialize.toast('ยกเลิกสถานะสมาชิกแล้ว', 3000);
                      }
                  }
                });
            }
        });
        
        
        window.userIndex = 0;
        
        function addUserItem(id,img,name,business,tel,end){
            if(end == null){ end = 'หมดอายุแล้ว'; }
            var item = '<li id="user_'+ id +'" class="collection-item avatar" style="margin:5px 0px;border-bottom: 1px solid #e0e0e0;">'
                + '<img src="'+ img +'" alt="" class="circle">'
                + '<span id="user_'+ id +'_name" class="title truncate" style="color:#609;">'+ name +'</span>'
                + '<p class="truncate"><small style="color:#006621;">เบอร์โทรศัพท์ : '+ tel +'</small></p>'
                + '<p class="truncate"><small class="time">วันหมดอายุ : '+ end +'</small></p>'
                + '<div class="secondary-content">'
                + '  <a href="'+window.URL_Path+'/members/view/'+id+'" target="_blank"><i class="material-icons">zoom_in</i></a>'
                + '  <div class="divider"></div>'
                + '  <a href="#command_menu" onClick="updateEdit(\''+ id +'\');"><i class="material-icons">edit</i></a>'
                + '</div>'
                + '</li>';
            $("#userItem").append(item);
        }
        
        var getUser = ()=>{
            var url = window.URL_Path + '/api/getUser/' + window.userIndex;
            $.ajax({
              dataType: "json",
              url: url,
              beforeSend: ()=>{
                  window.userProcess = 1;
                  $("#userLoad").removeClass("hidden");
              },
              success: (res)=>{
                  window.userIndex++;
                  if(typeof res != 'string'){
                      $(res).each((index, item)=>{
                        var img = window.URL_Path + '/Publics/img/member/avatar/' + item.username + '.png'; 
                        addUserItem(item.id,img,item.title+item.name+' '+item.surname,'',item.tel,item.end_date);
                        window.userProcess = 0;
                      });
                  }else{
                    window.userNone = 1;
                  }
                  $("#userLoad").addClass("hidden");
              }
            });
        }
        
        /*
        getUser();
        
        
        $(window).scroll(function(e) {
            var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());
            if(scrollPercent >= 90){
                if(window.userNone != 1 && window.userProcess != 1){
                    getUser();
                }
            }
        });
        
        */
    }());
});