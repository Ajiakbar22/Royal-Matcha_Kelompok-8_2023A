@extends('layout')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4 text-success">🍵 API Documentation</h1>

    <!-- Authentication Section -->
    <div class="card mb-4 shadow border-0">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0"><i class="bi bi-shield-lock"></i> Authentication</h5>
        </div>
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-success">
                    <tr>
                        <th>Method</th>
                        <th>Endpoint</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="badge bg-primary">POST</span></td>
                        <td><code>/api/register</code></td>
                        <td>Register new user</td>
                    </tr>
                    <tr>
                        <td><span class="badge bg-primary">POST</span></td>
                        <td><code>/api/login</code></td>
                        <td>Login & get JWT token</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Orders Section -->
    <div class="card mb-4 shadow border-0">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0"><i class="bi bi-box-seam"></i> Orders (JWT Protected)</h5>
        </div>
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-success">
                    <tr>
                        <th>Method</th>
                        <th>Endpoint</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="badge bg-success">GET</span></td>
                        <td><code>/api/orders</code></td>
                        <td>Retrieve all orders</td>
                    </tr>
                    <tr>
                        <td><span class="badge bg-primary">POST</span></td>
                        <td><code>/api/orders</code></td>
                        <td>Create new order</td>
                    </tr>
                    <tr>
                        <td><span class="badge bg-warning text-dark">PUT</span></td>
                        <td><code>/api/orders/{id}</code></td>
                        <td>Update order</td>
                    </tr>
                    <tr>
                        <td><span class="badge bg-danger">DELETE</span></td>
                        <td><code>/api/orders/{id}</code></td>
                        <td>Delete order</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Products Section -->
    <div class="card mb-4 shadow border-0">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0"><i class="bi bi-cup-straw"></i> Products (JWT Protected)</h5>
        </div>
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-success">
                    <tr>
                        <th>Method</th>
                        <th>Endpoint</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="badge bg-success">GET</span></td>
                        <td><code>/api/products</code></td>
                        <td>Retrieve all products</td>
                    </tr>
                    <tr>
                        <td><span class="badge bg-primary">POST</span></td>
                        <td><code>/api/products</code></td>
                        <td>Create new product</td>
                    </tr>
                    <tr>
                        <td><span class="badge bg-warning text-dark">PUT</span></td>
                        <td><code>/api/products/{id}</code></td>
                        <td>Update product</td>
                    </tr>
                    <tr>
                        <td><span class="badge bg-danger">DELETE</span></td>
                        <td><code>/api/products/{id}</code></td>
                        <td>Delete product</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Basic Auth Section -->
    <div class="card mb-4 shadow border-0">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0"><i class="bi bi-key"></i> Basic Auth Protected Route</h5>
        </div>
        <div class="card-body">
            <p><strong>Endpoint:</strong> <code>/api/basic-protected</code></p>
            <p><strong>Authorization:</strong> Basic Auth (pakai username & password dari User table)</p>
        </div>
    </div>

    <!-- API Key Section -->
    <div class="card mb-4 shadow border-0">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0"><i class="bi bi-lock-fill"></i> API Key Protected Route</h5>
        </div>
        <div class="card-body">
            <p><strong>Endpoint:</strong> <code>/api/apikey-protected</code></p>
            <p><strong>Header:</strong> <code>apikey: royalmatchakey123</code></p>
        </div>
    </div>

    <!-- Postman Testing Guide -->
    <div class="card mb-4 shadow border-0">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0"><i class="bi bi-phone"></i> Postman Testing Guide</h5>
        </div>
        <div class="card-body">
            <ol class="mb-0">
                <li>Register User → <code>POST /api/register</code> (body: <code>name, email, password</code>)</li>
                <li>Login User → <code>POST /api/login</code> untuk dapatkan <strong>token</strong></li>
                <li>Gunakan Bearer Token Authorization untuk semua JWT route</li>
                <li>Orders:
                    <ul>
                        <li><code>GET /api/orders</code></li>
                        <li><code>POST /api/orders</code> (body: <code>product, customer_name, address, quantity</code>)</li>
                        <li><code>PUT /api/orders/{id}</code></li>
                        <li><code>DELETE /api/orders/{id}</code></li>
                    </ul>
                </li>
                <li>Products:
                    <ul>
                        <li><code>GET /api/products</code></li>
                        <li><code>POST /api/products</code> (body: <code>name, price</code>)</li>
                        <li><code>PUT /api/products/{id}</code></li>
                        <li><code>DELETE /api/products/{id}</code></li>
                    </ul>
                </li>
                <li>Basic Auth → <code>/api/basic-protected</code></li>
                <li>API Key → <code>/api/apikey-protected</code> (Header: <code>apikey: royalmatchakey123</code>)</li>
            </ol>
        </div>
    </div>
</div>
@endsection
