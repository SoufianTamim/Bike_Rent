<x-master-layout>
    <!-- Page Content -->
    <div class="main-body">
      <div class="promo_card">
        <h1>bookings</h1>
        </div>
        <div class="history_lists">
          <table>
            <thead>
              <tr>
            <th>#</th>
            <th>period</th>
            <th>user id</th>
            <th>Bike id</th>
            <th>model</th>
            <th>price</th>
            <th>actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($bookings as $book)
              <tr>
            <td>{{ $book->book_id }}</td>
            <td><a href="book/view/{{$book->book_id}}">{{ $book->period }}</a></td>
            <td>{{ $book->user_id }}</td>
            <td>{{ $book->bike_id }}</td>
            <td>{{ $book->model }}</td>
            <td>{{ $book->price }}</td>
            <td>
                <a href="/book/edit/{{$book->book_id}}">edit</a>
                <a href="/book/delete/{{$book->book_id}}">delete</a>
              </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
</x-master-layout>
