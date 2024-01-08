@extends('masterPr')
@section('contentPr')
    <div class="contentAna grid my-3 py-3 px-3">
        <div class="d-flex justify-content-between">
            <div class=" allbill bg-success text-white">
                <p>total order:</p>
                <b>{{$all}}</b>
            </div>
            <div class=" allbill" style="background-color: rgba(54, 162, 235, 0.2)">
                <p>Order is being shipped:</p>
                <b>{{$ship}}</b>
            </div>
            <div class=" allbill" style="background-color: rgba(255, 206, 86, 0.2)">
                <p>order has been completed:</p>
                <b>{{$completed}}</b>
            </div>
            <div class=" allbill" style="background-color: rgba(255, 99, 132, 0.2)">
                <p>order is cancelled:</p>
                <b>{{$cancel}}</b>
            </div>
            <div class=" allbill" style="background-color: rgba(128, 128, 128, 0.060)">
                <p>Refund/return orders:</p>
                <b>{{$return}}</b>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="divleft my-3">
                <div class="thu d-flex">
                    <i class="fa-solid fa-hand-holding-dollar text-success" style="font-size: 30px; margin: 20px;"></i>
                    <div>
                        <p>total income: </p>
                        <b class="totalthu">$ {{$total}}</b>
                        <span class="text-success">+ $ 0</span>
                    </div>
                </div>
                <div class="thu d-flex">
                    <i class="fa-solid fa-credit-card text-info" style="font-size: 30px; margin: 20px;"></i>
                    <div>
                        <p>paid: </p>
                        <b>$ {{$paid}}</b>
                    </div>
                </div>
                <div class="thu d-flex">
                    <i class="fa-solid fa-hourglass-half" style="font-size: 30px; margin: 25px;"></i>
                    <div>
                        <p>Pending order:</p>
                        <b>$ {{$pending}}</b>
                        <span class="text-success">+ $ 0</span>
                    </div>
                </div>
                <div class="thu d-flex">
                    <i class="fa-solid fa-piggy-bank text-danger" style="font-size: 30px; margin: 20px;"></i>
                    <div>
                        <p>account balance: </p>
                        <b>$ {{$balance}}</b>
                        <span class="text-success">+ $ 0</span>
                    </div>
                </div>
                <p><b>Note: </b> Upon completion, each product is eligible for a generous 30-day exchange or return period, ensuring the most satisfying shopping experience.</p>
            </div>
            <div class="divright my-3">
                <canvas id="myPieChart" width="600"></canvas>
            </div>
        </div>
    </div>

    <script>
        var ctx = document.getElementById('myPieChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['order is cancelled', 'Order is being shipped', 'order has been completed', 'Refund/return orders'], // Các nhãn
                datasets: [{
                    label: '',
                    data: {!! json_encode($data) !!},
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(128, 128, 128, 0.060)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(128, 128, 128, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                legend: {
                    position: 'right'
                }
            }
            }
        });
    </script>
@endsection