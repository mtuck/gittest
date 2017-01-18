$( document).ready(function(){
    $('#navbar').load('navbar.html');
    
    $('#perianth1').click(function(){
       $('.perianth1Pic').toggle( "slow" ); 
    });
    
    $('#perianth2').click(function(){
       $('.perianth2Pic').toggle( "slow" ); 
    });
    
    
});


$("#panzoom").panzoom({
    $zoomIn: $(".zoom-in"),
    $zoomOut: $(".zoom-out"),
    $zoomRange: $(".zoom-range"),
    $reset: $(".reset")
});


$(document).ready(function () {
    $('#myModal').on('show.bs.modal', function (e) {
        var image = $(e.relatedTarget).attr('src');
        $(".modal-link").attr("src", image);
    });
});