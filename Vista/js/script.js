/**
 * Created by Mikel on 3/2/16.
 */
$(document).ready(function(){
    $("#eResult1").click(function(event)
    {
        event.preventDefault();
        $("#result1").attr("class","tab-pane active");
        $("#html1").attr("class","tab-pane");
        $(this).attr("class","active");
        $("#eHtml1").attr("class","");
    });

    $("#eHtml1").click(function(event)
    {
        event.preventDefault();
        $("#html1").attr("class","tab-pane active");
        $("#result1").attr("class","tab-pane");
        $(this).attr("class","active");
        $("#eResult1").attr("class","");
    });

    $("#eResult2").click(function(event)
    {
        event.preventDefault();
        $("#result2").attr("class","tab-pane active");
        $("#html2").attr("class","tab-pane");
        $(this).attr("class","active");
        $("#eHtml2").attr("class","");
    });

    $("#eHtml2").click(function(event)
    {
        event.preventDefault();
        $("#html2").attr("class","tab-pane active");
        $("#result2").attr("class","tab-pane");
        $(this).attr("class","active");
        $("#eResult2").attr("class","");
    });
});
