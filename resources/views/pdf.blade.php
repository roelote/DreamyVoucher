<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $ids->name_package }}</title>
  </head>

  <style>

@font-face {
    font-family: 'RobotoCondensed-Regular';
    src: url({{ storage_path('fonts/RobotoCondensed-Regular.ttf') }}) format("truetype");
}

html
{
  font-family: 'RobotoCondensed-Regular';
}
/*  html {
    	margin: 0pt 0pt;
    } */
    .page-break {
        page-break-after: always;
      }
      /*table, th, td {
            border-collapse: collapse;
            width: 100%;
          } */
      table {
      width: 100%;
      border-collapse:collapse; 
      }
      .border 
      {
        border: 1px solid;
      }
      .w50
      {
        width: 46%;
      }
      .w70
      {
        width: 70%;
      }
      .table td
      {
      padding: .3rem;
      }
      .center
      {
        text-align: center
      }
      .block
      {
        display: inline-block;
        padding: 0cm;
        margin: 0cm;
      }
      .w100
      {
        width: 100%;
      }
      .p-2
      {
        padding: .5rem;
      }
      .p-1
      {
        padding: 0.25rem;
      }
      .border-b
      {
        border-bottom: 1px solid;
      }


  </style>


  <body>

<br>

    <table class="border" style="border-top-width: 20px; border-top-color: #14b8a6;border-bottom-color: gray; border-left-color: gray; border-right-color: gray ">

      <tr>
        <td>
          <!-- <div class="p-2">
            <span><b>VOUCHER: {{ $ids->id }}</b></span>
          </div> -->
          <div class="p-2">
            <!-- <span class="p-1 block w100"><b>Empresa:</b> DREAMY TOURS</span>
            <span class="p-1 block w100"><b>Telefono :</b> +51 969 787 221 | +51 963 414 234</span> -->
            <!-- <span class="p-1 block w100"><b>Email :</b> info@dreamy.tours | operaciones@dreamy.tours</span>
            <span class="p-1 block w100"><b>Dirección Cusco:</b> Calle Tecte, CC María Angola, de. 216 2do piso, Cusco.  </span>

            <span class="p-1 block w100">--------------------------------------------------------------------------</span> -->

            <span class="p-1 block w100"><b>N° File :</b> {{ $ids->number_voucher }}</span>
            <span class="p-1 block w100"><b>Servicio :</b> {{ $ids->name_package }}</span>
            <span class="p-1 block w100"><b>Nombre File :</b> {{ $ids->name_package }} </span>
            <span class="p-1 block w100"><b>Cantidad de Paxs :</b> {{ $cant }} </span>
            <span class="p-1 block w100"><b>Teléfono :</b> {{ $ids->phone }} </span>
            <span class="p-1 block w100"><b>Fecha del Servicio :</b> {{ $ids->date_package }} </span>

          </div>
        </td>
        <td>
          <div class="border" style="position: absolute;top: 5%; right: 3% ; padding: 5px">
            <b>Voucher N°: {{ $ids->id }}</b><br>
            <b>Fecha Emisión: {{ $ids->created_at->format('d/m/Y') }}</b>
          </div>
          <img style="position: absolute; top: 11%; right: 4%" src="https://dreamy.tours/logo-grande.png" width="250px" alt="logo">
        </td>
      </tr>
      <!-- <tr class="w30">
        <td>
          <img src="https://dreamy.tours/wp-content/uploads/2022/05/dreamy-bn.png" width="100px" alt="">
        </td>
      </tr> -->
    </table>
    <br>


          <table class="border" style="border-color: gray">
            <tr class="border-b" style="background-color: #14b8a6;color:#fff; ">
              <td class="center" colspan="4" style="padding: 5px">
                LIQUIDACIÓN
              </td>
            </tr>
            <tr class="border-b "  style="border-color: gray">
              <td class="center"><b>Total</b></td>
              <td class="center"><b>Adelanto</b></td>
              <td class="center"><b>Fecha Adelanto</b></td>
              <td class="center"><b>Falta Pagar</b></td>
            </tr>
            <tr>
              <td class="center">{{ $ids->price }} {{ $ids->currency }} </td>
              <td class="center">{{ $ids->advancement }} {{ $ids->currency }} </td>
              <td class="center">{{ $ids->date_advancement }} </td>
              <td class="center">{{ $ids->debt }} {{ $ids->currency }}</td>
            </tr>
          </table>
          <br>
          <table class="border"  style="border-color: gray">
            <tr class="border-b" style="background-color: #14b8a6;color:#fff; ">
              <td class="center" colspan="7" style="padding: 5px">
                  DETALLES DE PAXS
              </td>
            </tr>
            <tr class="border-b" style="border-color: gray">
              <td class="center"><b>N°</b></td>
              <td class="center"><b>Nombre</b></td>
              <td class="center"><b>Apellidos</b></td>
              <td class="center"><b>N° Pasaporte</b></td>
              <td class="center"><b>Pais</b></td>
              <td class="center"><b>Sexo</b></td>
              <td class="center"><b>Fecha Nacimiento</b></td>
            </tr>

              @php
                  $counts = 0;
              @endphp

              @foreach ($pax as $p)
                    @php
                        $counts++;
                    @endphp
                  <tr>
                    <td class="center">{{$counts}}</td>
                    <td class="center">{{$p->name}}</td>
                    <td class="center">{{$p->lastname}}</td>
                    <td class="center">{{$p->passport}}</td>
                    <td class="center">{{$p->nationality}}</td>
                    <td class="center">{{$p->sex}}</td>
                    <td class="center">{{$p->birth_date}}</td>
                  
                
              @endforeach
           
          </table>
          <br>
          <table class="border" style="border-color: gray">
            <tr class="border-b" style="background-color: #14b8a6;color:#fff; border-color: gray ">
              <td class="center" style="padding: 5px">
                  DETALLE DEL SERVICIO
              </td>
            </tr>
            <div class="p-2 ">
               {!! $ids->Message !!}
            </div>
          <br>
          </table>
          <!-- <div class="w100 border block">
            <div class="p-2 border-b center">
              <span><b>DETALLES DE EMPRESA</b></span>
            </div>
            <div class="p-2 ">
              <span class="p-1 block w100">DREAMY TOURS</span>
              <span class="p-1 block w100">+51 969 787 221 | +51 963 414 234</span>
              <span class="p-1 block w100">info@dreamy.tours | operaciones@dreamy.tours</span>
              <span class="p-1 block w100">Calle Tecte, CC María Angola, de. 216 2do piso, Cusco. </span>
            </div>
          </div> -->
    
    <!-- <div class="page-break"></div> -->

  
  </body>

</html>