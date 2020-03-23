<div class="card-header">{{$title}}</div>
<div class="card-body">
    <form method="POST" action="{{route($url)}}">
        @csrf

        <div class="form-group row">
            <label for="{{$nameField}}" class="col-md-4 col-form-label text-md-right"> {{$field1}} </label>

            <div class="col-md-6">
                <input id="{{$nameField}}" type="text" class="form-control  @error('{{$nameField}}') is-invalid @enderror" name="{{$nameField}}" required autocomplete="{{$nameField}}" autofocus>

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
                <input id="{{$emailField}}" type="{{$emailField}}" class="form-control @error('{{$emailField}}') is-invalid @enderror" name="{{$emailField}}" required autocomplete="{{$emailField}}">

                @error('{{$emailField}}')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="{{$passwordField}}" class="col-md-4 col-form-label text-md-right"> {{$field3}} </label>

            <div class="col-md-6">
                <input id="{{$passwordField}}" type="{{$passwordField}}" class="form-control @error('{{$passwordField}}') is-invalid @enderror" name="{{$passwordField}}" required autocomplete="new-{{$passwordField}}">

                @error('{{$passwordField}}')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="{{$passwordField}}-confirm" class="col-md-4 col-form-label text-md-right">{{$field4}}</label>

            <div class="col-md-6">
                <input id="{{$passwordField}}-confirm" type="{{$passwordField}}" class="form-control" name="{{$passwordConfirmationField}}" required autocomplete="new-{{$passwordField}}">
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