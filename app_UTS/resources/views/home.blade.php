@extends('app')

@section('content')
<div class="container mt-4 d-flex justify-content-center">
    <img src="{{ Vite::asset('resources/images/main.png') }}" class="img-fluid" alt="main" style="width:600px">
    <div  style="width:600px">
    <div class="container ">
        <table class="ms-5 table-striped">
            <thead>
             <tr>
                <th class="h3">M.Fachrudin</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="h4">Nim: 1204200104</td>
              </tr>
              <tr>
                <td class="h4">Umur: 22</td>
              </tr>
              <tr>
                <td class="h4">Hobi: Main game dan nonton anime</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>
@endsection
