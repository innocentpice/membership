$('#img1').dropify({
    messages: {
        'default': 'เลือกรูปภาพธุรกิจที่ 1',
        'replace': 'เปลี่ยนรูปภาพธุรกิจที่ 1',
        'remove':  'ลบรูป',
        'error':   'ขออภัย. ไม่สามารถอัพโหลดรูปภาพได้'
    }
});
$('#img2').dropify({
    messages: {
        'default': 'เลือกรูปภาพธุรกิจที่ 2',
        'replace': 'เปลี่ยนรูปภาพธุรกิจที่ 2',
        'remove':  'ลบรูป',
        'error':   'ขออภัย. ไม่สามารถอัพโหลดรูปภาพได้'
    }
});
$('#img3').dropify({
    messages: {
        'default': 'เลือกรูปภาพธุรกิจที่ 3',
        'replace': 'เปลี่ยนรูปภาพธุรกิจที่ 3',
        'remove':  'ลบรูป',
        'error':   'ขออภัย. ไม่สามารถอัพโหลดรูปภาพได้'
    }
});
$('#img4').dropify({
    messages: {
        'default': 'เลือกรูปภาพธุรกิจที่ 4',
        'replace': 'เปลี่ยนรูปภาพธุรกิจที่ 4',
        'remove':  'ลบรูป',
        'error':   'ขออภัย. ไม่สามารถอัพโหลดรูปภาพได้'
    }
});
var uploadImg = (e,number)=>{
    var files = e.target.files;
    var data = new FormData();
    $.each(files, function(key, value)
    {
        data.append(key, value);
    });
    $.ajax({
        url: window.URL_Path + '/api/businessimg/'+ $('#b_id').val() +'/' + number,
        type: 'POST',
        data: data,
        enctype: 'multipart/form-data',
        cache: false,
        dataType: 'text',
        processData: false, // Don't process the files
        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
        beforeSend:function(){
            $("#btn-done").html('Loading .. ');
            $("#btn-done").addClass('disabled');
        },
        success:function(res){
            $("#btn-done").html('ย้อนกลับ');
            $("#btn-done").removeClass('disabled');
            Materialize.toast('ทำการเปลี่ยนรูปภาพแล้ว', 3000);
        },error:function(res){ 
            $("#btn-done").html('ย้อนกลับ');
            $("#btn-done").removeClass('disabled');
            Materialize.toast('เกิดข้อผิดพลาดไม่สามารถเปลี่ยนรูปได้กรุณาลองใหม่', 3000);
        } 
    });
}
$('#img1').change((e)=>{
    uploadImg(e,1);
});
$('#img2').change((e)=>{
    uploadImg(e,2);
});
$('#img3').change((e)=>{
    uploadImg(e,3);
});
$('#img4').change((e)=>{
    uploadImg(e,4);
});