<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use App\Models\Pax;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use PDF;

class ControllerVoucher extends Controller
{

    public function __construct()
    {
          $this->middleware('auth');
     }

    public function index()
    {
       $voucher = Voucher::all();
       return view('index',compact('voucher')); 
    }

    public function exportPdf($id)
    {
        $ids = Voucher::where('id','=', $id)->firstOrFail();
        $pax = Pax::where('voucher_id','=', $id)->get();
        $cant = $pax->count();
        $pdf = PDF::loadView('pdf',compact('ids','pax','cant'));
        return $pdf->stream('File - '.$ids->name_pax.'.pdf');
    }


    public function crear()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        
            // dd($request->na1[0]);  result: CO

                $request->validate([
                    'paquete' => 'required',
                    'nombre' => 'required',
                    'email' => 'required',
                    'telefono' =>'required',
                    'fecha' => 'required',
                    'idioma'=>'required',
                    'moneda'=>'required',
                    'precio'=>'required',
                    'adelanto'=>'required',
                    'fecha_adelanto'=>'required',
                    'falta'=>'required',
                    'detalle' => 'required',
                    
                ]);

                //cambiando formato de fecha
                $newdate = Carbon::parse($request->fecha)->format('d/m/Y');
                $newdate2 = Carbon::parse($request->fecha_adelanto)->format('d/m/Y');


                //creando codigo de pax
                $day = Carbon::now()->format('d');
                $month = Carbon::now()->format('m');
                $year = Carbon::now()->format('Y');
                $hour = Carbon::now()->format('h');
                $min = Carbon::now()->format('i');

                //obtener ultimos 2 caracteres del año
                $y = Str::substr($year, -2);

                $code_pax = 'DT'.$min.$hour.$day.$month.$y;

                //insertando a la tabla voucher

                Voucher::create([
                    'number_voucher'=>$code_pax,
                    'name_package' => $request->paquete,
                    'name_pax'=>$request->nombre,
                    'email'=>$request->email,
                    'phone'=>$request->telefono,
                    'date_package'=>$newdate,
                    'language'=>$request->idioma,
                    'currency'=>$request->moneda,
                    'price'=>$request->precio,
                    'advancement'=>$request->adelanto,
                    'date_advancement'=>$newdate2,
                    'debt'=>$request->falta,
                    'Message'=>$request->detalle,
                ]);

                //recuperamos los datos de cada array
                $count = count($request->no1);
                $nombres = $request->no1;
                $apellido = $request->ap1 ;
                $pasaporte = $request->pa1;
                $nacionalidad = $request->na1;
                $sexo = $request->se1;
                $fecha_nacimiento = $request->fe1;
            
                //recuperamos el ultimo registro
                $ultimo = Voucher::latest('id')->first();
                
                //insertamos cada pax
                for ($i=0; $i < $count ; $i++) { 
                    
                    $datens = $fecha_nacimiento[$i];
                    $newdatepax = Carbon::parse($datens)->format('d/m/Y');

                    Pax::create([
                        'voucher_id'=>$ultimo->id,
                        'name'=>$nombres[$i],
                        'lastname'=>$apellido[$i],
                        'name'=>$nombres[$i],
                        'passport'=>$pasaporte[$i],
                        'nationality'=>$nacionalidad[$i],
                        'sex'=>$sexo[$i],
                        'birth_date'=>$newdatepax,
                    ]);
                }

        return redirect()->route('voucher.index');

    }
}
