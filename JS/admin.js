$(window).on('load', function(){
    var win = $(this);
    var width = $(window).width();
    if (win.width() <= 1024) {
        $("td").css("width", width - 35);
    }
});
$(window).on('resize', function(){
    var win = $(this);
    var width = $(window).width();
    if (win.width() <= 1024) {
        $("td").css("width", width - 35);
    }
});


$(document).ready(function(){
    
    $(".pendingBtn").click(function() {
        updateTabs("pendingBtn", "pendingBadgesBody");
    });
    
    $(".completeBtn").click(function() {
        updateTabs("completeBtn", "completedBadgesBody");
    });
    $(".sqlBtn").click(function() {
        updateTabs("sqlBtn", "sqlBody");
    });
});

function updateTabs(tabName, target){
    $("button").css("background-color", "lightgray");
    // $(".pendingBadgesBody").css("display", "none");
    $(".pendingBadgesBody").fadeOut(300);
    // $(".pendingBadgesBody").css("display", "none");
    $(".completedBadgesBody").fadeOut(300);
    $(".sqlBody").fadeOut(300);
    var newTab = "." + tabName;
    var newTarget = "." + target;
    $(newTab).css("background-color", "white");
    // $(newTarget).css("display", "block");
    $(newTarget).delay(300).fadeIn(300);   
}