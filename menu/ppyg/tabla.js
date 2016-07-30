$(document).ready(function() {
  var $tabs = $('#EmptyTable');
  $("tbody.t_sortable").sortable({
    connectWith: ".t_sortable",
    items: "> tr:not(:first)",
    appendTo: $tabs,
    helper:"clone",
    zIndex: 999990
  }).disableSelection();

  var $tab_items = $(".nav-tabs > li", $tabs).droppable({
    accept: ".t_sortable tr",
    hoverClass: "ui-state-hover",
    drop: function( event, ui ) {
      var rowData;
      // looping through the cell of each row
      for (var i = 0; i < $("td",this).length; i++) {
        // Get the name of the column
        // I don't know your HTML so I can't make a selector for this
        var colName = $("selector-for-header-column").text(); 
        // Using square brackets to access an object property by string variable, 
        // and selecting the text in this cell for the dropped row.
        rowData[colName] = $("td",this).eq(i).text(); 
      }
      // Now we have an object whose property names are the table headers, 
      // and the data in each property is the text in each cell of the dropped row.
      $.ajax({
        type: "POST",
        url: "/insertTeamMember.php",
        data: rowData,
        success: function (data) {
          // Log the return from the ajax endpoint, this will help you debug!
          console.log(data);
        }
      });
    }
  });
});