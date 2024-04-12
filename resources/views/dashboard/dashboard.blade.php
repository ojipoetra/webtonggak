@extends('dashboard.navbar')
@section('dashboard')
<link rel="stylesheet" href="{{asset('apexcharts/dist/apexcharts.css')}}">

<div class="page-title">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12" id="chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-3">
              <div class="row g-0">
                  <img src="{{asset('icon/man.png')}}" class="img-fluid rounded-start" alt="..." style="width: 6rem">
                <div class="col-md-8">
                  <div class="card-body">
                    <h1 class="card-title">Laki-Laki</h1>
                    <p class="card-text">Jumlah 100</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
          <div class="col-md-6">
            <div class="card mb-3">
              <div class="row g-0">
                  <img src="{{asset('icon/woman.png')}}" class="img-fluid rounded-start" alt="..." style="width: 6rem">
                <div class="col-md-8">
                  <div class="card-body">
                    <h1 class="card-title">Perempuan</h1>
                    <p class="card-text">Jumlah 100</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
</div>
<script src="{{ asset('apexcharts/dist/apexcharts.min.js') }}"></script>
<script>
    
    var options = {
          series: [{
          name: 'Laki-Laki (Lama)',
          data: [44, 55, 57, 56, 61, 58, 63]
        }, {
          name: 'Laki-Laki (Baru)',
          data: [76, 85, 101, 98, 87, 105, 91]
        }, {
          name: 'Perempuan (Lama)',
          data: [39, 41, 36, 26, 45, 48, 52]
        },
        {
          name: 'Perempuan (Baru)',
          data: [35, 41, 36, 26, 45, 48, 52]
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['Poli Anak', 'Poli Bedah', 'Poli Gigi', 'UGD', 'Poli Kandungan', 'Poli Umum', 'Poli Penyakit Dalam'],
        },
        yaxis: {
          title: {
            text: '$ (thousands)'
          }
        },
        title: {
          text: 'Kunjungan Pasien Minggu Ini',
          align: 'left'
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
      
</script>
@endsection