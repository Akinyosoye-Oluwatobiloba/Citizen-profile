@include('layouts.app')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Search Citizen Records') }}</div>
                    <div class="card-body">
                        <form method="GET" action="{{ route('search') }}" id="search-form">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="search" placeholder="Search by ID, Name or Gender">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Citizen Records') }}</div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                </tr>
                            </thead>
                            <tbody id="citizens-table">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function() {
            // Handle the search form submission
            $('#search-form').submit(function(event) {
                event.preventDefault();
                var searchValue = $('input[name=search]').val();
                $.ajax({
                    url: "{{ route('search') }}",
                    type: "GET",
                    data: { search: searchValue },
                    dataType: 'json',
                    success: function(data) {
                        // Clear the existing results from the table
                        $('#citizens-table').empty();
                        // Add the new results to the table
                        $.each(data, function(index, citizen) {
                            var row = $('<tr>').appendTo('#citizens-table');
                            $('<td>').text(citizen.id).appendTo(row);
                            $('<td>').html('<a href="{{ route('citizen.show', ['id' => '1']) }}/' + citizen.id + '">' + citizen.name + '</a>').appendTo(row);
                            $('<td>').text(citizen.gender).appendTo(row);
                        });
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
            });
        });
    </script>