Highcharts.chart('container1', {
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
    },
    title: {
      text: 'Browser market shares in April, 2022'
    },
    tooltip: {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
      point: {
        valueSuffix: '%'
      }
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: true,
          format: '<b>{point.name}</b>: {point.percentage:.1f} %'
        }
      }
    },
    series: [{
      name: 'Apple',
      colorByPoint: true,
      data: [{
        name: 'Xiaomi',
        y: 49.5,
        sliced: true,
        selected: true
      }, {
        name: 'Macbook',
        y: 11.5
      }, {
        name: 'Samsung',
        y: 19.5
      }, {
        name: 'Google',
        y: 10.5
      }, {
        name: 'Lenovo',
        y: 20
      }]
    }]
  });