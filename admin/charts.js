Highcharts.chart('container', {

    title: {
      text: 'Revenue statistics for the last 30 days'
    },
  
    yAxis: {
      title: {
        text: 'Turnover'
      }
    },
  
    xAxis: {
        categories: <?php echo json_encode($xAxis) ?>
    },
  
    legend: {
      layout: 'vertical',
      align: 'right',
      verticalAlign: 'middle'
    },
  
    plotOptions: {
      series: {
        label: {
          connectorAllowed: false
        },
      }
    },
  
    series: [{
      name: 'Turnover',
      data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
    }, 
    ],
  
    responsive: {
      rules: [{
        condition: {
          maxWidth: 500
        },
        chartOptions: {
          legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom'
          }
        }
      }]
    }
  
  });