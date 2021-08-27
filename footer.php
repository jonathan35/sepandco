
<div class="row text-center p-4 p-md-2" style="background:#252c38; color:#FFF; font-size:15px;">
    <div class="col-12 col-md-10 offset-md-1">
        <div class="row text-center pt-2">
            <div class="col-12 text-center back-top">
                <i class="fa fa-chevron-circle-up back-top-icon" aria-hidden="true" onclick="scroll_top();" style="-webkit-filter: drop-shadow(0 0 5px #222); filter: drop-shadow(0 0 5px #222); position:relative; top:7px;"></i>
            </div>
            <script>
            function scroll_top(){
                var body = $("html, body");
                body.stop().animate({scrollTop:0}, 500, 'swing', function() { });
            }
            </script>
        </div>

        <div class="row d-flex pt-4 pb-5 text-left" >

            <div class="col-12 col-md">
                <div class="footer-title pt-4 pt-md-4">Products</div>
                <div class="row">                
                    <?php 
                    $types = sql_read("select * from category where status=1 order by position asc, id desc limit 8");
                    foreach($types as $type){?>
                    <div class="col-6 col-md-12 pt-1">
                        <a href="#<?php echo ROOT?>type/<?php echo $str_convert->to_url($type['category'])?>" style="color:lightblue;"><?php echo $type['category']?></a>
                    </div>
                    <?php }?>


                </div>
            </div>

            <div class="col-12 col-md">
                
       
                <div class="footer-title pt-4 pt-md-4">
                    <div style="width:140px; overflow:display;">Head Office</div>
                </div>
                <div class="pb-1">
                    Monday to Saturday:<br>
                    9.00am to 7.00pm<br>
                    Sunday & Public Holidays:<br>
                    10am to 2pm<br>
                </div>
                <div class="footer-title pt-4 pt-md-4">Showroom</div>
                <div class="pb-1">
                    Monday to Saturday:<br>
                    9.00am to 7.00pm<br>
                    Sunday & Public Holidays:<br>
                    10am to 2pm<br>
                </div>
            </div>


            <div class="col-12 col-md">
                <div class="footer-title pt-4 pt-md-4">Social</div>
                <div class="pb-1">
                    <a href="https://www.facebook.com/" target="_blank">
                        <img src="<?php echo ROOT?>images/facebook-f.svg" width="14px" style="margin:10px">
                    </a>
                    <a href="https://wa.me/60168653957" target="_blank">
                        <img src="<?php echo ROOT?>images/whatsapp.svg" width="20px" style="margin:10px">
                    </a>
                    <a href="#" target="_blank">
                    <img src="<?php echo ROOT?>images/instagram.svg" width="20px" style="margin:10px">
                    </a>
                </div>
                <div class="footer-title pt-4 pt-md-4">Contact</div>
                <div class="pb-1">
                Phone: +6 082 335 307
                </div>
                <div class="pb-1">
                Mobile: +6 012 8888 905
                </div>
                <div class="pb-1">
                    Fax: +6 082 336 307
                </div>
                
            </div>

            <div class="col-12 col-md">
                <div class="footer-title pt-4 pt-md-4">Email</div>
                <div class="pb-1">
                    sep.comp@gmail.com<br>
                    info@sepandco.com.my
                </div>

                <div class="footer-title pt-4 pt-md-4">Address</div>
                <div class="pb-1">
                    Lot 1063, Jalan Swasta,<br>
                    Pending Industrial Estate,<br>
                    93450 Kuching,<br>
                    Sarawak, Malaysia<br>
                </div>
                <br><br>
                <div class="pb-1">
                <a href="https://www.google.com/maps/place/September+%26+Co./@1.5580701,110.3858291,17z/data=!4m8!1m2!10m1!1e2!3m4!1s0x31fba6372998299b:0xff9437525a55112a!8m2!3d1.5580837!4d110.3880312" target="_blank" style="color:lightblue;">
                    <img src="<?php echo ROOT?>images/678111-map-marker-512.webp" width="18px" style="display:inline-block;">View Map</a>
                </div>
            </div>
        


        </div>

        <br><br>
        <div class="row">
            <div class="col-12 col-md-12 text-muted">
                <?php echo date('Y')?>. sepandco.com.my All rights reserved. Powered by Quest Marketing. 
                &nbsp;

                <?php

                //Add counter in index.php top section, because setcookie not working here.

                $result = mysqli_query($conn, "SELECT * FROM counter");
                $fields = mysqli_fetch_row($result);
                $mycount = $fields[0];
                
                echo $mycount;?> visitors | 
                
                <?php 
                    $timeoutseconds=300;
                    // Timeout value in seconds
                    $timestamp=time();
                    $timeout=$timestamp-$timeoutseconds;
                    
                    $a=$_SERVER['REMOTE_ADDR'];
                    mysqli_query($conn, "INSERT INTO useronline VALUES ('$timestamp','$a','$PHP_SELF')") or die(mysqli_error());
                    mysqli_query($conn, "DELETE FROM useronline WHERE timestamp<$timeout") or die(mysqli_error());
                    $result=mysqli_query($conn, "SELECT DISTINCT ip FROM useronline WHERE file='$PHP_SELF'") or die(mysqli_error());
                    $user=mysqli_num_rows($result);
                    echo $user." Online";?></span>
                <?
                //////////////////////////////////////////USER ONLINE END//////////////////////////////////////
                ?>



            </div>
        </div>




    </div>
</div>



<div id="enquiryModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content modal-edit-panel">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-black" aria-hidden="true">&times;</span>
                </button>
                <div class="login-panel form-rounded">
                    <?php include 'message.php'?>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
function change_title(title){
    $('input[name=tour]').val(title);
}
</script>

<?php include_once 'config/session_msg.php';?>