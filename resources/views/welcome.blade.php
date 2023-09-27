
@extends('components.layout')
@section('content')

<div class="position-relative">
</div>
<div id="content-page" class="content-page">
  <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="card-title mb-3">Notification</h4>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="notification-list m-0 p-0">
                            <li class="d-flex align-items-center justify-content-between">
                                <div class="user-img img-fluid"><img src="../assets/images/user/01.jpg"
                                        alt="story-img" class="rounded-circle avatar-40"></div>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <div class=" ms-3">
                                            <h6>Paige Turner Posted in UI/UX Community</h6>
                                            <p class="mb-0">30 ago</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#"
                                                class="btn btn-icon btn-soft-primary btn-sm me-3">
                                                <span class="btn-inner">
                                                    <i class="material-symbols-outlined md-18">
                                                        military_tech
                                                    </i>
                                                </span>
                                            </a>
                                            <div class="card-header-toolbar d-flex align-items-center">

                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" id="dropdownMenuButton"
                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                        role="button">
                                                        <span class="material-symbols-outlined">
                                                            more_horiz
                                                        </span>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton" style="">
                                                        <a class="dropdown-item d-flex align-items-center"
                                                            href="#"><span
                                                                class="material-symbols-outlined me-2 md-18">
                                                                visibility
                                                            </span>View</a>
                                                        <a class="dropdown-item d-flex align-items-center"
                                                            href="#"><span
                                                                class="material-symbols-outlined me-2 md-18">
                                                                delete
                                                            </span>Delete</a>
                                                        <a class="dropdown-item d-flex align-items-center"
                                                            href="#"><span
                                                                class="material-symbols-outlined me-2 md-18">
                                                                edit
                                                            </span>Edit</a>
                                                        <a class="dropdown-item d-flex align-items-center"
                                                            href="#"><span
                                                                class="material-symbols-outlined me-2 md-18">
                                                                print
                                                            </span>Print</a>
                                                        <a class="dropdown-item d-flex align-items-center"
                                                            href="#"><span
                                                                class="material-symbols-outlined me-2 md-18">
                                                                file_download
                                                            </span>Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
       
    </div>
  @endsection