<div class="card-header">{{$title}}</div>
<div class="card-body">
    <form method="POST" action="{{url($routeUrl)}}">
        @csrf
        <input type="hidden" name="id" value="{{$user->id}}">
        <div class="form-group row">
            <label for="{{$nameField}}" class="col-md-4 col-form-label text-md-right"> {{$field1}} </label>

            <div class="col-md-6">
                <input id="{{$nameField}}" type="text" class="form-control  @error('{{$nameField}}') is-invalid @enderror" name="{{$nameField}}" value="{{$user->name}}" required autocomplete="{{$nameField}}" autofocus>

                @error('{{$nameField}}')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="{{$emailField}}" class="col-md-4 col-form-label text-md-right"> {{$field2}} </label>

            <div class="col-md-6">
                <input id="{{$emailField}}" type="{{$emailField}}" class="form-control @error('{{$emailField}}') is-invalid @enderror" name="{{$emailField}}" value="{{$user->email}}" required autocomplete="{{$emailField}}">

                @error('{{$emailField}}')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{$title}}
                </button>
            </div>
        </div>
    </form>
</div>