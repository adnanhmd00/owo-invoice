<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HSN Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

    <style>
        ::-webkit-scrollbar {
        width: 10px;
        }
    </style>
</head>
<body>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid text-center">
        <div class="row mb-2">
        </div>
      </div>
    </section>
    <section class="content">
        <div class="card p-3" style="width: 650px; margin: 0 auto;">
            <div class="mt-5 text-center">
                <div class="container">
                  @if(Session::get('success'))
                      <div class="alert alert-success">
                          {{session::get('success')}}
                      </div>
                  @endif
                  <a href="/" class="btn btn-primary btn-sm">Go Home</a>
                  <h1>Bulk Excel Upload</h1>
                  <small class="text-primary">It is recommended to clear table after previous work is completed or fresh excel is being uploaded.</small>
                </div>
                <form action="{{ route('bulk-excel-import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <div class="custom-file text-left">
                            <input type="file" name="file" class="custom-file-input" id="customFile" required>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <button class="btn btn-primary">Upload Excel</button>
                    <a class="btn btn-primary" href="{{ asset('excel-import-template.xlsx') }}">Download Sample</a>
                    <a class="btn btn-primary" href="{{ route('truncateTable') }}">Clear Table</a>
                </form>
            </div>
        </div>
    </section>
  </div>
</body>