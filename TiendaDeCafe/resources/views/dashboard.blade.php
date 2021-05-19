<x-app-layout>
    <x-slot name="header">
      <!--<img src="fondo.jpg" alt="fondo" style="background: -image">
      <div class="grid-block" style="background-image: url('fondo.jpg'); background-repeat: no-repeat;">-->
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            <!--{{ __('Dashboard') }}-->
            {{ __('Kaffa Specialty Coffe') }}
        </h2>
        <!--</div>-->
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!--<x-jet-welcome />-->
                <div class="grid-block" style="background-image: url('cafe2.jpg'); /*width: 100%; height: 100%; */background-repeat: no-repeat;"><span>
                <h1><font face = "WildWest" size = "6">LOS MEJORES SABORES DEL MUNDO</font></h1>
                <p style="font-family: WildWest;color:#636466;font-size:26px;">Cada café es una experiencia personal e inigualable.  Kaffa se complace en invitarlo a que se deleite con las selecciones únicas de los mejores cafés del mundo..<br>Conozca el café hecho especialmente para usted</p>
               <!--<img src="cafe2.jpg" alt="cafe2" width="360" height="245">--></span>
               </div>
               </div>
           </div>
    </div>
</x-app-layout>
