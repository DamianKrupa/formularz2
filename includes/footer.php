    <div id="footer">
      <?php 
        $dataczas = new DateTime();
        echo 'Wszystkie prawa zastrzeżone '  . $dataczas->format('d.m.y, h:i:s');

      ?>
    </div>
  </div>
  
  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script src="js/testy.js"></script>

    <script>
  $( function() {
    $( "#dob" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: "-100:+10",
      dateFormat: "y-m-d"
    });
  } );
  </script>




  </body>
</html>
