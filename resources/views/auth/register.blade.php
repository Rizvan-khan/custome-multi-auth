<form method="POST" action="{{ route('auth.register') }}">
    @csrf
    <input type="text" name="name" placeholder="Admin Name" required>
    <input type="email" name="email" placeholder="Admin Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form>
