var graph = new Highcharts.Chart({
    chart: {
      renderTo: 'graph',
	backgroundColor:"#f6f6f6",
      style: {
        fontFamily: '"Helvetica Neue", Helvetica, Arial, sans-serif'
      },
      type: 'pie'
    },
    position: {
      spacingLeft: 0,
      marginRight: 0
    },
    title: {
      text: 'Macronutrient breakdown for July 16th, 2018'
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name} </td>' +
        '<td style="padding:0"><b>{point.y}%</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      column: {
        groupPadding: 0,
        pointPadding: 0.2,
        pointWidth: 73,
        borderWidth: 0,
        dataLabels: {
          enabled: true,
          format: '{point.y:.1f}%'
        }
      }
    },
   series: [{
    name: 'July 16th:',
    colorByPoint: true,
    data: [{
      name: 'Carbohydrates',
      y: 44,
		color:"#0074D9"
    }, {
      name: 'Fat',
      y: 29,
		color:"#FF851B"
    }, {
      name: 'Protein',
      y: 27,
		color:"#FF4136"
    }]
   }],
    func: function(chart) {
      $timeout(function() {
        graph.reflow();
        //The below is an event that will trigger all instances of charts to reflow
        //$scope.$broadcast('highchartsng.reflow');
      }, 0);
    }
  });