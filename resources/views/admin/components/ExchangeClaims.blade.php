@extends('admin.components.layout')
@section('contentadmin')

<div class="card">
    <div class="card-header pb-0">
      <div class="row">
        <div class="col-lg-6 col-7">
          <h6>Exchange Claims</h6>
          <p class="text-sm mb-0">
            <i class="fa fa-check text-info" aria-hidden="true"></i>
            <span class="font-weight-bold ms-1">30 </span> this month
          </p>
        </div>
        <div class="col-lg-6 col-5 my-auto text-end">
          <div class="dropdown float-lg-end pe-4">
            <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-ellipsis-v text-secondary"></i>
            </a>
            <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
              <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
              <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
              <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body px-0 pb-2">
      <div class="table-responsive">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Post</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Owner</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">claimant</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">status</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>
                    <div class="form-check form-check-info ">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                       
                      </div>
                  </td>
              <td>
                <div class="d-flex px-2 py-1">
                  <div>
                    <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd">
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Material XD Version</h6>
                  </div>
                </div>
              </td>
              <td>
                <div class="avatar-group mt-2">
                  <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                    <img src="../assets/img/team-1.jpg" alt="team1">
                  </a>
               
                </div>
              </td>
              <td>
                <div class="d-flex justify-content-center  mt-2">
                  <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                    <img src="../assets/img/team-1.jpg" alt="team1">
                  </a>
               
                </div>
              </td>
              <td>
                <div class="d-flex justify-content-center  mt-2">
                    <span class="badge badge-sm bg-gradient-secondary">pending</span>
               
                </div>
              </td>
              <td class="align-middle">
                <div class="progress-wrapper w-75 mx-auto">
                  <div class="progress-info">
                    <div class="progress-percentage">
                      <span class="text-xs font-weight-bold">60%</span>
                    </div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </td>
              <td>
                <a class="d-flex justify-content-center  mt-2" href="/Admin/ExchangeClaims/1">
                 
                    <span class="material-symbols-outlined">
                        info
                        </span>
              
               
                </a>
              </td>
           
             
            </tr>
      
          </tbody>
        </table>
      </div>
    </div>

@endsection