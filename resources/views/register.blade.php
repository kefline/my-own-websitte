<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  <style>
    .bg-image{
      background-image: url('path/public/images/image1.jpg');  background-size: cover;  background-position: center;  background-repeat: no-repeat;
    }
  </style>
</head>

<body class="bg-gray-900 flex justify-center items-center h-screen bg-image">


<div class="w-full max-w-lg ">

  <form class="bg-white shadow-md rounded px-6 pt-6 pb-8 mb-4 " action="/index" method="post">
    @csrf

    <div class="mb-4 ">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Username">
    </div>
    <div class="mb-4 ">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Email">
        Email
      </label>
      <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Email" type="email" placeholder="Email">
    </div>
    <div class="mb-4 ">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder=".................">
      <p class="text-blue-800 text-xs italic">Enter a strong password.</p>
    </div>
    <div class="mb-6">
      <label class="block text-gray-500 text-sm font-bold mb-4" for="password">
       Confirm Password
      </label>
      <input name="confirm_password" class="shadow appearance-none border border-gray-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id=" confirm_password" type="password" placeholder="...............">
      <p class="text-blue-800 text-xs italic">Enter a strong password.</p>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        Register
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="/register">
      Already registered sign in here?
      </a>
    </div>
  </form>

</div>
</body>
</html>