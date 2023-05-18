<x-main>

<div class="container py-4">

    <form action="{{route('send')}}" method="POST">
        @method('post')
        @csrf
      <div class="mb-3">
        <label class="form-label">Nome</label>
        <input class="form-control" name="name" type="text" placeholder="Nome" value="{{old('name')}}"/>
        @error('name')
        {{$message}}
        @enderror
      </div>
  
      <!--  -->
      <div class="mb-3">
        <label class="form-label">Telefono</label>
        <input class="form-control" name="telephone" type="numeric" placeholder="" value="{{old('telephone')}}"/>
      </div>
    <!--  -->
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input class="form-control" name="email" type="email" placeholder="Email" value="{{old('email')}}"/>
      </div>
      <!-- -->
      <div class="mb-3">
        <label class="form-label" >Messaggio</label>
        <textarea class="form-control" name="message" type="text" placeholder="Messaggio" style="height: 10rem;">{{old('text')}}</textarea>
      </div>
  
      <!--  -->
      <div class="d-grid">
        <button class="btn btn-primary btn-lg p-2" type="submit">Invia</button>
      </div>
      @if($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li> {{ $error }}</li>
              @endforeach
          </ul>
    </div>
   @endif
    </form>
  
  </div>
     
    </body>
</html>
</x-main>