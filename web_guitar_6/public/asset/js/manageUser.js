
$(document).ready(function () {
    $('#allUser').DataTable({
        serverSide: true,
        ajax: "/getAllUser",
        columns: [
            { name: 'id' },
            { name: 'name' },
            { name: 'email' },
            { name: 'created_at' },
            // { name: 'updated_at' }
        ],
        success: function (data) {
            console.log(data);
        },
        error: function (data) {
            alert('Fail to run load ...');
            console.log(data);
        }
    });
    $('#allUser').css('width','100%');
});