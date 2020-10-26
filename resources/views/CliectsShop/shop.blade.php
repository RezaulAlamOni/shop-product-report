<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">Shop Name</th>
        <th scope="col">Total Sales Item</th>
        <th scope="col" width="35">Details</th>
    </tr>
    </thead>
    <tbody>
    @foreach($shops as $key => $shop)
        <tr>
            <td>{{ $shop->shop_name }}</td>
            <td>{{ $shop->total_item == null ? 0 : $shop->total_item }}</td>
            <td class="text-center">
                @if($shop->total_item)
                    <img class="deatails_up" onclick="detailsOpen(1,{{$key}},{{ $shop->id }})" id="deatails_up{{$key}}"
                         style="cursor:pointer;"
                         src="{{ asset('icon/up.png') }}" width="30">
                    <img class="deatails_down" onclick="detailsOpen(0,{{$key}},{{ $shop->id }})" id="deatails_down{{$key}}"
                         style="cursor:pointer;"
                         src="{{ asset('icon/down.svg') }}" width="30">
                @endif
            </td>
        </tr>
        <tr class="details-tr details-tr{{$key}}" >
            <td colspan="4" id="details-table{{$key}}">

            </td>
        </tr>


    @endforeach
    @if ($shops->count())
        <td colspan="4">Larry the Bird</td>
    @endif
    </tbody>
</table>
<script>
    $('.deatails_up').hide()
    $('.details-tr').hide()
</script>
