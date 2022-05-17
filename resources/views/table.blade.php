<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Checkout example for Bootstrap</title>

    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .table {
        width: 100%;

        thead {
            th {
                padding: 10px 10px;
                background: #00adee;
                font-size: 15px;
                text-transform: uppercase;
                vertical-align: top;
                color: #1D4A5A;
                font-weight: normal;
                text-align: left;
            }
        }

        tbody {
            tr {
                td {
                    padding: 10px;
                    background: #f2f2f2;
                    font-size: 14px;
                }
            }
        }
    }

    .add,
    .edit,
    .save,
    .delete {
        outline: none;
        background: none;
        border: none;
    }

    .edit,
    .save,
    .delete {
        padding: 5px 10px;
        cursor: pointer;
    }


    .add {
        float: right;
        background: transparent;
        border: 1px solid #ffffff;
        color: #ffffff;
        font-size: 13px;
        padding: 0;
        padding: 3px 5px;
        cursor: pointer;

        &:hover {
            background: #ffffff;
            color: #00adee;
        }
    }

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

<body class="">

    <table class="table data table-bordered table-striped table-hover table-condensed  text-center" id="myTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Actions <button class="add">Add new</button></th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td class="data"><input type="text" name="ticked_id[]"></td>
                <td class="data"><input type="text" name="ticked_name[]"></td>
                <td class="data"><input type="text" name="price[]"></td>
                <td>
                    <button class="save">Save</button>
                    <button class="edit">edit</button>
                    <button class="delete">delete</button>
                </td>
            </tr>
        </tbody>
    </table>


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



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
        $(this).parents('table').append(
            '<tr><td class="data" id="' + rowCount +
            '"><input type="text" name="ticked_id[]"  ></td><td class="data"><input type="text" name="ticket_name[]"  ></td><td class="data"><input type="text" name="price[]"  ></td><td><button class="save">Save</button><button class="edit">Edit</button> <button class="delete">Delete</button></td></tr>'
        );
    });
    </script>
</body>

</html>