@extends('layouts.app2')

@section('title', 'Crear Voucher')

@section('content')

{{ $voucher }}

        <div class="container max-w-7xl mx-auto border border-gray-200 p-3 my-5 relative">
            <h1 class="text-center font-bold text-gray-700 text-3xl">ACTUALIZAR VOUCHER 2022</h1>
            <span class="absolute left-0 top-2"><a href="{{ route('voucher.index') }}" class="border-white rounded-lg p-2 border bg-sky-600 text-white hover:bg-sky-700">Regresar Inicio</a></span>

            <form action="#" method="POST">
                @csrf

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
                            <option value="Español" {{ $voucher->language =="Español" ? 'selected' : '' }}>Español</option>
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
                <div class="grid gap-6 lg:grid-cols-7">
                    <div><span class="block mb-2 text-sm font-medium text-gray-900">Nombre</span></div>
                    <div><span class="block mb-2 text-sm font-medium text-gray-900">Apellidos</span></div>
                    <div><span class="block mb-2 text-sm font-medium text-gray-900">N° Pasaporte / DNI</span></div>
                    <div><span class="block mb-2 text-sm font-medium text-gray-900">Nacionalidad</span></div>
                    <div><span class="block mb-2 text-sm font-medium text-gray-900">Sexo</span></div>
                    <div><span class="block mb-2 text-sm font-medium text-gray-900">Fecha de Nacimiento</span></div>
                    
                </div>

                
                <div id="field">
                    <div class="grid gap-6 mb-6 lg:grid-cols-7">
                        <div><input type="text" name="no1[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"></div>
                        <div><input type="text" name="ap1[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"></div>
                        <div><input type="text" name="pa1[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"></div>
                        <div>
                            <select name="na1[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                                <option value="Afganistán">Afganistán</option>
                                <option value="Albania">Albania</option>
                                <option value="Alemania">Alemania</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antártida">Antártida</option>
                                <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                                <option value="Antillas Holandesas">Antillas Holandesas</option>
                                <option value="Arabia Saudí">Arabia Saudí</option>
                                <option value="Argelia">Argelia</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaiyán">Azerbaiyán</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrein">Bahrein</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Bélgica">Bélgica</option>
                                <option value="Belice">Belice</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermudas">Bermudas</option>
                                <option value="Bielorrusia">Bielorrusia</option>
                                <option value="Birmania">Birmania</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brasil">Brasil</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Bután">Bután</option>
                                <option value="Cabo Verde">Cabo Verde</option>
                                <option value="Camboya">Camboya</option>
                                <option value="Camerún">Camerún</option>
                                <option value="Canadá">Canadá</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Chipre">Chipre</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comores">Comores</option>
                                <option value="Congo">Congo</option>
                                <option value="Corea">Corea</option>
                                <option value="Corea del Norte">Corea del Norte</option>
                                <option value="Costa de Marfíl">Costa de Marfíl</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Dinamarca">Dinamarca</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egipto">Egipto</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Eslovenia">Eslovenia</option>
                                <option value="España" selected>España</option>
                                <option value="Estados Unidos">Estados Unidos</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Etiopía">Etiopía</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Filipinas">Filipinas</option>
                                <option value="Finlandia">Finlandia</option>
                                <option value="Francia">Francia</option>
                                <option value="Gabón">Gabón</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Granada">Granada</option>
                                <option value="Grecia">Grecia</option>
                                <option value="Groenlandia">Groenlandia</option>
                                <option value="Guadalupe">Guadalupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guayana">Guayana</option>
                                <option value="Guayana Francesa">Guayana Francesa</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Haití">Haití</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hungría">Hungría</option>
                                <option value="Israel">Israel</option>
                                <option value="Italia">Italia</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japón">Japón</option>
                                <option value="Jordania">Jordania</option>
                                <option value="Kazajistán">Kazajistán</option>
                                <option value="Kenia">Kenia</option>
                                <option value="Kirguizistán">Kirguizistán</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Laos">Laos</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Letonia">Letonia</option>
                                <option value="Líbano">Líbano</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libia">Libia</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lituania">Lituania</option>
                                <option value="Luxemburgo">Luxemburgo</option>
                                <option value="Macedonia, Ex-República Yugoslava de">Macedonia, Ex-República Yugoslava de</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malasia">Malasia</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Maldivas">Maldivas</option>
                                <option value="Malí">Malí</option>
                                <option value="Malta">Malta</option>
                                <option value="Marruecos">Marruecos</option>
                                <option value="Martinica">Martinica</option>
                                <option value="Mauricio">Mauricio</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="México">México</option>
                                <option value="Micronesia">Micronesia</option>
                                <option value="Moldavia">Moldavia</option>
                                <option value="Mónaco">Mónaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Níger">Níger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk">Norfolk</option>
                                <option value="Noruega">Noruega</option>
                                <option value="Nueva Caledonia">Nueva Caledonia</option>
                                <option value="Nueva Zelanda">Nueva Zelanda</option>
                                <option value="Omán">Omán</option>
                                <option value="Países Bajos">Países Bajos</option>
                                <option value="Panamá">Panamá</option>
                                <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
                                <option value="Paquistán">Paquistán</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Perú">Perú</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Polinesia Francesa">Polinesia Francesa</option>
                                <option value="Polonia">Polonia</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reino Unido">Reino Unido</option>
                                <option value="República Centroafricana">República Centroafricana</option>
                                <option value="República Checa">República Checa</option>
                                <option value="República de Sudáfrica">República de Sudáfrica</option>
                                <option value="República Dominicana">República Dominicana</option>
                                <option value="República Eslovaca">República Eslovaca</option>
                                <option value="Reunión">Reunión</option>
                                <option value="Ruanda">Ruanda</option>
                                <option value="Rumania">Rumania</option>
                                <option value="Rusia">Rusia</option>
                                <option value="Sahara Occidental">Sahara Occidental</option>
                                <option value="Saint Kitts y Nevis">Saint Kitts y Nevis</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa Americana">Samoa Americana</option>
                                <option value="San Marino">San Marino</option>
                                <option value="San Vicente y Granadinas">San Vicente y Granadinas</option>
                                <option value="Santa Helena">Santa Helena</option>
                                <option value="Santa Lucía">Santa Lucía</option>
                                <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leona">Sierra Leona</option>
                                <option value="Singapur">Singapur</option>
                                <option value="Siria">Siria</option>
                                <option value="Somalia">Somalia</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="St Pierre y Miquelon">St Pierre y Miquelon</option>
                                <option value="Suazilandia">Suazilandia</option>
                                <option value="Sudán">Sudán</option>
                                <option value="Suecia">Suecia</option>
                                <option value="Suiza">Suiza</option>
                                <option value="Surinam">Surinam</option>
                                <option value="Tailandia">Tailandia</option>
                                <option value="Taiwán">Taiwán</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Tayikistán">Tayikistán</option>
                                <option value="Territorios franceses del Sur">Territorios franceses del Sur</option>
                                <option value="Timor Oriental">Timor Oriental</option>
                                <option value="Togo">Togo</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                                <option value="Túnez">Túnez</option>
                                <option value="Turkmenistán">Turkmenistán</option>
                                <option value="Turquía">Turquía</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Ucrania">Ucrania</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistán">Uzbekistán</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Yugoslavia">Yugoslavia</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabue">Zimbabue</option>
                            </select>
                        </div>
                        <div><select name="se1[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"> <option value="M">M</option><option value="F">F</option> </select></div>
                        <div><input type="date" name="fe1[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"></div>
                    <div><button class="add-more bg-blue-500 hover:bg-blue-700 text-white font-bold py-1.5 px-4 rounded w-full">Agregar Pax</button></div>
              </div>
            </div>
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