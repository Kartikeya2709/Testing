

    <h1>Testing</h1>
{{ "Made By Kartikeya Sharma"}}

{{-- @if(session('data') && is_array(session('data')))
    @foreach (session('data') as $item)
        <h1>Hi My name is {{ $item['name'] }} and my email is {{ $item['email'] }} and my password is {{ $item['password'] }}</h1>
    @endforeach
@endif --}}

<form action="{{ route('testing.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <br>
    <input type="email" name="email" placeholder="Email">
    <br>
    <input type="password" name="password" placeholder="Password">
    <br>
    <button type="submit">Submit</button>
</form>

