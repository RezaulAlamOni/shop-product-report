@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Client Shop List</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div>
                            <div class="input-group offset-8 mb-3 col-md-4">
                                <input type="text" class="form-control" onkeyup="searchShop()"
                                       placeholder="Search By product category"
                                       id="search-shop" >
                            </div>

                        </div>
                        <div id="shop-list">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>

        $(document).ready(function () {
            getShops();

        })

        /*------get all shops---------*/
        function getShops() {
            $.ajax({
                type: 'get',
                url: '/get-shops',
                data: '_token = <?php echo csrf_token() ?>',
                success: function (data) {
                    $('#shop-list').html(data.shops)
                }
            });
        }

        /*------hide show details---------*/
        function detalsOpen(type, index) {
            if (type == 1) {
                $('#deatails_up' + index).hide()
                $('#deatails_down' + index).show()
            } else {
                $('#deatails_up' + index).show()
                $('#deatails_down' + index).hide()
            }
        }

        /*------search shop by product cat---------*/
        function searchShop() {
            let search = $('#search-shop').val();
            if (search.length > 0) {
                $.ajax({
                    type: 'get',
                    url: '/get-shops?search='+search,
                    data: '_token = <?php echo csrf_token() ?>',
                    success: function (data) {
                        $('#shop-list').html(data.shops)
                    }
                });
            } else {
                getShops();
            }

        }
    </script>
@endsection
