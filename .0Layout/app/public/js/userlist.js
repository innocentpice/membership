$(document).ready(()=>{
    
    function addUserItem(){
        $("#userLoad").removeClass("hidden");
        setTimeout(()=>{
        var item = '<li class="collection-item avatar">'
            + '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVosR-YEGVRmbE7dGkSY57Dn60rBFRI32Zhwei-ZHQQ-wj8sGI" alt="" class="circle">'
            + '<span class="title truncate">นายชนะชัย สัพโส</span>'
            + '<p class="truncate">@บริษัทมีเงินมีทอง จำกัด</p>'
            + '<small class="truncate">0892456916</small>'
            + '<div class="secondary-content">'
            + '  <a href="#modal1"><i class="material-icons">zoom_in</i></a>'
            + '  <div class="divider"></div>'
            + '  <a href="#modal1"><i class="material-icons">edit</i></a>'
            + '</div>'
            + '</li>';
        $("#userItem").append(item);
        $("#userLoad").addClass("hidden");
        },5000);
    }
    
    $(window).scroll(function(e) {
        var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());
        if(scrollPercent >= 90){
            addUserItem();
        }
    });
});