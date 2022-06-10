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

      p{
        font-size: 15px;
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
      .pr-2
      {
        padding-left: 0.5rem;
      }


            footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 30px; 
                /** Extra personal styles **/
                background-color: #14b8a6;
                color: white;
                text-align: center;
                
            }

      @page {
                font-size: 15px;
                margin-bottom: 75px;
                margin-top: 10px;
                margin-right: 10px;
                margin-left: 10px;
            }

  </style>


  <body>





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
            
            <span class="p-1 block w100"><b>Cantidad de Paxs :</b> {{ $cant }} </span>
            <span class="p-1 block w100"><b>Teléfono :</b> {{ $ids->phone }} </span>
            <span class="p-1 block w100"><b>Fecha del Servicio :</b> {{ $ids->date_show }} </span>
           
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
              <td class="pr-2"><b>Total</b></td>
              <td class=""><b>Adelanto</b></td>
              <td class=""><b>Fecha Adelanto</b></td>
              <td class=""><b>Falta Pagar</b></td>
            </tr>
            <tr>
              <td class="pr-2">{{ $ids->price }} {{ $ids->currency }} </td>
              <td class="">{{ $ids->advancement }} {{ $ids->currency }} </td>
              <td class="">{{ $ids->date_adv }} </td>
              <td class="">{{ $ids->debt }} {{ $ids->currency }}</td>
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
              <td class="pr-2"><b>N°</b></td>
              <td class=""><b>Nombre</b></td>
              <td class=""><b>Apellidos</b></td>
              <td class=""><b>N° Pasaporte</b></td>
              <td class=""><b>Pais</b></td>
              <td class=""><b>Sexo</b></td>
              <td class=""><b>Fecha Nacimiento</b></td>
            </tr>

              @php
                  $counts = 0;
              @endphp

              @foreach ($pax as $p)
                    @php
                        $counts++;
                    @endphp
                  <tr>
                    <td class="pr-2">{{$counts}}</td>
                    <td class="">{{$p->name}}</td>
                    <td class="">{{$p->lastname}}</td>
                    <td class="">{{$p->passport}}</td>
                    <td class="">{{$p->nationality}}</td>
                    <td class="">{{$p->sex}}</td>
                    <td class="">{{$p->date_pax}}</td>
                  
                
              @endforeach
           
          </table>
          <br>
          <table class="border" style="border-color: gray">
            <tr class="border-b" style="background-color: #14b8a6;color:#fff; border-color: gray ">
              <td class="center" style="padding: 5px">
                  DETALLE DEL SERVICIO
              </td>
            </tr>
          </table>
          <div class="w100" style="border-color: gray;">
            <div style="margin:15px">
              {!! $ids->Message !!}
            </div>
          </div>
          
        
            <!-- <div class="p-2 border-b center">
              <span><b>DETALLES DE EMPRESA</b></span>
            </div>
            <div class="p-2 ">
              <span class="p-1 block w100">DREAMY TOURS</span>
              <span class="p-1 block w100">+51 969 787 221 | +51 963 414 234</span>
              <span class="p-1 block w100">info@dreamy.tours | operaciones@dreamy.tours</span>
              <span class="p-1 block w100">Calle Tecte, CC María Angola, de. 216 2do piso, Cusco. </span>
            </div> -->
       
            <footer>
              Copyright &copy; <?php echo date("Y");?> 
            </footer>
  
  </body>

</html>