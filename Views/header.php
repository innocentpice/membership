<!doctype html>
<html lang="th">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="กลุ่มนักธุรกิจใหม่จังหวัดระยอง, หอการค้าจ">
        <meta name="keywords" content="กลุ่มนักธุรกิจใหม่จังหวัดระยอง, หอการค้าจังหวัดระยอง">
        <title><?php if(isset($this->PageTitle)){echo $this->PageTitle;}else{echo 'กลุ่มนักธุรกิจใหม่จังหวัดระยอง';}?></title>
        <link rel="canonical" href="<?=URL_Path?>/">
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/7.0.0/normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato" type="text/css">
        <link rel="stylesheet" href="<?=URL_Public.'/css/custom.css'?>">
        <?php
            if(isset($this->CSSInject)){
                foreach ($this->CSSInject as $CSS) {
                    echo '<link rel="stylesheet" href="';
                    echo $CSS;
                    echo '">';
                }
            }
        ?>
    </head>
    <body <?=@$this->BodyAti?>>