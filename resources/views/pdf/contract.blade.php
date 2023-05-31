
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato de Adopción</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.0.1/dist/tailwind.min.css">
        <style>
            .main-color{
                color:#3b187c;
            }

            .capital:first-letter {text-transform: uppercase}

        </style>
</head>
<body style="margin:4em;">
   <h2 style="text-align: left!important;" class="text-3xl">CONTRATO DE DONACIÓN DE ANIMAL PARA COMPAÑÍA </h2>
   <span style="text-align: left !important;" class="font-semibold capital">{{ Carbon\Carbon::parse($request->finish_date)->isoFormat('dddd D \d\e MMMM \d\e\l Y');}}</span>
   <p class="text-3xl font-bold main-color mt-52">Datos del albergue</p>
   <div class="row">
       <div class="col-xs-6">
        <p class="font-bold mt-4">Nombre</p>
        <span class="main-color text-xl ">{{$request->orgs->name}}</span>
        <p class="font-bold mt-4">Teléfono</p>
        <span class="main-color text-xl " >{{$request->orgs->cellphone}}</span>
       </div>
       <div class="col-xs-6">
        <p class="font-bold mt-4">Correo electrónico  </p>
        <span class="main-color text-xl ">{{$request->orgs->email}}</span>
    </div>
   </div>


   <p class="text-3xl font-bold mt-4 main-color mt-12">Datos de la mascota</p>
   <div class="row">

    <div class="col-xs-4">
        <p class="font-bold mt-4">Nombre</p>
        <span class="main-color text-xl ">{{$request->pets->name}}</span>

    </div>
    <div class="col-xs-4">
        <p class="font-bold mt-4">F.nacimiento</p>
        <span class="main-color text-xl "> {{ date('d/M/Y', strtotime($request->pets->birthday))  }} </span>
        {{-- <p class="font-bold mt-4">Raza</p>
        <span class="main-color text-xl ">Criollo</span> --}}
    </div>
    <div class="col-xs-4">
        <p class="font-bold mt-4">Tamaño</p>

        @if($request->pets->size == 'mn')
            <span class="main-color text-xl ">Mini</span>
        @elseif($request->pets->size == 'sm')
            <span class="main-color text-xl ">Pequeño</span>
        @elseif($request->pets->size == 'md')
            <span class="main-color text-xl ">Mediano</span>
        @elseif($request->pets->size == 'lg')
            <span class="main-color text-xl ">Grande</span>
        @elseif($request->pets->size == 'xl')
            <span class="main-color text-xl ">Extra grande</span>
        @endif

    </div>
</div>

<p class="text-3xl font-bold main-color mt-16">Datos del donatario</p>
<div class="row" >

<div class="col-xs-6">
    <p class="font-bold mt-4">Nombre</p>
    <span class="main-color text-xl ">{{$request->users->name}}</span>
    <p class="font-bold mt-4">Correo electrónico</p>
    <span class="main-color text-xl ">{{$request->users->email}}</span>
    <p class="font-bold mt-4">Domiclio</p>
    <span class="main-color text-xl ">{{$request->address?$request->address:'N/A'}}</span>
</div>
<div class="col-xs-6">
    <p class="font-bold mt-4">Teléfono</p>
    <span class="main-color text-xl ">{{$request->users->cellphone}}</span>
    <p class="font-bold mt-4">Identificacíon</p>
    <span class="main-color text-xl ">{{$request->users->identification}}</span>

