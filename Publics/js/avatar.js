(function(){
    
    $('#avatar').croppie({
        url: window.avatar,
        viewport: {
            width: 200,
            height: 200,
            type: 'circle'
        },
        boundary: {
            width: 250,
            height: 250
        }
    });
    
    $("#success").click(()=>{
        
        $('#avatar').croppie('result', {
    		type: 'canvas',
    		size: 'viewport'
    	}).then(function (resp) {
    	    var data = new FormData();
    	    data.append('img', resp);
    	    axios({
              method: 'post',
              url: window.URL_Path+'/api/uploadAvatar',
              data: data,
              enctype: 'multipart/form-data',
            }).then((res)=>{
                if(res.data == 'success'){
                    alert('Avatar Changed');
                }else{
                    alert('Error! Please contact administrator.');
                }
                window.location = window.URL_Path;
            });
    	});
    });
    
    $("#cancel").click(()=>{
        window.location = window.URL_Path+'/avatar';
    });
    
}());