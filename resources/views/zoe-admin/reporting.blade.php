@extends('layouts.admin-layout.app')

@section('content')

<section class="section">
    <div class="row">

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Line Chart</h5>

            <!-- Line Chart -->
            <div id="lineChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#lineChart")).setOption({
                  xAxis: {
                    type: 'category',
                    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                  },
                  yAxis: {
                    type: 'value'
                  },
                  series: [{
                    data: [150, 230, 224, 218, 135, 147, 260],
                    type: 'line',
                    smooth: true
                  }]
                });
              });
            </script>
            <!-- End Line Chart -->

          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Area Chart</h5>

            <!-- Area Chart -->
            <div id="areaChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#areaChart")).setOption({
                  xAxis: {
                    type: 'category',
                    boundaryGap: false,
                    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                  },
                  yAxis: {
                    type: 'value'
                  },
                  series: [{
                    data: [820, 932, 901, 934, 1290, 1330, 1320],
                    type: 'line',
                    smooth: true,
                    areaStyle: {}
                  }]
                });
              });
            </script>
            <!-- End Area Chart -->

          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Bar Chart</h5>

            <!-- Bar Chart -->
            <div id="barChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#barChart")).setOption({
                  xAxis: {
                    type: 'category',
                    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                  },
                  yAxis: {
                    type: 'value'
                  },
                  series: [{
                    data: [120, 200, 150, 80, 70, 110, 130],
                    type: 'bar'
                  }]
                });
              });
            </script>
            <!-- End Bar Chart -->

          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Vertical Bar Chart</h5>

            <!-- Vertical Bar Chart -->
            <div id="verticalBarChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#verticalBarChart")).setOption({
                  title: {
                    text: 'World Population'
                  },
                  tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                      type: 'shadow'
                    }
                  },
                  legend: {},
                  grid: {
                    left: '3%',
                    right: '4%',
                    bottom: '3%',
                    containLabel: true
                  },
                  xAxis: {
                    type: 'value',
                    boundaryGap: [0, 0.01]
                  },
                  yAxis: {
                    type: 'category',
                    data: ['Brazil', 'Indonesia', 'USA', 'India', 'China', 'World']
                  },
                  series: [{
                      name: '2011',
                      type: 'bar',
                      data: [18203, 23489, 29034, 104970, 131744, 630230]
                    },
                    {
                      name: '2012',
                      type: 'bar',
                      data: [19325, 23438, 31000, 121594, 134141, 681807]
                    }
                  ]
                });
              });
            </script>
            <!-- End Vertical Bar Chart -->

          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pie Chart</h5>

            <!-- Pie Chart -->
            <div id="pieChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#pieChart")).setOption({
                  title: {
                    text: 'Referer of a Website',
                    subtext: 'Fake Data',
                    left: 'center'
                  },
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    orient: 'vertical',
                    left: 'left'
                  },
                  series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: '50%',
                    data: [{
                        value: 1048,
                        name: 'Search Engine'
                      },
                      {
                        value: 735,
                        name: 'Direct'
                      },
                      {
                        value: 580,
                        name: 'Email'
                      },
                      {
                        value: 484,
                        name: 'Union Ads'
                      },
                      {
                        value: 300,
                        name: 'Video Ads'
                      }
                    ],
                    emphasis: {
                      itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                      }
                    }
                  }]
                });
              });
            </script>
            <!-- End Pie Chart -->

          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Donut Chart</h5>

            <!-- Donut Chart -->
            <div id="donutChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#donutChart")).setOption({
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    top: '5%',
                    left: 'center'
                  },
                  series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                      show: false,
                      position: 'center'
                    },
                    emphasis: {
                      label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                      }
                    },
                    labelLine: {
                      show: false
                    },
                    data: [{
                        value: 1048,
                        name: 'Search Engine'
                      },
                      {
                        value: 735,
                        name: 'Direct'
                      },
                      {
                        value: 580,
                        name: 'Email'
                      },
                      {
                        value: 484,
                        name: 'Union Ads'
                      },
                      {
                        value: 300,
                        name: 'Video Ads'
                      }
                    ]
                  }]
                });
              });
            </script>
            <!-- End Donut Chart -->

          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Radar Chart</h5>

            <!-- Radar Chart -->
            <div id="radarChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#radarChart")).setOption({
                  legend: {
                    data: ['Allocated Budget', 'Actual Spending']
                  },
                  radar: {
                    // shape: 'circle',
                    indicator: [{
                        name: 'Sales',
                        max: 6500
                      },
                      {
                        name: 'Administration',
                        max: 16000
                      },
                      {
                        name: 'Information Technology',
                        max: 30000
                      },
                      {
                        name: 'Customer Support',
                        max: 38000
                      },
                      {
                        name: 'Development',
                        max: 52000
                      },
                      {
                        name: 'Marketing',
                        max: 25000
                      }
                    ]
                  },
                  series: [{
                    name: 'Budget vs spending',
                    type: 'radar',
                    data: [{
                        value: [4200, 3000, 20000, 35000, 50000, 18000],
                        name: 'Allocated Budget'
                      },
                      {
                        value: [5000, 14000, 28000, 26000, 42000, 21000],
                        name: 'Actual Spending'
                      }
                    ]
                  }]
                });
              });
            </script>
            <!-- End Radar Chart -->

          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Polar Area Chart</h5>

            <!-- Polar Area Chart -->
            <div id="polarAreaChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#polarAreaChart")).setOption({
                  angleAxis: {
                    type: 'category',
                    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                  },
                  radiusAxis: {},
                  polar: {},
                  series: [{
                      type: 'bar',
                      data: [1, 2, 3, 4, 3, 5, 1],
                      coordinateSystem: 'polar',
                      name: 'A',
                      stack: 'a',
                      emphasis: {
                        focus: 'series'
                      }
                    },
                    {
                      type: 'bar',
                      data: [2, 4, 6, 1, 3, 2, 1],
                      coordinateSystem: 'polar',
                      name: 'B',
                      stack: 'a',
                      emphasis: {
                        focus: 'series'
                      }
                    },
                    {
                      type: 'bar',
                      data: [1, 2, 3, 4, 1, 2, 5],
                      coordinateSystem: 'polar',
                      name: 'C',
                      stack: 'a',
                      emphasis: {
                        focus: 'series'
                      }
                    }
                  ],
                  legend: {
                    show: true,
                    data: ['A', 'B', 'C']
                  }
                });
              });
            </script>
            <!-- End Polar Area Chart -->

          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
