$(document).ready(function() {
    $('#apply-filter-btn').click(function() {
        var color = $('input[name="color-slider"]').val();
        var clarity = $('input[name="clarity-slider"]').val();
        var carat = $('input[name="carat-slider"]').val();
        var c = $('input[name="cut-slider"]').val();
        var color = $('input[name="price-slider"]').val();
      // Get the form data
      var formData = $('#filter-form').serialize();
      console.log(formData);
      return;
      // Send an AJAX request to the server
      $.ajax({
        type: 'POST',
        url: 'your-server-url.php',
        data: formData,
        success: function(response) {
          // Handle the server response
          console.log(response);
        },
        error: function(xhr, textStatus, errorThrown) {
          // Handle the AJAX error
          console.log(errorThrown);
        }
      });
    });
  });