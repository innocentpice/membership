function updateEdit(id){
    var html = $('#user_'+ id +'_name').html();
    $('#edit_title').html(html);
    window.userEditId = id;
}

$(document).ready(()=>{
    (function(){
        
        $('#printPDF_btn').click((e)=>{
            var id = window.userEditId;
            var url = window.URL_Path+'/pdfs/resume/'+ id;
            window.open(url,"_blank");
        });
        
        $('#cancelAdmin_btn').click((e)=>{
            if(confirm('ต้องการยกเลิกสถานะ ?')){
                var id = window.userEditId;
                var url = window.URL_Path+'/api/unsetToAdmin/'+ id;
                $.ajax({
                  dataType: "text",
                  url: url,
                  success: (res)=>{
                      if(res == 'success'){
                          $("#user_"+id).remove();
                          $('#command_menu').modal('close');
                          Materialize.toast('ระบบทำการยกเลิกสถานะผู้ดูแลแล้ว', 3000);
                      }
                  }
                });
            }
        });
        
        window.userIndex = 0;
        
        function addUserItem(id,img,name,business,tel){
            var item = '<li id="user_'+ id +'" class="collection-item avatar" style="margin:5px 0px;border-bottom: 1px solid #e0e0e0;">'
                + '<img src="'+ img +'" alt="" class="circle">'
                + '<span id="user_'+ id +'_name" class="title truncate" style="color:#609;">'+ name +'</span>'
                + '<small class="truncate" style="color:#006621;">เบอร์โทรศัพท์ : '+ tel +'</small>'
                + '<div class="secondary-content">'
                + '  <a href="'+window.URL_Path+'/members/view/'+id+'" target="_blank"><i class="material-icons">zoom_in</i></a>'
                + '  <div class="divider"></div>'
                + '  <a href="#command_menu" onClick="updateEdit(\''+ id +'\');"><i class="material-icons">edit</i></a>'
                + '</div>'
                + '</li>';
            $("#userItem").append(item);
        }
        
        var getUser = ()=>{
            var url = window.URL_Path + '/api/getAdmin/' + window.userIndex;
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
                        addUserItem(item.id,img,item.title+item.name+' '+item.surname,'',item.tel);
                        window.userProcess = 0;
                    });
                }else{
                    window.userNone = 1;
                }
                $("#userLoad").addClass("hidden");
              }
            });
        }
        
        
        getUser();
        
        
        $(window).scroll(function(e) {
            var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());
            if(scrollPercent >= 90){
                if(window.userNone != 1 && window.userProcess != 1){
                    getUser();
                }
            }
        });
        
    }());
});