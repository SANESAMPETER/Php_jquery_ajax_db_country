

$(document).ready(function () {

    $("#country").on('change',function () { 

        var CountryId=$(this).val();

        $.ajax({ // on change 

             method:"POST",

            url: "ajax.php",

            data: {id:CountryId},

            dataType: "html",

            success: function (data) {

                $("#state").html(data);

            }

        });

    });

    $("#state").on('change',function () { 

        var stateId=$(this).val();

        $.ajax({

             method:"POST",

            url: "ajax.php",

            data: {stateId:stateId},

            dataType: "html",

            success: function (data) {

                $("#city").html(data);

            }

        });

    });




    





});