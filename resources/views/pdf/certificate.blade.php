<!DOCTYPE html>
<html>
<head>
    <title>Certifica de adopción de {{$request->pets->name}}

    </title>
   <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.0.1/dist/tailwind.min.css">
   <style>
    @page { margin: 0px; }
body {
}
   </style>
</head>

<body style="padding:0em 8em;background:#fdfdfd;">
    <img src="img/dc-light.png" style="margin-top: 3em;margin-bottom:1.5em;" width="60" height="60" alt="">
    <h1 class="text-5xl bg-red-700" style>Certificado de Adopción</h1>

    <div style="padding:2em 0em;text-align:center;">
        <p class="text-3xl font-bold">{{$request->orgs->name}}</p>
        <p class="text-3xl">Otorga el reconocimiento a:</p>
        <h1 class="text-6xl my-8 font-bold" style="color:#3b187c;">{{$request->users->name}}</h1>
        <p style="text-align:left;" class="text-xl">Por la presente certificamos que {{$request->users->name}} ha adoptado legalmente a {{$request->pets->name}} como su mascota. Esta adopción ha sido reconocida y aprobada por Radi Pets.</p>
        <p class="my-4">Guadalajara, Jalisco. {{ Carbon\Carbon::now()->isoFormat('D \d\e MMMM \d\e\l Y');}}</p>

        <table style="width: 100%;">
            <tr>
              <th>
                  <img style="width: 7em;height:7em;border-bottom: 1px solid black;" src="{{$request->orgs->sign}}"   alt="firma"></th>
            </th>
              <th >
                  <img style="width: 7em;height:7em;border-bottom: 1px solid black;" src="img/luis-sign.png" alt="firma luis rojas"></th>
                <div >

                </div>
              <th></th>
            </tr>
            <tr class="text-center">
              <td style="font-weight: bold;">{{$request->orgs->person_name}}</td>
              <td style="font-weight: bold;">Luis Rojas</td>
              <td> </td>
            </tr>
            <tr class="text-center">
              <td style="color:#3b187c;">Encargado del albergue</td>
              <td style="color:#3b187c;">Fundador de Radi Pets</td>
              <td></td>
            </tr>
          </table>
          <p style="margin-top:1em;">
            Código de validación<br> <span style="font-weight: bold;">{{$request->setHiddenId()}}</span></p>

    </div>

    <div >
        <div style="margin-top:5em;padding:1em;">
            <p style="margin-top:3em;">
                Para checar el código de validación puedes escanear el siguiente código QR.
            </p>
            <img style="margin-top:3em;" src="data:image/png;base64, {!! base64_encode(QrCode::size(200)->style('dot')->eye('circle')->color(59,22,135)->generate('https://radi.pet/validate_pet/'.$request->setHiddenId())) !!} ">

            <p style="margin-top:3em;">o ingresa a https://www.radi.pet/validate_pet/{{$request->setHiddenId()}}</p>
            <img src="img/dc-light.png" style="margin-top: 3em;margin-bottom:1.5em;" width="60" height="60" alt="">
            <h2 style="color:#37147d;font-bold;">Radi Pets</h2>
            <p>Adopta, no compres.</p>
        </div>
    </div>
</body>
</html>
