      {{-- Footer --}}
      <footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>Copyright © Lara-Auth <?php echo date("Y"); ?></small>
          </div>
        </div>
      </footer>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
      {{-- Scripts --}}
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
      <script src="{{ asset('js/sb-admin.min.js') }}"></script>
      <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
      {{-- Data table --}}
      <script>
        $(function() {
          $('#users-table').DataTable({
              processing: true,
              serverSide: true,
              ajax: 'http://lara-auth.test/users/data',
              columns: [
                  {data: 'id'},
                  {data: 'name'},
                  {data: 'email'},
                  {data: 'role'},
                  {data: 'action', name: 'action', orderable: false, searchable: false}
              ]
          });
        });
      </script>
    </div>
  </body>
  
  </html>