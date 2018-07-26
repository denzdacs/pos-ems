<!-- Large modal -->
<div class="modal fade" id="pos-add-item" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pick an Item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <table id="items" class="table table-striped" style="width: 100%;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Item</th>
                    <th>Image</th>
                    <th>Stock</th>
                    <th>Price</th>
                    <th>Purchase Qty</th>
                    <th style="display:none;">hidden</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr class="table_row item{{$item->id}}">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <img class="inventoryimage" src="{{ asset('images/item_pics/' . $item->image)}}" alt="Update Image"></image>
                        </td>
                        <td>{{ $item->stock }}</td>
                        <td>{{ $item->retail_price }}</td>
                        <td>
                            <input type="number" style="width: 83px;" name="qty" id="qty-input" value="1" min='1'/>
                        </td>
                        <td style="display:none;">{{ $item->original_price }}</td>
                        <td>
                            <button type="button" data-id="{{$item->id}}" class="btn btn-primary add-item-btn"><i class="fa fa-plus"></i> Add</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
