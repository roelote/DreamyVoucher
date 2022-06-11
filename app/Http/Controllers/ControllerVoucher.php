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
                //$newdate = Carbon::parse($request->fecha)->format('d/m/Y');
                //$newdate2 = Carbon::parse($request->fecha_adelanto)->format('d/m/Y');

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
                    'date_package'=>$request->fecha,
                    'language'=>$request->idioma,
                    'currency'=>$request->moneda,
                    'price'=>$request->precio,
                    'advancement'=>$request->adelanto,
                    'date_advancement'=>$request->fecha_adelanto,
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
                    
                    //$datens = $fecha_nacimiento[$i];
                    //$newdatepax = Carbon::parse($datens)->format('d/m/Y');

                    Pax::create([
                        'voucher_id'=>$ultimo->id,
                        'name'=>$nombres[$i],
                        'lastname'=>$apellido[$i],
                        'name'=>$nombres[$i],
                        'passport'=>$pasaporte[$i],
                        'nationality'=>$nacionalidad[$i],
                        'sex'=>$sexo[$i],
                        'birth_date'=>$fecha_nacimiento[$i],
                    ]);
                }

        return redirect()->route('voucher.index')->with("status","ok");

    }

    public function edit($id)
    {
         $pax = Pax::where('voucher_id','=', $id)->get();
         $voucher = Voucher::findOrFail($id);

         return view('edit',compact('voucher','pax'));

    }

    public function update(Request $request, $id)
    {

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
            $voucher = Voucher::find($id);
            $voucher->name_package = $request->paquete;
            $voucher->name_pax = $request->nombre;
            $voucher->email = $request->email;
            $voucher->phone = $request->telefono;
            $voucher->date_package = $request->fecha;
            $voucher->language = $request->idioma;
            $voucher->currency = $request->moneda;
            $voucher->price = $request->paquete;
            $voucher->advancement = $request->adelanto;
            $voucher->date_advancement = $request->fecha_adelanto;
            $voucher->debt = $request->falta;
            $voucher->Message = $request->detalle;
            $voucher->save();


            //actualizamos paxs.

              $paxs = Pax::where('voucher_id','=', $id)->get();

              //recuperamos lo enviado por request
              //recuperamos los datos de cada array

               $nombres = $request->no1;
               $apellido = $request->ap1 ;
               $pasaporte = $request->pa1;
               $nacionalidad = $request->na1;
               $sexo = $request->se1;
               $fecha_nacimiento = $request->fe1;

             // dd($paxs[0]->name);

             //dd($nombres[1]);
        
          //actualizamos los datos de request a los de la bd

             $i=0;
             foreach ($paxs as $pp) {
                $pp->name = $nombres[$i];
                $pp->lastname = $apellido[$i];
                $pp->passport = $pasaporte[$i];
                $pp->nationality = $nacionalidad[$i];
                $pp->sex = $sexo[$i];
                $pp->birth_date = $fecha_nacimiento[$i];
                $pp->save();
                $i++;
             }

            //for ($i=0; $i <$count ; $i++) { 
            //   $paxs[$i]->name = $nombres[$i];
            //   $paxs->save();
            //}

            return redirect()->route('voucher.index')->with('update','ok');

    }

}
