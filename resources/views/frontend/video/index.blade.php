@extends('admin.notes_master')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body py-4 px-4 px-md-5">

          <div class="pb-2">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-row align-items-center">
                  <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
                    placeholder="Add new...">
                  <div>
                    <button type="button" class="btn btn-primary">Add</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="d-flex justify-content-end align-items-center mb-4 pt-2 pb-3">
            <p class="small mb-0 me-2 text-muted">Filter</p>
            <select class="select">
              <option value="1">All</option>
              <option value="2">Completed</option>
              <option value="3">Active</option>
              <option value="4">Has due date</option>
            </select>
            <p class="small mb-0 ms-4 me-2 text-muted">Sort</p>
            <select class="select">
              <option value="1">Added date</option>
              <option value="2">Due date</option>
            </select>
            <a href="#!" style="color: #23af89;" data-mdb-toggle="tooltip" title="Ascending"><i
                class="fas fa-sort-amount-down-alt ms-2"></i></a>
          </div>

          <ul class="list-group list-group-horizontal rounded-0 bg-transparent">

            <li
              class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
              <p class="lead fw-normal mb-0">Buy groceries for next week</p>
            </li>
            <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
              <div class="d-flex flex-row justify-content-end mb-1">
                <a href="#!" class="text-info" data-mdb-toggle="tooltip" title="Edit todo"><i
                    class="fas fa-pencil-alt me-3"></i></a>
                <a href="#!" class="text-danger" data-mdb-toggle="tooltip" title="Delete todo"><i
                    class="fas fa-trash-alt"></i></a>
              </div>

            </li>
          </ul>
          <ul class="list-group list-group-horizontal rounded-0 bg-transparent">

            <li
              class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
              <p class="lead fw-normal mb-0">Buy groceries for next week</p>
            </li>
            <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
              <div class="d-flex flex-row justify-content-end mb-1">
                <a href="#!" class="text-info" data-mdb-toggle="tooltip" title="Edit todo"><i
                    class="fas fa-pencil-alt me-3"></i></a>
                <a href="#!" class="text-danger" data-mdb-toggle="tooltip" title="Delete todo"><i
                    class="fas fa-trash-alt"></i></a>
              </div>

            </li>
          </ul>
          <ul class="list-group list-group-horizontal rounded-0 bg-transparent">

            <li
              class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
              <p class="lead fw-normal mb-0">Buy groceries for next week</p>
            </li>
            <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
              <div class="d-flex flex-row justify-content-end mb-1">
                <a href="#!" class="text-info" data-mdb-toggle="tooltip" title="Edit todo"><i
                    class="fas fa-pencil-alt me-3"></i></a>
                <a href="#!" class="text-danger" data-mdb-toggle="tooltip" title="Delete todo"><i
                    class="fas fa-trash-alt"></i></a>
              </div>

            </li>
          </ul>


        </div>
      </div>

</div>
@endsection
