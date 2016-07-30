$( "#sortable1, #sortable2" ).sortable({
    connectWith: ".connectedSortable",
    stop: function(event, ui) {
        $('.connectedSortable').each(function() {
            result = "";
            alert($(this).sortable("toArray"));
            $(this).find("li").each(function(){
                result += $(this).text() + ",";
            });
           