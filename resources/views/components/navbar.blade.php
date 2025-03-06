<nav class="bg-gray-800 p-4">
  <div class="container mx-auto flex justify-between items-center">
      <a href="{{ url('/') }}" class="text-white text-lg font-bold">MyWebsite</a>
      <ul class="flex space-x-4">
          <li><a href="{{ url('/') }}" class="text-white hover:text-gray-300">Home</a></li>
          <li><a href="{{ url('/dashboard') }}" class="text-white hover:text-gray-300">Dashboard</a></li>
          <li><a href="{{ url('/profile') }}" class="text-white hover:text-gray-300">Profile</a></li>
          <li><a href="{{ url('/settings') }}" class="text-white hover:text-gray-300">Settings</a></li>
          <li><a href="{{ url('/login') }}" class="text-white hover:text-gray-300">Login</a></li>
      </ul>
  </div>
</nav>
