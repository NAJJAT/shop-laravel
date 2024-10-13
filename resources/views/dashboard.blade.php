@extends('layouts.barFotar')

@section('content2')
<!-- Dashboard Container -->
<div class="dashboard-container">

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>Admin Panel</h2>
        </div>
        <ul class="sidebar-menu">
            <li><a href="/admin/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="/admin/products"><i class="fas fa-box"></i> Products</a></li>
            <li><a href="/admin/orders"><i class="fas fa-shopping-cart"></i> Orders</a></li>
            <li><a href="/admin/users"><i class="fas fa-users"></i> Users</a></li>
            <li><a href="/admin/settings"><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>
    <!-- End Sidebar -->

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="dashboard-header">
            <h2>Welcome, Admin</h2>
            <p>Overview of your system's activity</p>
        </div>

        <!-- Statistics Section -->
        <div class="statistics-section">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-box">
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="details">
                            <h3>1,245</h3>
                            <p>Total Users</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-box">
                        <div class="icon">
                            <i class="fas fa-box"></i>
                        </div>
                        <div class="details">
                            <h3>500</h3>
                            <p>Total Products</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-box">
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="details">
                            <h3>200</h3>
                            <p>Pending Orders</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-box">
                        <div class="icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="details">
                            <h3>$10,000</h3>
                            <p>Total Revenue</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Statistics Section -->

        <!-- Latest Orders Section -->
        <div class="latest-orders-section">
            <h3>Latest Orders</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#12345</td>
                        <td>John Doe</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                        <td>$120</td>
                        <td>2024-10-11</td>
                        <td><a href="/admin/orders/12345" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>#12346</td>
                        <td>Jane Smith</td>
                        <td><span class="badge badge-success">Shipped</span></td>
                        <td>$300</td>
                        <td>2024-10-10</td>
                        <td><a href="/admin/orders/12346" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End Latest Orders Section -->

        <!-- Settings Section -->
        <div class="settings-section">
            <h3>Admin Settings</h3>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4>Site Configuration</h4>
                            <form action="/admin/settings/update" method="post">
                                <div class="form-group">
                                    <label for="site-name">Site Name</label>
                                    <input type="text" class="form-control" id="site-name" name="site_name" value="My Website">
                                </div>
                                <div class="form-group">
                                    <label for="email">Contact Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="admin@example.com">
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4>User Management</h4>
                            <a href="/admin/users" class="btn btn-primary">Manage Users</a>
                            <p>View, edit, or delete users in the system.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Settings Section -->

    </div>
    <!-- End Main Content -->
</div>
@endsection
