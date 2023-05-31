<x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

    <div class="grid  grid-cols-12 gap-4 p-2">
        <div class="col-span-6 col-start-4">
            <img src="{{Auth::user()->sign}}" alt="imagen">
        </div>
    </div>

    <h2 class="text-center text-2xl mt-6 dark:text-white">Firma del solicitante</h2>
    <p class="px-2 text-center dark:text-white">Esta firma se mostrará en el contrato de adopción y en el certificado de adopción.</p>

    <div class="grid  grid-cols-12 gap-4 p-2">
        <div class="col-span-12 md:col-span-4 md:col-start-4 lg:ml-40">
            <div class="wrapper pl-4 ml-4" >
                <canvas id="signature-pad" class="signature-pad" width="350" height="200"></canvas>
                </div>
        </div>
    </div>
    <div class="grid grid-cols-12">
        <div class="col-span-6  md:col-start-4   lg:ml-40   md:col-span-3">
            <button class="w-full px-2 py-2 mt-2 text-red-800" id="clear">Limpiar</button>
        </div>
        <div class="col-span-4 md:col-span-2">
            {!! Form::open(['route' => ['profile.storeSign',["id" => Auth::user()->id]]], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}
                <input type="hidden" id="sign" name="sign">
                <button type="submit" id="save-png"  class="w-1/2 px-2 py-2 rounded-lg bg-green-800 mt-2 text-white">Enviar Firma</button>
            {!! Form::close() !!}
        </div>
    </div>
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

<script>
  var canvas = document.getElementById('signature-pad');

function resizeCanvas() {
    var ratio =  Math.max(window.devicePixelRatio || 1, 1);
    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    canvas.getContext("2d").scale(ratio, ratio);
}

window.onresize = resizeCanvas;
resizeCanvas();

var signaturePad = new SignaturePad(canvas, {
    penColor : 'rgb(14, 65, 150)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
});

document.getElementById('save-png').addEventListener('click', function () {
  var data = signaturePad.toDataURL('image/png');
    document.getElementById("sign").value = data;
});


document.getElementById('clear').addEventListener('click', function () {
  signaturePad.clear();
});

</script>

<style>
    .wrapper {
  position: relative;
  width: 350;
  height: 200px;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.signature-pad {
  position: absolute;
  left: 0;
  top: 0;
  width:350px;
  height:200px;
  border: 2px dotted #CCCCCC;
border-radius: 15px;
cursor: crosshair;
}
</style>
