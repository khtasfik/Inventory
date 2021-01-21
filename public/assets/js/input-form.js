$(function() {
    // Start counting from the third row
    var counter = 2;

    $("#insertRow").on("click", function(event) {
        event.preventDefault();

        var newRow = $("<tr>");
        var cols = "";

        // Table columns
        cols += '<th scrope="row">' + counter + "</th>";
        cols +=
            '<td><input class="form-control rounded-0" type="text" name="product[]" placeholder="Product"></td>';
        cols +=
            '<td><input class="form-control rounded-0" type="number" name="unit[]" placeholder="Unit Cost"></td>';
        cols +=
            '<td><input class="form-control rounded-0" type="number" name="quantity[]" placeholder="Quantity"></td>';
        cols +=
            '<td><input class="form-control rounded-0" type="number" name="fquantity[]" placeholder="Free Quantity"></td>';
        cols +=
            '<td><input class="form-control rounded-0" type="number" name="stotal[]" placeholder="Sub Total"></td>';
        cols +=
            '<td><button class="btn btn-danger rounded-0" id ="deleteRow"><i class="fa fa-trash"></i></button</td>';

        // Insert the columns inside a row
        newRow.append(cols);

        // Insert the row inside a table
        $("table").append(newRow);

        // Increase counter after each row insertion
        counter++;
    });

    // Remove row when delete btn is clicked
    $("table").on("click", "#deleteRow", function(event) {
        $(this)
            .closest("tr")
            .remove();
        counter -= 1;
    });
});

// document.querySelector("#update-form").addEventListener("submit", e => {
//     e.preventDefault();
//     var formData = new FormData(e.target);
//     fetch("{{ route('purchase.store') }}", {
//         method: "POST",
//         body: formData
//     }).then(() => console.log("success"));
// });

// function placeOrder(form) {
//     form.submit();
// }
