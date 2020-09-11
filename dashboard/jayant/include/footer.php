

</div><!-- sl-pagebody -->
      <footer class="sl-footer">
        <div class="footer text-center">
          <div class="mg-b-2 d-block text-center">Copyright &copy; 2020. Jayant Sharma. All Rights Reserved.</div>
        </div>
       
      </footer>
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="./lib/jquery/jquery.js"></script>
    <script src="./lib/popper.js/popper.js"></script>
    <script src="./lib/bootstrap/bootstrap.js"></script>
    <script src="./lib/jquery-ui/jquery-ui.js"></script>

    <script src="./js/starlight.js"></script>
    <script src="./js/dashboard.js"></script>
    <script>
      //Delete Alert
        $(document).on("click","#delete", function(e){
          e.preventDefault();
          var link = $(this).attr("href");
            swal({
              title: "Are you sure?",
              text: "Delete for everytime!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                window.location.href = link;
              } else {
                swal("Your file is safe!");
              }
            });
        });

        // alert
        $('.alert').alert();
    </script>
    
  </body>
</html>
