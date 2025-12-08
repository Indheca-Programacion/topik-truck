@extends('layouts.app')

@section('title', 'Dashboard | Topick Trucks')

@section('content')
<div class="rounded-2xl bg-base-100 p-8 shadow-lg border border-base-200/60 flex gap-8 max-xl:flex-col transition-all duration-200">

    <!-- Columna 1 -->
    <div class="flex flex-1 gap-8 max-md:flex-col">

        <!-- Maquinarias -->
        <div class="flex flex-1 flex-col gap-3">
            <div class="flex items-center gap-3 text-base-content">
                <div class="avatar">
                    <div class="  ">
                         <svg xmlns="http://www.w3.org/2000/svg" height="42" width="42" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#DC3545" d="M192 160L192 256L325.4 256L267.8 160L192 160zM128 287L128 128C128 110.3 142.3 96 160 96L267.8 96C290.3 96 311.1 107.8 322.7 127.1L400.1 256L464.1 256L464.1 184C464.1 170.7 474.8 160 488.1 160C501.4 160 512.1 170.7 512.1 184L512.1 256L560.1 256C586.6 256 608.1 277.5 608.1 304L608.1 345.5C608.1 359.7 601.8 373.3 590.8 382.4L555.8 411.6C582.3 426.8 600.1 455.3 600.1 488C600.1 536.6 560.7 576 512.1 576C463.5 576 424.1 536.6 424.1 488C424.1 473.6 427.6 460 433.7 448L332.5 448C329.5 461.4 324.6 474 318.1 485.7C325.8 495.1 325.3 509.1 316.5 517.9L293.9 540.5C285.1 549.3 271.2 549.8 261.7 542.1C252.4 547.3 242.4 551.4 231.9 554.4C230.7 566.5 220.5 576 208 576L176 576C163.6 576 153.3 566.5 152.1 554.4C141.6 551.4 131.7 547.2 122.3 542.1C112.9 549.8 98.9 549.3 90.1 540.5L67.5 517.8C58.7 509 58.2 495.1 65.9 485.6C60.7 476.3 56.6 466.3 53.6 455.8C41.5 454.6 32 444.4 32 431.9L32 399.9C32 387.5 41.5 377.2 53.6 376C56.6 365.5 60.8 355.6 65.9 346.2C58.2 336.8 58.7 322.8 67.5 314L90.1 291.4C98.9 282.6 112.8 282.1 122.3 289.8C124.2 288.8 126 287.8 128 286.8zM192 352C156.7 352 128 380.7 128 416C128 451.3 156.7 480 192 480C227.3 480 256 451.3 256 416C256 380.7 227.3 352 192 352zM472 488C472 510.1 489.9 528 512 528C534.1 528 552 510.1 552 488C552 465.9 534.1 448 512 448C489.9 448 472 465.9 472 488z"/></svg>
                    </div>
                </div>
                <h5 class="text-lg   font-semibold">Maquinarias Registradas</h5>
            </div>

            <div class="mt-1">
                <div class="text-3xl font-bold text-base-content">142</div>
                <div class="flex items-center gap-2 mt-1 text-sm">
                    <span class="text-success font-semibold">+12 este mes</span>
                    <span class="text-base-content/50">Histórico</span>
                </div>
            </div>
        </div>

           <div class="w-[1px] bg-gray-200"></div>


        <!-- Servicios realizados -->
        <div class="flex flex-1 flex-col gap-3">
            <div class="flex items-center gap-3 text-base-content">
                <div class="avatar">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="42" width="42" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#DC3545"  d="M530.8 134.1C545.1 144.5 548.3 164.5 537.9 178.8L281.9 530.8C276.4 538.4 267.9 543.1 258.5 543.9C249.1 544.7 240 541.2 233.4 534.6L105.4 406.6C92.9 394.1 92.9 373.8 105.4 361.3C117.9 348.8 138.2 348.8 150.7 361.3L252.2 462.8L486.2 141.1C496.6 126.8 516.6 123.6 530.9 134z"/></svg>
                    </div>
                </div>
                <h5 class="text-lg font-semibold">Servicios Realizados</h5>
            </div>

            <div class="mt-1">
                <div class="text-3xl font-bold text-base-content">318</div>
                <div class="flex items-center gap-2 mt-1 text-sm">
                    <span class="text-success font-semibold">+8.3%</span>
                    <span class="text-base-content/50">Mensual</span>
                </div>
            </div>
        </div>

    </div>

    <div class="w-[1px] bg-gray-200"></div>

    <!-- Columna 2 -->
 <div class="flex flex-1 gap-8 max-md:flex-col">

        <!-- Pendientes -->
        <div class="flex flex-1 flex-col gap-3">
            <div class="flex items-center gap-3 text-base-content">
                <div class="avatar">
                    <div class="">
                      <svg xmlns="http://www.w3.org/2000/svg" height="42" width="42" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#DC3545" d="M320 496C342.1 496 360 513.9 360 536C360 558.1 342.1 576 320 576C297.9 576 280 558.1 280 536C280 513.9 297.9 496 320 496zM320 64C346.5 64 368 85.5 368 112C368 112.6 368 113.1 368 113.7L352 417.7C351.1 434.7 337 448 320 448C303 448 289 434.7 288 417.7L272 113.7C272 113.1 272 112.6 272 112C272 85.5 293.5 64 320 64z"/></svg>
                    </div>
                </div>
                <h5 class="text-lg font-semibold">Pendientes</h5>
            </div>

            <div class="mt-1">
                <div class="text-3xl font-bold text-base-content">27</div>
                <div class="flex items-center gap-2 mt-1 text-sm">
                    <span class="text-error font-semibold">+5 esta semana</span>
                    <span class="text-base-content/50">Sin iniciar</span>
                </div>
            </div>
        </div>

        <div class="w-[1px] bg-gray-200"></div>

        <!-- En proceso -->
        <div class="flex flex-1 flex-col gap-3">
            <div class="flex items-center gap-3 text-base-content">
                <div class="avatar">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="42" width="42" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#DC3545"  d="M415.9 274.5C428.1 271.2 440.9 277 446.4 288.3L465 325.9C475.3 327.3 485.4 330.1 494.9 334L529.9 310.7C540.4 303.7 554.3 305.1 563.2 314L582.4 333.2C591.3 342.1 592.7 356.1 585.7 366.5L562.4 401.4C564.3 406.1 566 411 567.4 416.1C568.8 421.2 569.7 426.2 570.4 431.3L608.1 449.9C619.4 455.5 625.2 468.3 621.9 480.4L614.9 506.6C611.6 518.7 600.3 526.9 587.7 526.1L545.7 523.4C539.4 531.5 532.1 539 523.8 545.4L526.5 587.3C527.3 599.9 519.1 611.3 507 614.5L480.8 621.5C468.6 624.8 455.9 619 450.3 607.7L431.7 570.1C421.4 568.7 411.3 565.9 401.8 562L366.8 585.3C356.3 592.3 342.4 590.9 333.5 582L314.3 562.8C305.4 553.9 304 540 311 529.5L334.3 494.5C332.4 489.8 330.7 484.9 329.3 479.8C327.9 474.7 327 469.6 326.3 464.6L288.6 446C277.3 440.4 271.6 427.6 274.8 415.5L281.8 389.3C285.1 377.2 296.4 369 309 369.8L350.9 372.5C357.2 364.4 364.5 356.9 372.8 350.5L370.1 308.7C369.3 296.1 377.5 284.7 389.6 281.5L415.8 274.5zM448.4 404C424.1 404 404.4 423.7 404.5 448.1C404.5 472.4 424.2 492 448.5 492C472.8 492 492.5 472.3 492.5 448C492.4 423.6 472.7 404 448.4 404zM224.9 18.5L251.1 25.5C263.2 28.8 271.4 40.2 270.6 52.7L267.9 94.5C276.2 100.9 283.5 108.3 289.8 116.5L331.8 113.8C344.3 113 355.7 121.2 359 133.3L366 159.5C369.2 171.6 363.5 184.4 352.2 190L314.5 208.6C313.8 213.7 312.8 218.8 311.5 223.8C310.2 228.8 308.4 233.8 306.5 238.5L329.8 273.5C336.8 284 335.4 297.9 326.5 306.8L307.3 326C298.4 334.9 284.5 336.3 274 329.3L239 306C229.5 309.9 219.4 312.7 209.1 314.1L190.5 351.7C184.9 363 172.1 368.7 160 365.5L133.8 358.5C121.6 355.2 113.5 343.8 114.3 331.3L117 289.4C108.7 283 101.4 275.6 95.1 267.4L53.1 270.1C40.6 270.9 29.2 262.7 25.9 250.6L18.9 224.4C15.7 212.3 21.4 199.5 32.7 193.9L70.4 175.3C71.1 170.2 72.1 165.2 73.4 160.1C74.8 155 76.4 150.1 78.4 145.4L55.1 110.5C48.1 100 49.5 86.1 58.4 77.2L77.6 58C86.5 49.1 100.4 47.7 110.9 54.7L145.9 78C155.4 74.1 165.5 71.3 175.8 69.9L194.4 32.3C200 21 212.7 15.3 224.9 18.5zM192.4 148C168.1 148 148.4 167.7 148.4 192C148.4 216.3 168.1 236 192.4 236C216.7 236 236.4 216.3 236.4 192C236.4 167.7 216.7 148 192.4 148z"/></svg>
                    </div>
                </div>
                <h5 class="text-lg font-semibold">En Proceso</h5>
            </div>

            <div class="mt-1">
                <div class="text-3xl font-bold text-base-content">14</div>
                <div class="flex items-center gap-2 mt-1 text-sm">
                    <span class="text-warning font-semibold">Estables</span>
                    <span class="text-base-content/50">Reparando</span>
                </div>
            </div>
        </div>

 

    </div>

@endsection

