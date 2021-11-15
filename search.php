

<form action="<?php echo ROOT?>products" method="post" class="form-group pt-0" id="search_from">
    <div class="ic-search">
        <i class="fa fa-search"></i>
    </div>
    <input type="text" class="form-control h-search" name="keyword" placeholder="Search Product" id="keyword" autocomplete="off" style="width:96%; display:inline-block;">

    <input type="hidden" id="user_keyword" name="user_keyword">

    <div style="width:0; height:0; position:relative; left:-30px; overflow:visible; display:inline-block; ">
    <img src="<?php echo ROOT?>images/close-16.png" id="clearkeyword" onload="fadeOut(1)"></div>
    
</form>

<div id="auto_list">
    <?php 
    $product_items = sql_read("select name, description from product where status =1 order by name asc");

    foreach((array)$product_items as $product_item){
        echo '<div class="auto_suggest_item">'.$product_item['name'].'<span style="display:none">||||'.$product_item['brief_description'].$product_item['full_description'].'</span></div>';
    }
    ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

$('#clearkeyword').fadeOut(1);

$("#keyword").on('keyup dblclick', function(){
    
    //var asdsad = '#clearkeyword';
    //$("#clearkeyword").css("display", "inline-block");

    $('#clearkeyword').fadeIn();

    var keyw = $(this).val();

    if( keyw != ''){
        $('#auto_list').fadeIn();
    }else{
        $('#auto_list').fadeOut();
    }

    $( ".auto_suggest_item" ).each(function( index ) {
        var auto_suggest_item = $(this).text();
        if(auto_suggest_item.toLowerCase().includes(keyw.toLowerCase()) === true){
            $(this).fadeIn();
        }else{
            $(this).fadeOut();
        }
    });
});

$(".auto_suggest_item").on('click', function(){

    var userStr = $("#keyword").val();
    $('#user_keyword').val(userStr);

    var str = $(this).text();
    var str = str.split('||||')[0];
    $('#keyword').val(str);
    
    //$('#keyword').focus(); 
    $('#auto_list').fadeOut();
    document.getElementById('search_from').submit();
});

$(function() {
    $("body").click(function(e) {
        if (e.target.id == "auto_list" || $(e.target).parents("#auto_list").length || e.target.id == "keyword" ) {
            //alert("Inside div");
        } else {
            $('#auto_list').fadeOut();
        }
    });
})

$("#clearkeyword").on('click', function(){ 
    
    $('#clearkeyword').fadeOut();
    $('#keyword').val('');
    $('#keyword').focus();
})

</script>

<style>
#auto_list {
    /**/display:none;
    position:absolute;
    top:62px;	
    z-index:4;
    background: rgba(255,255,255,.9);;
    border:1px solid #CCC;
    box-shadow:2px 2px 4px rgba(0,0,0,.4);
    overflow-y:scroll;
    overflow-x:hidden;
    max-height:80vh;
}
#auto_list > div {
    padding:4px 10px;
    cursor:pointer;
}
#auto_list > div:hover {
    background: #EFEFEF;
}
.h-search::placeholder {
    color:#999;
}
</style>
