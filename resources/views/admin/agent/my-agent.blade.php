@extends('admin.layouts.app')

@section('content-admin')
<div class="app-content-wrapper">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="card-wrapper">
                <div class="card-header d-flex align-items-center justify-content-between mb-30">
                    <div class="card-title-wrap">
                        <h6 class="card-subtitle">My Agent List</h6>
                    </div>

                </div>
                <div class="card-body">
                    <div class="property-table-wrapper">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Agent</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-custom">
                                        <td style="width: 280px;">
                                            <div class="property-thumb-wrapper">
                                                <div class="property-thumb image-hover-effect-two position-relative">
                                                    <img src="assets/images/blog/blog-thumb-01.png" alt="image">
                                                    <div class="property-thumb-date">
                                                        <div class="bd-badge-sq theme-bg">
                                                            <div class="d-block">
                                                                <h5 class="badge-title">17</h5>
                                                                <span>June</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="property-title-box d-flex align-items-center gap-10">
                                                <div>
                                                    <h3 class="property-title underline"><a href="property-details.html">Equestrian family home</a></h3>
                                                    <div class="property-info-box mb-5">
                                                        <div class="bd-meta">
                                                            <div class="meta-item">
                                                                <span class="icon"><i
                                                    class="fa-regular fa-bed-front"></i></span><span
                                                 class="title">3 bad</span>
                                                            </div>
                                                            <div class="meta-item">
                                                                <span class="icon"><i
                                                    class="fa-duotone fa-shower"></i></span><span
                                                 class="title">4 bath</span>
                                                            </div>
                                                            <div class="meta-item">
                                                                <span class="icon"><i
                                                    class="fa-regular fa-arrows-maximize"></i></span><span
                                                 class="title">1200 sqft</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="property-location">California, CA, USA</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="recent-activity-list">
                                                <li class="property-date mb-5">Add Date: <span class="property-add-date">June
                                        17, 2024</span></li>
                                                <li class="property-date">Last Date: <span class="property-last-date">July 31,
                                        2024</span></li>
                                            </ul>
                                        </td>
                                        <td><span class="bd-badge success">Active</span></td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-start gap-10">

                                                <a href="/edit-agent" class="action-button edit"><i
                                        class="fa-sharp fa-light fa-pen"></i></a>
                                                <button class="action-button delete"><i
                                        class="fa-regular fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-custom">
                                        <td style="width: 280px;">
                                            <div class="property-thumb-wrapper">
                                                <div class="property-thumb image-hover-effect-two position-relative">
                                                    <img src="assets/images/blog/blog-thumb-05.png" alt="image">
                                                    <div class="property-thumb-date">
                                                        <div class="bd-badge-sq theme-bg">
                                                            <div class="d-block">
                                                                <h5 class="badge-title">13</h5>
                                                                <span>June</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="property-title-box d-flex align-items-center gap-10">
                                                <div>
                                                    <h3 class="property-title underline"><a href="property-details.html">Luxury
                                                            villa in rego park</a></h3>
                                                    <div class="property-info-box mb-5">
                                                        <div class="bd-meta">
                                                            <div class="meta-item">
                                                                <span class="icon"><i
                                                    class="fa-regular fa-bed-front"></i></span><span
                                                 class="title">4 bad</span>
                                                            </div>
                                                            <div class="meta-item">
                                                                <span class="icon"><i
                                                    class="fa-duotone fa-shower"></i></span><span
                                                 class="title">5 bath</span>
                                                            </div>
                                                            <div class="meta-item">
                                                                <span class="icon"><i
                                                    class="fa-regular fa-arrows-maximize"></i></span><span
                                                 class="title">2500 sqft</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="property-location">New York, USA</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="recent-activity-list">
                                                <li class="property-date mb-5">Add Date: <span class="property-add-date">June
                                        13, 2024</span></li>
                                                <li class="property-date">Last Date: <span class="property-last-date">June 30,
                                        2024</span></li>
                                            </ul>
                                        </td>
                                        <td><span class="bd-badge warning">Processing</span></td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-start gap-10">

                                                <a href="property-details.html" class="action-button edit"><i
                                        class="fa-sharp fa-light fa-pen"></i></a>
                                                <button class="action-button delete"><i
                                        class="fa-regular fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-custom">
                                        <td style="width: 280px;">
                                            <div class="property-thumb-wrapper">
                                                <div class="property-thumb image-hover-effect-two position-relative">
                                                    <img src="assets/images/blog/blog-thumb-02.png" alt="image">
                                                    <div class="property-thumb-date">
                                                        <div class="bd-badge-sq theme-bg">
                                                            <div class="d-block">
                                                                <h5 class="badge-title">10</h5>
                                                                <span>June</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="property-title-box d-flex align-items-center gap-10">
                                                <div>
                                                    <h3 class="property-title underline"><a href="property-details.html">Villa
                                                            on hollywood estate</a></h3>
                                                    <div class="property-info-box mb-5">
                                                        <div class="bd-meta">
                                                            <div class="meta-item">
                                                                <span class="icon"><i
                                                    class="fa-regular fa-bed-front"></i></span><span
                                                 class="title">2 bad</span>
                                                            </div>
                                                            <div class="meta-item">
                                                                <span class="icon"><i
                                                    class="fa-duotone fa-shower"></i></span><span
                                                 class="title">2 bath</span>
                                                            </div>
                                                            <div class="meta-item">
                                                                <span class="icon"><i
                                                    class="fa-regular fa-arrows-maximize"></i></span><span
                                                 class="title">1000 sqft</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="property-location">Tranquil Oaks, Washington</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="recent-activity-list">
                                                <li class="property-date mb-5">Add Date: <span class="property-add-date">June
                                        10, 2024</span></li>
                                                <li class="property-date">Last Date: <span class="property-last-date">July 10,
                                        2024</span></li>
                                            </ul>
                                        </td>
                                        <td><span class="bd-badge danger">Pending</span></td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-start gap-10">
                                                <a href="property-details.html" class="action-button edit"><i
                                        class="fa-sharp fa-light fa-pen"></i></a>
                                                <button class="action-button delete"><i
                                        class="fa-regular fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-custom">
                                        <td style="width: 280px;">
                                            <div class="property-thumb-wrapper">
                                                <div class="property-thumb image-hover-effect-two position-relative">
                                                    <img src="assets/images/blog/blog-thumb-04.png" alt="image">
                                                    <div class="property-thumb-date">
                                                        <div class="bd-badge-sq theme-bg">
                                                            <div class="d-block">
                                                                <h5 class="badge-title">06</h5>
                                                                <span>June</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="property-title-box d-flex align-items-center gap-10">
                                                <div>
                                                    <h3 class="property-title underline"><a href="property-details.html">Sunset
                                                            Ridge Cottage</a></h3>
                                                    <div class="property-info-box mb-5">
                                                        <div class="bd-meta">
                                                            <div class="meta-item">
                                                                <span class="icon"><i
                                                    class="fa-regular fa-bed-front"></i></span><span
                                                 class="title">6 bad</span>
                                                            </div>
                                                            <div class="meta-item">
                                                                <span class="icon"><i
                                                    class="fa-duotone fa-shower"></i></span><span
                                                 class="title">5 bath</span>
                                                            </div>
                                                            <div class="meta-item">
                                                                <span class="icon"><i
                                                    class="fa-regular fa-arrows-maximize"></i></span><span
                                                 class="title">22,800 sqft</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="property-location">Meadowview Manor, Colorado</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="recent-activity-list">
                                                <li class="property-date mb-5">Add Date: <span class="property-add-date">June
                                        06, 2024</span></li>
                                                <li class="property-date">Last Date: <span class="property-last-date">June 30,
                                        2024</span></li>
                                            </ul>
                                        </td>
                                        <td><span class="bd-badge info">Closed</span></td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-start gap-10">

                                                <a href="property-details.html" class="action-button edit"><i
                                        class="fa-sharp fa-light fa-pen"></i></a>
                                                <button class="action-button delete"><i
                                        class="fa-regular fa-trash"></i></button>
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
