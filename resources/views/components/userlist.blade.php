<div>
    <!-- <div $attributes->merge(["class"=>"alert alert-info"])> -->
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <h1>{{$title}}</h1>
    <div class="alert alert-{{$type??'info'}}" role="alert">
        @if(!empty($dismissable))
        <button type="button" class="close" data-dismiss="alert" aria-label="true">
            <span aria-hidden="true">&times;</span>
        </button>
        @endif
        @if(!empty($heading))
        <h4 class="alert-heading">
            {{$heading}}
        </h4>
        <p class="mb-0">
            {{$slot}}
        </p>
        @endif
    </div>

    <div class="mb-2">
        <a href="{{$cancelhref}}" class="btn btn-danger shadow">
            <i class="fa fa-fw fa-times"></i> Cancel
        </a>
        <a href="{{$addhref}}" class="btn btn-info shadow">
            <i class="fa fa-fw fa-save"></i> Add User
        </a>
    </div>

    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Edit/Delete</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="/edit/{{$user->id}}" class="fa fa-pencil-square-o fa-2x"></a>
                <a href="/delete/{{$user->id}}" class="fa fa-trash fa-2x"></a>
            </td>
        </tr>
        @endforeach
    </table>
    <div style="margin: 20px;">{!! $users->render() !!}</div>
</div>