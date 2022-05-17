<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Checkout example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style>
    .save {
        /* display: none; */
        background: #32AD60;
        color: #ffffff;

        &:hover {
            background: darken(#32AD60, 10%);
        }
    }

    .edit {
        display: none;
        background: #2199e8;
        color: #ffffff;

        &:hover {
            background: darken(#2199e8, 10%);
        }
    }

    .delete {
        display: none;
        background: #EC5840;
        color: #ffffff;

        &:hover {
            background: darken(#EC5840, 10%);
        }
    }
    </style>
</head>

<body class="bg-light">

    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg"
                alt="" width="72" height="72">
            <h2>Create Event</h2>

        </div>

        <div class="row">

            <div class="col-md-12 order-md-1">
                <h4 class="mb-3">Event Details</h4>
                <form class="needs-validation" id="createevent" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Event name</label>
                            <input type="text" class="form-control" name="eventname" id="eventname" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                Valid Event name is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Description</label>
                        <textarea row=5 type="text" class="form-control" name="description" id="description"
                            placeholder="1234 Main St" required></textarea>
                        <div class="invalid-feedback">
                            Please enter your Event desctiption.
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Start name</label>
                            <input type="date" class="form-control" name="start_date" id="start_date" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                Valid Start date is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">End name</label>
                            <input type="date" class="form-control" name="end_date" id="end_date" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                Valid End date is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Organizerr</label>
                            <input type="text" class="form-control" name="organizer" id="organizer" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                Valid Organizer name is required.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">

                            <button id="addNewRow" type="button" class="btn btn-primary btn-sm add">Add New Row</button>
                        </div>
                    </div>




                    <hr class="mb-4">

                    <table class="table data table-bordered table-striped table-hover table-condensed  text-center"
                        id="myTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Actions </th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="data"><input type="text" class="ticket_id" id="id0" name="ticket_id[]"></td>
                                <td class="data"><input type="text" class="ticket_name" name="ticket_name[]" id="name0">
                                </td>
                                <td class="data"><input type="text" class="price" name="price[]" step="0.01"
                                        id="price0"></td>
                                <td>
                                    <button class="save">Save</button>
                                    <button class="edit">edit</button>
                                    <button class="delete">delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="button">Continue to checkout</button>
                </form>
            </div>


        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>




    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>


    <!-- Placed at the end of the document so the pages load faster 
        -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>



    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js">
    </script>

    <script>
    $.validator.prototype.checkForm = function() {
        this.prepareForm();
        for (var i = 0, elements = (this.currentElements = this.elements()); elements[i]; i++) {
            if (this.findByName(elements[i].name).length != undefined && this.findByName(elements[i].name).length >
                1) {
                for (var cnt = 0; cnt < this.findByName(elements[i].name).length; cnt++) {
                    this.check(this.findByName(elements[i].name)[cnt]);
                }
            } else {
                this.check(elements[i]);
            }
        }
        return this.valid();
    };
    $.validator.addMethod('uniquevalue', function(value, element, param) {
        // console.log(value);
        // console.log(element);
        // console.log(param);
        // console.log($('[name="ticket_id[]"]').val());
        var values = $("input[name='ticket_id[]']")
            .map(function() {
                return $(this).val();
            }).get();
        // console.log(values.filter(n => n));
        var as = values.filter(n => n);
        // console.log(as);
        // console.log((new Set(as)).size);
        // console.log(as.length);
        // console.log((new Set(as)).size !== as.length);
        return (new Set(as)).size == as.length;
        // return true;
        // return this.optional(element) || (element.files[0].size <= param)
    }, 'Please Enter the Unique ID NO');


    $.validator.addMethod('positiveNumber',
        function(value) {
            return Number(value) > 0;
        }, 'Enter a positive number.');

    // $.validator.addMethod('floatonly',
    //     function(value) {
    //         return Number(value) > 0;
    //     }, 'Enter a positive number.');

    $.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },
        "Please check your input."
    );


    $(".btn-block").click(function() {
        var a = [];
        $('[name="ticket_id[]"]').each(function(id) {
            a.push($(this).val());
        });
        console.log((new Set(a)).size !== a.length);
        a = [];

        $('[name="ticket_id[]"]').each(function(id) {
            // console.log($(this));
            $(this).rules("add", {
                uniquevalue: "asd",
                positiveNumber: "",
                // ignore: "#hidden",
                digits: true,
                required: true,
                maxlength: '50',
                messages: {
                    required: "Please enter the option.",
                    digits: "Please enter Integer."
                }
            });
        });
        $('[name="ticket_name[]"]').each(function(id) {
            // console.log($(this));
            $(this).rules("add", {
                // ignore: "#hidden",
                required: true,
                digits: true,
                maxlength: '50',
                uniquevalue: "asd",
                positiveNumber: "",
                // messages: {
                //     required: "Please enter the option.",
                //     maxlength: "Please enter less then 50 characters."
                // }
            });
        });
        $('[name="price[]"]').each(function(id) {
            console.log($(this));
            $(this).rules("add", {
                uniquevalue: "asd",
                positiveNumber: "",
                // regex: "\d{1,5},\d{1,2}|\d{1,7}",
                // regex: "/^[0-9]*([.,][0-9]+)?$/",
                // ignore: "#hidden",
                required: true,
                maxlength: '50',
                // messages: {
                //     required: "Please enter the option.",
                //     maxlength: "Please enter less then 50 characters."
                // }
            });
        });
        $('#createevent').valid();
    });
    $("#createevent").validate({
        rules: {
            eventname: {
                required: true,
                // email: {
                //     depends: function(element) {
                //         return $("#contactform_email").is(":checked");
                //     }
                // }
            },
            description: {
                required: true,
            },
            start_date: {
                required: true,
            },
            end_date: {
                required: true,
            },
        }
    });
    </script>
    <script>
    $(document).on('click', '.edit', function() {
        $(this).parent().siblings('td.data').each(function() {
            $($(this).find("input"))
                .show();

            $($($(this).find("div")).remove())
            //  console.log();

        });

        $(this).siblings('.save').show();
        $(this).siblings('.delete').hide();
        $(this).hide();
    });

    $(document).on('click', '.save', function() {
        // console.log($(this).parent());
        // console.log($(this).parent().siblings('td.data'));
        // console.log($(this).parent().siblings('td.data').find("input"));
        $(this).parent().siblings('td.data').find("input").each(function() {
            var content = $(this).val();
            $(this).hide();
            $(this).after("<div>" + content + "</div>");
            $(this).contents().unwrap();
        });
        $(this).siblings('.edit').show();
        $(this).siblings('.delete').show();
        $(this).hide();

    });


    $(document).on('click', '.delete', function() {
        // console.log($(this).parents('tr'));
        $(this).parents('tr').remove();
    });

    $('.add').click(function() {
        var rowCount = $('#myTable >tbody >tr').length;
        // console.log(rowCount);

        // $(this).parents('table').append(
        $('#myTable').append(
            '<tr><td class="data" id="' + rowCount +
            '"><input type="text" name="ticket_id[]"  class="ticket_id" id="id' + rowCount +
            '" ></td><td class="data"><input type="text" class="ticket_name" id="name' + rowCount +
            '" name = "ticket_name[]" ></td><td class="data"><input type="text" class="price" id="price' +
            rowCount +
            '" name="price[]"  ></td > < td > < button class = "save" > Save < /button><button class="edit">Edit</button > < button class = "delete" > Delete < /button></td > < /tr>'
        );
    });
    </script>
</body>

</html>