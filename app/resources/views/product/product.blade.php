<x-master-layout>
    <!-- Page Content -->
    <div class="main-body">
      <div class="promo_card">
        <h1>Products</h1>
        <div class="link-cont">
          <a href="{{route('new-product')}}" class="link">add product</a>
        </div>
        </div>


        <div class="history_lists">
          <table>
            <thead>
              <tr>
            <th>#</th>
            <th>name</th>
            <th>category</th>
            <th>condition</th>
            <th>model</th>
            <th>size</th>
            <th>weight</th>
            <th>speeds</th>
            <th>price</th>
            <th>maintenance</th>
            <th>location</th>
            <th>actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
              <tr>
            <td>{{ $product->product_id }}</td>
            <td><a href="product/view/{{$product->product_id}}">{{ $product->name }}</a></td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->condition }}</td>
            <td>{{ $product->model }}</td>
            <td>{{ $product->size }}</td>
            <td>{{ $product->weight }}</td>
            <td>{{ $product->speeds_number }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->maintenance_history }}</td>
            <td>{{ $product->location }}</td>
            <td>
                <a href="/product/edit/{{$product->product_id}}">edit</a>
                <a href="/product/delete/{{$product->product_id}}">delete</a>
              </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
        </div>
        <div class="pagination-container">
            {{ $products->links() }}
        </div>


</x-master-layout>
