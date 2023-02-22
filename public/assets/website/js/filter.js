$(document).ready(function() {
    $('#apply-filter-btn').click(function() {
        let colorSliderValues = colorSlider.value;
        var claritySliderValues = claritySlider.value;
        var cutSliderValues = cutSlider.value;
        var priceSliderValues = priceSlider.value;
        var caratSliderValues = caratSlider.value;
    
        
        var data = {
            color: colorSliderValues,
            clarity: claritySliderValues,
            carat: caratSliderValues,
            cut: cutSliderValues,
            price: priceSliderValues
        }
      
      $.ajax({
        type: 'POST',
        url: base_url,
        data: data,
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