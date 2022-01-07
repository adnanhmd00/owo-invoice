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
        #blink {
            color: #2d38be;
            transition: 0.5s;
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
                  <small class="text-primary">It is recommended to clear table after previous invoice work is completed or if you're uploading any new excel.</small>
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

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Message</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">&times;</button>
              </div>
              <div class="modal-body text-center">
                <p>If You Haven't Added Products Name, HSN & GST, The invoice will not show accurate data.</p>
                <p class="small" id="blink">It's recommended to add Products Name, HSN & GST first.</p>
              </div>
            </div>
          </div>
        </div>

    <script type="text/javascript">
        $(window).on('load', function() {
            $('#staticBackdrop').modal('show');
        });
    </script>
    <script type="text/javascript">
        var blink = document.getElementById('blink');
        setInterval(function() {
            blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
        }, 500);
    </script>
    </section>
  </div>
</body>