 $(document).ready(()=>{
    (function(){
        $('.carousel.carousel-slider').carousel({fullWidth: true});
        setInterval(()=>{
            $('.carousel').carousel('next');
        },5000);
        window.addEventListener("resize", ()=>{
          $('.carousel-slider').height($('.carousel-item > img').height());
        });
        $('.carousel-slider').height($('.carousel-item > img').height());
        
        $(".btn_del_business").click((e)=>{
            if(confirm('ต้องการลบกิจการ ?')){
                var id = $(e.target).attr("bid");
                var url = window.URL_Path + '/api/delBusiness/' + id;
                $.ajax({
                  dataType: "text",
                  url: url,
                  success: (res)=>{
                    if(res == 'success'){
                        $("#business_"+id).remove();
                        Materialize.toast('ลบกิจการออกจากระบบแล้ว', 3000);
                    }
                  }
                });
                e.preventDefault();
            }
        });
    }());
});