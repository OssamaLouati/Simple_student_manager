<div style="display: flex;" class="card mb-3">
<center>
  <img class="card-img-top" style=" display:flex; height:auto; width:300px; right:-20px" src="http://www.inpt.ac.ma/sites/default/files/article/image/inpt%20_0.png" alt="Card image cap">
  </center>
  <div class="card-body">
    <h5 class="card-title">INPT Management System</h5>
    <p class="card-text">You will find here the INPT student.</p>
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
            <a href="{{ url('/edit/'.$student->id) }}" class="btn-sm btn-warning">Edit</a>
            <a href="{{ url('/delete/'.$student->id) }}" class="btn-sm btn-danger">delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>







