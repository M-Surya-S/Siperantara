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
                        <div class="card-title-wrap">
                            <div class="card-title-wrap">
                                <form action="{{ route('my-agent.search') }}" method="GET" style="display: flex; align-items: center;">
                                    <input type="text" name="search" placeholder="Search Property" class="form-control" value="{{ request('search') }}" 
                                        style="flex: 1; margin-right: 10px; padding: 1.5rem; height: calc(1.5em + 0.75rem + 2px);">
                                    <button type="submit" class="btn btn-primary" style="height: calc(1.5em + 0.75rem + 2px); padding: 0 10px;">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                            
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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($agents->isEmpty())
                                            <tr>
                                                <td colspan="4" class="text-center">No agents found.</td>
                                            </tr>
                                        @else
                                            @foreach ($agents as $agent)
                                                <tr class="table-custom">
                                                    <td style="width: 280px;">
                                                        <div class="property-thumb-wrapper">
                                                            <div class="property-thumb image-hover-effect-two position-relative text-center">
                                                                <img src="{{ Storage::url($agent->image) }}" alt="image">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="property-title-box d-flex align-items-center gap-10">
                                                            <div>
                                                                <h3 class="property-title underline">{{ $agent->name }}</h3>
                                                                <p class="mb-5">{{ $agent->address }}</p>
                                                                <p class="mb-5">{{ $agent->email }}</p>
                                                                <p class="mb-5">{{ $agent->phone_number }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="recent-activity-list">
                                                            <li class="property-date mb-5">Add Date: <span
                                                                    class="property-add-date">{{ \Carbon\Carbon::parse($agent->created_at)->format('d M Y') }}</span></li>
                                                            <li class="property-date">Last Upate: <span
                                                                    class="property-last-date">{{ \Carbon\Carbon::parse($agent->updated_at)->format('d M Y') }}</span></li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-start gap-10">
                                                            <a href="{{ route('edit-agent.edit', $agent->id) }}" class="action-button edit">
                                                                <i class="fa-sharp fa-light fa-pen"></i>
                                                            </a>
                                                            <form
                                                                action="{{ route('delete-agent.destroy', $agent->id) }}"
                                                                method="POST" style="display: inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="action-button delete">
                                                                    <i class="fa-regular fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>

                            <div class="pagination__wrapper mt-30">
                                <div class="basic-pagination">
                                    <nav>
                                        <ul>
                                            {{-- Link ke halaman sebelumnya --}}
                                            @if ($agents->onFirstPage())
                                                
                                            @else
                                                <li>
                                                    <a href="{{ $agents->previousPageUrl() }}">
                                                        <i class="fa-regular fa-arrow-left"></i>
                                                    </a>
                                                </li>
                                            @endif
                            
                                            {{-- Link ke halaman-halaman --}}
                                            @foreach ($agents->links()->elements[0] as $page => $url)
                                                @if ($page == $agents->currentPage())
                                                    <li>
                                                        <a class="current" href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                            
                                            {{-- Link ke halaman berikutnya --}}
                                            @if ($agents->hasMorePages())
                                                <li>
                                                    <a href="{{ $agents->nextPageUrl() }}">
                                                        <i class="fa-regular fa-arrow-right"></i>
                                                    </a>
                                                </li>
                                            @endif
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
