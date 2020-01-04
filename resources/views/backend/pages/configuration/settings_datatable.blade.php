<script type="text/javascript">
    $(document).ready(function () {
        var table = $('#dataTable').DataTable({
            "processing": true,
            "ordering": true,
            "serverSide": true,
            "dom": '<"top">rt<"bottom"ip><"clear">',
            "ajax": {
                "url": "{{ route('settings.data') }}",
                "dataType": "json",
                "type": "POST",
                "data": {
                    "_token": "{{csrf_token()}}"
                }
            },
            "columns": [
                {
                    "data": "label",
                    "sortable": false
                },
                {
                    "data": "name",
                    "sortable": false
                },
                {
                    "data": "is_active",
                    "sortable": false,
                    "render": function (data, type, row, meta) {
                        if (row.is_active === 0) {
                            return `<a  href="${row.approve_url}" onclick="approve(this)"   class="text-center">
    <span class="text-red-500" title="Approve now"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-toggle-left"><rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect><circle cx="8" cy="12" r="3"></circle></svg></span>
 </a>`;
                        } else {
                            return `<a  href="${row.approve_url}" onclick="approve(this)"  class="text-center"><span title="Disapprove now" class="text-green-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-toggle-right"><rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect><circle cx="16" cy="12" r="3"></circle></svg></span></a>`;
                        }
                    }
                },
                {
                    "data": "is_api_accessible",
                    "sortable": false
                },
                {
                    "data": "group",
                    "sortable": false
                },
                {
                    "data": "",
                    "sortable": false,
                    "render": function (data, type, row, meta) {
                        return `<div class="flex justify-end">
                                <a href="${row.edit_url}" class="px-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path class="heroicon-ui text-gray-100" d="M17.56 17.66a8 8 0 01-11.32 0L1.3 12.7a1 1 0 010-1.42l4.95-4.95a8 8 0 0111.32 0l4.95 4.95a1 1 0 010 1.42l-4.95 4.95zm-9.9-1.42a6 6 0 008.48 0L20.38 12l-4.24-4.24a6 6 0 00-8.48 0L3.4 12l4.25 4.24zM11.9 16a4 4 0 110-8 4 4 0 010 8zm0-2a2 2 0 100-4 2 2 0 000 4z"/></svg>
                                </a>
                                <a href="${row.edit_url}" class="px-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path enable-background="new 0 0 512 512" class="heroicon-ui text-gray-100" d="M6.3 12.3l10-10a1 1 0 011.4 0l4 4a1 1 0 010 1.4l-10 10a1 1 0 01-.7.3H7a1 1 0 01-1-1v-4a1 1 0 01.3-.7zM8 16h2.59l9-9L17 4.41l-9 9V16zm10-2a1 1 0 012 0v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6c0-1.1.9-2 2-2h6a1 1 0 010 2H4v14h14v-6z"/></svg>
                                </a>
                                <a href="${row.delete_url}" class="px-1" onclick="deleteItem(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path class="heroicon-ui text-gray-100" d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 012 2v2h5a1 1 0 010 2h-1v12a2 2 0 01-2 2H6a2 2 0 01-2-2V8H3a1 1 0 110-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 011 1v6a1 1 0 01-2 0v-6a1 1 0 011-1zm4 0a1 1 0 011 1v6a1 1 0 01-2 0v-6a1 1 0 011-1z"/></svg>
                                </a>
                            </div> `;
                    }
                },
            ]
        });
        $('input[name="name"]').on('keyup', function () {
            table.search($('input[name="name"]').val()).draw();
        });
    });
    function approve(item) {
        event.preventDefault();
        alertify.confirm("Approve","Are you sure to Approve?",
            function () {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: item.href,
                    type: "PUT",
                    data: {_token: CSRF_TOKEN},
                    success: function (response) {
                        window.location.href = response.redirect_to;
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            },
            function () {}
        );
    }
    function deleteItem(item) {
        event.preventDefault();
        alertify.confirm( "Delete",
            "Are you sure to delete?",
            function () {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: item.href,
                    type: "POST",
                    data: {_token: CSRF_TOKEN, '_method': 'delete'},
                    success: function (response) {
                        window.location.href = response.redirect_to;
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            },
        function () {}
        );
    }
</script>

<!-- <script>
    $(document).ready(function() {
        $('#dataTable').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('settings.data') }}",
                "dataType": "json",
                "type": "POST",
                "data": {
                    "_token": "{{csrf_token()}}"
                }
            },
        } );
    } );
</script> -->
