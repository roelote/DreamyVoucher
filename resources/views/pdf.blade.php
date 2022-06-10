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

.content h1
{
  font-size: 12pt;
}
.content h2
{
  font-size: 11pt;
}
.content h3
{
  font-size: 10pt;
}
    .page-break {
        page-break-after: always;
      }

      table {
      width: 100%;
      }
            footer {
                position: fixed; 
                bottom: -70px; 
                left: -30px; 
                right: -30px;
                height: 14pt;
                font-size: 9px;
                /** Extra personal styles **/
                background-color: #052F61;
                color: white;
                text-align: center;

                
            }

       table
       {
         font-size: 12px;
         
       }
       table td
       {
          line-height: 10pt; 
       }     
      @page {
                font-size: 15px;
                margin-bottom: 75px;
                margin-top: 10px;
                margin-right: 30px;
                margin-left: 30px;
            }

       .blue
       {
        background-color: #052F61;
        width: 100%;
        color: #ffffff;
        margin-top: 3px;
        padding-right: 10px;
        padding-left: 5px;
        
       }     

       .gray
       {
         background-color: #F4F5F7;
       }

       .content p,  .content ul li
       {
          font-size: 11px;
       }
  </style>


  <body>
          <table style="position: relative">
            <img style="top: 1%; left: 4%" src="https://dreamy.tours/logo-grande.png" width="120px" alt="logo">
            <div style="position: absolute;top: 3%; right: 3% ; padding: 5px;">
              <div style="font-size: 20px;font-weight: 600;width: 100%;text-align:center">FACTURA</div>
              <div style="border:2px solid #052F61;padding:7px">
                <span><b>N° File:</b> {{ $ids->number_voucher }}</span><br>
                <span><b>Voucher N°:</b> {{ $ids->id }}</span><br>
                <span><b>Fecha Emisión:</b> {{ $ids->created_at->format('d/m/Y') }}</span>
              </div>
            </div>
            <tr><td><b>Teléfono:</b> +51 969 787 221 - +51 963 414 234</td></tr>
            <tr><td><b>Email:</b> info@dreamy.tours</td></tr>
            <tr><td><b>Sitio Web:</b> https://dreamy.tours </td></tr>
            <tr><td><b>Dirección:</b> Calle Tecte, CC María Angola, de. 216 2do piso, Cusco. | Av. Brasil N° 2173, Jesus Maria, Lima</td></tr>

            <tr><td class="blue" ><b>DATOS SERVICIO</b></td></tr>
            <tr><td><b>Cliente:</b> {{ $ids->name_pax }}</td></tr>
            <tr class="gray"><td><b>Email:</b> {{ $ids->email  }} </td></tr>
            <tr><td><b>Telefono:</b> {{ $ids->phone }} </td></tr>
            <tr class="gray"><td><b>Servicio:</b> {{ $ids->name_package }}</td></tr>
            <tr><td><b>Fecha Servicio:</b> {{ $ids->date_show }}</td></tr>
            <tr class="gray"><td><b>Idioma:</b> {{ $ids->language }}</td></tr>
            <tr><td><b>Cantidad Paxs:</b> {{ $cant }}</td></tr>
          </table>

          <table>

            <tr><td colspan="7"  class="blue" ><b>PAXS</b></td></tr>

            <tr>
              <td style=""><b>N°</b></td>
              <td style="text-align: left"><b>Nombre</b></td>
              <td style="text-align: left"><b>Apellidos</b></td>
              <td style="text-align: left"><b>N° Pasaporte</b></td>
              <td style="text-align: left"><b>Pais</b></td>
              <td style="text-align: left"><b>Sexo</b></td>
              <td style="text-align: left"><b>Fecha Nacimiento</b></td>
            </tr>
              @php
              $counts = 0;
              @endphp

              @foreach ($pax as $p)
                @php
                    $counts++;
                @endphp
            <tr>
              <td style="">{{$counts}}</td>
              <td style="text-align: left">{{$p->name}}</td>
              <td style="text-align: left">{{$p->lastname}}</td>
              <td style="text-align: left">{{$p->passport}}</td>
              <td style="text-align: left">{{$p->nationality}}</td>
              <td style="text-align: left">{{$p->sex}}</td>
              <td style="text-align: left">{{$p->date_pax}}</td>
           </tr>
          @endforeach
      </table>
      <table>
            <tr><td colspan="4" class="blue"><b>LIQUIDACIÓN</b></td></tr>
            <tr>
              <td><b>Monto Total</b></td>
              <td><b>Adelanto</b></td>
              <td><b>Fecha Adelanto</b></td>
              <td><b>Falta Pagar</b></td>
            </tr>
            <tr>
              <td style="background-color: yellow"><b>162 Dolares</b></td>
              <td style="background-color: yellow"><b>162 Dolares</b></td>
              <td style="background-color: yellow"><b>09/06/2022</b></td>
              <td style="background-color: yellow"><b>0 Dolares</b></td>
            </tr>

            <tr><td colspan="4" class="blue"><b>DETALLES</b></td></tr>

       </table>
       <div class="content">
           {!! $ids->Message !!}
       </div>
            <footer>
                Si tienes alguna pregunta por favor contáctanos
                Telf: +51 969 787 221 - +51 963 414 234 / E-mail :info@dreamy.tours
                Gracias por tu Preferencia !
            </footer>
  
  </body>

</html>