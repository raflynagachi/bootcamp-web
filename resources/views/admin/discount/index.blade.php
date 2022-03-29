@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="card mt-3">
                <div class="card-header">
                    Discount
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col md-12 d-flex flex-row-reverse">
                            <a href="{{route('admin.discount.create')}}" class="btn btn-primary btn-sm">Add discount</a>
                        </div>
                    </div>
                    @include('components.alert')
                    {{-- <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Camp</th>
                                <th>Price</th>
                                <th>Register Data</th>
                                <th>Paid Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($checkouts as $checkout)
                                <tr>
                                    <td>{{$checkout->id}}</td>
                                    <td>{{$checkout->User->name}}</td>
                                    <td>{{$checkout->Camp->title}}</td>
                                    <td>${{$checkout->Camp->price}},00</td>
                                    <td>{{$checkout->created_at->format('M d Y')}}</td>
                                    <td>
                                        @if ($checkout->payment_status == 'paid' || $checkout->payment_status == 'settlement')
                                            <div class="span badge bg-success">Paid</div>
                                        @else
                                            <div class="span badge bg-warning">Waiting</div>
                                        @endif
                                    </td>
                                    <td>
                                        @if (!$checkout->payment_status == 'paid' || !$checkout->payment_status == 'settlement')
                                        <form action="{{route('admin.checkout.update', $checkout->id)}}" method="post">
                                            @csrf
                                            <button class="btn btn-primary btn-sm p-2 py-1">
                                                Set to Paid
                                            </button>
                                        </form>
                                        @else
                                            <button class="btn btn-sm disabled">Already paid</button>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No Camps Registered</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection