
document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');

    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('show-sidebar');
        });
    }
});



//Country setup jquery in addres form 

    $(document).ready(function() {
        $('#country').on('change', function() {
            var country_id = $(this).val();
            if (country_id) {
                $.ajax({
                    url: '/get-states/' + country_id,
                    type: 'GET',
                    success: function(data) {
                        $('#state').html('<option value="">Select State</option>');
                        $.each(data, function(key, value) {
                            $('#state').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            }
        });

        $('#state').on('change', function() {
            var state_id = $(this).val();
            if (state_id) {
                $.ajax({
                    url: '/get-cities/' + state_id,
                    type: 'GET',
                    success: function(data) {
                        $('#city').html('<option value="">Select City</option>');
                        $.each(data, function(key, value) {
                            $('#city').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            }
        });

        $('#city').on('change', function() {
            var city_id = $(this).val();
            if (city_id) {
                $.ajax({
                    url: '/get-areas/' + city_id,
                    type: 'GET',
                    success: function(data) {
                        $('#area').html('<option value="">Select Area</option>');
                        $.each(data, function(key, value) {
                            $('#area').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            }
        });
    });


