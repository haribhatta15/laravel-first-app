@extends('layouts.app')

@section('title', 'Properties Report')

@section('content')
    <h1>Properties Report</h1>

    <div class="w-1/2 max-auto"> 
        <canvas id="propertiesChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data passed from the controller
        const chartData = @json($chartData);

        // Chart configuration
        const ctx = document.getElementById('propertiesChart').getContext('2d');
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Commercial', 'Residential'],
                datasets: [{
                    data: chartData,
                    backgroundColor: ['orange', 'gray'],
                    borderColor: ['#004085', '#ff8800'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            }
        });
    </script>
@endsection