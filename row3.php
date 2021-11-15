<style>
.sp-block {width:24.6%;}
.ap_rounded { border-radius:50%; background-color:#444; color:white; font-size:20px; padding:10px; width:76px; height:76px; margin:0 auto;}
.ap_rounded > i { width:66%; height:66%; margin:11px auto; color:white; background-position:center; background-size:contain; background-repeat:no-repeat;}
.ap_rdhr {width:100%; text-align:center; text-decoration:none !important; padding-top:40px;}
.ap_rdhr:hover .ap_rounded, .ap_roundActive { background-color:orange;}

.ap_rdhr:hover { color:orange;}
.ap_text {width:100%; padding:14px 0 14px 0; font-size:18px; color:#444;}
.ap_text { border-bottom:3px solid #EFEFEF; }
.ap_rdhr:hover .ap_text, .ap_textActive {color:orange; border-bottom:3px solid orange;}
.ap_desc {padding-top:20px;}
.ap_brief { padding:24px 20px 50px 20px; text-align:center;}
/*#ap_brief1, #ap_brief2, #ap_brief3, #ap_brief4 { padding:24px; text-align:center;}*/
</style>


<div class="row">
    <div class="col-12" style="padding-top:60px; padding-bottom:120px; ">
    
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center pt-4" style="font-size:18px; padding-bottom:30px;">
                <div class="h1"><span>OUR SERVICES FOR YOU</span></div>
                <span style="font-weight:normal;">Regional support with local expertise</span>
            </div>
        </div>
        <div class="row nopadding">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 nopadding sp-block" id="sp_r1">
                <div class="ap_rdhr">
                    <div class="ap_rounded ap_roundActive" id="ap_roundActive1">
                        <i style="background-image: url(<?php echo ROOT?>photo/concept_design-white.svg); display: block;"></i>
                    </div>
                    <div class="ap_text ap_textActive" id="apTitle1">
                        Concept & Design
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 nopadding sp-block" id="sp_r2">
                <div class="ap_rdhr">
                    <div class="ap_rounded" id="ap_roundActive2">
                        <i style="background-image: url(<?php echo ROOT?>photo/project_engineering-white.svg); display: block;"></i>
                    </div>
                    <div class="ap_text" id="apTitle2">
                    Project Engineering 
                    <div class="d-block d-md-none"><br></div>        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 nopadding sp-block" id="sp_r3">
                <div class="ap_rdhr">
                    <div class="ap_rounded" id="ap_roundActive3">
                        <i style="background-image: url(<?php echo ROOT?>photo/training-white_04.svg); display: block;"></i>
                    </div>
                    <div class="ap_text" id="apTitle3">
                        Training
                        <div class="d-block d-md-none"><br><br></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 nopadding sp-block" id="sp_r4">
                <div class="ap_rdhr">
                    <div class="ap_rounded" id="ap_roundActive4">
                        <i style="background-image: url(<?php echo ROOT?>photo/field_service-white.svg); display: block;"></i>
                    </div>
                    <div class="ap_text" id="apTitle4">
                        Technical Support     
                        <div class="d-block d-md-none"><br></div>     
                    </div>
                </div>
            </div>
        </div>
        <div class="row ap_desc" id="ap_desc1" style="display: flex; font-size:95%;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center pt-4">
                <h3 style="font-weight:100;">Sales Team</h3>
                People are our greatest assets. Our sales consultants are trained to assist customers in securing the right product to suit their application and budget. We offer free consultation on selection of products to suit customers' requirements.
            </div>
        </div>
        <div class="row ap_desc" id="ap_desc2" style="display: none; font-size:95%;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center pt-4">
                <h3 style="font-weight:100;">Project Management</h3>
                Together with our local integration partners we provide project management services, from feasibility studies and conceptual proposals to project-specific developments and customized solutions. Our in-house team has years of project management experience that will make your project a success.
            </div>
        </div>
        <div class="row ap_desc" id="ap_desc3" style="display: none; font-size:95%;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center pt-4">
                <h3 style="font-weight:100;">Training</h3>
                We offer a broad range of training to help you understand and get a comprehensive system design and integration overview. This also includes many practical tips for the installation and commissioning.
            </div>
        </div>
        <div class="row ap_desc" id="ap_desc4" style="display: none; font-size:95%;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center pt-4">
                <h3 style="font-weight:100;">Technical Support</h3>
                Our support does not end after the commissioning, it goes far beyond that. We offer onsite service, hotline support and maintenance. Our support team is built with multi-disciplined, skilled technicians who deliver on our commitments. 
            </div>
        </div>

    </div>
</div>


<script>

$('#ap_desc2').hide();
$('#ap_desc3').hide();
$('#ap_desc4').hide();
$('#ap_brief1').hide();
$('#ap_brief2').hide();
$('#ap_brief3').hide();
$('#ap_brief4').hide();

function shwAp1(){
    $('.ap_textActive').removeClass('ap_textActive');
    $('.ap_roundActive').removeClass('ap_roundActive');
    $('.ap_desc').hide();
    $('#apTitle1').addClass('ap_textActive');
    $('#ap_roundActive1').addClass('ap_roundActive');
    $('#ap_desc1').show();    
}
function shwAp2(){
    $('.ap_textActive').removeClass('ap_textActive');
    $('.ap_roundActive').removeClass('ap_roundActive');
    $('.ap_desc').hide();
    $('#apTitle2').addClass('ap_textActive');
    $('#ap_roundActive2').addClass('ap_roundActive'); 
    $('#ap_desc2').show();
}
function shwAp3(){
    $('.ap_textActive').removeClass('ap_textActive');
    $('.ap_roundActive').removeClass('ap_roundActive');
    $('.ap_desc').hide();
    $('#apTitle3').addClass('ap_textActive');
    $('#ap_roundActive3').addClass('ap_roundActive');
    $('#ap_desc3').show();  
}
function shwAp4(){
    $('.ap_textActive').removeClass('ap_textActive');
    $('.ap_roundActive').removeClass('ap_roundActive');
    $('.ap_desc').hide();
    $('#apTitle4').addClass('ap_textActive');
    $('#ap_roundActive4').addClass('ap_roundActive'); 
    $('#ap_desc4').show();
}

$('#sp_r1').hover(function(){shwAp1();});
$('#sp_r2').hover(function(){shwAp2();});
$('#sp_r3').hover(function(){shwAp3();});
$('#sp_r4').hover(function(){shwAp4();});

$('#sp_r1').click(function(){
    $('.ap_textActive').removeClass('ap_textActive');
    $('.ap_roundActive').removeClass('ap_roundActive');
    $('#apTitle1').addClass('ap_textActive');
    $('#ap_roundActive1').addClass('ap_roundActive');
    $('.ap_desc').hide();
    $('#ap_desc1').slideDown();
});
$('#sp_r2').click(function(){
    $('.ap_textActive').removeClass('ap_textActive');
    $('.ap_roundActive').removeClass('ap_roundActive');
    $('#apTitle2').addClass('ap_textActive');
    $('#ap_roundActive2').addClass('ap_roundActive');
    $('.ap_desc').hide();
    $('#ap_desc2').slideDown();
});
$('#sp_r3').click(function(){
    $('.ap_textActive').removeClass('ap_textActive');
    $('.ap_roundActive').removeClass('ap_roundActive');
    $('#apTitle3').addClass('ap_textActive');
    $('#ap_roundActive3').addClass('ap_roundActive');
    $('.ap_desc').hide();
    $('#ap_desc3').slideDown();
});
$('#sp_r4').click(function(){
    $('.ap_textActive').removeClass('ap_textActive');
    $('.ap_roundActive').removeClass('ap_roundActive');
    $('#apTitle4').addClass('ap_textActive');
    $('#ap_roundActive4').addClass('ap_roundActive');
    $('.ap_desc').hide();
    $('#ap_desc4').slideDown();
});

</script>