</div>
</div>
<p class="text-2xl mb-4 main-color"  style="margin-top: 2.5em;">DONATARIO DECLARA</p>
<div  >
    <p>Que está conforme con las condiciones expresadas en las cláusulas indicadas en la parte inferior del presente contrato de donación.</p><br>
    <p>Que las personas residentes en su domicilio, lugar donde residirá el animal donado, están informadas previamente de su deseo de aceptar la donación y todos están de acuerdo en colaborar y cumplir las condiciones del presente contrato.</p><br>
    <p>Que ha sido previamente informado del estado de salud del animal, de su edad, carácter, y características físicas por parte del donante del animal.</p><br>
    <p>Tener conocimiento que el o los animales objeto del presente contrato sufrieron algún tipo de maltrato físico o psicológico que pueden haber dejado secuelas, y por ende, pueden desplegar ciertos problemas de actitud.</p><br>
    <p>El donatario cuyos datos figuran en la parte superior de este documento acepta las siguientes cláusulas del presente contrato de donación al tenor de los artículos 1 y 133 de la Constitución Política de los Estados Unidos Mexicanos, diversos artículos de la Ley para la Celebración de Tratados Internacionales, artículos 1, 2, 3, 6, 11 y 14 de la Declaración Universal de los Derechos de los Animales, artículos 12, 774- 874, 1161, 2332, 2334, 2335, 2336, 2337, 2340, 2341, 2342, 2343, 2344 y demás aplicables del Código Civil Federal; artículos 79, fracción VIII y 87 – Bis-2 de la Ley General de Equilibrio Ecológico y Protección al Medio Ambiente; artículos 801, 822, 823, 1914, 1916, 1917, 1918, 1919, 1920, 1921, 1922, 1924, 1925, 1926, 1927 y demás aplicables del Código Civil para el Estado de Jalisco; artículos 305, 306, 307 y 308 del Código Penal del Estado Libre y Soberano de Jalisco, la Ley de Protección a los Animales del Estado de Jalisco; y demás disposiciones legales aplicables.</p><br>
