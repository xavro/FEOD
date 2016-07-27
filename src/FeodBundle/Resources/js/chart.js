$(function(){
    Chart.defaults.global.scaleOverride = true;
    $.ajax({
      url: Routing.generate('stat_statut'),
      success: function(data){
          var ctx = $("#stat").get(0).getContext("2d");
          var myPieChart = new Chart(ctx).Doughnut(data);
      },
      dataType: 'json'
    });
});
