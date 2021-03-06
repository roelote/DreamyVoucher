@extends('layouts.app2')

@section('title', 'Crear Voucher')

@section('content')



        <div class="container max-w-7xl mx-auto border border-gray-200 p-3 my-5 relative bg-white">
            <h1 class="text-center font-bold text-gray-700 text-3xl">ACTUALIZAR VOUCHER 2022</h1>
            <span class="absolute left-0 top-2"><a href="{{ route('voucher.index') }}" class="border-white rounded-lg p-2 border bg-sky-600 text-white hover:bg-sky-700">Regresar Inicio</a></span>

            <form action=" {{ route('voucher.update',$voucher->id) }} " method="POST">
                @csrf
                @method('PATCH')

                <h2 class="bg-teal-500 p-2 my-5 text-center text-white">Datos Generales </h2>
                <div class="grid gap-6 mb-6 lg:grid-cols-5">
                    <div>
                        <label for="paquete" class="block mb-1 text-sm font-medium text-gray-900">Nombre Del Servicio</label>
                        <input type="text" name="paquete" id="paquete" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"  value="{{ $voucher->name_package }}"  required>
                            @error('paquete')
                               <small class="bg-red-700 text-white px-1.5 py-1 rounded"> {{ $message }}</small>
                            @enderror
                    </div>
                    <div>
                        <label for="nombre" class="block mb-1 text-sm font-medium text-gray-900">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"  value="{{ $voucher->name_pax }}" required>
                        @error('nombre')
                               <small class="bg-red-700 text-white px-1.5 py-1 rounded"> {{ $message }}</small>
                            @enderror
                    </div>
                    <div>
                        <label for="email" class="block mb-1 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" value="{{ $voucher->email }}" required>
                        @error('email')
                               <small class="bg-red-700 text-white px-1.5 py-1 rounded"> {{ $message }}</small>
                            @enderror
                    </div>
                    <div>
                        <label for="telefono" class="block mb-1 text-sm font-medium text-gray-900">Telefono:</label>
                        <input type="tel" name="telefono" id="telefono" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"  value="{{ $voucher->phone }}"  required>
                        @error('telefono')
                               <small class="bg-red-700 text-white px-1.5 py-1 rounded"> {{ $message }}</small>
                            @enderror
                    </div>
                    <div>
                        <label for="fecha" class="block mb-1 text-sm font-medium text-gray-900">Fecha del Servicio</label>
                        <input type="date" name="fecha" id="fecha" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" value="{{ $voucher->date_package }}" required>
                        @error('fecha')
                               <small class="bg-red-700 text-white px-1.5 py-1 rounded"> {{ $message }}</small>
                            @enderror
                    </div>
                </div>
                <div class="grid gap-6 mb-6 lg:grid-cols-6">
                   
                    <div>
                        <label for="idioma" class="block mb-1 text-sm font-medium text-gray-900">Idioma</label>
                        <select name="idioma" id="idioma" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" >
                            
                            <option value="Ingles" {{ $voucher->language =="Ingles" ? 'selected' : '' }}>Ingles</option>
                            <option value="Espa??ol" {{ $voucher->language =="Espa??ol" ? 'selected' : '' }}>Espa??ol</option>
                            <option value="Portugues" {{ $voucher->language =="Portugues" ? 'selected' : '' }}>Portugues</option>

                        </select>
                    </div>

                    <div>
                        <label for="moneda" class="block mb-1 text-sm font-medium text-gray-900">Tipo de Moneda</label>
                        <select name="moneda" id="moneda" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" >
                            <option value="Dolares" {{ $voucher->currency =="Dolares" ? 'selected' : '' }}>Dolares</option>
                            <option value="Soles" {{ $voucher->currency =="Soles" ? 'selected' : '' }}>Soles</option>
                        </select>
                    </div>

                    <div>
                        <label for="precio" class="block mb-1 text-sm font-medium text-gray-900">Precio del Servicio</label>
                        <input type="text" name="precio" id="precio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" value="{{ $voucher->price }}" required>
                            @error('precio')
                               <small class="bg-red-700 text-white px-1.5 py-1 rounded"> {{ $message }}</small>
                            @enderror
                    </div>

                    <div>
                        <label for="adelanto" class="block mb-1 text-sm font-medium text-gray-900">Adelanto</label>
                        <input type="text" name="adelanto" id="adelanto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" value="{{ $voucher->advancement }}" required>
                        @error('adelanto')
                               <small class="bg-red-700 text-white px-1.5 py-1 rounded"> {{ $message }}</small>
                            @enderror
                    </div>
                    <div>
                        <label for="fecha_adelanto" class="block mb-1 text-sm font-medium text-gray-900">Fecha Pago Adelanto</label>
                        <input type="date" name="fecha_adelanto" id="fecha_adelanto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" value="{{ $voucher->date_advancement }}" required>
                        @error('fecha_adelanto')
                               <small class="bg-red-700 text-white px-1.5 py-1 rounded"> {{ $message }}</small>
                            @enderror
                    </div>

                    <div>
                        <label for="falta" class="block mb-1 text-sm font-medium text-gray-900">Falta Pagar</label>
                        <input type="text" name="falta" id="falta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" value="{{ $voucher->debt }}" required>
                        @error('falta')
                               <small class="bg-red-700 text-white px-1.5 py-1 rounded"> {{ $message }}</small>
                            @enderror
                    </div>

                </div>

                

                <h2 class="bg-teal-500 p-2 my-5 text-center text-white">Detalles de Pasajeros </h2>
                <div class="grid gap-6 lg:grid-cols-6">
                    <div><span class="block mb-2 text-sm font-medium text-gray-900">Nombre</span></div>
                    <div><span class="block mb-2 text-sm font-medium text-gray-900">Apellidos</span></div>
                    <div><span class="block mb-2 text-sm font-medium text-gray-900">N?? Pasaporte / DNI</span></div>
                    <div><span class="block mb-2 text-sm font-medium text-gray-900">Nacionalidad</span></div>
                    <div><span class="block mb-2 text-sm font-medium text-gray-900">Sexo</span></div>
                    <div><span class="block mb-2 text-sm font-medium text-gray-900">Fecha de Nacimiento</span></div>
                    
                </div>

              @foreach ( $pax as $p)           
                 <div id="field">
                    <div class="grid gap-6 mb-6 lg:grid-cols-6">
                        <div><input type="text" value="{{$p->name}}" name="no1[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"></div>
                        <div><input type="text" value="{{$p->lastname}}" name="ap1[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"></div>
                        <div><input type="text" value="{{$p->passport}}" name="pa1[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"></div>
                        <div>
                            <select name="na1[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                                <option {{ $p->nationality =="Afganist??n" ? 'selected' : '' }} value="Afganist??n">Afganist??n</option>
                                <option {{ $p->nationality =="Albania" ? 'selected' : '' }} value="Albania">Albania</option>
                                <option {{ $p->nationality =="Alemania" ? 'selected' : '' }} value="Alemania">Alemania</option>
                                <option {{ $p->nationality =="Andorra" ? 'selected' : '' }} value="Andorra">Andorra</option>
                                <option {{ $p->nationality =="Angola" ? 'selected' : '' }} value="Angola">Angola</option>
                                <option {{ $p->nationality =="Anguilla" ? 'selected' : '' }} value="Anguilla">Anguilla</option>
                                <option {{ $p->nationality =="Ant??rtida" ? 'selected' : '' }} value="Ant??rtida">Ant??rtida</option>
                                <option {{ $p->nationality =="Antigua y Barbuda" ? 'selected' : '' }} value="Antigua y Barbuda">Antigua y Barbuda</option>
                                <option {{ $p->nationality =="Antillas Holandesas" ? 'selected' : '' }} value="Antillas Holandesas">Antillas Holandesas</option>
                                <option {{ $p->nationality =="Arabia Saud??" ? 'selected' : '' }} value="Arabia Saud??">Arabia Saud??</option>
                                <option {{ $p->nationality =="Argelia" ? 'selected' : '' }} value="Argelia">Argelia</option>
                                <option {{ $p->nationality =="Argentina" ? 'selected' : '' }} value="Argentina">Argentina</option>
                                <option {{ $p->nationality =="Armenia" ? 'selected' : '' }} value="Armenia">Armenia</option>
                                <option {{ $p->nationality =="Aruba" ? 'selected' : '' }} value="Aruba">Aruba</option>
                                <option {{ $p->nationality =="Australia" ? 'selected' : '' }} value="Australia">Australia</option>
                                <option {{ $p->nationality =="Austria" ? 'selected' : '' }} value="Austria">Austria</option>
                                <option {{ $p->nationality =="Azerbaiy??n" ? 'selected' : '' }} value="Azerbaiy??n">Azerbaiy??n</option>
                                <option {{ $p->nationality =="Bahamas" ? 'selected' : '' }} value="Bahamas">Bahamas</option>
                                <option {{ $p->nationality =="Bahrein" ? 'selected' : '' }} value="Bahrein">Bahrein</option>
                                <option {{ $p->nationality =="Bangladesh" ? 'selected' : '' }} value="Bangladesh">Bangladesh</option>
                                <option {{ $p->nationality =="Barbados" ? 'selected' : '' }} value="Barbados">Barbados</option>
                                <option {{ $p->nationality =="B??lgica" ? 'selected' : '' }} value="B??lgica">B??lgica</option>
                                <option {{ $p->nationality =="Belice" ? 'selected' : '' }} value="Belice">Belice</option>
                                <option {{ $p->nationality =="Benin" ? 'selected' : '' }} value="Benin">Benin</option>
                                <option {{ $p->nationality =="Bermudas" ? 'selected' : '' }} value="Bermudas">Bermudas</option>
                                <option {{ $p->nationality =="Bielorrusia" ? 'selected' : '' }} value="Bielorrusia">Bielorrusia</option>
                                <option {{ $p->nationality =="Birmania" ? 'selected' : '' }} value="Birmania">Birmania</option>
                                <option {{ $p->nationality =="Bolivia" ? 'selected' : '' }} value="Bolivia">Bolivia</option>
                                <option {{ $p->nationality =="Bosnia y Herzegovina" ? 'selected' : '' }} value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                                <option {{ $p->nationality =="Botswana" ? 'selected' : '' }} value="Botswana">Botswana</option>
                                <option {{ $p->nationality =="Brasil" ? 'selected' : '' }} value="Brasil">Brasil</option>
                                <option {{ $p->nationality =="Brunei" ? 'selected' : '' }} value="Brunei">Brunei</option>
                                <option {{ $p->nationality =="Bulgaria" ? 'selected' : '' }} value="Bulgaria">Bulgaria</option>
                                <option {{ $p->nationality =="Burkina Faso" ? 'selected' : '' }} value="Burkina Faso">Burkina Faso</option>
                                <option {{ $p->nationality =="Burundi" ? 'selected' : '' }} value="Burundi">Burundi</option>
                                <option {{ $p->nationality =="But??n" ? 'selected' : '' }} value="But??n">But??n</option>
                                <option {{ $p->nationality =="Cabo Verde" ? 'selected' : '' }} value="Cabo Verde">Cabo Verde</option>
                                <option {{ $p->nationality =="Camboya" ? 'selected' : '' }} value="Camboya">Camboya</option>
                                <option {{ $p->nationality =="Camer??n" ? 'selected' : '' }} value="Camer??n">Camer??n</option>
                                <option {{ $p->nationality =="Canad??" ? 'selected' : '' }} value="Canad??">Canad??</option>
                                <option {{ $p->nationality =="Chad" ? 'selected' : '' }} value="Chad">Chad</option>
                                <option {{ $p->nationality =="Chile" ? 'selected' : '' }} value="Chile">Chile</option>
                                <option {{ $p->nationality =="China" ? 'selected' : '' }} value="China">China</option>
                                <option {{ $p->nationality =="Chipre" ? 'selected' : '' }} value="Chipre">Chipre</option>
                                <option {{ $p->nationality =="Colombia" ? 'selected' : '' }} value="Colombia">Colombia</option>
                                <option {{ $p->nationality =="Comores" ? 'selected' : '' }} value="Comores">Comores</option>
                                <option {{ $p->nationality =="Congo" ? 'selected' : '' }} value="Congo">Congo</option>
                                <option {{ $p->nationality =="Corea" ? 'selected' : '' }} value="Corea">Corea</option>
                                <option {{ $p->nationality =="Corea del Norte" ? 'selected' : '' }} value="Corea del Norte">Corea del Norte</option>
                                <option {{ $p->nationality =="Costa de Marf??l" ? 'selected' : '' }} value="Costa de Marf??l">Costa de Marf??l</option>
                                <option {{ $p->nationality =="Costa Rica" ? 'selected' : '' }} value="Costa Rica">Costa Rica</option>
                                <option {{ $p->nationality =="Cuba" ? 'selected' : '' }} value="Cuba">Cuba</option>
                                <option {{ $p->nationality =="Dinamarca" ? 'selected' : '' }} value="Dinamarca">Dinamarca</option>
                                <option {{ $p->nationality =="Djibouti" ? 'selected' : '' }} value="Djibouti">Djibouti</option>
                                <option {{ $p->nationality =="Dominica" ? 'selected' : '' }} value="Dominica">Dominica</option>
                                <option {{ $p->nationality =="Ecuador" ? 'selected' : '' }} value="Ecuador">Ecuador</option>
                                <option {{ $p->nationality =="Egipto" ? 'selected' : '' }} value="Egipto">Egipto</option>
                                <option {{ $p->nationality =="El Salvador" ? 'selected' : '' }} value="El Salvador">El Salvador</option>
                                <option {{ $p->nationality =="Emiratos ??rabes Unidos" ? 'selected' : '' }} value="Emiratos ??rabes Unidos">Emiratos ??rabes Unidos</option>
                                <option {{ $p->nationality =="Eritrea" ? 'selected' : '' }} value="Eritrea">Eritrea</option>
                                <option {{ $p->nationality =="Eslovenia" ? 'selected' : '' }} value="Eslovenia">Eslovenia</option>
                                <option {{ $p->nationality =="Dolares" ? 'selected' : '' }} value="Espa??a">Espa??a</option>
                                <option {{ $p->nationality =="Estados Unidos" ? 'selected' : '' }} value="Estados Unidos">Estados Unidos</option>
                                <option {{ $p->nationality =="Estonia" ? 'selected' : '' }} value="Estonia">Estonia</option>
                                <option {{ $p->nationality =="Etiop??a" ? 'selected' : '' }} value="Etiop??a">Etiop??a</option>
                                <option {{ $p->nationality =="Fiji" ? 'selected' : '' }} value="Fiji">Fiji</option>
                                <option {{ $p->nationality =="Filipinas" ? 'selected' : '' }} value="Filipinas">Filipinas</option>
                                <option {{ $p->nationality =="Finlandia" ? 'selected' : '' }} value="Finlandia">Finlandia</option>
                                <option {{ $p->nationality =="Francia" ? 'selected' : '' }} value="Francia">Francia</option>
                                <option {{ $p->nationality =="Gab??n" ? 'selected' : '' }} value="Gab??n">Gab??n</option>
                                <option {{ $p->nationality =="Gambia" ? 'selected' : '' }} value="Gambia">Gambia</option>
                                <option {{ $p->nationality =="Georgia" ? 'selected' : '' }} value="Georgia">Georgia</option>
                                <option {{ $p->nationality =="Ghana" ? 'selected' : '' }} value="Ghana">Ghana</option>
                                <option {{ $p->nationality =="Gibraltar" ? 'selected' : '' }} value="Gibraltar">Gibraltar</option>
                                <option {{ $p->nationality =="Granada" ? 'selected' : '' }} value="Granada">Granada</option>
                                <option {{ $p->nationality =="Grecia" ? 'selected' : '' }} value="Grecia">Grecia</option>
                                <option {{ $p->nationality =="Groenlandia" ? 'selected' : '' }} value="Groenlandia">Groenlandia</option>
                                <option {{ $p->nationality =="Guadalupe" ? 'selected' : '' }} value="Guadalupe">Guadalupe</option>
                                <option {{ $p->nationality =="Guam" ? 'selected' : '' }} value="Guam">Guam</option>
                                <option {{ $p->nationality =="Guatemala" ? 'selected' : '' }} value="Guatemala">Guatemala</option>
                                <option {{ $p->nationality =="Guayana" ? 'selected' : '' }} value="Guayana">Guayana</option>
                                <option {{ $p->nationality =="Guayana Francesa" ? 'selected' : '' }} value="Guayana Francesa">Guayana Francesa</option>
                                <option {{ $p->nationality =="Guinea" ? 'selected' : '' }} value="Guinea">Guinea</option>
                                <option {{ $p->nationality =="Guinea Ecuatorial" ? 'selected' : '' }} value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                                <option {{ $p->nationality =="Guinea-Bissau" ? 'selected' : '' }} value="Guinea-Bissau">Guinea-Bissau</option>
                                <option {{ $p->nationality =="Hait??" ? 'selected' : '' }} value="Hait??">Hait??</option>
                                <option {{ $p->nationality =="Honduras" ? 'selected' : '' }} value="Honduras">Honduras</option>
                                <option {{ $p->nationality =="Hungr??a" ? 'selected' : '' }} value="Hungr??a">Hungr??a</option>
                                <option {{ $p->nationality =="Israel" ? 'selected' : '' }} value="Israel">Israel</option>
                                <option {{ $p->nationality =="Italia" ? 'selected' : '' }} value="Italia">Italia</option>
                                <option {{ $p->nationality =="Jamaica" ? 'selected' : '' }} value="Jamaica">Jamaica</option>
                                <option {{ $p->nationality =="Jap??n" ? 'selected' : '' }} value="Jap??n">Jap??n</option>
                                <option {{ $p->nationality =="Jordania" ? 'selected' : '' }} value="Jordania">Jordania</option>
                                <option {{ $p->nationality =="Kazajist??n" ? 'selected' : '' }} value="Kazajist??n">Kazajist??n</option>
                                <option {{ $p->nationality =="Kenia" ? 'selected' : '' }} value="Kenia">Kenia</option>
                                <option {{ $p->nationality =="Kirguizist??n" ? 'selected' : '' }} value="Kirguizist??n">Kirguizist??n</option>
                                <option {{ $p->nationality =="Kiribati" ? 'selected' : '' }} value="Kiribati">Kiribati</option>
                                <option {{ $p->nationality =="Kuwait" ? 'selected' : '' }} value="Kuwait">Kuwait</option>
                                <option {{ $p->nationality =="Laos" ? 'selected' : '' }} value="Laos">Laos</option>
                                <option {{ $p->nationality =="Lesotho" ? 'selected' : '' }} value="Lesotho">Lesotho</option>
                                <option {{ $p->nationality =="Letonia" ? 'selected' : '' }} value="Letonia">Letonia</option>
                                <option {{ $p->nationality =="L??bano" ? 'selected' : '' }} value="L??bano">L??bano</option>
                                <option {{ $p->nationality =="Liberia" ? 'selected' : '' }} value="Liberia">Liberia</option>
                                <option {{ $p->nationality =="Libia" ? 'selected' : '' }} value="Libia">Libia</option>
                                <option {{ $p->nationality =="Liechtenstein" ? 'selected' : '' }} value="Liechtenstein">Liechtenstein</option>
                                <option {{ $p->nationality =="Lituania" ? 'selected' : '' }} value="Lituania">Lituania</option>
                                <option {{ $p->nationality =="Luxemburgo" ? 'selected' : '' }} value="Luxemburgo">Luxemburgo</option>
                                <option {{ $p->nationality =="Macedonia, Ex-Rep??blica Yugoslava de" ? 'selected' : '' }} value="Macedonia, Ex-Rep??blica Yugoslava de">Macedonia, Ex-Rep??blica Yugoslava de</option>
                                <option {{ $p->nationality =="Madagascar" ? 'selected' : '' }} value="Madagascar">Madagascar</option>
                                <option {{ $p->nationality =="Malasia" ? 'selected' : '' }} value="Malasia">Malasia</option>
                                <option {{ $p->nationality =="Malawi" ? 'selected' : '' }} value="Malawi">Malawi</option>
                                <option {{ $p->nationality =="Maldivas" ? 'selected' : '' }} value="Maldivas">Maldivas</option>
                                <option {{ $p->nationality =="Mal??" ? 'selected' : '' }} value="Mal??">Mal??</option>
                                <option {{ $p->nationality =="Malta" ? 'selected' : '' }} value="Malta">Malta</option>
                                <option {{ $p->nationality =="Marruecos" ? 'selected' : '' }} value="Marruecos">Marruecos</option>
                                <option {{ $p->nationality =="Martinica" ? 'selected' : '' }} value="Martinica">Martinica</option>
                                <option {{ $p->nationality =="Mauricio" ? 'selected' : '' }} value="Mauricio">Mauricio</option>
                                <option {{ $p->nationality =="Mauritania" ? 'selected' : '' }} value="Mauritania">Mauritania</option>
                                <option {{ $p->nationality =="Mayotte" ? 'selected' : '' }} value="Mayotte">Mayotte</option>
                                <option {{ $p->nationality =="M??xico" ? 'selected' : '' }} value="M??xico">M??xico</option>
                                <option {{ $p->nationality =="Micronesia" ? 'selected' : '' }} value="Micronesia">Micronesia</option>
                                <option {{ $p->nationality =="Moldavia" ? 'selected' : '' }} value="Moldavia">Moldavia</option>
                                <option {{ $p->nationality =="M??naco" ? 'selected' : '' }} value="M??naco">M??naco</option>
                                <option {{ $p->nationality =="Mongolia" ? 'selected' : '' }} value="Mongolia">Mongolia</option>
                                <option {{ $p->nationality =="Montserrat" ? 'selected' : '' }} value="Montserrat">Montserrat</option>
                                <option {{ $p->nationality =="Mozambique" ? 'selected' : '' }} value="Mozambique">Mozambique</option>
                                <option {{ $p->nationality =="Namibia" ? 'selected' : '' }} value="Namibia">Namibia</option>
                                <option {{ $p->nationality =="Nauru" ? 'selected' : '' }} value="Nauru">Nauru</option>
                                <option {{ $p->nationality =="Nepal" ? 'selected' : '' }} value="Nepal">Nepal</option>
                                <option {{ $p->nationality =="Nicaragua" ? 'selected' : '' }} value="Nicaragua">Nicaragua</option>
                                <option {{ $p->nationality =="N??ger" ? 'selected' : '' }} value="N??ger">N??ger</option>
                                <option {{ $p->nationality =="Nigeria" ? 'selected' : '' }} value="Nigeria">Nigeria</option>
                                <option {{ $p->nationality =="Niue" ? 'selected' : '' }} value="Niue">Niue</option>
                                <option {{ $p->nationality =="Norfolk" ? 'selected' : '' }} value="Norfolk">Norfolk</option>
                                <option {{ $p->nationality =="Noruega" ? 'selected' : '' }} value="Noruega">Noruega</option>
                                <option {{ $p->nationality =="Nueva Caledonia" ? 'selected' : '' }} value="Nueva Caledonia">Nueva Caledonia</option>
                                <option {{ $p->nationality =="Nueva Zelanda" ? 'selected' : '' }} value="Nueva Zelanda">Nueva Zelanda</option>
                                <option {{ $p->nationality =="Om??n" ? 'selected' : '' }} value="Om??n">Om??n</option>
                                <option {{ $p->nationality =="Pa??ses Bajos" ? 'selected' : '' }} value="Pa??ses Bajos">Pa??ses Bajos</option>
                                <option {{ $p->nationality =="Panam??" ? 'selected' : '' }} value="Panam??">Panam??</option>
                                <option {{ $p->nationality =="Pap??a Nueva Guinea" ? 'selected' : '' }} value="Pap??a Nueva Guinea">Pap??a Nueva Guinea</option>
                                <option {{ $p->nationality =="Paquist??n" ? 'selected' : '' }} value="Paquist??n">Paquist??n</option>
                                <option {{ $p->nationality =="Paraguay" ? 'selected' : '' }} value="Paraguay">Paraguay</option>
                                <option {{ $p->nationality =="Per??" ? 'selected' : '' }} value="Per??">Per??</option>
                                <option {{ $p->nationality =="Pitcairn" ? 'selected' : '' }} value="Pitcairn">Pitcairn</option>
                                <option {{ $p->nationality =="Polinesia Francesa" ? 'selected' : '' }} value="Polinesia Francesa">Polinesia Francesa</option>
                                <option {{ $p->nationality =="Polonia" ? 'selected' : '' }} value="Polonia">Polonia</option>
                                <option {{ $p->nationality =="Portugal" ? 'selected' : '' }} value="Portugal">Portugal</option>
                                <option {{ $p->nationality =="Puerto Rico" ? 'selected' : '' }} value="Puerto Rico">Puerto Rico</option>
                                <option {{ $p->nationality =="Qatar" ? 'selected' : '' }} value="Qatar">Qatar</option>
                                <option {{ $p->nationality =="Reino Unido" ? 'selected' : '' }} value="Reino Unido">Reino Unido</option>
                                <option {{ $p->nationality =="Rep??blica Centroafricana" ? 'selected' : '' }} value="Rep??blica Centroafricana">Rep??blica Centroafricana</option>
                                <option {{ $p->nationality =="Rep??blica Checa" ? 'selected' : '' }} value="Rep??blica Checa">Rep??blica Checa</option>
                                <option {{ $p->nationality =="Rep??blica de Sud??frica" ? 'selected' : '' }} value="Rep??blica de Sud??frica">Rep??blica de Sud??frica</option>
                                <option {{ $p->nationality =="Rep??blica Dominicana" ? 'selected' : '' }} value="Rep??blica Dominicana">Rep??blica Dominicana</option>
                                <option {{ $p->nationality =="Rep??blica Eslovaca" ? 'selected' : '' }} value="Rep??blica Eslovaca">Rep??blica Eslovaca</option>
                                <option {{ $p->nationality =="Reuni??n" ? 'selected' : '' }} value="Reuni??n">Reuni??n</option>
                                <option {{ $p->nationality =="Ruanda" ? 'selected' : '' }} value="Ruanda">Ruanda</option>
                                <option {{ $p->nationality =="Rumania" ? 'selected' : '' }} value="Rumania">Rumania</option>
                                <option {{ $p->nationality =="Rusia" ? 'selected' : '' }} value="Rusia">Rusia</option>
                                <option {{ $p->nationality =="Sahara Occidental" ? 'selected' : '' }} value="Sahara Occidental">Sahara Occidental</option>
                                <option {{ $p->nationality =="Saint Kitts y Nevis" ? 'selected' : '' }} value="Saint Kitts y Nevis">Saint Kitts y Nevis</option>
                                <option {{ $p->nationality =="Samoa" ? 'selected' : '' }} value="Samoa">Samoa</option>
                                <option {{ $p->nationality =="Samoa Americana" ? 'selected' : '' }} value="Samoa Americana">Samoa Americana</option>
                                <option {{ $p->nationality =="San Marino" ? 'selected' : '' }} value="San Marino">San Marino</option>
                                <option {{ $p->nationality =="San Vicente y Granadinas" ? 'selected' : '' }} value="San Vicente y Granadinas">San Vicente y Granadinas</option>
                                <option {{ $p->nationality =="Santa Helena" ? 'selected' : '' }} value="Santa Helena">Santa Helena</option>
                                <option {{ $p->nationality =="Santa Luc??a" ? 'selected' : '' }} value="Santa Luc??a">Santa Luc??a</option>
                                <option {{ $p->nationality =="Santo Tom?? y Pr??ncipe" ? 'selected' : '' }} value="Santo Tom?? y Pr??ncipe">Santo Tom?? y Pr??ncipe</option>
                                <option {{ $p->nationality =="Senegal" ? 'selected' : '' }} value="Senegal">Senegal</option>
                                <option {{ $p->nationality =="Seychelles" ? 'selected' : '' }} value="Seychelles">Seychelles</option>
                                <option {{ $p->nationality =="Sierra Leona" ? 'selected' : '' }} value="Sierra Leona">Sierra Leona</option>
                                <option {{ $p->nationality =="Singapur" ? 'selected' : '' }} value="Singapur">Singapur</option>
                                <option {{ $p->nationality =="Siria" ? 'selected' : '' }} value="Siria">Siria</option>
                                <option {{ $p->nationality =="Somalia" ? 'selected' : '' }} value="Somalia">Somalia</option>
                                <option {{ $p->nationality =="Sri Lanka" ? 'selected' : '' }} value="Sri Lanka">Sri Lanka</option>
                                <option {{ $p->nationality =="St Pierre y Miquelon" ? 'selected' : '' }} value="St Pierre y Miquelon">St Pierre y Miquelon</option>
                                <option {{ $p->nationality =="Suazilandia" ? 'selected' : '' }} value="Suazilandia">Suazilandia</option>
                                <option {{ $p->nationality =="Sud??n" ? 'selected' : '' }} value="Sud??n">Sud??n</option>
                                <option {{ $p->nationality =="Suecia" ? 'selected' : '' }} value="Suecia">Suecia</option>
                                <option {{ $p->nationality =="Suiza" ? 'selected' : '' }} value="Suiza">Suiza</option>
                                <option {{ $p->nationality =="Surinam" ? 'selected' : '' }} value="Surinam">Surinam</option>
                                <option {{ $p->nationality =="Tailandia" ? 'selected' : '' }} value="Tailandia">Tailandia</option>
                                <option {{ $p->nationality =="Taiw??n" ? 'selected' : '' }} value="Taiw??n">Taiw??n</option>
                                <option {{ $p->nationality =="Tanzania" ? 'selected' : '' }} value="Tanzania">Tanzania</option>
                                <option {{ $p->nationality =="Tayikist??n" ? 'selected' : '' }} value="Tayikist??n">Tayikist??n</option>
                                <option {{ $p->nationality =="Territorios franceses del Sur" ? 'selected' : '' }} value="Territorios franceses del Sur">Territorios franceses del Sur</option>
                                <option {{ $p->nationality =="Timor Oriental" ? 'selected' : '' }} value="Timor Oriental">Timor Oriental</option>
                                <option {{ $p->nationality =="Togo" ? 'selected' : '' }} value="Togo">Togo</option>
                                <option {{ $p->nationality =="Tonga" ? 'selected' : '' }} value="Tonga">Tonga</option>
                                <option {{ $p->nationality =="Trinidad y Tobago" ? 'selected' : '' }} value="Trinidad y Tobago">Trinidad y Tobago</option>
                                <option {{ $p->nationality =="T??nez" ? 'selected' : '' }} value="T??nez">T??nez</option>
                                <option {{ $p->nationality =="Turkmenist??n" ? 'selected' : '' }} value="Turkmenist??n">Turkmenist??n</option>
                                <option {{ $p->nationality =="Turqu??a" ? 'selected' : '' }} value="Turqu??a">Turqu??a</option>
                                <option {{ $p->nationality =="Tuvalu" ? 'selected' : '' }} value="Tuvalu">Tuvalu</option>
                                <option {{ $p->nationality =="Ucrania" ? 'selected' : '' }} value="Ucrania">Ucrania</option>
                                <option {{ $p->nationality =="Uganda" ? 'selected' : '' }} value="Uganda">Uganda</option>
                                <option {{ $p->nationality =="Uruguay" ? 'selected' : '' }} value="Uruguay">Uruguay</option>
                                <option {{ $p->nationality =="Uzbekist??n" ? 'selected' : '' }} value="Uzbekist??n">Uzbekist??n</option>
                                <option {{ $p->nationality =="Vanuatu" ? 'selected' : '' }} value="Vanuatu">Vanuatu</option>
                                <option {{ $p->nationality =="Venezuela" ? 'selected' : '' }} value="Venezuela">Venezuela</option>
                                <option {{ $p->nationality =="Vietnam" ? 'selected' : '' }} value="Vietnam">Vietnam</option>
                                <option {{ $p->nationality =="Yemen" ? 'selected' : '' }} value="Yemen">Yemen</option>
                                <option {{ $p->nationality =="Yugoslavia" ? 'selected' : '' }} value="Yugoslavia">Yugoslavia</option>
                                <option {{ $p->nationality =="Zambia" ? 'selected' : '' }} value="Zambia">Zambia</option>
                                <option {{ $p->nationality =="Zimbabue" ? 'selected' : '' }} value="Zimbabue">Zimbabue</option>
                            </select>
                        </div>
                        <div>
                            <select name="se1[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                                 <option {{ $p->sex =="M" ? 'selected' : '' }} value="M">M</option>
                                 <option {{ $p->sex =="F" ? 'selected' : '' }} value="F">F</option> 
                                </select>
                        </div>
                        <div>
                            <input type="date" name="fe1[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" value="{{ $p->birth_date }}">
                        </div>
                    <div class="hidden"><button class="add-more bg-blue-500 hover:bg-blue-700 text-white font-bold py-1.5 px-4 rounded w-full">Agregar Pax</button></div>
              </div>
            </div>

            
           @endforeach
                <h2 class="bg-teal-500 p-2 my-5 text-center text-white">Detalles del Servicio</h2>
                <div>
                    <textarea rows="10" name="detalle" id="detalle" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">{{ $voucher->Message }}</textarea>
                </div>
                <br>
                <button type="submit" class="text-white bg-sky-500 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Actualizar Voucher</button>
            </form>
        </div>
        
        
@endsection

@section('scripts')

<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

<style>
    .ck-editor__editable {
    min-height: 200px !important;
}
.ck-editor__editable ul
{
    list-style-type: disc;
    list-style-position: inside;
}
.ck-editor__editable ol
{
    list-style-type: decimal;
    list-style-position: inside;
}
</style>
<script>
    ClassicEditor
        .create( document.querySelector( '#detalle' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


@endsection