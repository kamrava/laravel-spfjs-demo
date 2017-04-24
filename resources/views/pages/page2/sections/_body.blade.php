<section id="page2">
  <h2>Users List</h2>
  <table id="UsersList" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Age</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Age</th>
              <th>Salary</th>
            </tr>
        </tfoot>
        <tbody>
          @foreach ($users as $user)
            <tr>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->salary }}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
</section>
