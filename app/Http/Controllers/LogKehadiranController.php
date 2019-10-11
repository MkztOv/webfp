<?php

namespace App\Http\Controllers;

use App\log_kehadiran;
use App\log_kehadirandate;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class LogKehadiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ch = log_kehadiran::select('pin','scan_date','sn')
        //                     ->where('pin','=','392')
        //                     ->groupBy('scan_date')
        //                     ->orderBy('scan_date','desc')
        //                     ->paginate(10);
        $bulan2 = '06';
        // $format = function ($val){
        //     return Carbon::parse($val->scan_date)->format('Y-m-d');
        // };

        $isichartxaxis = log_kehadirandate::select('scan_date')
                                ->whereMonth('scan_date',$bulan2)
                                ->whereYear('scan_date', '2019')
                                ->wherePin('379')
                                ->get()
                                ;
                                // ->groupBy($format)
        // $isichartxaxis_2 = log_kehadirandate::select('scan_date')
        //                         ->whereMonth('scan_date',$bulan2)
        //                         ->whereYear('scan_date', '2019')
        //                         ->wherePin('392')
        //                         ->get()
        //                         ;
                                // ->groupBy($format)
                                // ;


        $categories = [];

        $data = [];


        // $scan_date = Carbon::parse($isichartxaxis_2['scan_date']);
        // foreach($isichartxaxis_2 as $tglchart){
          // Carbon::parse($tglchart->scan_date)->format('Y-m-d');
          // $categories[] = $tglchart;

        // }

        foreach($isichartxaxis as $isx){

          $data[] =
          // Carbon::parse($isx->scan_date)->timestamp;
                    Carbon::parse($isx->scan_date)->format('H:i:s');
                    // $isx->scan_date;
                   // ->count()

        }
        foreach($isichartxaxis as $isx2){
          $categories[] = Carbon::parse($isx2->scan_date)->format('d/m/Y');

        }

        // dd(($data));
        return view ('laporan.cobacharts',['isichartxaxis'=>$isichartxaxis,'categories'=>$categories,'data'=>$data]);
    }

    public function viewlogscan(Request $request)
    {


      // selectRaw('pin, (select convert(scan_date, date)) as Hari, count(scan_date) as Total_scan')
      // $logscan = log_kehadiran::select('pin', DB::raw("select convert(att_log.scan_date, date) as 'Hari'"))
      //
      //                         ->where('scan_date','like','2019%')
      //                         ->groupBy('ANY_VALUE(Hari)','pin')
      //                         ->orderBy('scan_date','desc')
      //
      //                         ->get();

      $bulan1 = '06';
      $bulan2 = '08';
      // $formatbulan = Carbon::parse('scan_date')->format('H:m:i');


      // $logscancount1 = DB::table('att_log')
      //                    ->select('pin','scan_date')
      //                    // ->wherePin('392')
      //                    ->groupBy(DB::raw("(date_format(scan_date, '%Y-%m-%d'))"),'pin')
      //                    ->get();
      $logscancount1 = log_kehadirandate::whereYear('scan_date', '2019')
                              ->whereMonth('scan_date',$bulan2)
                              ->wherePin('111')
                              // ->groupBy(function ($val) {
                              //     return Carbon::parse($val->scan_date)->format('d');
                              //   })
                              // ->groupBy('scan_date')
                              // ->selectRaw('DAY(scan_date) days')
                              // ->groupBy(function ($val){
                              //     return Carbon::createFromFormat('Y-m-d', $val->scan_date);
                              //   })
                              ->paginate(10)
                              // ->groupBy();
                              ->groupBy((function ($val){
                                  return Carbon::parse($val->scan_date)->format('Y-m-d');
                              }));
                              // ->count();

      $logscan = log_kehadirandate::whereYear('scan_date','2019')
                              ->whereMonth('scan_date',$bulan2)
                              ->wherePin('111')
                              // ->groupBy(function ($val) {
                              //     return Carbon::parse($val->scan_date)->format('d');
                              //   })
                              // ->groupBy('scan_date')
                              ->paginate(10);

      return view ('laporan.data_scanlog2',compact('logscan','logscancount1'));
      // return view ('laporan.data_scanlog2')->with(['logscan'=>$logscan, 'logscancount'=>$logscancount]);
      //
      // $logscan = DB::Raw('
      //   select pin, (select convert(scan_date, date)) as Hari, count(scan_date) as Total_scan
      //   from att_log
      //   where scan_date like "2019%"
      //   group by hari,pin
      //   order by scan_date desc
      // ')->paginate(10);
      //
      // return view ('laporan.data_scanlog2',compact('logscan'));
    }
    public function view3()
    {
      $logscancount1 = log_kehadirandate::whereYear('scan_date', '2019')
                              ->wherePin('393')
                              // ->groupBy(function ($val) {
                              //     return Carbon::parse($val->scan_date)->format('d');
                              //   })
                              // ->groupBy('scan_date')
                              // ->selectRaw('DAY(scan_date) days')
                              // ->groupBy(function ($val){
                              //     return Carbon::createFromFormat('Y-m-d', $val->scan_date);
                              //   })
                              ->get()
                              // ->groupBy();
                              ->groupBy((function ($val){
                                  return Carbon::parse($val->scan_date)->format('Y-m-d');
                              }));
                              return view ('laporan.data_scanlog3',compact('logscancount1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\log_kehadiran  $log_kehadiran
     * @return \Illuminate\Http\Response
     */
    public function show(log_kehadiran $log_kehadiran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\log_kehadiran  $log_kehadiran
     * @return \Illuminate\Http\Response
     */
    public function edit(log_kehadiran $log_kehadiran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\log_kehadiran  $log_kehadiran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, log_kehadiran $log_kehadiran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\log_kehadiran  $log_kehadiran
     * @return \Illuminate\Http\Response
     */
    public function destroy(log_kehadiran $log_kehadiran)
    {
        //
    }
}