</div>
    <p class="text-2xl mb-4 main-color" style="margin-top: 2.5em;">CLÁUSULAS</p>
    <div >

    <p><strong style="font-weight: bold !important; ">PRIMERA</strong>.- El presente contrato de <b>DONACIÓN</b>  tiene por objeto <b>DONAR</b>  a un animal rescatado de una situación de calle y/o maltrato físico y/o psicológico; entrega voluntaria de anteriores dueños. La <b>DONACIÓN</b> será onerosa, toda vez que el donatario al aceptar la donación entregará al donante una aportación no mayor a lo estipulado en la Ley de Ingresos vigente del Municipio en donde se realiza la <b>DONACIÓN</b>, misma que será utilizada para la manutención de otros animales rescatados; en el mismo tenor de ideas, la donación será condicionada durante un plazo de 6 meses en los cuales se verificará que el <b>DONATARIO</b>  cumpla con todas y cada una de las cláusulas estipuladas a continuación; de lo contrario, se procederá al retiro del <b>ANIMAL DONADO</b>, a la terminación del presente contrato por incumplimiento de cláusulas suspensivas y por lo tanto a la rescisión voluntaria del presente contrato de <b>DONACIÓN</b>. En caso de que no exista una cuota asignada en la Ley de Ingresos vigente del Municipio en donde se realiza la <b>DONACIÓN </b> está podrá ser determinada por el <b>PROGRAMA DE TENENCIA RESPONSABLE</b>  y no deberá tener fines de lucro.</p>
    <p><br><b>SEGUNDA</b>.- El <b>DONATARIO</b> , en pleno uso de sus derechos legales, acepta el <b>ANIMAL DONADO</b>  se compromete a mantener al animal en las condiciones óptimas para su bienestar físico, psicológico y emocional; así como a cumplir la normativa vigente en lo que a protección animal se refiere. Se compromete a ofrecer los cuidados que necesite el <b>ANIMAL DONADO</b> de acuerdo al <b>Manual de Cuidados</b>  entregado durante la vida completa del animal. El <b>DONATARIO</b> se compromete a proveer una placa de identificación de manera inmediata en el caso de los perros.De igual manera, el <b>DONATARIO</b> se obliga a no dejar amarrado o abandonado en azoteas, patios, cocheras o baños al <b>ANIMAL DONADO</b>; a no maltratar de ninguna forma física o psicológica al <b>ANIMAL DONADO</b>; en caso de desear entrenar al <b>ANIMAL DONADO</b> se obliga a buscar un entrenador certificado que solamente utilice como método de entrenamiento el “Refuerzo Positivo”, en ningún caso se empleen, gritos, castigos, maltratos físicos ni psicológicos de ningún tipo y notificarlo al <b>DONANTE</b> 10 días antes de iniciar este entrenamiento; a notificar de inmediato el extravió o robo del <b>ANIMAL DONADO</b>.</p>
    <p><br><b>TERCERA</b>.- El <b>DONATARIO</b> se compromete en el caso de no estar conforme con la <b>DONACIÓN</b>  o a su incapacidad o situación que se presentara para seguir cumpliendo con las obligaciones antes señaladas a fin de proceder a la devolución del <b>ANIMAL DONADO</b> . Por ningún motivo podrá <u>regalar, vender, ceder,</u>  abandonar en la calle o centro antirrábico, o dar en adopción al <b>ANIMAL DONADO</b>  sin que el/la donante lo consienta expresamente por escrito. Si el <b>DONATARIO</b>  esperar a la reubicación del animal, este debe volver en custodia al <b>DONANTE</b> . Así mismo, el <b>DONANTE</b>  se compromete a retirar de forma inmediata al <b> ANIMAL DONADO</b>, poniéndolo a salvo de cualquier situación que pudiese comprometer su integridad o bienestar físico o emocional, con el objeto de reintroducirlo al Programa de Adopción.</p>
    <p><br><b>CUARTA</b>.-  Si el animal se entregara sin esterilizar, es obligatorio y correrá por cuenta del <b>DONATARIO</b>  los gastos de esterilización del mismo, en cuanto el <b>ANIMAL DONADO</b>  cumpla los cinco meses de edad. Bajo ningún concepto, se podrá utilizar al <b>ANIMAL DONADO</b>  como pie de cría, ni se le utilizará para ningún tipo de reproducción particular o con fines lucrativos.</p>
    <p><br><b>QUINTA</b>.- El <b>DONATARIO</b> consiente estar de acuerdo y facilitará las visitas de seguimiento que se le realicen por parte del <b>DONANTE</b> durante un periodo de seis meses, a fin de verificar si el estado general de salud física, psíquica y emocional del <b>ANIMAL DONADO</b>  es la adecuada y acordada en el presente contrato.En caso de que el <b>DONATARIO</b> cambie de domicilio deberá garantizar que el animal donado tendrá las condiciones dignas de habitabilidad; y deberá de notificar al <b>DONANTE</b> de dicho cambio con dos semanas de anticipación a fin de que el donante esté en condiciones de verificar las condiciones en las que habitará el animal donado. En caso de que el nuevo domicilio no cumpla con las condiciones indispensables que garanticen el adecuado estado físico y psicológico del animal donado, éste será retirado.El <b>DONATARIO</b> , también deberá notificar al <b>DONANTE</b>  cualquier cambio de número telefónico, dirección electrónica, con la finalidad de que siempre pueda ser localizable para el <b>DONANTE</b></p>
    <!-- no tienen negritas -->
    <p><br><b>SEXTA</b>.- El/la DONANTE del animal se reserva el derecho de retirar el ANIMAL DONADO al DONATARIO si lo considera oportuno por estimar que éste último ha incumplido con las obligaciones que ha contraído en el presente instrumento legal; o bien por detectar que el ANIMAL DONADO no está adecuadamente atendido, o se encuentra en condiciones de insalubridad notoria,  maltrato, abandono o por simple incapacidad de brindarle la atención adecuada de acuerdo a su especie, tamaño o raza. </p>
    <p><br><b>SEPTIMA</b>.- El/la DONANTE del animal queda libre de cualquier responsabilidad civil o penal que se pueda derivar del comportamiento del ANIMAL DONADO en el futuro a partir del día {{ Carbon\Carbon::parse($request->finish_date)->isoFormat('dddd D \d\e MMMM \d\e\l Y');}}</p>
    <p><br><b>OCTAVA</b>.-  El animal donado se entrega en buen estado de salud física y psíquica, con su cartilla de vacunación y desparasitación obligatoria por la normativa vigente dentro del PROGRAMA DE TENENCIA RESPONSABLE de acuerdo con la legislación vigente</p>
    <p><br><b>NOVENA</b>.- Si no se cumple con el requisito obligatorio de la esterilización, el/la DONANTE procederá a retirar al ANIMAL DONADO y éste será entregado de buen grado por parte del DONATARIO, sin dañar su integridad física, ni psíquica. En el caso de que el DONATARIO no consienta en esta retirada, serán por cuenta del mismo la totalidad de los gastos y costas judiciales para la resolución del contrato de donación y devolución del animal donado. En caso de ser necesario de solicitará por parte del DONANTE el auxilio de la fuerza pública</p>
    <p><br><b>DECIMA</b>.- Serán causas de rescisión del presente contrato de donación:</p>
    <p>
        <br> 1.- Cualquier acto que realicen las partes en contravención a las cláusulas establecidas, antes señaladas y pactadas, así como los casos que señala la legislación civil en la materia. <br>
        <br> 2.- La muerte del ANIMAL DONADO <br>
        <br> 3.- La entregavoluntaria del ANIMAL DONADO del DONATARIO al DONANTE <br>
        <br> 4.-  El retiro necesario del ANIMAL DONADO que haga el DONANTE por las causas señaladas en el apartado de Cláusulas. <br>
        <br> 5.- Los supuestos señalados en la Cláusula Tercera del presente contrato. <br>
       <br>  6.- Cualquier obligación contraída e incumplida por parte del DONANTE, en los términos del presente contrato, ya que deberán entenderse como condiciones suspensivas para la subsistencia del presente contrato de DONACIÓN. <br>
    </p>
    <p><br><b> DECIMO SEGUNDA</b>.- Para la resolución de cualquier conflicto legal que pudiera surgir con motivo de la interpretación o incumplimiento de las anteriores cláusulas y salvo previo acuerdo de las partes, deberán atenerse en primera instancia a una decisión arbitral.
    Para la resolución de cualquier conflicto legal que pudiera surgir con motivo de la interpretación o incumplimiento de las anteriores cláusulas y salvo previo acuerdo de las partes, se someterán a la jurisdicción territorial de las autoridades judiciales competentes en ciudad de Guadalajara; Jalisco. Renunciando desde el momento de la firma del presente documento al fuero o jurisdicción que pudiera corresponderles en razón de su domicilio presente o futuro.</p>
    <p><br><b> DECIMO TERCERA</b>.- El presente contrato entrará en vigor en la fecha de su firma y las partes declaran que no existe, dolo, presión o mala fe; y que habiéndolo leído expresan su conformidad con lo pactado en el mismo, y por consiguiente cualquier otro convenio, contrato o arreglo en forma verbal o escrita que se haya elaborado o que tácticamente pudiera implicarse, queda desde ahora sin efecto. Las posteriores modificaciones que se hagan a éste documento, deberán ser pactadas por ambas partes y serán por escrito y firmadas por los interesados.</p>

    <table style="width: 100%;margin-top:10em;">
        <tr>
          <th>
              <img style="width: 7em;height:7em;border-bottom: 1px solid black;" src="{{$request->orgs->sign}}"   alt="firma albergue"></th>
        </th>
          <th >
              <img style="width: 7em;height:7em;border-bottom: 1px solid black;" src="{{$request->sign}}" alt="firma persona"></th>
          <th></th>
        </tr>
        <tr class="text-center">
            <td style="font-weight: bold;">{{$request->orgs->person_name}}</td>
          <td style="font-weight: bold;">{{$request->users->name}}</td>
          <td> </td>
        </tr>
        <tr class="text-center">
            <td style="color:#3b187c;">Encargado del albergue</td>
            <td style="color:#3b187c;">Donante</td>
          <td></td>
        </tr>
      </table>

    <div class="container-fluid">

    </div>
</div>

</body>
