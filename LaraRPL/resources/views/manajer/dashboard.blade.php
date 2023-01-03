@extends('manajer.layouts.main')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        
    </div>

    

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Permintaan Institusi</h6>
                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

       
    </div>



           


</div>
<script type="text/javascript">
        var labels = ['Dalam Kota','Luar Kota'];
      var dalam =  {{ Js::from($area_dalam) }};
      var luar ={{ Js::from($area_luar) }};
  
      const data = {
        labels: labels,
        datasets: [{
          label: 'Permintaan',
          backgroundColor: 'rgb(54, 162, 235, 0.2)',
          borderColor: 'rgb(54, 162, 235)',
          data: [dalam,luar],
        }]
      };
  
      const config = {
        type: 'bar',
        data: data,
        options: {}
      };
  
      const myChart = new Chart(
        document.getElementById('myBarChart'),
        config
      );
  
</script>
@endsection