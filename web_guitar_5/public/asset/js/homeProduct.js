$(document).ready(function () {
    // function loadPage() {

        // $(document).ready(function () {

            $('#example').DataTable({
                serverSide: true,
                ajax: "/getAllProduct",
                columns: [
                    { name: 'id' },
                    { name: 'name' },
                    { name: 'image' },
                    { name: 'price' },
                    { name: 'quantity' },
                    { name: 'description'},

                ],
                success: function (data) {
                    console.log(data);

                },
                error: function (data) {
                    alert('Fail to run load Category..');
                    console.log(data);
                }
            });
            // $.ajax({
            //     type: "get",
            //     url: "/getProductByCategory",
            //     data: data,
            //     cache: false,
            //     success: function (data) {
            //         console.log(data);
            //
            //     },
            //     error: function (data) {
            //         alert('Fail to run load Category..');
            //         console.log(data);
            //     }
            //
            // });
            // $('#example').DataTable({
            //
            //     // "ajax": '../ajax/data/arrays.txt'//
            // });
        // });
        // $.ajax({
        //     type: "get",
        //     url: "/getAllCategory",
        //     cache: false,
        //     success: function (data) {
        //         console.log('get request sent !');
        //         console.log('message: ' + data.message);
        //         if (data.status) {
        //             if (data.status) {
        //                 let html = ' <option value="0">Choose ...</option>';
        //
        //                 for (let i = 0; i < data.categories.length; i++) {
        //                     html += ' <option value="';
        //                     html += data.categories[i].id;
        //                     html += '">';
        //                     html += data.categories[i].name;
        //                     html += '</option>';
        //                 }
        //                 $('.load-cate').html(html);
        //                 if ($('#get-choose-cate').val() >= 0) {
        //                     $('.load-cate').val($('#get-choose-cate').val());
        //                 }
        //             }
        //         }
        //
        //     },
        //     error: function (data) {
        //         alert('Fail to run load Category..');
        //     }
        // });
        //
        // let select = $('#filter').val();
        // let data = {
        //     select: select
        // };
        // $.ajax({
        //     type: "get",
        //     url: "/getProductByCategory",
        //     data: data,
        //     cache: false,
        //     success: function (data) {
        //         console.log('get request sent !');
        //         console.log('message: ' + data.products[0].name);
        //         if (data.status) {
        //             let html = '';
        //             let total = 0;
        //
        //             for (let i = 0; i < data.products.length; i++) {
        //                 html += '<tr>\n' +
        //                     '                                            <td><img src="';
        //                 html += data.products[i].image;
        //                 html += '" alt="Avatar" style="width:100%"></td>\n' +
        //                     '                                            <td data-th="Product">\n' +
        //                     '                                                <h4 class="nomargin">';
        //                 html += data.products[i].name;
        //                 html += '</h4>\n' +
        //                     '                                            </td>\n' +
        //                     '                                            <td data-th="Price">$ ';
        //                 html += data.products[i].price;
        //                 html += '</td>\n' +
        //                     '                                            <td data-th="Quantity">\n' +
        //                     '                                                ';
        //                 html += data.products[i].quantity;
        //                 html += '\n' +
        //                     '                                            </td>\n' +
        //                     '                                            <td data-th="Subtotal" id="total-unit">$ ';
        //                 html += Math.round(data.products[i].quantity * data.products[i].price * 100.0 / 100.0);
        //                 html += '</td>\n' +
        //                     '                                            <td class="actions">\n' +
        //                     '                                                <a href="/adjust-id=';
        //                 html += data.products[i].id;
        //                 html += '" class="btn btn-success">+<i\n' +
        //                     '                                                            class="fa fa-refresh"></i></a>\n' +
        //                     '                                            </td>\n' +
        //                     '                                        </tr>';
        //
        //                 total += data.products[i].quantity * data.products[i].price;
        //             }
        //             $('.total').html('$ ' + total);
        //             $('tbody').html(html);
        //         }
        //     },
        //     error: function (data) {
        //         alert('Fail to run load Category..');
        //         console.log(data);
        //     }
        // });
    // }
    //
    // loadPage();
    //
    // $('.load-cate').on('change', function () {
    //     var select = $('.load-cate').val();
    //     var data = {
    //         select: select
    //     };
    //     $.ajax({
    //         type: "get",
    //         url: "/getProductByCategory",
    //         data: data,
    //         cache: false,
    //         success: function (data) {
    //             console.log('get request sent !');
    //             console.log('message: ' + data.message);
    //             if (data.status) {
    //                 let html = '';
    //                 let total = 0;
    //
    //                 for (let i = 0; i < data.products.length; i++) {
    //                     html += '<tr>\n' +
    //                         '                                            <td><img src="';
    //                     html += data.products[i].image;
    //                     html += '" alt="Avatar" style="width:100%"></td>\n' +
    //                         '                                            <td data-th="Product">\n' +
    //                         '                                                <h4 class="nomargin">';
    //                     html += data.products[i].name;
    //                     html += '</h4>\n' +
    //                         '                                            </td>\n' +
    //                         '                                            <td data-th="Price">$ ';
    //                     html += data.products[i].price;
    //                     html += '</td>\n' +
    //                         '                                            <td data-th="Quantity">\n' +
    //                         '                                                ';
    //                     html += data.products[i].quantity;
    //                     html += '\n' +
    //                         '                                            </td>\n' +
    //                         '                                            <td data-th="Subtotal" id="total-unit">$ ';
    //                     html += data.products[i].quantity * data.products[i].price;
    //                     html += '</td>\n' +
    //                         '                                            <td class="actions">\n' +
    //                         '                                                <a href="/adjust-id=';
    //                     html += data.products[i].id;
    //                     html += '" class="btn btn-success">+<i\n' +
    //                         '                                                            class="fa fa-refresh"></i></a>\n' +
    //                         '                                            </td>\n' +
    //                         '                                        </tr>';
    //
    //                     total += data.products[i].quantity * data.products[i].price;
    //                 }
    //                 $('.total').html('$ ' + total);
    //                 $('tbody').html(html);
    //
    //             }
    //         },
    //         error: function (data) {
    //             alert('Fail to run load Category..');
    //             console.log(data);
    //         }
    //     });
    //
    // });

});