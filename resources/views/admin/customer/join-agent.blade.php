@extends('admin.layouts.app')

@section('content-admin')
    <div class="app-content-wrapper">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="card-wrapper">
                    <div class="card-header d-flex align-items-center justify-content-between mb-30">
                        <div class="card-title-wrap">
                            <h6 class="card-subtitle">Join Agent List</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="property-table-wrapper">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-custom">
                                            <td>
                                                <div class="property-title-box d-flex align-items-center gap-10">
                                                    <div>
                                                        <p class="property-location">California, CA, USA</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="property-location">California, CA, USA</p>
                                                
                                            </td>
                                            <td>
                                                <p class="property-location">California, CA, USA</p>
                                            </td>
                                            <td>
                                                <p class="property-location">California, CA, USA</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="pagination__wrapper mt-30">
                                <div class="basic-pagination">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa-regular fa-arrow-left"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">1</a>
                                            </li>
                                            <li>
                                                <a class="current" href="#">2</a>
                                            </li>
                                            <li>
                                                <a href="#">3</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa-regular fa-arrow-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
