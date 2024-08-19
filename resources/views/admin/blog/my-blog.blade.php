@extends('admin.layouts.app')

@section('content-admin')
    <div class="app-content-wrapper">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="card-wrapper">
                    <div class="card-header d-flex align-items-center justify-content-between mb-30">
                        <div class="card-title-wrap">
                            <h6 class="card-subtitle">My Blog List</h6>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="property-table-wrapper">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Blog Tittle</th>
                                            <th>Writter</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-custom">
                                            <td style="width: 280px;">
                                                <div class="property-thumb-wrapper">
                                                    <div class="property-thumb image-hover-effect-two position-relative">
                                                        <img src="{{ asset('assets/images/blog/blog-thumb-01.png') }}"
                                                            alt="image">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h3 class="property-title">Equestrian family home</h3>
                                            </td>
                                            <td>
                                                <p>Monthly</p>
                                            </td>
                                            <td>
                                                <p>17 Agustus 2024</p>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <a href="property-details.html" class="action-button download">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </a>
                                                    <a href="/edit-blog" class="action-button edit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </a>
                                                    <button class="action-button delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
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
