@extends('layout.master')

@section('content')
<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">List Of Vendor</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="table" class="table">
          <thead class=" text-primary">
             <th>Id</th>
             <th>Name</th>
             <th>Email</th>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
