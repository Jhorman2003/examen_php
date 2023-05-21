<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('INFORMACION DEL ESTUDIANTE') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="container">
                        <thead>
                            <tr>
      <th scope="col">Name</th>
      <th scope="col">last name</th>
      <th scope="col">Nombre de la carrera</th>
      <th scope="col">Numero</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($estudiantes as $estudiante)
    <tr>
      <td>{{$estudiante->name}}</td>
      <td>{{$estudiante->last_name}}</td>
      <td>{{$estudiante->carrera->Nom_Car}}</td>
      <td>{{$estudiante->Num}}</td>
      <td>{{$estudiante->email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
                    
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>