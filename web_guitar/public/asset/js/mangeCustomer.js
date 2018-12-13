
$(document).ready(function () {
    $(document).ready(function () {
        $('#allCustomer').DataTable({
            serverSide: true,
            processing: true,
            responsive: true,
            ajax: "/getAllCustomerByLaratable",
            columns: [
                { name: 'id' },
                { name: 'name' },
                { name: 'email' },
                { name: 'created_at' },
                { name: 'action',orderable: false, searchable: false }
            ],
        });
        $('#allCustomer').css('width','100%');
    });
});