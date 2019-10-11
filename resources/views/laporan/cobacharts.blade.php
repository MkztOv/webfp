@extends('layouts.applogin')

@section('content')
<div class="container-fluid">
  <div class="box">
    <div class="box-body">
      <div id="cobachartbar" class="" style="width:100%; height:400px;">

      </div>

    </div>
  </div>

</div>
@endsection

@section('loadchart')
<script src="{{asset('Highcharts/code/highcharts.js')}}"></script>
<script>
var myDateFormat = '%d/%m/%y';
    Highcharts.chart('cobachartbar', {
      chart: {
          type: 'column'
      },
      title: {
          text: 'Kehadiran Pegawai'
      },
      subtitle: {
          text: 'Source: fingerspot device'
      },
      xAxis: {
        type: 'dates',
        title: {
          text: 'Hari masuk kerja'
        },
        // dateTimeLabelFormats: {
        //         day: myDateFormat,
        //         week: myDateFormat,
        //         month: myDateFormat,
        //         year: myDateFormat
        //     },
        // label: {
        //   x :
        // },
          categories:
          // [
          {!! json_encode($categories)!!}
          // ]
          ,

              // 'Senin',
              // 'Selasa',
              // 'Rabu',
              // 'Kamis',
              // 'Jumat',
              // 'Sabtu'
              // 'Minggu'

          // crosshair: true
          // showLastLabel: false
      },
      yAxis: {
          // min: 0,
          // max: 10,
          title: {
              text: 'Jam'
          }
          ,
          // type: 'datetime',
          // labels: {
          //   format: '{value: %H:%M}',
          // }
          // ,
          //force all formats to be hour:minute
          type: 'datetime',
          dateTimeLabelFormats: {
            second: '%H:%M',
            minute: '%H:%M',
            hour: '%H:%M',
            day: '%H:%M',
            week: '%H:%M',
            month: '%H:%M',
            year: '%H:%M'
            }
      },
      tooltip: {
          headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
          footerFormat: '</table>',
          shared: true,
          useHTML: true,
        //   tooltip: {
        // 	formatter: function () {
        //   	const date = new Date(this.y)
        //   	const M = date.getMinutes()
        //     const H = date.getHours()
        //     return `${this.series.name}: ${H}:${M}`
        //   }
        // },
      },
      plotOptions: {
          column: {
              pointPadding: 0.2,
              borderWidth: 0
          }
      },
      series: [{
          name: 'Kehadiran ',
          data:
          {!! json_encode($data) !!},
          // [
          //   foreach($data as $dt)
          //   [Date.parse($dt)]
          //   endforeach
          // ]
        }]
    });
</script>
@stop
