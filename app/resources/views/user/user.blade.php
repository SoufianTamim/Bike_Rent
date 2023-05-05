<x-master-layout>

             <!-- Page Content -->
    <div class="main-body">
      <div class="promo_card">
        <h1>Users</h1>
         <div class="link-cont">
          <a href="" class="link">add user</a>
        </div>
      </div>


    <div class="history_lists">
          <table>
            <thead>
              <tr>
                <th>id</th>
                <th>fullname</th>
                <th>c.i.n</th>
                <th>email</th>
                <th>phone</th>
                <th>address</th>
                <th>birthdate</th>
                <th>penalities</th>
                <th>status</th>
                <th>actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                  
              <tr>
                <td>{{ $user->user_id }}</td>
                <td>{{ $user->fullname }}</td>
                <td>{{ $user->cin }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->birthdate }}</td>
                <td>{{ $user->penalities }}</td>
                <td>{{ $user->status }}</td>
                <td>
                  <a href="/user/edit/{{$user->user_id}}">edit</a>
                  <a href="/user/ban/{{$user->user_id}}">banuser</a>
                </td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
         <div class="pagination-container">
            {{ $users->links() }}
        </div>
</x-master-layout>