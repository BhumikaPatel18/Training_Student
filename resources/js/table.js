$(function () {
    var table = $('#myTable').DataTable({
        serverSide: true,
        processing: true,
        ajax: {
            url : 'students-getdata',
            type : 'GET'
        },
        columns: [
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'dob', name: 'dob'},
            {data: 'address', name: 'address'},
            {data: 'country', name: 'country'},
            {data: 'state', name: 'state'},
            {data: 'hobby', name: 'hobby'},

        ]
    });


    });
