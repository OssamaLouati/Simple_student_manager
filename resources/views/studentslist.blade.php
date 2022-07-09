
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
      @foreach($students as $student)
    <tr>
      <td>{{$student->Cne}}</td>
      <td>{{$student->FirstName}}</td>
      <td>{{$student->SecondName}}</td>
      <td>{{$student->Age}}</td>
      <td>{{$student->Speciality}}</td>
      <td>
          <a href="#" class="btn-sm btn-info">Show</a>
          <a href="{{ url('/edit/'.$student->id) }}" class="btn-sm btn-info">Edit</a>
          <a href="{{ url('/delete/'.$student->id) }}" class="btn-sm btn-info">delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
