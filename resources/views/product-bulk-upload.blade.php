@extends('layouts.navbar')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid text-center">
                <div class="row mb-2">
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card p-3" style="width: 650px; margin: 0 auto;">
                <div class="text-center">
                    <div class="container">
                        @if (Session::get('success'))
                            <div class="alert alert-success">
                                {{ session::get('success') }}
                            </div>
                        @endif
                        {{-- <a href="/" class="btn btn-primary btn-sm">Go Home</a> --}}
                        <h1>Bulk Excel Upload</h1>
                        <p>If You Haven't Added Products Name, HSN & GST, The invoice will not show accurate data.</p>
                        <p class="small" id="blink">It's recommended to add Products Name, HSN & GST first.</p>
                    </div>
                    <form action="{{ route('bulk-excel-import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4">
                            <div class="custom-file text-left">
                                <input type="file" name="file" class="custom-file-input" id="customFile" required>
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm">Upload Excel</button>
                        <a class="btn btn-primary btn-sm" href="{{ asset('excel-import-template.xlsx') }}">Download Sample</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('truncateTable') }}">Clear Table</a>
                    </form>
                </div>
            </div>

            {{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Message</h5>
                            <button type="button" class="btn-close" data-dismiss="modal"
                                aria-label="Close">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <p>If You Haven't Added Products Name, HSN & GST, The invoice will not show accurate data.</p>
                            <p class="small" id="blink">It's recommended to add Products Name, HSN & GST first.</p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </section>
    @endsection
