<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Barcode</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">  
  <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  </head>
<body>
<div class="container">
    <br /><br /> 
    <a href="/">Generate</a> | <a href="/scan">Scan</a>
    <br /><br />
    <input type="text" id="scanner" />
</div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

  <script>

      $(document).ready(function () {

          $('#scanner').val('');  // Input field should be empty on page load
          $('#scanner').focus();  // Input field should be focused on page load 

          $('html').on('click', function () {
              $('#scanner').focus();  // Input field should be focused again if you click anywhere
          });

          $('html').on('blur', function () {
              $('#scanner').focus();  // Input field should be focused again if you blur
          });
          
          $('#scanner').on('input',function(e){

                if ($('#scanner').val() == '') {
                    return;  // Do nothing if input field is empty
                }

                console.log($('#scanner').val());

                $.ajax({
                    url: '/',
                    cache: false,
                    type: 'GET',
                    data: {
                        product_id: $('#scanner').val()
                    },
                    success: function (response) {
                        $('#scanner').val('');
                    }
                });
            });
            });

  </script>
</body>
</html>