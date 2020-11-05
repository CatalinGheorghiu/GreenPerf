@extends('layouts.app')

@section('content')

    {{-- Home Page Section --}}

    <h1 class="text-center my-3" id="site-name">  SITE DE GREEN-PERF </h1>
    {{-- Image --}}
    <div class="d-flex flex-column w-50 mx-auto " id="site-img-container">
        <img src="{{ asset('img/site_img.jpg') }}" class="img-fluid img-thumbnail" id="site-img" alt="site_img">
    </div>

    {{-- Main Chart Section --}}
    <div class="charts-section d-flex justify-content-center flex-wrap mt-5">
        {{-- Chart Left/Up --}}
        <div class="chart-1   m-5">
            <h3 class=" text-center text-chart"><u> Valeurs indicateur ICUR 01</u></h3>

            <div id="chart1" class="chart-left"></div>
        </div>

        {{-- Chart Right/Down --}}
        <div class="chart-2  m-5 ">
            <h3 class="text-center text-chart"><u> Valeurs indicateur IPRE 01 </u></h3>

            <div id="chart2" class="chart-right"></div>
        </div>
    </div>



@section('scripts')
    <script>
        const chart1 = new Chartisan({
            el: '#chart1',
            url: "@chart('familles_equipements_chart')",
            hooks: new ChartisanHooks()
                .colors(['#ECC94B', '#4299E1', '#EC3134'])
                .borderColors(['#4299E1', '#ECC94B', '#EC3134'])
                .responsive()
                .beginAtZero()
                .legend({
                    position: 'bottom'
                })
                // .title('This is a sample chart using chartisan!')
                .datasets([{
                    type: 'line',
                    fill: false
                }])
        });

        const chart2 = new Chartisan({
            el: '#chart2',
            url: "@chart('equipements_chart')",
            hooks: new ChartisanHooks()
                .colors(['#ECC94B', '#4299E1', '#EC3134'])
                .borderColors(['#4299E1', '#ECC94B', '#EC3134'])
                .responsive()
                .beginAtZero()
                .legend({
                    position: 'bottom'
                })

        });

    </script>
@endsection
@endsection
