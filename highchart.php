<script>

var HP = <?php echo $HP ?>;
var Attack = <?php echo $Attack ?>;
var Defense = <?php echo $Defense ?>;
var SpAtk = <?php echo $SpAtk ?>;
var SpDef = <?php echo $SpDef ?>;
var Speed = <?php echo $Speed ?>;


Highcharts.chart('StatsContainer', {


  chart: {
    polar: true,
    type: 'line',
    backgroundColor: "rgba(255, 255, 255, 0.4)"
  },

  exporting: {
     enabled: false
  },

  title: {
    text: 'Stats',
    x: -80
  },

  pane: {
    size: '80%'
  },

  xAxis: {
    categories: ['HP','Attack','Defense','Sp. Atk','Sp. Def','Speed'],
    tickmarkPlacement: 'on',
    lineWidth: 0
  },

  yAxis: {
    gridLineInterpolation: 'polygon',
    lineWidth: 0,
    min: 0,
    tickPositions: [0, 25, 50, 100, 150, 200, 250]
  },

  tooltip: {
    shared: true,
    pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.0f}</b><br/>'
  },

  legend: {
    enabled:false,
    align: 'right',
    verticalAlign: 'top',
    y: 70,
    layout: 'vertical'
  },

  series: [{
    name: 'Poké stats',
    data: [HP,Attack,Defense,SpAtk,SpDef,Speed],
    pointPlacement: 'off'
  }]

});

</script>

<!--Pogo Chart-->
<script>

var PoGoCP = <?php echo $CP; ?>;
var PoGoHP = <?php echo $PokemonGoBaseHP; ?>;
var PoGoAttack = <?php echo $PokemonGoBaseAttack; ?>;
var PoGoDefense = <?php echo $PokemonGoBaseDefense; ?>;
var PoGoSpeed = <?php echo $PokemonGoSpeedMod; ?>;


Highcharts.chart('PogoStatsContainer', {
  chart: {
    type: 'bar'
  },
  title: {
    text: 'MAX CP: '+ PoGoCP
  },
  xAxis: {
    categories: ['Pokemon Stats'],
    title: {
      text: null
    }
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Stat Points',
      align: 'high'
    },
    labels: {
      overflow: 'justify'
    }
  },
  tooltip: {
    valueSuffix: ''
  },
  plotOptions: {
    bar: {
      dataLabels: {
        enabled: true
      }
    }
  },
  legend: {
    layout: 'vertical',
    align: 'left',
    verticalAlign: 'top',
    y: 80,
    floating: true,
    borderWidth: 1,
    backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
    shadow: true
  },
  credits: {
    enabled: false
  },
  series: [{
    name: 'HP',
    data: [PoGoHP]
  }, {
    name: 'Defense',
    data: [PoGoDefense]
  },
  {
    name: 'Attack',
    data: [PoGoAttack]
  },
  {
    name: 'Speed',
    data: [PoGoSpeed]
  }]
});
</script>
