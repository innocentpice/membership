<?php
    if(isset($this->GoTo)){
        empty($this->GoTo['delay'])?'1000':$this->GoTo['delay'];
        echo "<script> setTimeout(()=>{ window.location = '".$this->GoTo['url']."' },".$this->GoTo['delay']."); </script>";
    }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script>window.URL_Path = "<?=URL_Path?>";</script>
<script src="<?=URL_Public?>/js/custom.js"></script>

<?php
    if(isset($this->JSInject)){
            foreach ($this->JSInject as $JS) {
                echo '<script src="';
                echo $JS;
                echo '"></script>';
            }
        }
?>

<?php
    if(isset($this->showMsg)){
        echo "<script>"
            ."Materialize.toast('".$this->showMsg."', 4000);"
            ."</script>";
    }
?>


<?php if(isset($this->UseMap)){ 
    if(isset($this->MapLat)){ echo '<script>window.MapLat='.$this->MapLat.';window.MapLng='.$this->MapLng.';</script>';}
?>
    <script src="<?=URL_Public?>/js/bus_map.js"></script>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK3RgqSLy1toc4lkh2JVFQ5ipuRB106vU&amp;callback=initMap"></script>
<?php }?>
</body>
</html>