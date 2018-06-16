@foreach ($users as $user)
<p>This is user {{ $user->id }} and {{ $user->name}}</p>
@endforeach