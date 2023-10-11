<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>STUDENT DATA LIST</title>
  </head>
  <body>
    <h1 class="text-center mt-4 mb-4"><b>Student Data List</b></h1>

    <div class="container">
        <a href="/addstudent" class="btn btn-success">Add Data +</a>
        
        <div class="row g-3 align-items-center mt-2 mb-2" >
          <div class="col-auto">
            <form action="/student" method="GET">
              <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline" placeholder="Search ID...">
            </form>
          </div>
        <div class="col-auto">
          <a href="/exportpdf" class="btn btn-warning">Export PDF</a>
        </div>
        <div class="col-auto">
          <a href="/exportexcel" class="btn btn-success">Export Excel</a>
        </div>

        <div class="col-auto">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" id="btn" data-bs-target="#exampleModal">
              Import Excel
          </button>        
        </div>

        <!-- Modal -->
        <div class="modal fade" id="goalmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Import Excel</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="/importexcel" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <input type="file" name="file" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Import</button>
              </div>
            </div>
          </form>
          </div>
        </div>

        <div class="container">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">ID Number</th>
                <th scope="col">Faculty</th>
                <th scope="col">Course</th>
                <th scope="col">Contact No.</th>
                <th scope="col">Name of Programme/Certification</th>
                <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
            @php
              $no = 1;
            @endphp
            @foreach ($data as $index => $row)
                <tr>
                <th scope="row">{{$index + $data->firstItem()}}</th>
                <td>{{$row->ind_name}}</td>
                <td>{{$row->ind_id_number}}</td>
                <td>{{$row->faculty}}</td>
                <td>{{$row->courses}}</td>
                <td>{{$row->ind_contact_no}}</td>
                <td>{{$row->name_of_programmeOrCert}}</td>
                <td>
                    <a href="/showdata/{{$row->id}}" class="btn btn-info">Edit</a>
                    <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-ind_name="{{$row->ind_name}}" >Delete</a>
                  </td>
                </tr>
            @endforeach
            </tbody>
            </table>
            {{$data->links()}}
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  

  <script>
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-secondary'
      },
      buttonsStyling: false,
      allowOutsideClick: false, // Disable automatic dismissal
      showCloseButton: true, // Show the close button
      })

      $('.delete').click(function(){
        var id = $(this).data('id');
        var name = $(this).data('ind_name');

        console.log('Delete button clicked');
        swalWithBootstrapButtons.fire({
          title: 'Are you sure?',
          text: "You will delete "+name+" data!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, cancel!',
          reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
              window.location = "/deletedata/"+id+"";
              swalWithBootstrapButtons.fire(
                'Deleted!',
                'The data has been deleted.',
                'success'
              )
              Swal.close();
            } else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {
              swalWithBootstrapButtons.fire(
                'Cancelled',
                'The data is safe!',
                'error'
              )
            }
        });  

      });
  </script>

  <script>
    @if(Session::has('add-success'))
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })

    Toast.fire({
      icon: 'success',
      title: '{{ Session::get('add-success') }}'
    })
    @endif

    @if(Session::has('update-success'))
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })

    Toast.fire({
      icon: 'success',
      title: '{{ Session::get('update-success') }}'
    })
    @endif

    @if(Session::has('delete-success'))
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })

    Toast.fire({
      icon: 'success',
      title: '{{ Session::get('delete-success') }}'
    })
    @endif

  </script>

  <script type="text/javascript">
    $('#btn').on('click', function () {
      $('#goalmodal').modal('show');
    });
  </script>

</body>
</html>