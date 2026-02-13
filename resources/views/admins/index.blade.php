@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <!-- Welcome Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="welcome-card bg-gradient-primary text-white p-4 rounded-3 shadow">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="mb-1">¡Bienvenido de vuelta, {{ Auth::guard('admin')->user()->name ?? 'Admin' }}!</h2>
                        <p class="mb-0 opacity-75">Aquí tienes un resumen de tu restaurante</p>
                    </div>
                    <div class="d-none d-md-block">
                        <i class="fas fa-utensils fa-4x opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="stat-card card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="stat-label text-muted text-uppercase small fw-bold">Foods</span>
                            <h2 class="stat-number mt-2 mb-0 fw-bold">{{ $foodCount }}</h2>
                            <p class="stat-change text-success small mt-2 mb-0">
                                <i class="fas fa-utensils me-1"></i>Total platos
                            </p>
                        </div>
                        <div class="stat-icon bg-primary bg-opacity-10 p-3 rounded-circle">
                            <i class="fas fa-utensils fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0">
                    <a href="{{ route('all.foods') }}" class="text-decoration-none small">
                        Ver todos <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-card card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="stat-label text-muted text-uppercase small fw-bold">Orders</span>
                            <h2 class="stat-number mt-2 mb-0 fw-bold">{{ $checkoutCount }}</h2>
                            <p class="stat-change text-info small mt-2 mb-0">
                                <i class="fas fa-shopping-bag me-1"></i>Total órdenes
                            </p>
                        </div>
                        <div class="stat-icon bg-info bg-opacity-10 p-3 rounded-circle">
                            <i class="fas fa-shopping-bag fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0">
                    <a href="{{ route('orders.all') }}" class="text-decoration-none small">
                        Gestionar <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-card card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="stat-label text-muted text-uppercase small fw-bold">Bookings</span>
                            <h2 class="stat-number mt-2 mb-0 fw-bold">{{ $bookingCount }}</h2>
                            <p class="stat-change text-warning small mt-2 mb-0">
                                <i class="fas fa-calendar-check me-1"></i>Reservas activas
                            </p>
                        </div>
                        <div class="stat-icon bg-warning bg-opacity-10 p-3 rounded-circle">
                            <i class="fas fa-calendar-check fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0">
                    <a href="{{ route('bookings.all') }}" class="text-decoration-none small">
                        Ver reservas <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-card card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="stat-label text-muted text-uppercase small fw-bold">Admins</span>
                            <h2 class="stat-number mt-2 mb-0 fw-bold">{{ $adminCount }}</h2>
                            <p class="stat-change text-secondary small mt-2 mb-0">
                                <i class="fas fa-user-shield me-1"></i>Usuarios activos
                            </p>
                        </div>
                        <div class="stat-icon bg-secondary bg-opacity-10 p-3 rounded-circle">
                            <i class="fas fa-user-shield fa-2x text-secondary"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0">
                    <a href="{{ route('admins.all') }}" class="text-decoration-none small">
                        Administrar <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="row g-4 mb-4">
        <!-- Gráfico de distribución -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-transparent border-0 pt-4 px-4">
                    <h5 class="card-title mb-0 fw-bold">Resumen General</h5>
                    <p class="text-muted small">Distribución de elementos en el sistema</p>
                </div>
                <div class="card-body">
                    <canvas id="distributionChart" style="width:100%; height:300px;"></canvas>
                </div>
            </div>
        </div>

        <!-- Gráfico de donut -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-transparent border-0 pt-4 px-4">
                    <h5 class="card-title mb-0 fw-bold">Porcentajes</h5>
                    <p class="text-muted small">Distribución porcentual</p>
                </div>
                <div class="card-body d-flex align-items-center justify-content-center">
                    <canvas id="percentageChart" style="width:100%; max-height:250px;"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities Section -->
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-transparent border-0 pt-4 px-4 d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title mb-0 fw-bold">Últimas Reservas</h5>
                        <p class="text-muted small">Reservas recientes</p>
                    </div>
                    <a href="{{ route('bookings.all') }}" class="btn btn-sm btn-outline-primary">Ver todas</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Cliente</th>
                                    <th>Fecha</th>
                                    <th>Personas</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($recentBookings ?? [] as $booking)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar bg-primary bg-opacity-10 rounded-circle me-2" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;">
                                                <span class="small fw-bold text-primary">{{ substr($booking->name ?? 'A', 0, 1) }}</span>
                                            </div>
                                            <span>{{ $booking->name ?? 'Cliente' }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $booking->date ?? '2024-01-01' }}</td>
                                    <td>{{ $booking->num_people ?? '2' }}</td>
                                    <td>
                                        <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill">
                                            Confirmada
                                        </span>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4 text-muted">
                                        No hay reservas recientes
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-transparent border-0 pt-4 px-4 d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title mb-0 fw-bold">Últimas Órdenes</h5>
                        <p class="text-muted small">Pedidos recientes</p>
                    </div>
                    <a href="{{ route('orders.all') }}" class="btn btn-sm btn-outline-primary">Ver todas</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Cliente</th>
                                    <th>Total</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($recentOrders ?? [] as $order)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar bg-info bg-opacity-10 rounded-circle me-2" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;">
                                                <span class="small fw-bold text-info">{{ substr($order->name ?? 'C', 0, 1) }}</span>
                                            </div>
                                            <span>{{ $order->name ?? 'Cliente' }}</span>
                                        </div>
                                    </td>
                                    <td>${{ number_format($order->price ?? 0, 2) }}</td>
                                    <td>{{ $order->created_at ?? now()->format('Y-m-d') }}</td>
                                    <td>
                                        <span class="badge bg-warning bg-opacity-10 text-warning px-3 py-2 rounded-pill">
                                            Pendiente
                                        </span>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4 text-muted">
                                        No hay órdenes recientes
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts para los gráficos -->
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Verificar que Chart.js está cargado
    if (typeof Chart !== 'undefined') {
        console.log('Chart.js cargado correctamente');
        
        // Datos para los gráficos
        const foodCount = {{ $foodCount }};
        const checkoutCount = {{ $checkoutCount }};
        const bookingCount = {{ $bookingCount }};
        const adminCount = {{ $adminCount }};
        
        console.log('Datos:', {foodCount, checkoutCount, bookingCount, adminCount});

        // Gráfico de distribución (barras)
        const ctx1 = document.getElementById('distributionChart').getContext('2d');
        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Foods', 'Orders', 'Bookings', 'Admins'],
                datasets: [{
                    label: 'Cantidad',
                    data: [foodCount, checkoutCount, bookingCount, adminCount],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true,
                            color: 'rgba(0,0,0,0.05)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        // Gráfico de porcentaje (donut)
        const ctx2 = document.getElementById('percentageChart').getContext('2d');
        new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Foods', 'Orders', 'Bookings', 'Admins'],
                datasets: [{
                    data: [foodCount, checkoutCount, bookingCount, adminCount],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                        'rgba(75, 192, 192, 0.8)'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 12,
                            padding: 15
                        }
                    }
                },
                cutout: '70%'
            }
        });
    } else {
        console.error('Chart.js no está cargado');
    }
});
</script>
@endpush

@endsection