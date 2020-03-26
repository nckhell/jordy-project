@extends('layouts.app')

@section('content')
<h1 class="h2">Customers</h1>
<div class="table-wrapper">
   <div class="table-title">
      <div class="row">
         <div class="col-sm-6">
            <h2>List of all customers</h2>
         </div>
         <div class="col-sm-6">
            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add New Employee</span></a>
         </div>
      </div>
   </div>
   <table class="table table-striped table-hover">
      <thead>
         <tr>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Country</th>
            <th>BTW nummer</th>
            <th>Actions</th>
         </tr>
      </thead>
      <tbody>
         @forelse ($customers as $customer)
            <tr>
               <td>{{$customer->name}}</td>
               <td>{{$customer->address}}</td>
               <td>{{$customer->postalCode}}, {{$customer->city}}</td>
               <td>{{$customer->country}}</td>
               <td>{{$customer->VAT}}</td>
               <td>
                  <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>
               </td>
            </tr>
         @empty
            <p>No customers</p>
         @endforelse
      </tbody>
   </table>
   <div class="clearfix">
      {{ $customers->links() }}
   </div>
</div>
@endsection